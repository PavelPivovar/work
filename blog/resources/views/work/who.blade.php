@extends('layouts.rab')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header"> Есть ли опыт работы ?</div>
                <div class="card">

                    <a type="submit" class="btn btn-primary btn-lg btn-block" href="{{ route('work.create') }}">ДА</a>
                    <a type="submit" class="btn btn-primary btn-lg btn-block" href="{{ route('student.create') }}">НЕТ</a>

                </div>
            </div>
        </div>
    </div>
@endsection