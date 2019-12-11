@extends('anime.layout')

@section('title', 'Formulário de anime')

@section('content')
<fieldset class="col-100">
    <legend class="centralizado">Anime: </legend>

    <form action="/anime/add" method="POST">
        {{ csrf_field() }}
        <div class="col-50">
            <label for="nome">Nome: </label>
            <input name="nome" id="nome" type="text">
            <span>{{ $errors->first('nome') }}</span>

            <label for="descricao">Descrição: </label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
            <span>{{ $errors->first('descricao') }}</span>

            <label for="ano_lancamento">Ano de lançamento: </label>
            <input name="ano_lancamento" id="ano_lancamento" type="text" max="4">
            <span>{{ $errors->first('ano_lancamento') }}</span>

            <label for="tags">Tags: </label>
            <input name="tags" id="tags" type="text" placeholder="Ação, Drama, Histórico...">
        </div>

        <div class="col-50">
            <input type="submit" value="Incluir">
        </div>
    </form>
</fieldset>

<fieldset class="col-100">
    <legend class="centralizado">Temporada: </legend>

    <div class="col-50">
        <label for="">Número da Temporada: </label>
        <input type="text">
    </div>

    <div class="col-50">
        <input type="submit" value="Incluir">
    </div>
</fieldset>

<fieldset class="col-100">
    <legend class="centralizado">Episódio: </legend>

    <div class="col-50">
        <label for="">Titulo: </label>
        <input type="text">

        <label for="">Número: </label>
        <input type="text">

        <label for="tags">Tags: </label>
        <input name="tags" id="tags" type="text" placeholder="Ação, Drama, Histórico...">
    </div>

    <div class="col-50">
        <input type="submit" value="Incluir">
    </div>
</fieldset>

<fieldset class="col-100">
    <legend class="centralizado">Embed Video: </legend>

    <div class="col-50">
        Nome: <input type="text">
        Código html: <textarea name="" id="" cols="30" rows="10" ></textarea>

        Resolução:
        <select name="resolucao">
            <option value="0">Seleciona algo</option>
            <option value="1">SD</option>
            <option value="2">HD</option>
            <option value="3">FULL HD</option>
            <option value="4">4K</option>
        </select>

        Tipo:
        <select name="sub_dub">
            <option value="0">Selecione algo</option>
            <option value="1">DUB</option>
            <option value="2">SUB</option>
        </select>
    </div>

    <div class="col-50">
        <input type="submit" value="Incluir">
    </div>
</fieldset>
@endsection
