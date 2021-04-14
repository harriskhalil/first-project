<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assisgnment extends Model
{
    function complete(){
        $this->completed = true;
        $this->save();
    }
}
