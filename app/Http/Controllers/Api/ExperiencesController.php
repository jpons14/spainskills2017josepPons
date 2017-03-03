<?php

namespace App\Http\Controllers\Api;

use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ExperiencesController extends Controller
{
    /**
     * Enseña el listado de experiencias
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('hola');
        $experience = DB::table('experiencies')->get();
        return response()->json(DB::table('experiencies')->get());
    }


    public function test($id)
    {
        //$experience = Experience::find($id);
        $experience = DB::table('experiencies')->pluck(

        )->where('id', $id);
        dd(json_encode($experience));
        $comment = $experience->comment;
        return response()->json($comment);
    }

    /**
     * Enseña el formulario para crear experiencias
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Guarda las nuevas experiencias
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Enseña una experiencia
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $experience = Experience::find($id);
        return response()->json($experience);
    }

    /**
     * Enseña el formulario para edit la experiencia
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Actualiza la experiencia
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Elimina una historia específica
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
