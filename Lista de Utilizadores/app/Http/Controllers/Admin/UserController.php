<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    //
    public function index(){

        //$user = User::first();   
        //return view('Admin.index', [
        //    'user' => $user
        //]);  

        $users = User::paginate(15);//all();

        return view('Admin.index', compact('users'));  
    
    }
    public function create()
    {
        return view('Admin.create');
    }
    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()
        ->route('users.index')
        ->with('success', 'Utilizador criado com sucesso');
    }

    public function edit(string $id){
        //dd($id);

        //$user = User::where('id',$id)->first();
        //$user = User::where('id',$id)->first();
        if(!$user = User::find($id)){
            return redirect()->route('users.index')->with('message', 'Utilizador não encontrado');
        }
        return view('admin.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request,string $id)
    {
        if(!$user = User::find($id)){
            return back()->with('message', 'Utilizador não encontrado');
        }

        $data = $request->only('name', 'email');
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
        
        return redirect()
        ->route('users.index')
        ->with('success', 'Utilizador Editado com sucesso');
    }
    public function show(string $id)
    {
        if(!$user = User::find($id)){
            return redirect()->route('user.index')->with('message', 'Utilizador não encontrado');
        }
        return view('admin.show', compact('user'));
    }
    
    public function destroy(string $id){

        // if (Gate::denies('is-admin')){
        //     return back()->with('error', 'Você não é Administrador');
        // }

        if(!$user = User::find($id)){
            return redirect()->route('user.index')->with('message', 'Utilizador não encontrado');
        }

        if(Auth::user()->id === $user->id){
            return back()->with('error', 'Você não pode deletar o oseu Perfil');
        }

        $user->delete();

        return redirect()
        ->route('users.index')
        ->with('success', 'Utilizador deletado com sucesso');
    }
}
