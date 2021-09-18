<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'apPaterno' => 'required|string|max:255',
            'apMaterno' => 'required|string|max:255',
            'fechaNacimiento' => 'required|date',
            'tipo' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'telefono' => 'required|string|max:12',
            'nombreTutor' => 'string|max:255',
            'correoTutor' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $message=alert()->success('Te has registrado correctamente');
        return User::create([
            'name' => $data['name'],
            'apPaterno' => $data['apPaterno'],
            'apMaterno' => $data['apMaterno'],
            'fechaNacimiento' => $data['fechaNacimiento'],
            'tipo' => $data['tipo'],
            'genero' => $data['genero'],
            'pais' => $data['pais'],
            'telefono' => $data['telefono'],
            'nombreTutor' => $data['nombreTutor'],
            'correoTutor' => $data['correoTutor'],
            'status' => "activo",
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            
        ]);

    }
}
