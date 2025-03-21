<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "documents";

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    // public function repository()
    // {
    //     $this->belongsTo(Repository::class);
    // }

    public function sources()
    {
        $this->hasMany(Source::class);
    }
}
