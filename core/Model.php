<?php
namespace core;

use \core\Database;
use \ClanCats\Hydrahon\Builder;
use \ClanCats\Hydrahon\Query\Sql\FetchableInterface;

class Model {

    protected static $_h;
    /**
     * Cria uma propriedade para definir um nome de tabela personalizado
     */
    protected $tableName = null;
    
    /**
     * @param String $tableName
     * Permite a definição de um nome de tabela PERSONALIZADO.
     */
    public function __construct($tableName = null) {
        if ($tableName) { 
            $this->tableName = $tableName;
        }
        self::_checkH();
    }

    public static function _checkH() {
        if(self::$_h == null) {
            $connection = Database::getInstance();
            self::$_h = new Builder('mysql', function($query, $queryString, $queryParameters) use($connection) {
                $statement = $connection->prepare($queryString);
                $statement->execute($queryParameters);

                if ($query instanceof FetchableInterface)
                {
                    return $statement->fetchAll(\PDO::FETCH_ASSOC);
                }
            });
        }
        
        self::$_h = self::$_h->table( self::getTableName() );
    }

    public static function getTableName() {
        // Permite a definição de um tablename personalizado.
        if ($this->tableName) { 
            return $this->tableName; 
        }
        $className = explode('\\', get_called_class());
        $className = end($className);
        return strtolower($className).'s';
    }

    public static function select($fields = []) {
        self::_checkH();
        return self::$_h->select($fields);
    }

    public static function insert($fields = []) {
        self::_checkH();
        return self::$_h->insert($fields);
    }

    public static function update($fields = []) {
        self::_checkH();
        return self::$_h->update($fields);
    }

    public static function delete() {
        self::_checkH();
        return self::$_h->delete();
    }

}