<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyInfo extends Model
{
    use HasFactory;

    public static function Infos(){
        $datas=[
            'WebName' => 'Morhe Keith Rey',
            
            
        ];

        return $datas;
    }
}
