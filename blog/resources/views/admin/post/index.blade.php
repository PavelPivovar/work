@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('companies.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название Имя</th>
                            <th>Должность</th>
                            <th>Тел</th>
                            <th>Теги Город</th>
                            <th>Компания</th>
                            <th>Кол-во сотрудников:</th>
                            <th>Сайт</th>
                            <th>Требуемая рубрика</th>
                            <th>Требуемая должность</th>
                            <th>Почта:</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($company as $companies)
                            <tr>

                                <td>{{$companies->id}}</td>
                                <td>{{$companies->name}}</td>
                                <td>{{$companies->position}}</td>
                                <td>{{$companies->phone}}</td>
                                <td>{{$companies->city_id}}</td>
                                <td>{{$companies->company}}</td>
                                <td>{{$companies->number}}</td>
                                <td>{{$companies->site}}</td>
                                <td>{{$companies->rubric_id}}</td>
                                <td>{{$companies->profession_id}}</td>
                                <td>{{$companies->email}}</td>

                                <td>
                                    <a href="{{route('companies.edit', $companies->id)}}" class="fa fa-pencil"></a>

                                    {{Form::open(['route'=>['companies.destroy', $companies->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Вы уверенны ?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>

                                    {{Form::close()}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection