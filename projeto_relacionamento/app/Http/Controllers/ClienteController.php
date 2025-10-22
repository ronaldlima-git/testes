<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $clientes = $user->clientes;

        //dd($clientes);


        return view('admin.cliente_show',['arr_clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Direciona para a view cliente_create
        return view('admin.cliente_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$user_id = Auth::user()->id;
        //Cria um novo objeto de cliente
        $cliente = New Cliente();
        // $cliente->user_id = $request->user_id;//Atribui o usuário id conforme o que veio da view $request e demais campos
        $cliente->user_id = $request->input('user_id');
        $cliente->nome = $request->nome;//Campo nome do banco tabela cliente, e campo nome do input da view
        $cliente->email = $request->email;//Campo email do banco tabela cliente, e campo email do input da view


        //dd($cliente);
        $cliente->save();//Salva no banco
        //$user = Auth::user();

        //$user->clientes()->create($request->all()); Outra forma de Salvar no banco
        return redirect()->route('cliente.create')->with('msg', 'Cliente Cadastrado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        // $testeHash = Hash::Make('123455678');
    

        //Atribui o cliente conforme id do usuário
        $user = User::where('id', $cliente->id)->first();
        //dump($user);
        $clientes = $user->clientes()->get();//Chama o método clientes dentro da model User
        //var_dump($clientes);
       // dd($cliente);

        return view('admin.cliente_show',['arr_clientes' => $clientes]);
    }

    // public function show(Cliente $cliente)
    // {
    //     // $testeHash = Hash::Make('123455678');
    //     dump($cliente);
    //     $clientes = Cliente::where('id', $cliente->id)->get();
    //     dd($clientes);

    //     //Atribui o cliente conforme id do usuário
    //     $user = User::where('id', $cliente->id)->first();
    //     //dump($user);
    //     $clientes = $user->clientes()->get();//Chama o método clientes dentro da model User
    //     //var_dump($clientes);
    //    // dd($cliente);

    //     return view('admin.cliente_show',['arr_clientes' => $clientes]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
