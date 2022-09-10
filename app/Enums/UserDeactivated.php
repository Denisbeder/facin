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
            self::DEACTIVATED => 'badge badge-error gap-2 text-neutral-content leading-normal',
            self::ACTIVATED => 'badge badge-success gap-2 text-neutral-content leading-normal',
        };
    }
}
