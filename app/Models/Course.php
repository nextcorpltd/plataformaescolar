<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
