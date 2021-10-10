@extends('layouts.app')

@section('content')
<h1>Editar Produto</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar produto') }}</div>
                    <form action="{{ route('views.update',$id) }}" method="put">

                        @csrf
                                <input type="text"name="name" placeholder="Nome:">
                                <input type="text"name="price" placeholder="Preço:">
                                <input type="text"name="description" placeholder="Descrição">
                                <button type="submit"class="btn btn-primary">Enviar</button>





                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
