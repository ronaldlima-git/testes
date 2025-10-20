{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a seção content, definida na base (pai herdada), para injetar o código --}}
@section('content')
    <h2>Veículos Cadastrados</h2>
    {{-- se a variável $veiculos não existir, mostra um h3 com uma mensagem --}}
    @if (!isset($veiculos))
        <h3 style="color: red">Nenhum Registro Encontrado!</h3>
        {{-- senão, monta a tabela com o dados --}}
    @else
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ano</th>
                    <th>Cor</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                {{-- itera sobre a coleção de veículos --}}
                @foreach ($veiculos as $v)
                    <tr>
                        <td>{{ $v->name }} </td>
                        <td> {{ $v->year }} </td>
                        <td> {{ $v->color }} </td>
                        {{-- vai para a rota show, passando o id como parâmetro --}}
                        <td> <a href="{{ route('veiculos.show', $v->id) }}">Exibir</a> </td>
                        <td> <a href="{{ route('veiculos.edit', $v->id) }}">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    {{-- mostra a qtde de veículos cadastrados. --}}
                    <td colspan="5">Veículos Cadastrados: {{ $veiculos->count() }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
@endsection