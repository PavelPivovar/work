<?php

namespace App;


use Illuminate\Auth;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'phone','company', 'profession_id','rubric_id', 'city_id', 'views',
        'position', 'site', 'number','email', 'password','date', 'image','user_id',
    ];

    public function author()
    {
        return $this->hasOne(User::class);
    }

    public function city()
    {
        return $this->hasOne(City::class);
    }

    public function profession()
    {
        return $this->hasOne(Profession::class);
    }

    public function rubric()
    {
        return $this->hasOne(Rubric::class);
    }



}
