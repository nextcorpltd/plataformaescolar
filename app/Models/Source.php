<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $table = "sources";

    public function document()
    {
        $this->belongsTo(Document::class);
    }
}
