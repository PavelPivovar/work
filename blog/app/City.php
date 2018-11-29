<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class City extends Model
{

    protected $fillable  = ['name_city'];

    public function company()
    {
        return $this->belongsToMany(
            Company::class,
            'company_tags_city',
            'cities_id',
            'companies_id'
            );
    }

}
