@extends('layouts.app')
@section('title','Create Todo')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2> Create a new Todo  </h2>
                </div>
                   <div class="card-body">
                   
                        <form action="/create" method="POST">
                        @csrf
                        <div class="form-group">
                                <input type="text" 
                                class="form-control" 
                                placeholder="Enter Title"
                                name="todoTitle"
                                class="@error('todoTitle') is-invalid @enderror"
                                value="{{old('todoTitle')}}"
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
                        > </textarea>
                    </div>
                    @error('todoDescription')
                            <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-success" style="width: 40%">Create </button>
                    </div>
                    
                                
                        </form>
                    </div>

            </div>

         </div>
    </div>


@endsection