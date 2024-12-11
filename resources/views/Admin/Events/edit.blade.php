@extends('Layout.layout')

@section('content')
    <div class="containter">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card my-3">
                    <div class="card-header">
                        <h5>Events form</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf

                            <div class="my-4 form-element">
                                <input type="text" class="form-control" name="name" placeholder="Event Name">
                            </div>
                            <div class="my-4 form-element">
                                <input type="text" class="form-control" name="event" placeholder="Event Name">
                            </div>
                            <div class="form-element">
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
