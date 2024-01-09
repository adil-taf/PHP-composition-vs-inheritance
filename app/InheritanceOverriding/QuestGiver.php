<?php

declare(strict_types=1);

namespace App\InheritanceOverriding;

class QuestGiver extends NPC
{
    /* Some Properties */

    /* Some More Methods */

    //Overriding
    public function attack()
    {
        throw new \RuntimeException('QuestGiver NPC can not attack');
    }
}
