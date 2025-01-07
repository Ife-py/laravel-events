@extends('Layout.layout')

@section('content')
    <div class="containter">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="my-3 card">
                    <div class="card-header">
                        <h5>Events form</h5>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <p class="alert alert-success">{{ Session('success')}}</p>
                        @endif
                        <form action="{{ route('event.store') }}" method="POST">
                            @csrf
                            <div class="my-4 form-element">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your name:" required>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="my-4 form-element">
                                <label for="date" class="form-label" >Select a date</label>
                                <input type="date" class="form-control" id="date" name="time1" required>
                                @error('time1')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <label for="category" class="form-label">Select a Category</label>
                            <select class="form-select" id="category" name="type" required>
                                <option value="" disabled selected>Choose a category</option>
                                <option value="wedding">Wedding</option>
                                <option value="birthday">Birthday</option>
                                <option value="burial">Burial</option>
                                <option value="graduation">Graduation</option>
                            </select>
                            <div class="form-element">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
