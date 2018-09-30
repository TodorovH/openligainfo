<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    static public function getAllTeams() {

        return json_decode(file_get_contents('https://www.openligadb.de/api/getavailableteams/bl1/2018'), true);
    }

    static public function getTeam($id) {

        $jsonArr = json_decode(file_get_contents('https://www.openligadb.de/api/getavailableteams/bl1/2018'), true);

        foreach ($jsonArr as $arr) {
            
            if ($arr['TeamId'] === intval($id)) return $arr;
        }
    }
    
}
