<?php

namespace Framework\Core;

class Env
{
    public static function load(): void
    {
        $root = dirname(__DIR__);
        $envFile = $root.'/.env';

        foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            // コメント行はスキップ
            if ($line[0] === '#') {
                continue;
            }

            // =ない場合もスキップ
            if (! str_contains($line, '=')) {
                continue;
            }

            [$key,$value] = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            $_ENV[$key] = $value;
            putenv("$key=$value");
        }
    }

    public static function get(string $key): string
    {
        if (preg_match('#[A-Z_]+#', $key) !== 1 || getenv($key) === false) {
            return '';
        }

        return getenv($key);
    }
}
