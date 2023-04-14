<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    use HasFactory;

    protected $table ='data_provinsi';
    protected $primarykey ='id';

    protected $fillable = ['nama'];
}
