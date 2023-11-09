<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }
        .widget {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 30%;
        }
        .back-button {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin: 10px;
        }
    </style>
</head>
<body>
    <a href="{{ route('app') }}" class="back-button">Back</a>
</body>
</html>
