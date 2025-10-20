resources\views\vehicles\show.blade.php
{{-- herda a view base --}}
@extends('base')
{{-- define o conteúdo --}}
@section('content')
    {{-- caso exista a variável msg, exibe uma mensagem --}}
    @if (isset($msg))
        <h3 style="color: red">Veículo não encontrado!</h3>
    @else
    {{-- senão, mostra os dados --}}
        <h2>Mostrando dados do veículo</h2>
        <p><strong>Nome:</strong> {{ $veiculos->name }} </p>
        <p><strong>Ano:</strong> {{ $veiculos->year }} </p>
        <p><strong>Cor:</strong> {{ $veiculos->color }} </p>
        <a href="{{ route('veiculos.index') }}">Voltar</a>
    @endif
@endsection