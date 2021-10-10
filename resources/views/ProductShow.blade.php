@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('detalhes do produto') }}</div>

                <div class="card-body">
                    <h3>Detalhes do Produto</h3>
                        <h1>Produto{{ $product->name }}<a href="{{route('views.index')}}"><<</a></h1>
                            <ul>
                                    <td>{{$product->name}}</td>
                                    <li><Strong>Preço:</Strong>{{$product->price}}</li>
                                    <li><strong>Descrição:</strong>{{$product->description}}</li>
                            </ul>
                 </div>
            </div>
        </div>
    </div>
</div>

@endsection
