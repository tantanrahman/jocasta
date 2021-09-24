<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ongkir extends Model
{
    protected $table = 'ongkir';
    protected $hidden = [];

    /**
     * @author Tantan
     * @description get Ongkir for API v1
     * @created 24 Sep 2021
     */
    public static function getOngkir()
    {
        $items = self::leftjoin('country','ongkir.country_id','=','country.id')
                     ->leftjoin('packagetype','ongkir.packagetype_id','=','packagetype.id')
                     ->select('ongkir.id AS id','country.name AS cou_name','packagetype.name AS package_name','ongkir.price AS price');

        return $items->get();

    }
}
