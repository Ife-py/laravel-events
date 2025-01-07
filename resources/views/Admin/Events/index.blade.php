@extends('Layout.layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <p class="alert alert-success">{{ Session('success')}}</p>
                @endif
                @if (session('danger'))
                    <p class="alert alert-danger">{{ Session('danger')}}</p>
                @endif
                <p>Welcome <b>{{ $user->name}}</b></p>
                <table class="table my-4 table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Event-Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Time Scheduled</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($events as $key => $event)

                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td scope="row">{{ $event->name }}</td>
                                <td scope="row">{{ $event->type }}</td>
                                <td scope="row">{{ $event->time }}</td>
                                <td>
                                    <a href="{{ route('event.edit',$event->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('event.delete',$event->id) }}" class="btn btn-danger">Delete</a>
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
