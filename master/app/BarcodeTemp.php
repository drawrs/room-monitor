<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarcodeTemp extends Model
{
    //
    protected $table = "barcode_temp";
    protected $fillable = ['kode', 'status'];
}
