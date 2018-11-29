@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Все Вакансии</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @foreach($company as $companies)
                                <hr>
                            Имя: {{$companies->name}}
                            <br>Должность: {{$companies->position}}
                            <br>Тел: {{$companies->phone }}
                                <br>Компания: {{ $companies->company }}
                                <br>Кол-во сотрудников: {{ $companies->number }}
                                <br>Сайт: {{ $companies->site }}
                                <br>Город: {{ $companies->city_id }}
                                <br>Требуемая рубрика: {{ $companies->rubric_id }}
                                <br>Требуемая должность: {{ $companies->profession_id }}
                                <br>Почта: {{ $companies->email }}
                                <form action="{{ route('company.destroy',$companies->id) }}" method="POST">
                                <br><a class="btn btn-primary" href="{{ route('company.edit',$companies->id) }}">Изменить</a>
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Вы уверенны ?')" type="submit" class="btn btn-danger">Удалить</button>
                                    <i class="fa fa-remove"></i>
                                </form>
                              @endforeach

                    </div>
                </div>
                {!! $company->links() !!}
            </div>
        </div>
    </div>


@endsection

