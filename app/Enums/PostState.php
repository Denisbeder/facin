<?php

namespace App\Enums;

enum PostState: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case UNPUBLISHED = 'unpublished';
    case SCHEDULED = 'schedule';
    case EXPIRED = 'expired';

    public function presenter(): string
    {
        return match ($this) {
            self::DRAFT => 'Rascunho',
            self::PUBLISHED => 'Publicado',
            self::UNPUBLISHED => 'Não publicado',
            self::SCHEDULED => 'Programado',
            self::EXPIRED => 'Expirado',
        };
    }
}
