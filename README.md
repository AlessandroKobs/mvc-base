## Instalação

Você pode clonar este repositório OU baixar o .zip

Ao descompactar, é necessário rodar o **composer** pra instalar as dependências e gerar o _autoload_.

Vá até a pasta do projeto, pelo _prompt/terminal_ e execute:

> composer install

Depois é só aguardar.

## Configuração

Todos os arquivos de **configuração** e aplicação estão dentro da pasta _src_.

As configurações de Banco de Dados e URL estão no arquivo _src/Config.php_

É importante configurar corretamente a constante _BASE_DIR_:

> const BASE_DIR = '/**PastaDoProjeto**/public';

## Uso

Você deve acessar a pasta _public_ do projeto.

O ideal é criar um **_alias_** específico no servidor que direcione diretamente para a pasta _public_.

## Modelo de MODEL

```php
<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {

}
```

EloquentORM - rss14
