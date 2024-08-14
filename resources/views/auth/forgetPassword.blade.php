<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5">
                <h2 class="text-center" style="color: blue">Welcome to Help Desk</h2>
                <h5 class=" text-center">Customer Care Supporter</h5>
                <div class="card mt-3">
                    <div class="card-header">Reset Password</div>
                    <div class="card-body">
    
                      @if (Session::has('message'))
                           <div class="alert alert-success" role="alert">
                              {{ Session::get('message') }}
                          </div>
                      @endif
    
                        <form action="{{ route('forget.password.post') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4 mt-3">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </form>
                          
                    </div>
                </div>
  
            </div>
        </div>
    </div>
</main>