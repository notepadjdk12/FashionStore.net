<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>FashionStore</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Log In</p>

      <form action="{{url ('/home')}}" method="get">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
           
        
          <div class="col justify-content-center align-items-center">
            <button type="submit" class="btn btn-block btn-primary">Sign In</button>
          </div>
         
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
      <p class="mb-0">
        <a href="{{url ('/register')}}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->