@extends('master_autentikasi')
@section('content')

  <div class="geser">
  <div class="card" style="width: 26rem;">
      <div class="card-body">
        <div class="judul">Reflect Engineer</div>
        <h6 class="text-login">Sign In</h6>
        <input type="button" value="Continue With Facebook" class="login-fb">
        <input type="button" value="Continue With Google" class="login-google">
        <h6 class="text-or">or</h6>
        <input type="text" name="email" class="text-email" placeholder="Email">
        <input type="text" name="pass" class="text-email" placeholder="Password">
        <a href="test2"><input type="button" value="Sign In" class="tombol-login"></a>
        <input type="checkbox" name="keep" class="check" value="sign in">
        <label for="keep" class="label-check">Keep me sign in</label>
        <a href="#" class="forgot">Forgot Password?</a>
    </div>
  </div>
  </div>

@endsection