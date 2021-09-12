<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GBV Report | Admin</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body style="background:#eee">
      <section class="container">
        <div class="main">
          <div class="title">
            <h5>GBV Report System</h3>
            <h6>Admin Login</h4>
          </div>
          <div class="admin-form">
            <form>
              {{-- <div id="message" class="alert alert-danger alert-dismissible"></div> --}}
              @csrf
              <label>Email</label>
              <input type="text" name="email" class="form-input-c" id="email" value="" required>
              <label>Password</label>
              <input type="password" name="password"  class="form-input-c" id="password" value="" required>
              <button type="button" name="login" onclick="loginUser()" class="login">Login</button>
              {{-- <a href="" class="forgot">Forgot Password?</a> --}}
            </form>

          </div>
      </div>
      </section>
      @include('inc.footer')
