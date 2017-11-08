<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    //
    protected $table = "kamar";
    protected $fillable = ['kode', 'nama', 'member', 'status', 'tanggal', 'keterangan'];

    public function propertis(){
    	return $this->hasMany('App\Properti');
    }
}
