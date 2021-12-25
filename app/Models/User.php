<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Post
 *
 * @mixin Builder
 */
class User extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
    ];
}
