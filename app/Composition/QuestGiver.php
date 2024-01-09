<?php

declare(strict_types=1);

namespace App\Composition;

class QuestGiver implements NPCInterface
{
    /* Some Properties */

    public function __construct(private Movement $movement)
    {
    }

    /* Some More Methods */
}
