<?php

namespace App\Http\Controllers\Fechamento;


use App\Model\Fechamento\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        //
    }

    public function read()
    {
        $user = User::all();
        return view('usuario', compact('user'));
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function save(Request $request)
    {
        if($request->id){
            $dados = [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ];
            User::where('id',$request->id)->update($dados);
            return redirect()->action('Fechamento\UserController@read');
        }else{
            $dados = $request->all();
            User::create($dados);
            return redirect()->action('Fechamento\UserController@read');
        }
    }

    public function edit($id){
        $user = User::all();
        $usuario = User::where('id',$id)->first();
      if(!empty($usuario)){
        return view('usuario',compact('user','usuario'));
      }else{
          return redirect()->action('Fechamento\UserController@read');
      }
    }

    public function destroy($id){
        User::findOrFail($id)->delete();
        return redirect()->action('Fechamento\UserController@read');
    }

    public function update(Request  $request, $id){
        if(empty($request->id)){
            return $this->read();
        }
        $dados = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ];
        User::where('id',$id)->update($dados);
        return $this->read();
    }
}
