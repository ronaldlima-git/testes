<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtem todos os veiculos dao banco
        $veiculos = Veiculo::all();
        //$data = ['arr_veiculos' => $veiculos];
        //Retorna a View index e passa a variável $veiculos
        //return view('index', $data);
        return view('index')->with('veiculos', $veiculos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna a view de Criação
        return view('create');
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
        //$veiculos = Veiculo::all();
        Veiculo::create($data);
        // //Cria um novo objeto
        // $veiculo = new Veiculo();

        // //Seta os dados vindo da request (formulário)  na classe model instanciada
        // $veiculo->name = $request->input('name');
        // $veiculo->year = $request->input('year');
        // $veiculo->color = $request->input('color');

        // //Persiste na model
        // $veiculo->save();

        // //Cria uma nova variável e busca todos os veiculos
        // $veiculos = Veiculo::all();
        // //Retorna uma view com todos os veiculos e uma mensagem que será tratado na View
        // return view('index')->with('veiculos', $veiculos)->with('msg', "Veículo Cadastrado com Sucesso");
        //return view('index')->with('veiculos', $veiculos)->with('msg', "Veículo Cadastrado com Sucesso");
        return redirect()->route('veiculos.index')->with('msg', 'Veículo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Atribui para a variável o veíuculo especificado pela ID
        $veiculo = Veiculo::find($id);

        //Se encontrar o veículo, retorna a view com o objeto correspondente
        if ($veiculo) {
            return view('show')->with('veiculos', $veiculo);
        } else //Se não encontrar, retorna a view com uma mensagem que será exibida na tela
        {
            return view('show')->with('msg', "Veículo não encontrado");
        };
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Recupera o Veículo informado da base de dados
        $veiculo = Veiculo::find($id);

        //Se encontrar algum veículo, retorna a view de edição com o objeto correspondente
        if ($veiculo) {
            return view('edit')->with('veiculo', $veiculo);
        } else //Se não encontrar, todos os veículos com uma mensagem
        {
            $veiculo = Veiculo::all();
            return view('index')->with('veiculos', $veiculo)->with('msg', 'Veículo não encontrado!');
        };
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //Recebe os dados do veículo e o id do objeto a ser atualizado
    {
        $veiculo = Veiculo::find($id);

        //Atualiza os atributos do objeto com os dados do request (tela)
        $veiculo->name = $request->input('name');
        $veiculo->year = $request->input('year');
        $veiculo->color = $request->input('color');

        //salva na base de dados;
        $veiculo->save();

        //Retorna uma view com o novo objeto e uma mensagem
        $veiculos = Veiculo::all();
        return view('index')->with('veiculos', $veiculos)->with('msg', 'Veículo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //recupera os dados do veículo a ser removido, a partir da Id passada
        $veiculo = Veiculo::find($id);

        //Excluir o veículo
        $veiculo->delete();

        //Retorna a view index com os dados de todos os veículos, e uma mensagem
        $veiculos = Veiculo::all();
        return view('index')->with('veiculos', $veiculos)->with('msg', 'Veículo excluído com sucesso');
    }
}
