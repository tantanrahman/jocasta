<?php

namespace App\Http\Controllers;

use App\Models\Ongkir;
use Illuminate\Http\Request;

class OngkirController extends Controller
{
    
    /**
     * @author Tantan
     * @description get All data Ongkir
     * @created 24 Sep 2021
     */
    public function index()
    {
        return response()->json([
            'code'      => 200,      
            'status'    => 'success',
            'data'      => Ongkir::getOngkir()
        ], 200);
    }

    /**
     * @author Tantan
     * @description show data by Id
     * @created 24 Sep 2021
     */
    public function show($id)
    {
        $ongkirs        = Ongkir::find($id);
        return response()->json($ongkirs);
    }
}
