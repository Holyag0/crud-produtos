@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro do produto') }}</div>
                    <form action="{{ route('views.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                                <input type="text"name="name" placeholder="Nome:">
                                <input type="text"name="price" placeholder="Preço:">
                                <input type="text"name="description" placeholder="Descrição">
                                <input type="file"name="photo">
                                <button type="submit"class="btn btn-primary">Enviar</button>





                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
