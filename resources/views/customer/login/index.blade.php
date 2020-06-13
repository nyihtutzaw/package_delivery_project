<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
     
      <div class="section"></div>

      <h5 class="green-text">Customer Login</h5>
      @if (Session::has('success'))
        <h6 class="green-text">You have registered. You can login here</h6>
      @endif
      @if (Session::has('error'))
      <h6 class="red-text">{{ Session::get('error') }}</h6>
      @endif
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action="{{ route('customer.login.action') }}">
             {{ csrf_field() }}
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='phone'  />
                <label for='email'>Enter your phone</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
    
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login ' class='col s12 btn blue btn-large waves-effect ' style="background:006666;">Login</button>
              </div>
              <div class="row">
                <a href="{{ route('customer.register') }}">Create new account</a>
              </div>
            </center>
          </form>
        </div>
      </div>
      
    </center>

    
  </main>

 <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <!--materialize js cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{ URL::asset('dashboard/js/layout.js') }}"></script>
  @include('dashboard.layouts.showerrors')
  
  

</body>

</html>