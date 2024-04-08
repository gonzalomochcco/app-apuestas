<?php

namespace App\Http\Controllers;
use App\Models\Players;
use App\Models\Banks;
use App\Models\AttentionChannel;
use App\Models\Refills;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    
    public function index(){

        return view("pages.players.index")
                ->with([ "players" => Players::all() ]);

    }

    public function refills($player_id){

        $player = Players::firstWhere("PlayerID" , $player_id);
        $refills = $player->refills;

        return view("pages.players.refills")
            ->with([
                "player" => $player, 
                "refills" => $refills,
                "banks" => Banks::all(),
                "channels" => AttentionChannel::all(),
            ]);

    }

    public function create(Request $request){

        try {

            $validator = Validator::make( $request->all() , [  
                'player_id' => ['required', 'string', 'min:12' , 'max:12'],              
                'num_op' => ['required', 'integer', 'min_digits:12', 'max_digits:12', 'unique:refills'],
                'canal_atencion' => ['required'],
                'banco' => ['required'],
                'saldo' => ['required', 'numeric'],
                'fecha' => ["required"],
                'hora' => ["required"],
                'voucher' => ['required', 'image', 'mimes:jpeg,png,jpg' , 'max:5048']
            ]);

            if ($validator->fails()) {

                return response()->json([
                    "success" => false,
                    "message" => "validacion",
                    "data" => $validator->errors()                   
                ]);
                
            }
                  
            if($request->hasFile("voucher")){

                $imagen = $request->file("voucher");                        
                $nombreimagen = Str::slug($request->numero_operacion).time().'.'.$imagen->getClientOriginalExtension();
                $ruta = public_path("voucher/");            
                copy( $imagen->getRealPath(), $ruta.$nombreimagen );            
                
            }

            $refills = new Refills();
            $refills->player_id = $request->player_id;  
            $refills->num_op = $request->num_op;
            $refills->id_attention_channel = $request->canal_atencion;
            $refills->id_bank = $request->banco;
            $refills->amount = $request->saldo;
            $refills->date_refills = $request->fecha;
            $refills->hour_refills = $request->hora;
            $refills->image_refills = $nombreimagen;            

            if ($refills->save()) {

                return response()->json([
                    "success" => true,
                    "message" => "La recarga se realizó con éxito"                   
                ]);

            }else{

                return response()->json([
                    "success" => false,
                    "message" => "No se pudo realizar la recarga,por favor vuelva a intentarlo"                   
                ]);

            }            
                   
        } catch (Exception $e) {
            
            //Log::debug($e->getMessage()); 
            return response()->json([
                "success" => false,
                "message" => $e->getMessage()                   
            ]);

        }            
    
    }

    //$user = User::where('id', $id)->firstOrFail();

    //        $user->role_id = $input['role_id'];
    //        $user->name = $input['name'] ?? $user->name;
    //        $user->email = $input['email'] ?? $user->email;
    //        $user->password = $input['password'] ? Hash::make($input['password']) : $user->password;
    //        $user->status = $input['status'] ?? $user->status;
    //        $user->save();

}