@extends('Layout.auth')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table my-4 table-hover table-bordered">
                    <thead>
                        <h5 class="text text-success">List of Events available </h5>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Event name</th>
                            <th scope="col">Event Host</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($events as $key=> $event)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td scope="row">{{ $event->name }}</td>
                                <td scope="row"></td>
                                <td scope="row">
                                    <a href="" class="btn btn-warning">Register</a>
                                </td>
                            </tr>

                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

