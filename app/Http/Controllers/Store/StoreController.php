<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $search = request('search');

        $results = Store::where('user_id', Auth::user()->id)
                ->where(function($q) use ($search){
                    $q->where('name', 'like', '%'.$search.'%')
                      ->orWhereRaw("'" . $search . "' = ''");
                })
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        
        if($search == ''){
            Session::forget('search-error');
        }

        if($search != '' && $results->count() == 0){
            Session::flash('search-error','404');
        }elseif(empty($search) && $results->count() < 1){
            Session::flash('search-error','409');
        }

        $table = [
            ['name' => 'Nome', 'width' => '15%', 'field' => 'name'],
            ['name' => 'Endereço', 'width' => '25%', 'field' => 'address'],
            ['name' => 'Cidade', 'width' => '15%', 'field' => 'city'],
            ['name' => 'Estado', 'width' => '5%', 'field' => 'state'],
        ];

        return view('store.index', ['results' => $results, 'search' => $search, 'table' => $table]);
    }

    public function create(){
        return view('store.create');
    }

    public function store(Request $request){
        $data = $request->except(['_token']);

        $request->validate([
            'name' => 'required|max:200',
            'address' => 'required|max:200',
            'district' => 'required|max:100',
            'city' => 'required|max:150',
            'state' => 'required|max:2|min:2',
        ]);

        $data['user_id'] = Auth::user()->id;

        $store = new Store($data);
        $store->save();

        return redirect()->route('stores.create')->with('alert-success', 'Nova loja cadastrada com sucesso.');
    }

    public function show($id){
        $store = Store::with('products')->where('user_id', Auth::user()->id)->findOrFail($id);

        $tableProd = [
            ['name' => 'Código do produto', 'width' => '15%', 'field' => 'id'],
            ['name' => 'Nome do produto', 'width' => '15%', 'field' => 'name'],
            ['name' => 'Preço do produto', 'width' => '25%', 'field' => 'price'],
        ];

        return view('store.show', compact('store', 'tableProd'));
    }

    public function update(Request $request, $id){
        $data = $request->except(['_token', '_method']);

        $request->validate([
            'name' => 'required|max:200',
            'address' => 'required|max:200',
            'district' => 'required|max:100',
            'city' => 'required|max:150',
            'state' => 'required|max:2|min:2',
        ]);

        Store::where('id', $id)->update($data);

        return redirect()->route('stores.show', $id)->with('alert-success', 'Dados da loja alterados com sucesso.');
    }

    public function destroy($id){
        Store::where('id', $id)->delete();

        return redirect()->route('stores.index')->with('alert-success', 'Loja excluída com sucesso.');
    }
}

