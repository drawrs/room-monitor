<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    //
    protected $table = "properti";
    protected $fillable = ['kamar_id', 'judul', 'status'];
}
