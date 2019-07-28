<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $primaryKey = 'codigo';
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}