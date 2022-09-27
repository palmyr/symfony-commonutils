<?php declare(strict_types=1);

namespace Palmyr\SymfonyCommonUtils\DependencyInjection\EnvVarProcessor;

use Symfony\Component\DependencyInjection\EnvVarProcessorInterface;

class EnvVarProcessor implements EnvVarProcessorInterface
{

    public static function getProvidedTypes(): array
    {
        return [
            "explode" => "string",
        ];
    }

    public function getEnv(string $prefix, string $name, \Closure $getEnv): mixed
    {
        $value = $getEnv($name);

        if ( is_null($value) ) {
            return [];
        }

        return explode(",", $value);
    }
}