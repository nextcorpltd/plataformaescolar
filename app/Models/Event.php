<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected function casts(): array
    {
        return [
            'images' => 'array',
        ];
    }
}
