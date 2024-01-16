<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel 
{
    use HasFactory;
    
    protected $table = 'tb_dosen';
    protected $fillable = ['id_dosen', 'nip','nama_dosen', 'foto_dosen'];
}


