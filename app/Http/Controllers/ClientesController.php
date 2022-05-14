<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    private $qtd_por_pagina = 5;
    public function index(Request $request){
        $data = Clientes::orderBy('id','DESC')->paginate($this->qtd_por_pagina);
        return view('clientes.index',compact('data'))->with('i',($request->input('page',1)-1)*$this->qtd_por_pagina);
    }

    public function __construct(){

        $this->middleware('auth');

    }

    public function listar(){
        $clientes = Clientes::all();

        return view('clientes.listar',['clientes'=>$clientes]);
    }
    public function create(){
        return view('clientes.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nome'=>'required',
            'email'=>'required|email'
        ]);
        $input = $request->all();
        $user = Clientes::create($input);
        return redirect()->route('clientes.index')->with('success','Cliente gravado com sucesso');
    }
    public function destroy($id){
        Clientes::find($id)->delete();
        return redirect()->route('clientes.index')->with('success','Cliente removido com sucesso');
    }
    public function show($id){
        $cliente = Clientes::find($id);
        return view('clientes.show',compact('cliente'));
    }
    public function edit($id){
        $cliente = Clientes::find($id);
        return view('clientes.edit',compact('cliente'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'nome'=>'required',
            'email'=>'required|email',
            'endereco'=>'required',
            'telefone'=>'required'
        ]);

        $cliente= Clientes::find($id);
        $input = $request->all();
        $cliente->update($input);

        return redirect()->route('clientes.index')->with('success','Cliente atualizado com sucesso');
    }

}
