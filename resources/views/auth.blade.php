<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up / Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
</head>
<body>

    
    <div class="main">  	
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="chk" aria-hidden="true">Sign up</label>
                
                @if ($errors->any())
                    <ul style="color: red;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                
                <input type="text" name="name" placeholder="User name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign up</button>
            </form>
        </div>
    
        
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="chk" aria-hidden="true">Login</label>
                
                @if ($errors->any())
                    <ul style="color: red;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                
                <input type="text" name="loginname" placeholder="Name" required>
                <input type="password" name="loginpassword" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
   
</body>
</html>
