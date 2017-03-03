<?php

namespace App\Http\Controllers\Backend;

use App\Models\Experience;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperiencesController extends Controller
{
    /**
     * Enseña el listado de experiencias
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiencies = Experience::all();

        return view('backend.experiences.index', [
            'experiencies' => $experiencies
        ]);
    }

    /**
     * Enseña el formulario para crear experiencias
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foo = Location::find(2);
        //dd($foo->);
        return view('backend.experiences.create');
    }

    /**
     * Guarda las nuevas experiencias
     *
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
     * @param  Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        return view('backend.experiences.view', [
            'experience' => $experience
        ]);
    }

    /**
     * Enseña el formulario para edit la experiencia
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.experiences.edit');
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
        $experience = Experience::find($id);
        $experience->update($request);
    }

    /**
     * Elimina una historia específica
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Experience::destroy($id);
    }
}
