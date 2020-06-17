@extends('layouts.app')
@section('title','todo - '.$todo->id)
@section('content')
        <h2 class="mt-5 text-center" >
        {{$todo->title}}
        </h2>
        <div class="row pt-4 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span> Details </span>
                        <span class="badge-warning float-right">
                            {{boolval($todo->completed) ? 'Completed' : 'Non Completed'}}
                        </span>
                        </div>
                    <div class="card-body">
                    {{$todo->description}}
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection