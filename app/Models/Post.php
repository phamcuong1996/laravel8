<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Post
 *
 * @mixin Builder
 */
class Post extends Model
{
    protected $fillable = [
        'title',
        'name',
        'email',
    ];
}
