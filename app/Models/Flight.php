<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable= [
        'name'
    ];
}
