<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5">
                <h2 class="text-center" style="color: blue">Welcome to Help Desk</h2>
                <h5 class=" text-center">ITOneSolution</h5>
                <div class="card mt-3">

                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email_address" class="mb-1">Email</label>
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="mb-1">Passowrd</label>
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('emailPassword'))
                                <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>


                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>

                            <div class="d-grid mx-auto">
                                <a href="{{ route('forget.password.get') }}">Forgot Password</a>
                            </div>

                            <div class="d-grid mx-auto mt-4">
                                <a href="{{route('register-user')}}" style="color: white"
                                    class="btn btn-primary btn-block">Ragistration</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>