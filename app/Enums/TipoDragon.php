<?php

namespace App\Enums;
use ReflectionClass;

enum TipoDragon : string
{
    const Agua ='agua';
    const Fuego = 'fuego';
    const Tierra = 'tierra';
    const Veneno = 'veneno';

    public static function getValues(): array
    {
        $reflectionClass = new ReflectionClass(self::class);
        $constants = $reflectionClass->getConstants();
        
        // Extraer solo los valores del array asociativo
        $values = array_values($constants);
        
        return $values;;
    }
}
