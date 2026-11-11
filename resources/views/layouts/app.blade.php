<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BookSpace - @yield('title')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", sans-serif;
            background: #f5f7fb;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        main {
            min-height: 75vh;
            padding: 20px 0;
        }

        a {
            text-decoration: none;
        }

        .login-box {
            max-width: 450px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .login-box h1 {
            color: #244675;
            margin-bottom: 10px;
        }

        .login-box p {
            margin-bottom: 20px;
        }

        .login-box input {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .login-box button {
            width: 100%;
            padding: 12px;
            background: #244675;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    @include('components.navbar')

    <main class="container">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>