<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        /* Base Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #000428;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #004e92, #000428); /* For Safari */
            background: linear-gradient(to right, #004e92, #000428); /* Modern browsers */
            overflow: hidden;
            position: relative;
        }

        /* Bubbles Animation */
        .bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .bubble {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0.7;
            animation: floatBubbles 10s infinite;
        }

        @keyframes floatBubbles {
            0% {
                transform: translateY(100vh) scale(0.5);
                opacity: 0.7;
            }
            50% {
                transform: translateY(-50vh) scale(1);
                opacity: 0.8;
            }
            100% {
                transform: translateY(-100vh) scale(0.5);
                opacity: 0.7;
            }
        }

        /* Create multiple bubbles with different sizes and animation delays */
        .bubble:nth-child(1) {
            width: 40px;
            height: 40px;
            left: 10%;
            animation-delay: 0s;
        }
        .bubble:nth-child(2) {
            width: 50px;
            height: 50px;
            left: 20%;
            animation-delay: 2s;
        }
        .bubble:nth-child(3) {
            width: 60px;
            height: 60px;
            left: 30%;
            animation-delay: 4s;
        }
        .bubble:nth-child(4) {
            width: 30px;
            height: 30px;
            left: 40%;
            animation-delay: 6s;
        }
        .bubble:nth-child(5) {
            width: 50px;
            height: 50px;
            left: 50%;
            animation-delay: 8s;
        }
        .bubble:nth-child(6) {
            width: 45px;
            height: 45px;
            left: 60%;
            animation-delay: 10s;
        }
        .bubble:nth-child(7) {
            width: 55px;
            height: 55px;
            left: 70%;
            animation-delay: 12s;
        }
        .bubble:nth-child(8) {
            width: 35px;
            height: 35px;
            left: 80%;
            animation-delay: 14s;
        }
        .bubble:nth-child(9) {
            width: 65px;
            height: 65px;
            left: 90%;
            animation-delay: 16s;
        }

        /* Form Styles */
        .form-container {
            background-color: #07c8f9;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: relative;
            z-index: 1;
            backdrop-filter: bl
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: darkblue;
            font-size: 45px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background: #000428;
            background: -webkit-linear-gradient(to right, #004e92, #000428);
            background: linear-gradient(to right, #004e92, #000428);
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
        }

        p a {
            color: #004e92;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
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

    <!-- Form Container -->
    <div class="form-container">
        <h2>Sign Up</h2>
        <form method="POST" action="{{ route('register')}}">

            @csrf

            <div class="form-group">
                <label for="name" :value="__('Name')">Full Name</label>
                <input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
            </div>

            <div class="form-group">
                <label for="email" :value="__('Email')">Email Address</label>
                <input type="email" id="email" name="email" :value="old('email')" required autocomplete="email">
            </div>

            <div class="form-group">
                <label for="password" :value="__('Password')">Password</label>
                <input type="password" id="password" name="password" required>
            </div>


            <div class="form-group">
                <input type="submit" name="signup" id="signup" value="Register">
            </div>
            <div>
                <p>I'm already a member! <a href="{{ route('login')}}">Sign in</a></p>
            </div>
        </form>
    </div>

</body>
</html>

