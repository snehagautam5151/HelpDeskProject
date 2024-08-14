<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-4">
                <h2 class="text-center" style="color: blue">Welcome to Help Desk</h2>
                <h5 class=" text-center">Register User</h5>
                <div class="card">


                    <div class="card-body">

                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="user_name" class="mb-1">User Name</label>
                                <input type="text" placeholder="User Name" id="user_name" class="form-control"
                                    name="name" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="email_address" class="mb-1">User Email</label>
                                <input type="text" placeholder="User Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('user_email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="mb-1">User Passowrd</label>
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="password_confirmation" class="mb-1">Confirm Passwords</label>
                                <input type="password" placeholder="Confirm Password" id="password_confirmation"
                                    class="form-control" name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>