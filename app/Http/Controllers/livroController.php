<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Livro;

use App\Categoria;

use File;

class livroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::with('categoria')->get();
		return $livros->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	 
	 
    public function store(Request $request)
    {
        $data = $request->all();
		$l = new Livro();
		$l->nome = $data['nome'];
		$l->quantidade = $data['quantidade'];
		$l->autor = $data['autor'];
		$l->editora = $data['editora'];
		$l->id_categoria = $data['id_categoria'];
		$l->save();
		return $l->toJson();
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
        $l = Livro::find($id);
        $l->categoria = Categoria::find($l->id_categoria);
		return $l->toJson();
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
        $data = $request->all();
        $livro = Livro::find($id);
		$livro->nome = $data['nome'];
		$livro->quantidade = $data['quantidade'];
		$livro->autor = $data['autor'];
		$livro->editora = $data['editora'];
		$livro->id_categoria = $data['id_categoria'];
		$livro->save();
		
		return $livro->toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Livro::find($id);
		$l = $livro;
		$livro->delete();
		return $l->toJson();
    }
}
