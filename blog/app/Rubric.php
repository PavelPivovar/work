<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    protected $fillable = ['name_rubric'];

    public function company()
    {
        return $this->hasMany(Company::class);
    }
}
