<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Bubbles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            background: #000428;
            background: -webkit-linear-gradient(to right, #004e92, #000428);
            background: linear-gradient(to right, #004e92, #000428);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #07c8f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: relative;
            z-index: 10;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 45px;
        }

        .input-container {
            position: relative;
        }

        input {
            width: 100%;
            padding: 10px 10px 10px 30px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .user-icon, .lock-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: black;
        }

        button {
            width: 100%;
            padding: 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background: linear-gradient(to right, #004e92, #000428);
        }

        button:hover {
            background-color: white;
            color: #fdf0d5;
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }

        p {
            margin-top: 30px;
            text-align: center;
        }

        p a {
            color: #004e92;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        /* Bubbles Animation */
        .bubble {
            position: absolute;
            bottom: -50px;
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: bubble 8s infinite;
            opacity: 0;
            pointer-events: none;
        }

        @keyframes bubble {
            0% {
                transform: translateX(0) translateY(0);
                opacity: 1;
            }
            50% {
                transform: translateX(150px) translateY(-400px);
                opacity: 0.5;
            }
            100% {
                transform: translateX(-150px) translateY(-800px);
                opacity: 0;
            }
        }

        .bubble:nth-child(odd) {
            animation-duration: 10s;
        }

        .bubble:nth-child(even) {
            animation-duration: 12s;
        }
    </style>
</head>
<body>

    <!-- Bubbles -->
    <div class="bubble" style="left: 10%; animation-delay: 0s;"></div>
    <div class="bubble" style="left: 20%; animation-delay: 1s;"></div>
    <div class="bubble" style="left: 30%; animation-delay: 3s;"></div>
    <div class="bubble" style="left: 40%; animation-delay: 2s;"></div>
    <div class="bubble" style="left: 50%; animation-delay: 4s;"></div>
    <div class="bubble" style="left: 60%; animation-delay: 6s;"></div>
    <div class="bubble" style="left: 70%; animation-delay: 5s;"></div>
    <div class="bubble" style="left: 80%; animation-delay: 7s;"></div>
    <div class="bubble" style="left: 90%; animation-delay: 8s;"></div>

    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ url('login')}}" method="POST">

        @csrf


            <div class="input-container">
                <input type="text" name="username" :value="old('username')" placeholder="Username" required>
                <span class="user-icon">&#128100;</span> <!-- User icon (Unicode character) -->
            </div>
            <div class="input-container">
                <input type="password" name="password" :value="old('password')" placeholder="Password" required>
                <span class="lock-icon">&#128274;</span> <!-- Lock icon (Unicode character) -->
            </div>
            <button type="submit">Login</button>
        </form>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
        <div>
            <p>Not registered? <a href="{{ route('register')}}">Create an account</a></p>
        </div>
    </div>

</body>
</html>