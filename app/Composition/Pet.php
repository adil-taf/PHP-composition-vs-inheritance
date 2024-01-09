<?php

declare(strict_types=1);

namespace App\Composition;

class Pet implements NPCInterface
{
    /* Some Properties */

    public function __construct(private Movement $movement, private Fighting $fighting)
    {
    }

    /* Some More Methods */
}
