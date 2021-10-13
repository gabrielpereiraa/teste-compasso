<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Store\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $search = request('search');

        $stores = Store::where('user_id', Auth::user()->id)->select('id')->get();

        $results = Product::whereIn('store_id', $stores)
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
            ['name' => 'Código do produto', 'width' => '15%', 'field' => 'id'],
            ['name' => 'Nome do produto', 'width' => '15%', 'field' => 'name'],
            ['name' => 'Preço do produto', 'width' => '25%', 'field' => 'price'],
        ];

        foreach($results as $key => $rr){
            $results[$key]['price'] = number_format($rr['price'], 2, ',', '.');
        }

        return view('product.index', ['results' => $results, 'search' => $search, 'table' => $table]);
    }

    public function create(){
        $stores = Store::where('user_id', Auth::user()->id)->select('id','name')->get()->toArray();
        $stores = array_column($stores, 'name', 'id');

        return view('product.create', compact('stores'));
    }

    public function store(Request $request){
        $data = $request->except(['_token', 'cod_prod']);

        $request->validate([
            'name' => 'required|max:80',
            'price' => 'required',
            'store_id' => 'required'
        ]);

        $data['price'] = str_replace('.', '', $data['price']);
        $data['price'] = str_replace(',', '', $data['price']);
        $data['price'] = number_format($data['price']/100, 2, '.', '');

        $product = new Product($data);
        $product->save();

        return redirect()->route('products.create')->with('alert-success', 'Novo produto cadastrado com sucesso.');
    }

    public function show($id){

        $stores = Store::where('user_id', Auth::user()->id)->select('id','name')->get()->toArray();
        $stores = array_column($stores, 'name', 'id');

        $product = Product::whereIn('store_id', array_keys($stores))->findOrFail($id);

        return view('product.show', compact('product', 'stores'));
    }

    public function update(Request $request, $id){
        $data = $request->except(['_token', '_method']);

        $request->validate([
            'name' => 'required|max:80',
            'price' => 'required',
            'store_id' => 'required'
        ]);

        $data['price'] = str_replace('.', '', $data['price']);
        $data['price'] = str_replace(',', '', $data['price']);
        $data['price'] = number_format($data['price']/100, 2, '.', '');

        Product::where('id', $id)->update($data);

        return redirect()->route('products.show', $id)->with('alert-success', 'Dados do produto alterados com sucesso.');
    }

    public function destroy($id){
        Product::where('id', $id)->delete();

        return redirect()->route('products.index')->with('alert-success', 'Produto excluído com sucesso.');
    }
}
