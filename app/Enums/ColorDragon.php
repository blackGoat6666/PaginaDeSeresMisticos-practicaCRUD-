<?php

namespace App\Enums;
use ReflectionClass;

enum ColorDragon : string
{
    const Verde ='verde';
    const Rojo = 'rojo';
    const Azul = 'azul';
    const Gris = 'gris';

    public static function getValues(): array
    {
        $reflectionClass = new ReflectionClass(self::class);
        $constants = $reflectionClass->getConstants();
        
        // Extraer solo los valores del array asociativo
        $values = array_values($constants);
        
        return $values;;
    }
}
