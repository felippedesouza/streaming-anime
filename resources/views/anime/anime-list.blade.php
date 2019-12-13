@extends('layout')

@section('title', 'Lista de animes')

@section('content')
<h1>
    Lista de animes
</h1>
<div id="mensagens">
    <h4>
        @isset($info)
        <span class="info">{{ $info }}</span>
        @endisset
        @isset($error)
        <span class="error">{{ $error }}</span>
        @endisset
        @isset($sucsess)
        <span class="success">{{ $sucsess }}</span>
        @endisset
    </h4>
</div>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ano de lançamento</th>
            <th>Tag</th>
        </tr>
    </thead>
    <tbody>
        @isset($animes)
        @foreach ($animes as $anime)
        <tr>
            <td><a href="/{{ $anime->id }}/episodios">{{ $anime->nome }}</a></td>
            <td>{{ $anime->descricao }}</td>
            <td>{{ $anime->ano_lancamento }}</td>
            <td>
                @foreach ($anime->tags as $tag)
                @if ($loop->iteration != $loop->count)
                <span>{{ $tag->nome }} <a href="#">x</a></span>,
                @else
                <span>{{ $tag->nome }} <a href="#">x</a></span>
                @endif
                @endforeach
            </td>
        </tr>
        @endforeach
        @if (count($animes) < 1)
        <tr>
            <span>Sem registro</span>
        </tr>
        @endif
        @endisset
    </tbody>
</table>
@endsection
