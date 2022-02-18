<?php

if (!function_exists('env')) {

    /**
     * Retorna o valor de uma variavel de ambiente
     * @param string $env Nome da variavel de ambiente que deve ser retornada
     * @param mixed $return Valor que deve ser retornado caso a variavel não exista
     */
    function env(string $env, $return = null)
    {
        return $_ENV[$env] ?? $return;
    }
}
