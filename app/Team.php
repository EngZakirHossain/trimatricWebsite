<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name','photo','email', 'department', 'designation','award_title','description'
    ];
}
