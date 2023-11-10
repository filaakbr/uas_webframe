<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs 
{
    private static $krs = [
        [
        "Kode Matkul" => "A1-79482",
        "Nama Matkul" => "judul-pertama",
        "SKS" => "Fila",
        ],
        [
        "Kode Matkul" => "A2-77496",
        "Nama Matkul" => "judul-pertama",
        "SKS" => "Fila",
        ],
        [
        "Kode Matkul" => "A3-74837",
        "Nama Matkul" => "judul-pertama",
        "SKS" => "Fila",
        ],
        [
        "Kode Matkul" => "A1-46273",
        "Nama Matkul" => "judul-pertama",
        "SKS" => "Fila",
        ],
        [
        "Kode Matkul" => "A1-72354",
        "Nama Matkul" => "judul-pertama",
        "SKS" => "Fila",
        ]
    ]; 
    
public static function all()
{
    return self::$krs;
}
public static function find($slug)
{
    $posts = self::$krs;
    $post = [];
    foreach($posts as $p) {
        if($p["slug"] === $slug) {
           $post = $p;
    }
 }
 return $post;
}
}
