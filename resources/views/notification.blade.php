@extends('dashboard')
@section('content')
<div>
    <div class="grid-container 4">
        <h1 class="mt-5">Notification</h1>

        {{-- ADD TESE LINES  --}}
        <div class="container">
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>

                        <th>id</th>
                        <th>Title</th>
                        <th>Agent Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($Notificationlist as $Notificationlist)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$Notificationlist->type}}</td>
                        <td>{{$Notificationlist->agentname}}</td>
                        <td>
                            <p style="color: green; font-size:15px;">{{$Notificationlist->data}}</p>
                        </td>
                        <td>
                            <form action="{{route ('notification.destroy',$Notificationlist->id )}}" method="post">
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


    </div>
</div>

@endsection