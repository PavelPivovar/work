@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить компанию
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content" >
        {{Form::open([
            'route'	=> 'companies.index'
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Регистрация компании</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Имя и фамилия</label>
                                <input  name="name" type="text" class="form-control" id="validationTooltip01" placeholder="Имя и фамилия" required>
                                <div class="valid-tooltip">
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Должность</label>
                                <input  name="position" type="text" class="form-control" id="validationTooltip01" placeholder="Директор/Администратор" required>
                                <div class="valid-tooltip">
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label  for="validationTooltip02">Телефон</label>
                                <input name="phone" type="text" class="form-control" id="validationTooltip02" placeholder="Телефон" value="+380" required>
                                <div class="valid-tooltip">
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Название компании</label>
                                <input name="company" type="text" class="form-control" id="validationTooltip01" placeholder="Название компании" required>
                                <div class="valid-tooltip">
                                    <br>
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
                                <br>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label  for="validationTooltip01">Краткое описание компании или сайт</label>
                                <input name="site" type="text" class="form-control" id="validationTooltip01" placeholder="описание компании или сайт" required>
                                <div class="valid-tooltip">
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Кол-во сотрудников</label>
                                <select name="number" class="form-control"  id="validationTooltip02" placeholder=" компании" value="" required >
                                    <option value="до 20">до 20</option>
                                    <option value="от 20 до 50">от 20 до 50</option>
                                    <option value="от 50 до 100">от 50 до 100</option>
                                    <option value="от 100 до 250">от 100 до 250</option>
                                    <option value="от 250 до 500">от 250 до 500</option>
                                    <option value="после 500">после 500</option>
                                </select>
                                <div class="valid-tooltip">
                                    <br>
                                </div>
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
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip03">Пароль</label>
                                <input name="password" type="password" class="form-control" id="validationTooltip03" placeholder="Пароль" required>
                                <div class="invalid-tooltip">
                                    <br>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                    <button class="btn btn-success pull-right">Добавить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection