<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table='Petugas1';
    protected $primaryKey='Id_petugas';
    protected $fillable=['nama_petugas','no_tlpn','status','alamat'];
}
