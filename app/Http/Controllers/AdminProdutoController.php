<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminProdutoController extends Controller
{

    //Create - Read - Update - Delete (CRUD)

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard');
    }

    public function list(){
        $produtos = Produto::all();

        return view('list-produtos')->with([
            'produtos' => $produtos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-produto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'nome' => 'required|max:255|unique:produtos',
            'preco' => 'required|numeric|min:0.01',
            'quantidade' => 'required|numeric|min:0',
            'imagem' => 'required|mimes:jpg,png,bmp'
        ])->validate();

        $produto = new Produto();
        
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->created_by = Auth::Id();

        $produto->image_path = $request->file('imagem')->store('public');

        $produto->save();

        return redirect()->route('list-produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
