<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function getName()
    {
        switch ($this->day_number){
            case 0 : return  'Poniedziałek';
            case 1 : return  'Wtorek';
            case 2 : return  'Środa';
            case 3 : return  'Czwartek';
            case 4 : return  'Piątek';
            case 5 : return  'Sobota';
            case 6 : return  'Niedziela';
        }
    }
}
