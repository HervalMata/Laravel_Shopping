@extends('admin.layout.app')
@section('content')
    <!-- Main content -->
    {{--<section class="content">--}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            @include('admin.layout.errors-and-messages')
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-3 col-6">
                        <a href="#" class="btn btn-success">Cadastrar</a>
                    </div>
                </div>
                <br>
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Categorias</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 200px">Nome</th>
                                        <th style="width: 100px">Situação</th>
                                        <th style="width: 400px">Opções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->name}}</td>
                                            <td><span class="badge bg-success">{{ $category->active }}</span></td>
                                            <td>
                                                <a href="#" class="btn btn-warning"><i class="fa fa-edit"></i>
                                                    Editar</a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash-alt"></i>
                                                    Excluir</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{--                        {{ $category->links() }}--}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    {{--</section>--}}
    <!-- /.content -->
@endsection
