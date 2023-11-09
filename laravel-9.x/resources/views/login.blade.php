<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: 
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            max-width: 400px;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <a href="{{ route('app') }}" class="back-button">Go to Navigation Page</a>

        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
             <br>
            <input type="submit" value="Login">

      
        
        </form>
    </div>
</body>
</html>
