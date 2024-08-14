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


            @foreach ($ticketlists as $ticketlist)


            <tr>

                <td>{{$loop->index+1}}</td>
                <td>{{ $ticketlist->title }}</td>
                <td>{{ $ticketlist->priority }}</td>

                <td>{{ $ticketlist->departments }}</td>
                <td>{{ $ticketlist->categories }}</td>

                <td>{{ $ticketlist->name  }}</td>

                <td>
                    <a href="{{ asset('uploads/files/'.$ticketlist->attachments) }}">Open file</a>
                    {{-- <a href="{{ asset('uploads/images/'.$ticketlist->attachments) }}">Download</a> --}}
                    </iframe>
                </td>
                <td>{{ $ticketlist->descriptions }}</td>
                <td>
                    @if( $ticketlist->notificationstatus == 1)
                    <form action="{{route ('alltickets.update', $ticketlist->id  )}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" class="btn btn-danger btn-sm" name="email"
                            value="{{ $ticketlist->email  }}">
                        <button type="submit" disabled class="btn btn-danger btn-sm">Problem Resolved</button>
                    </form>
                    @else
                    <form action="{{route ('alltickets.update',$ticketlist->id )}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" class="btn btn-danger btn-sm" name="email"
                            value="{{ $ticketlist->email  }}">
                        <button type="submit" class="btn btn-danger btn-sm">Problem Resolved</button>
                    </form>

                    @endif
                    <form action="{{route ('alltickets.destroy',$ticketlist->id )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mt-2" style="width: 130px;">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>



</div>

@endsection