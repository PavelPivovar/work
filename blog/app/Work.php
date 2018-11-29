<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['name','surname', 'phone', 'avatar',
        'city_id','rubric_id','profession_id','date_birthday',
        'previous_company','position','data_work_start',
        'data_work_end','schooling','year_of_study','faculty'
    ];
}
