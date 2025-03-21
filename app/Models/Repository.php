<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    protected $table = "repositories";

    protected function casts(): array
    {
        return [
            'is_repo' => 'boolean',
        ];
    }

    // public function document()
    // {
    //     return $this->hasOne(Document::class);
    // }
}
