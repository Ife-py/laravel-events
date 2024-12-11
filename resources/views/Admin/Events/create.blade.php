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
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="my-4 form-element">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                            <div class="my-4 form-element">
                                <label for="event" class="form-label">Event</label>
                                <input type="text" class="form-control" name="event-name" placeholder="Event Name" required>
                            </div>
                            <div class="my-4 form-element">
                                <label for="date" class="form-label" >Select a date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
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
