@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Регистрация компании </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="needs-validation"  action="{{ route('company.update',$company->id) }}"{{--action="{{ route('companies.update'}}" --}}method="POST" accept-charset="UTF-8">
                            @csrf
                            @method('PUT')
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">Имя и фамилия</label>
                                    <input  name="name" value="{{ $company->name }}" type="text" class="form-control" id="validationTooltip01" placeholder="Имя и фамилия" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">Должность</label>
                                    <input  name="position" type="text" value="{{ $company->position }}" class="form-control" id="validationTooltip01" placeholder="Директор/Администратор" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label  for="validationTooltip02">Телефон</label>
                                    <input name="phone" type="text" class="form-control" id="validationTooltip02" placeholder="Телефон" value="{{ $company->phone }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">Название компании</label>
                                    <input name="company" value="{{ $company->company }}" type="text" class="form-control" id="validationTooltip01" placeholder="Название компании" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip02">Требуемая рубрика</label>
                                    <select name="rubric_id"  class="form-control"  id="validationTooltip02" required >

                                        @foreach ($rubric as $rubrics)
                                            <option @if($rubrics->name_rubric == $company->rubric_id) selected @endif  value="{{ $rubrics->name_rubric}}">{{ $rubrics->name_rubric }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip03">Требуемая профессия</label>
                                    <select name="profession_id" class="form-control"  id="validationTooltip02" placeholder=" компании" value="" required >
                                        @foreach ($profession as $professions)
                                            <option @if($professions->name_profession == $company->profession_id) selected @endif value="{{ $professions->name_profession }}">{{ $professions->name_profession }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label  for="validationTooltip01">Краткое описание компании или сайт</label>
                                    <input name="site" value="{{ $company->site }}"  type="text" class="form-control" id="validationTooltip01" placeholder="описание компании или сайт" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip02">Кол-во сотрудников</label>
                                    <select     name="number" class="form-control"  id="validationTooltip02" placeholder=" компании" value="" required >
                                        <option  value="до 20">до 20</option>
                                        <option selected value="от 20 до 50">от 20 до 50</option>
                                        <option value="от 50 до 100">от 50 до 100</option>
                                        <option value="от 100 до 250">от 100 до 250</option>
                                        <option value="от 250 до 500">от 250 до 500</option>
                                        <option value="после 500">после 500</option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip03">Город</label>
                                    <select name="city_id" class="form-control"  id="validationTooltip02" placeholder=" компании" value="" required >
                                        @foreach ($city as $cities)
                                            <option @if($cities->name_city == $company->city_id) selected @endif value="{{ $cities->name_city }}">{{ $cities->name_city }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip03">Email</label>
                                    <input name="email" value="{{ $company->email }}"  type="Email" class="form-control" id="validationTooltip03" placeholder="Email" required>
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
                            <button action="{{route('company.index')}}" class="btn btn-primary" type="submit">Редактировать </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
