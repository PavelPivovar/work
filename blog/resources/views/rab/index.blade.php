@extends('layouts.rab')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">all rab</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($user as $users)
                            <br> Name: {{$users->name}}
                            <br> Name: {{$users->name}}
                            <br>SerName:  {{$users->surname}}
                            <br>Email:  {{$users->email}}
                            <br>Birthday:  {{$users->birthday}}
                            <br>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection