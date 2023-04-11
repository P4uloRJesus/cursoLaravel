@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

    <div class="container">
        <h3 class="center">Lista de cursos</h3>

        <div class="row">
            <table class="bordered responsive-table centered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)

                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td><img height="65px" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>{{ $registro->publicado }}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('admin.cursos.editar',$registro->id) }} ">Editar</a>
                            <a class="btn red" href="{{ route('admin.cursos.deletar',$registro->id) }} ">Deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
        </div>

    </div>



@endsection
