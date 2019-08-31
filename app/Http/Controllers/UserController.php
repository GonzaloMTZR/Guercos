<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index(){
        $user = Auth::user();
        return view('modules.user.show', compact('user'));
    }

    public function show(User $user)
    {   
        $user = Auth::user();
        return view('modules.user.show', compact('user'));
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        $roles = Role::all();
        return view('modules.user.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        // Validar los datos ingresados por el usuario
        $validator = Validator::make($request->all(), [
            'name' => ['string', 'max:255'],
            'email' => ['email' =>  'email','max:255', 'unique:users,email,'.$user->id],
            'fechaNacimiento' => ['date'],
            'direccion' => [ 'string', 'max:255'],
            'telefono' => [ 'string', 'max:11' ],
        ]);

        if($request->input('fechaNacimiento')){
            $fechaNacimiento = $request->input('fechaNacimiento');
        }else{
            $fechaNacimiento = $user->fechaNacimiento;
        }

        // Si falla entra esta condicion
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->fechaNacimiento = $fechaNacimiento;
        $user->direccion = $request->input('direccion');
        $user->telefono = $request->input('telefono');
        $user->save();

        if($request->input('role')){
            $user->syncRoles(request('role'));
        }else{
            $user->assignRole($user->roles()->pluck('name'));
        }
        
        // Redirect to route
        //dd($user);
        return redirect('/user')->with('success-message', 'Perfil actualizado con exito!');
    }

    /**
     * Funcion para actualizar la contraseña del usuario
     * 
     * @param Request del formulario
     */
    public function UpdatePassword(Request $request){
        $rules = [
            'currentPassword' => 'required',
            'password' => 'required|confirmed|min:6',
        ];

        $mesages =[
            'currentPassword.required' => 'El campo de la actual contraseña es requerido',
            'password.required' => 'El campo de la nueva contraseña es requerido',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.min' => 'La contraseña debe contener minimo 6 caracteres',
        ];

        $validator = Validator::make($request->all(), $rules, $mesages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }else{
            if(Hash::check($request->currentPassword, Auth::user()->password)){
                $user = new User();
                $user->where('email', '=', Auth::user()->email)
                    ->update(['password' => Hash::make($request->password)]);
                return back()->with('success-message', 'La contraseña ha sido actualizada con exito!');
            }
            else{
                return back()->with('danger-message', 'Credenciales incorrectas');
            }
        }
    }

    /**
     * Funcion para actualizar la imagen de perfil
     * 
     * @param Request del formulario
     */
    public function UpdateImagen(Request $request){
        $rules = [
            'imagenPerfil' => 'required|image',
        ];

        $mesages =[
            'imagenPerfil.image' => 'El archivo debe de ser de tipo imagen',
            'imagenPerfil.required' => 'La imagen es un campo requerido',
        ];

        $validator = Validator::make($request->all(), $rules, $mesages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }else{
            if ($request->hasFile('imagenPerfil')) {

                $file = $request->file('imagenPerfil');
                $name = time().$file->getClientOriginalName();
                $public_path = public_path();
                $file->move($public_path.'/imagenes'.'/'.'usuarios'.'/', $name);

                $user = new User();
                $user->where('email', '=', Auth::user()->email)
                    ->update(['imagenperfil' => $name]);
                return back()->with('success-message', 'La imagen de perfil ha sido actualizada con exito!');

                
            }else{
                $name = $user->imagenPerfil;
                return back()->with('danger-message', 'No se actualizó la imagen, verifique los datos');
            }
        }
    }
}
