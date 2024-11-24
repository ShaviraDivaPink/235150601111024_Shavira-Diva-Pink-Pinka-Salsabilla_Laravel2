
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HTMX Go Blog App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #f1f1f1;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #ddd;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #ddd;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .container h2 {
            font-size: 28px;
            color: #2c3e50;
        }
        .container form {
            margin-top: 20px;
        }
        .container input {
            margin: 10px 0;
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .container button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>HTMX Go Blog App</h1>
        <nav>
            <a href="/blogs">List Blogs</a>
            <a href="/blogs/create">Create Blog</a>
        </nav>
    </header>

    <div class="container">
        <h2>Login to Create Blog</h2>

        <form action="/login" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>
        
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
        
            <button type="submit">Login</button>
        </form>

        @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </div>
</body>
</html>
