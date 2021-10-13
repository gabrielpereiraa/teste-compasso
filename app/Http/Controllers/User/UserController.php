<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('user.profile');
    }

    public function update(Request $request){
        $data = $request->except(['_token', '_method']);

        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|max:200',
        ]);

        $id = Auth::user()->id;

        if(isset($data['theme'])){
            if($data['theme'] == 1){
                $data['theme'] = 'light';
            }else{
                $data['theme'] = 'dark';
            }
        }else{
            $data['theme'] = 'light';
        }

        User::where('id', $id)->update($data);

        return redirect()->route('profile')->with('alert-success', 'Dados do perfil alterado com sucesso.');
    }

    public function destroy(){
        $id = Auth::user()->id;
        User::where('id', $id)->delete();
        return redirect()->route('login');
    }
}
