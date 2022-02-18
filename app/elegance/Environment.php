<?php

namespace elegance;

class Environment
{
    /** Carrega variaveis de ambiente de dentro de um arquivo */
    static function load($file)
    {
        $file = path($file);
        if (file_exists($file)) {
            $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            foreach ($lines as $line) {
                if (strpos(trim($line), '#') !== 0) {
                    list($name, $value) = explode('=', $line, 2);

                    $name = trim($name);
                    $value = trim($value, " \"'");

                    putenv(sprintf('%s=%s', $name, $value));

                    $_ENV[$name] = $_ENV[$name] ?? $value;
                    $_SERVER[$name] = $_SERVER[$name] ?? $value;
                }
            }

            return true;
        }
        return false;
    }
}
