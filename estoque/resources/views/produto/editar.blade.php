@extends('layout.principal') @section('conteudo')

<h1>Alterar produto: {{$p->nome}}</h1>

<form action="/produtos/update/{{$p->id}}" method="post">
    <div class="form-group">
        <label>Nome</label>
        <input name="nome" class="form-control" value="{{isset($p->nome) ? $p->nome : '' }}" />
    </div>
    <div class="form-group">
        <label>Descricao</label>
        <input name="descricao" class="form-control" value="{{isset($p->descricao) ? $p->descricao : '' }}" />
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input name="valor" class="form-control" value="{{isset($p->valor) ? $p->valor : '' }}" />
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input type="number" name="quantidade" class="form-control" value="{{isset($p->quantidade) ? $p->quantidade : '' }}" />
    </div>
    <div class="form-group">
        <label>Tamanho</label>
        <input type="number" name="tamanho" class="form-control" value="{{isset($p->tamanho) ? $p->tamanho : '' }}" />
    </div>
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

@stop
