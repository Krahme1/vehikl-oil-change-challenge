<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oil Change Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 0 20px;
            color: #333;
        }
        h1 {
            font-size: 24px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .error {
            color: #c00;
            font-size: 14px;
            margin-top: 4px;
        }
        .result-due {
            color: #c00;
            font-weight: bold;
        }
        .result-not-due {
            color: #080;
            font-weight: bold;
        }
        a.button-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #333;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>🛠 Oil Change Checker</h1>
    @yield('content')
</body>
</html>