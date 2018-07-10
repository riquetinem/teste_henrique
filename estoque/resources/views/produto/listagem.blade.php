@extends('layout.principal') @section('conteudo') @if(empty($produtos))
<div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
</div>

@else
<h1>Listagem de produtos</h1>
@if(old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{ old('nome') }} foi inserido.
</div>
@endif
<table class="table table-striped table-bordered table-hover">
    <td>Nome</td>
    <td>Valor</td>
    <td>Descrição</td>
    <td>Quantidade</td>
    <td>Tamanho</td>
    <td>inf</td>
    <td>del</td>
    <td>edit</td>
    @foreach ($produtos as $p)
    <tr class=" {{$p->quantidade<=1 ? 'danger' : '' }}">
        <td> {{$p->nome}} </td>
        <td> {{$p->valor}} </td>
        <td> {{$p->descricao}} </td>
        <td> {{$p->quantidade}} </td>
        <td> {{ $p->tamanho }}</td>
        <td>
            <a href="/produtos/mostra/{{$p->id}}">
          <span class="glyphicon glyphicon-search"></span>
        </a>
        </td>
        <td>
            <a href="{{action('ProdutoController@remove', $p->id)}}"> 
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </td>
        <td>
            <a href="{{action('ProdutoController@altera', $p->id)}}"> 
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
        </td>
    </tr>
    @endforeach
</table>

@endif
<h4>
    <span class="label label-danger pull-right">
    Um ou menos itens no estoque
  </span>
</h4>

@stop
