<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Web App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .box h1 {
            font-size: 24px;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }
        
    </style>
</head>
<body>
    <div class="box">
        <h1>Navigation Page</h1>
        <button class="button"><a href="{{ route('login') }}" style="text-decoration: none; color: #fff;">Login</a></button>
        <button class="button"><a href="{{ route('dashboard') }}" style="text-decoration: none; color: #fff;">Dashboard</a></button>
        <button class="button"><a href="{{ route('registration') }}" style="text-decoration: none; color: #fff;">Registration</a></button>
    </div>
</body>
</html>
