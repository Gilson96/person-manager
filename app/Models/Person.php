<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [    
        "first_name",
        "last_name",
        "username",
        "dark_mode",
    ];

    public function toogleMode() : bool
    {
        if($this->dark_mode == 1){

            return true;
            
        } else {

            return false;
        }
    }
}
