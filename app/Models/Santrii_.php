<?php

namespace App\Models;
class Santrii 
{
    private static $data = [[
        "nama" => "akbar",
        "univ" => "undip",
        "angkatan" => "19",
        "slug" => "akbar"
    ],
    [
        "nama" => "siapa",
        "univ" => "undip",
        "angkatan" => "19",
        "slug" => "siapa"
    ]
    ];

    public static function all()
    {
        return collect(self::$data);
    }

    public static function find($slug){
        $datasantri = static::all();
        return $datasantri->firstWhere('slug', $slug);
    }
}
