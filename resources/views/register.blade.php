<!doctype html>
<html lang="en">
  <head>
    @include('components/head')
    <title>Register</title>
  </head>
  <body>
    <div class="container-fluid mt-4">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header text-center">
              <b>Form <span class="text-primary">Register</span></b>
            </div>
            <div class="card-body">
              <form action="/register" method="POST">
                @csrf
                <div class="form-group mb-3">
                  <label class="form-label">Nama Pengguna</label>
                  <input type="text" class="form-control" name="name" required />
                </div>
                <div class="form-group mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" required />
                </div>
                <div class="form-group mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" required />
                </div>
                <button class="w-100 btn btn-primary mb-2" type="submit">Sign Up</button>
                <small class="text-center w-100 d-block">
                  Sudah punya akun? <a href="/login">Login</a> sekarang
                </small>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>