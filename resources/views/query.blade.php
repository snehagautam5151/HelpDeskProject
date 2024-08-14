@extends('dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header">Query</div>
                <div class="card-body">
                    <div id="chatbox"
                        style="height: 200px; overflow-y: auto; border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px;">
                        <!-- Placeholder for chat messages -->
                    </div>
                    <form id="chatForm">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" id="message" name="message" class="form-control"
                                placeholder="Your Question" required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Ask</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $('#chatForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var message = $('#message').val(); // Get user input

        // Append user message to chat box
        $('#chatbox').append('<p><strong>You:</strong> ' + message + '</p>');

        // Clear input field
        $('#message').val('');

        // Scroll chat box to bottom
        $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);

        // Send AJAX request to backend
        $.ajax({
            url: "{{ route('query.getResponse') }}",
            method: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                message: message
            },
            success: function(response) {
                // Append bot response to chat box
                $('#chatbox').append('<p><strong>Bot:</strong> ' + response.response +
                    '</p>');

                // Scroll chat box to bottom
                $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
            },
            error: function() {
                // Append error message to chat box
                $('#chatbox').append(
                    '<p><strong>Bot:</strong> An error occurred. Please try again later.</p>'
                );

                // Scroll chat box to bottom
                $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
            }
        });
    });
});
</script>
@endsection