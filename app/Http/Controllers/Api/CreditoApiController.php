<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Credito;

class CreditoApiController extends Controller
{

    public function index()
    {    
       $creditos= Credito::all();
     
       return $creditos;
    }

    public function show($id)
    {
        $Credito = Credito::find($id);
        
        return response()->json( $Credito);
    }



    public function update(Request $request, $id)
    {   
        $request->valor  = str_replace(',','.',$request->valor );

        if($request->tipooperacao=="saque"){
            $Credito = Credito::findOrFail($id);
            if(($Credito->saldo = $Credito->saldo - $request->valor) >= 0){
                $Credito->save();
                $resultado="saque realizado";
            }else{
                $resultado="saldo insuficiente";
            }
        }

        if($request->tipooperacao=="deposito"){
            $Credito = Credito::findOrFail($id);
            $Credito->saldo=$Credito->saldo + $request->valor;
            $Credito->save();
            $resultado="deposito realizado";
        }

        return response()->json( ['credito atualizado'=> $request->all(),
                                  'resultado'=> $resultado,
                                    ],200);
    }
}
