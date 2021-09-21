<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto; 

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $produtos = Produto::all();
        return view('produtos.create', compact('produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $produtos = new Produto();
        $produtos->nome = $request->input('nome');
        $produtos->qtd = $request->input('qtd');
        $produtos->valor = $request->input('valor');
        $produtos->save();

        return redirect()->route('produtos.index', compact('produtos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $produtos = Produto::where('id', $id)->first();
        return view('produtos.show', compact(['produtos']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $produtos = Produto::find($id);
        if (isset($produtos)) {
            return view('produtos.edit', compact('produtos'));
        }
        return view('produtos.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $produtos = Produto::find($id);
        if (isset($produtos)) {
            $produtos->nome = $request->input('nome');
            $produtos->qtd = $request->input('qtd');
            $produtos->valor = $request->input('valor');
            $produtos->save();
        }
        return redirect()->route('produtos.index', compact('produtos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

    }
}
