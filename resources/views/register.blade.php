<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Link the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>
    <!-- Form Submission -->
    <form action="{{ route('register') }}" method="POST">
        @csrf <!-- Laravel CSRF Protection -->
        
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
    
            <label for="first_name"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="name" id="name" value="{{ old('first_name') }}" required>
            @error('first_name')
                <div class="error">{{ $message }}</div>
            @enderror
    
           
    
        
            
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            
            <hr>
            <p>By creating an account, you agree to our <a href="#">Terms & Privacy</a>.</p>
    
            <button type="submit" class="registerbtn">Register</button>
        </div>
        
        <div class="container signin">
            <p>Already have an account? <a href="{{ route('login') }}">Sign in</a>.</p>
        </div>
    </form>
</body>
</html>
