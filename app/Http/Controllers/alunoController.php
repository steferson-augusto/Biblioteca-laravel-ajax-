<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aluno;

class alunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
		return $alunos->toJson();
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
		
		$a = new Aluno();
		$a->nome = $data['nome'];
		$a->email = $data['email'];
		$a->telefone = $data['telefone'];
		$a->endereco = $data['endereco'];
		$a->save();
		return $a->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::find($id);
		if ($aluno != null){
		return $aluno->toJson();
		} else{
			return json_encode(null);
		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);
		return $aluno->toJson();
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
        $aluno = Aluno::find($id);
		$aluno->nome = $data['nome'];
		$aluno->endereco = $data['endereco'];
		$aluno->telefone = $data['telefone'];
		$aluno->email = $data['email'];
		
		$aluno->save();
		
		return $aluno->toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::find($id);
		$a = $aluno;
		$aluno->delete();
		return $a->toJson();
    }
}
