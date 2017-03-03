<?php

namespace App\Http\Controllers\Backend;

use App\Models\Experience;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    /**
     * Retorna el index del backend y le pasa todas las experiencias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $experiences = Experience::all();
        // dd($experiences[0]->user->email);
        return view('backend.index', [
            'experiences' => $experiences,
        ]);
    }
}
