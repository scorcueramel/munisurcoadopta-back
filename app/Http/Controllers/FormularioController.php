<?php

namespace App\Http\Controllers;

use App\Exports\FormExport;
use App\Mail\Notificaion;
use App\Models\Form;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class FormularioController extends Controller
{
    public function index()
    {
        try {
            $registros = Form::orderBy("id","desc")->get();
            return response()->json(['registros'=>$registros],200);
        } catch (Exception $e) {
            return response()->json(['error'=>$e->getMessage()],500);
        }
    }

    public function detalle($id){
        try {
            $registro = Form::find($id);
            if(!empty($registro)){
                return response()->json(['registro'=>$registro],200);
            }else{
                return response()->json(['error'=> 'registro no encontrado'],400);
            }
        }catch(Exception $e) {
            return response()->json(['error'=> $e->getMessage()],500);
        }
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'nombre_completo' => 'required|string|max:150',
                'edad' => 'required|max:2',
                'correo_electronico' => 'required|email|max:150',
                'numero_telefono' => 'required|string|min:9|max:20',
                'distrito' => 'required|string|max:250',
                'direccion' => 'required|string|max:250',
                'redes_sociales' => 'required|string|max:250',
                'como_se_entero' => 'required|string|max:250',
                'mascota_adoptar' => 'required|string',
                'interesa_otra' => 'required|string|max:2',
                'familiar_alergias' => 'required|string|max:300',
                'compromiso_cuidado' => 'required|string|max:300',
                'salud_mascota' => 'required|string|max:300',
                'opinion_esterilizacion' => 'required|string|max:300',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'content' => $validator->errors()->toJson()
                ], 415);
            }

            $registro = Form::create($request->all());

            DB::commit();

            Mail::to("sergio.corcuera@munisurco.gob.pe")->send(new Notificaion($registro));
            // Mail::to("surcoadopta@munisurco.gob.pe")->send(new Notificaion($registro));

            return response()->json([
                'success' => true,
                'content' => $registro
            ], 200);
        } catch (Exception $ex) {
            DB::rollBack();
            $errorResp = $ex->getMessage();
            return response()->json([
                'success' => false,
                'content' => "Error : $errorResp"
            ], 500);
        }
    }

    public function export()
    {
        return Excel::download(new FormExport, "Registros.xlsx");
    }
}
