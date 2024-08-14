@extends('Agent.agentdashboard')
@section('contentagent')


<div class="container mt-5">
    <h1>Tickets</h1>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>

                <th>id</th>
                <th>Title</th>
                <th>Priority</th>
                <th>Departments </th>
                <th>Categories</th>
                <th>Owner</th>
                <th>Attachments</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            {{-- {{$ticketlists}} --}}
            @foreach ($ticketlists as $ticketlist)


            <tr>
                <td>{{ $loop->index+1 }}</td>

                <td>{{ $ticketlist->title }}</td>
                <td>{{ $ticketlist->priority }}</td>

                <td>{{ $ticketlist->departments }}</td>
                <td>{{ $ticketlist->categories }}</td>


                <td>{{ $ticketlist->name }}</td>

                <td>
                    <a href="{{ asset('uploads/files/'.$ticketlist->attachments) }}">Open file</a>
                    {{-- <a href="{{ asset('uploads/images/'.$ticketlist->attachments) }}">Download</a> --}}
                    </iframe>
                </td>
                <td>{{ $ticketlist->descriptions }}</td>
                <td>
                    <form action="{{route ('agent.destroy',$ticketlist->id )}}" method="post">
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