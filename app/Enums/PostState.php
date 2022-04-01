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
            PostState::DRAFT => 'Rascunho',
            PostState::PUBLISHED => 'Publicado',
            PostState::UNPUBLISHED => 'Não publicado',
            PostState::SCHEDULED => 'Programado',
            PostState::EXPIRED => 'Expirado',
        };
    }
}
