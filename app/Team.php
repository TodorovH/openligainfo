<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    static public function getAllTeams() {

        return json_decode(file_get_contents('https://www.openligadb.de/api/getmatchdata/bl1'), true);
    }
    
}
