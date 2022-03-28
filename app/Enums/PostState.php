<?php

namespace App\Enums;

enum PostState: string
{
    case DRAFT = 'draft';
    case UNPUBLISHED = 'unpublished';
    case PUBLISHED = 'published';
    case DELETED = 'deleted';

    public function presenter(): string
    {
        return match ($this) {
            PostState::DRAFT => 'Rascunho',
            PostState::UNPUBLISHED => 'Não publicado',
            PostState::PUBLISHED => 'Publicado',
            PostState::DELETED => 'Deletado',
        };
    }
}
