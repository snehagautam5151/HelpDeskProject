@extends('dashboard')
@section('content')
<div>
<div class="grid-container 4">
    <h1 class="mt-5">Tickets</h1>
    <a href="{{ route('addticket.index') }}" class="btn btn-primary mt-3"
      >Create Ticket</a
    >
  </div>
</div>

@endsection