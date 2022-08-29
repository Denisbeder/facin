<?php

namespace App\Enums;

enum UserDeactivated: int
{
    case DEACTIVATED = 1;
    case ACTIVATED = 0;

    public function getName(): string
    {
        return match ($this) {
            self::DEACTIVATED => 'Desativado',
            self::ACTIVATED => 'Ativado',
        };
    }

    public function getStyles(): string
    {
        return match ($this) {
            self::DEACTIVATED => 'text-base-content/40',
            self::ACTIVATED => '',
        };
    }
}
