<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\dataAkuns as Authenticatable;
use Illuminate\Auth\Events\Authenticated;
// use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\dataAkuns as Authenticatable;

class dataAkuns extends Authenticatable
{
    use HasFactory;

    protected $table ='data_akuns';
    protected $primarykey ='id';

    protected $fillable = ['nama','username','email','password','nomor_identitas','alamat','no_telpon','tanggal_lahir'];
    
}
