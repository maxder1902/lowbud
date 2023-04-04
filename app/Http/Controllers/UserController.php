<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegistrationForm()
    {
        return view('signup');
    }

    public function register(Request $request)
{
    // Validar los datos del formulario
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'user_id' => 'required|string|unique:users',
        'email' => 'required|unique:users|email|max:255',
        'password' => 'required|min:8',
    ]);

    // Crear el nuevo usuario en la base de datos
    $user = new User([
        'name' => $request->input('name'),
        'user_id' => $request->input('user_id'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
    ]);
    $user->save();

    // Redirigir al usuario a la página de inicio de sesión
    return redirect()->route('login')->with('success', 'Registro exitoso, inicie sesión para continuar');
    
    
}
public function login(Request $request)
{
    $request->validate([
        'user_id' => 'required',
        'password' => 'required'
    ]);

    $credentials = $request->only('user_id', 'password');

    if (Auth::attempt($credentials)) {
        if (Auth::user()->user_id == 'admin') {
            return redirect('form');
        } else {
            return redirect()->intended('/');
        }
    }

    return back()->withErrors([
        'user_id' => 'Usuario o contraseña incorrectos'
    ]);
}

public function logout()
{
    Auth::logout();

    return redirect('/');
}
}