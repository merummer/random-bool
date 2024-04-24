<?php

namespace Merummer\RandomBool;

/**
 * Php Docs
 */
class Rand
{

    public function getBool(): bool{
        $rn = rand(0,1);
        return $rn === 1;
    }
}