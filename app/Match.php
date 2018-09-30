<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    static public function getAllMatches() {

        return json_decode(file_get_contents('https://www.openligadb.de/api/getmatchdata/bl1/2018'), true);
    }

    static public function getMatch($id) {

        $jsonArr = self::getAllMatches();

        foreach ($jsonArr as $arr) {
            
            if ($arr['MatchID'] === intval($id)) return $arr;
        }
    }
}
