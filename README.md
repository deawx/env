# ENGINE

Carrega arquivos .env para variaveis de ambiente

    composer require elegance/env

Importar arquivo de variavel

    \elegance\Environment::load($filePath);

> O arquivo .env na raiz do projeto é importado automaticamente

Retorna o valor de uma variavel de ambiente
    
    env($varEnv, $return = null)
