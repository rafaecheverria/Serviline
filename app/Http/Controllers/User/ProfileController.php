<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\AvatarRequest;
use App\Http\Controllers\ApiController;
use App\User;
use Auth;
use Image;

class ProfileController extends ApiController
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       	return view('usuarios.perfil', array('user' => Auth::user()) );
    }

    public function store(AvatarRequest $request){

    	if ($request->hasFile('avatar')) {

            $user = Auth::user();
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $file_name = $user->id . '.' . $extension;
            $avatar = $user->avatar;
            $path = public_path('/img/' . $file_name);
            Image::make($request->file('avatar'))
                ->fit(300, 300)
                ->save($path);
            $user->avatar = $file_name;
            $user->save();

            return response()->json([
                "success" => true,
                "path" => $path,
                "file_name" => $file_name,
                "avatar" => $avatar,
                "message" => "La imagen fue subida con Exito!"
            ]);
        }
    }

    public function update(Request $request, $id){ 

        if($request->ajax()){
            $user = User::findOrFail($id);
            $user->fill($request->all());

        if ($user->isClean()){ //verifica si el usuario realizó alguna modificación en el formulario antes de enviar
            return response()->json([
                "error" => true,
                "message" => "No ha realizado ninguna modificación !"
            ]);
        }
            $user->save();
            return response()->json([
                "success" => true,
                "name" => $user->name,
                "message" => "Actualización satisfactoria !"
            ]);
        }
    }
}
