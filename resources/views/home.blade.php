@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de Pessoas Cadastradas') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Data de Aniversário</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pessoas as $pessoa)
                                    <tr>
                                        <td scope="row">{{$pessoa->name}}</td>
                                        <td scope="row">{{$pessoa->birth}}</td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
