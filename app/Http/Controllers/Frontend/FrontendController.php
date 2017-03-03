<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Experience;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    /**
     * Retorna la vista índice del frontend y le pasa todas las experiencias de la base de datos a la vista
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('frontend.index', [
            'experiences' => $experiences
        ]);
    }

    /**
     * Retorna la vista de contacto
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Retorna la vista de experiencais y ordena
     * @param null $experiencies
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function experiences($experiencies = null)
    {
        if ($experiencies == null)
            $experiences = DB::table('experiencies')->orderby('id', 'asc')->paginate(1);
        return view('frontend.experiences', [
            'experiences' => $experiences
        ]);
    }

    /**
     * Retorna la vista de experiencais y ordena
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function experiencesorderby(Request $request)
    {
        if (isset($request->order)) {
            $experiences = DB::table('experiencies')->orderby($request->order, 'desc')->paginate(2);
            //dd($experiences);
            //return redirect()->route('frontend.experiences')->with('experiencies', $experiences);
            return view('frontend.experiences', [
                'experiences' => $experiences
            ]);
        }
        return redirect()->route('frontend.experiences');
    }

    /**
     * Metodo encargado la vista para crear experiencias y le pasa las localizaciones y los usuarios
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function experiencesCreate()
    {
        $users = User::all();
        //dd($users->email);
        $locations = Location::all();
        return view('frontend.experiencesCreate', [
            'locations' => $locations,
            'users' => $users
        ]);
    }

    /**
     * guarda la nueva experiencia que se ha creado
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function experiencesStore(Request $request)
    {
        $experience = new Experience();
        $experience->user_id = $request->user_id;
        $experience->location_id = $request->location_id;
        $experience->description_birev = $request->description_birev;
        $experience->type_establishment = $request->type_establishment;
        $experience->description_long = $request->description_long;
        $experience->youtube_video = $request->youtube_video;
        $experience->puntuation = 0;
        $experience->save();
        return redirect()->route('frontend.experiences');
    }

    /**
     * Sube en uno el contador de los likes
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function likeup($id)
    {
        $experience = Experience::find($id);
        $experience->puntuation = $experience->puntuation + 1;
        $experience->save();
        return redirect()->route('frontend.experiences');
    }
}
