<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPermision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('frontend.login', [
           'users' => $users
        ]);
    }

    /**
     * Comprueba si los datos son correctos, y si lo son inicia sesión
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $error = false;
        if (!isset($request->email) || $request->email == ''){
            $error = true;
            $errorMessage = 'Falta el email';  // TODO: tendrian que ser traducibles los erorres
        }
        if (!isset($request->password) || $request->password == ''){
            $error = true;
            $errorMessage = 'Falta la contraseña';
        }
        /*if ($error){
            return redirect()->route('logon')->with('data',[
                'errorMessage' => $errorMessage
            ]);
        }*/

        $user = DB::select("select * from users WHERE `email` = '" . $request->email . "' and `password` = '" . $request->password . "';");
        //if (count($user) > 0){
        $_SESSION['logged'] = 'logged';
            return redirect()->route('backend.index')->with('data', [
                'logged' => 'logged'
            ]);
        //}
    }

    /**
     * Enseña el formulario del registor de usuarios
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registerForm()
    {
        return view('frontend.register');
    }
}
