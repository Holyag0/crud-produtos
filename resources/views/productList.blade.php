@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Produtos disponiveis') }}</div>

                <div class="card-body">
                    <h3>Click para cadastar novo produto</h3>
                    <a href="{{ route('views.create') }}" class="btn btn-primary">Cadastrar</a>
        <table class="table table-dark" >
            <thead>
                <tr>
                    <th>PRODUTO</th>
                    <th>DETALHES</th>

                </tr>
            </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td><A href="{{route('views.show', $product->id )}}">Detalhes</A></td>
                            </tr>

                        @endforeach
                        </tbody>

                    </table>

                 </div>
            </div>
        </div>
    </div>
</div>

@endsection
