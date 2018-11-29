<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = ['name_profession'];

    public function company()
    {
        return $this->hasMany(Company::class);
    }
}
