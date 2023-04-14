<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akunAdmin extends Model
{
    use HasFactory;

    protected $table ='data_akun_admin';
    protected $primarykey ='id';

    protected $fillable = ['nama','username','email','password','nomor_identitas','jalan','kota','provinsi','alamat','no_telpon','tanggal_lahir','role'];
}
