@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Profile {{Auth::user()->name}} </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                                <br> Name: {{Auth::user()->name}}
                                <br>SerName:  {{Auth::user()->surname}}
                                <br>Email:  {{Auth::user()->email}}
                                <br>Birthday:  {{Auth::user()->birthday}}
                                <br>City:  {{Auth::user()->city}}
                                <br>Profession:  {{Auth::user()->profession}}


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection