<!doctype html>
<html lang="en">
  <head>
    @include('components/head')
    <title>Login</title>
  </head>
  <body>
    <div class="container-fluid mt-4">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header text-center">
              <b>Form <span class="text-primary">Login</span></b>
            </div>
            <div class="card-body">
              <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" required />
                </div>
                <div class="form-group mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" required />
                </div>
                <button class="w-100 btn btn-primary mb-2" type="submit">Sign In</button>
                <small class="text-center w-100 d-block">
                  Belum punya akun? <a href="/register">Register</a> sekarang
                </small>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>