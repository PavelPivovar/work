@extends('layouts.rab')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Мое Резюме</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @foreach($work as $works)
                                <hr>
                                Имя: {{$works->name}}
                                <br>Фамилия: {{$works->surname}}
                                <br>Тел: {{$works->phone }}
                                <br>Аватар: {{$works->avatar }}
                                <br>Город: {{ $works->city_id }}
                                <br>Требуемая рубрика: {{ $works->rubric_id }}
                                <br>Требуемая должность: {{ $works->profession_id }}
                                <br>День рождения: {{$works->date_birthday }}
                                @if($works->previous_company =! null)
                                <br>Предыдущая компания: {{$works->previous_company}}
                                <br>Должность: {{ $works->position }}
                                <br>Дата начала работы {{ $works->data_work_start }}
                                <br>Дата окончания работы {{ $works->data_work_end }}
                                @endif
                                @if($works->schooling != null)
                                <br>Образование {{ $works->schooling }}
                                <br>Год обучения {{ $works->year_of_study }}
                                <br>Факультет {{ $works->faculty}}
                                @endif
                                <form action="{{ route('work.destroy',$works->id) }}" method="POST">
                                    <br><a class="btn btn-primary" href="{{ route('work.edit',$works->id) }}">Изменить</a>
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Вы уверенны ?')" type="submit" class="btn btn-danger">Удалить</button>
                                    <i class="fa fa-remove"></i>
                                </form>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
