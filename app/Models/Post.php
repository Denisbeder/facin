<?php

namespace App\Models;

use App\Enums\PostState;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'state',
        'slug',
        'title',
        'short_title',
        'description',
        'body',
        'posted_at',
    ];

    protected $casts = [
        'state' => PostState::class,
        'posted_at' => 'datetime',
        'body' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
