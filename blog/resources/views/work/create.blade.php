@extends('layouts.rab')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Разместить Резюме</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form  class="needs-validation"  method="post" action="{{route('work.index')}}" accept-charset="UTF-8">
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Имя</label>
                                        <input  name="name" type="text" class="form-control" id="validationTooltip01" placeholder="Имя" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Фамилия</label>
                                        <input  name="surname" type="text" class="form-control" id="validationTooltip01" placeholder="Фамилия" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label  for="validationTooltip02">avatar</label>
                                        <input name="avatar" type="text" class="form-control" id="validationTooltip02" placeholder="avatar"  required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label  for="validationTooltip02">Телефон</label>
                                        <input name="phone" type="text" class="form-control" id="validationTooltip02" placeholder="Телефон" value="+380" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label  for="validationTooltip02">День рождения</label>
                                        <input name="date_birthday" type="date" class="form-control" id="validationTooltip02" placeholder="date_birthday"  required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Требуемая рубрика</label>
                                        <select name="rubric_id" class="form-control"  id="validationTooltip02" required >
                                            @foreach ($rubric as $rubrics)
                                                <option value="{{ $rubrics->name_rubric}}">{{ $rubrics->name_rubric }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip03">Требуемая профессия</label>
                                        <select name="profession_id" class="form-control"  id="validationTooltip02" placeholder=" компании" value="" required >
                                            @foreach ($profession as $professions)
                                                <option value="{{ $professions->name_profession }}">{{ $professions->name_profession }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip03">Город</label>
                                        <select name="city_id" class="form-control"  id="validationTooltip02" placeholder=" компании" value="" required >
                                            @foreach ($city as $cities)
                                                <option value="{{ $cities->name_city }}">{{ $cities->name_city }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip03">Email</label>
                                        <input name="email" type="Email" class="form-control" id="validationTooltip03" placeholder="Email" required>
                                        <div class="invalid-tooltip">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip03">Пароль</label>
                                        <input name="password" type="password" class="form-control" id="validationTooltip03" placeholder="Пароль" required>
                                        <div class="invalid-tooltip">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                </div>




                               {{-- --}}{{--<div class="col-md-6 mb-3">
                                    <label for="validationTooltip03">Есть ли опыт работы ?</label>

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <button id="showExperienceForm"  class="btn btn-outline-success">ДА</button>
                                        <button id="showNoExperienceForm" class="btn btn-outline-danger">НЕТ</button>
                                    </div>
                                </div>--}}

                                <div class="form-row" id="experience">
                                    <div class="col-md-6 mb-4">
                                        <label for="validationTooltip01">Укажите последнее место работы</label>
                                        <input name="previous_company" type="text" class="form-control" id="validationTooltip01" placeholder="Название предыдущей компании" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">должность</label>
                                        <input name="position" type="text" class="form-control" id="validationTooltip01" placeholder="Название предыдущей должности" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Начала работы</label>
                                        <input name="data_work_start" type="date" class="form-control" id="validationTooltip01" placeholder="Начала работы" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Окончание работы</label>
                                        <input name="data_work_end" type="date" class="form-control" id="validationTooltip01" placeholder="Окончание работы" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>




                                {{--<div class="form-row" id="no-experience" style="display:none">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Для публикации резюме обязательно добавьте образование</label>
                                        <input name="previous_company" type="text" class="form-control" id="validationTooltip01" placeholder="Уровень образования" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Город учебного заведения</label>
                                        <input name="position" type="text" class="form-control" id="validationTooltip01" placeholder="Город" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Год окончания</label>
                                        <input name="data_work_start" type="date" class="form-control" id="validationTooltip01" placeholder="Год окончания" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Название учебного заведения</label>
                                        <input name="data_work_end" type="text" class="form-control" id="validationTooltip01" placeholder="Название учебного заведения" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>--}}




                                <button class="btn btn-primary" type="submit">Зарегестрироваться </button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const showExperienceFormBtn = document.querySelector('#showExperienceForm');
            const showNoExperienceFormBtn = document.querySelector('#showNoExperienceForm');
            const experienceForm = document.querySelector('#experience');
            const noExperienceForm = document.querySelector('#no-experience');

            showExperienceFormBtn.addEventListener('click', () => {
                experienceForm.style.display = 'flex';
                noExperienceForm.style.display = 'none';
            })

            showNoExperienceFormBtn.addEventListener('click', () => {
                experienceForm.style.display = 'none';
                noExperienceForm.style.display = 'flex';
            });
        })


    </script>
@endsection
