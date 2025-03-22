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
            'generator' => 'boolean'
        ];
    }

    public function repository()
    {
        $this->belongsTo(Repository::class, 'repository_id');
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function sources()
    {
        $this->hasMany(Source::class);
    }
}
