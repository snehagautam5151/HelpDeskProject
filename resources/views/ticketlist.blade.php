@extends('dashboard')
@section('content')


<div class="container mt-5">
    <h1>Tickets</h1>
    <a href="{{ route('addticket.index') }}" class="btn btn-primary mt-3">Create Ticket</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>

                <th>id</th>
                <th>Title</th>
                <th>Priority</th>
                <th>Departments </th>
                <th>Categories</th>
                <th>Agent</th>
                <th>Attachments</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($ticketlists as $ticketlist)



            <tr>
                <td>{{ $loop->iteration}}</td>

                <td>{{ $ticketlist->title }}</td>
                <td>{{ $ticketlist->priority }}</td>

                <td>{{ $ticketlist->departments }}</td>
                <td>{{ $ticketlist->categories }}</td>
                <td>{{ $ticketlist->agentname }}</td>
                <td>
                    <a href="{{ asset('uploads/files/'.$ticketlist->attachments) }}">Open file</a>
                    {{-- <a href="{{ asset('uploads/images/'.$ticketlist->attachments) }}">download</a> --}}
                    </iframe>
                </td>
                <td>{{ $ticketlist->descriptions }}</td>
                <td>
                    <form action="{{route ('ticketlist.destroy',$ticketlist->id )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>

@endsection