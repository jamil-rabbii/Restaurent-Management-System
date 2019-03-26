<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel = "stylesheet" type = "text/css" href="{{asset('admin')}}/css/style.css" />
		<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/font-awesome.min.css" media="all" />
		 <link rel="shortcut icon" href="{{asset('admin')}}/images/favicon/TheShahibiens.jpg" type="image/x-icon"/>
    </head>
    <body>
		<div class="background_log fix">
			<div class="user_log fix">
				<h3>Log In</h3>
				 <form method="POST" action="{{ route('login') }}">
                      @csrf					
                    <input type = "text" name="email" placeholder = " User name or Email" required />
				   <input type = "password" name="password" placeholder = "Password" required />
					<input type="submit" value="Login">
                                    {{ __('') }}
                                </input>

                            
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    </a>
					<p><a href="{{asset('register')}}">Create Account</a> <a href="">Forget Password</a></p>
				</form>
			</div>
		</div>
    </body>
</html>