@extends('layouts.app')
@section('title','Edit Todo')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2> Edit  Todo  </h2>
                </div>
                   <div class="card-body">
                   
                        <form action="/todos/{{$todo->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                                <input type="text" 
                                class="form-control" 
                                placeholder="Enter Title"
                                name="todoTitle"
                                class="@error('todoTitle') is-invalid @enderror"
                                value="{{ $todo->title }}"
                                >
                         </div>    
                         @error('todoTitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                         <div class="form-group">
                         <textarea class="form-control" 
                         rows="3"
                         placeholder="Enter Descriptin"
                         name="todoDescription" 
                         value="{{old('todoDescription')}}"
                         class="@error('todoDescription') is-invalid @enderror"
                        > {{ $todo->description }}</textarea>
                    </div>
                    @error('todoDescription')
                            <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-success" style="width: 40%">Update </button>
                    </div>
                    
                                
                        </form>
                    </div>

            </div>

         </div>
    </div>


@endsection