<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
