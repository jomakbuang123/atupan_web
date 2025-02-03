<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome Page</title>
  <style>
    /* Reset default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #000428;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #004e92, #000428); /* For Safari */
      background: linear-gradient(to right, #004e92, #000428); /* Modern browsers */
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
    }

    .container {
      text-align: center;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 40px;
    }

    .buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .btn {
      text-decoration: none;
      padding: 15px 30px;
      background-color: white;
      color: black;
      font-size: 1.1rem;
      font-weight: bold;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3; /* Darker blue on hover */
      color: white;
    }

    /* Bubble animation */
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

    /* Carousel Styles */
    .carousel {
      width: 80%;
      max-width: 800px;
      margin-top: 40px;
      overflow: hidden;
      border-radius: 10px;
    }

    .carousel-images {
      display: flex;
      transition: transform 1s ease-in-out;
    }

    .carousel-images img {
      width: 100%;
      height: auto;
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

  <div class="container">
    <h1>Welcome to Our Website</h1>
    <p>Choose an action to get started</p>
    <div class="buttons">
      <a href="{{ route('login')}}" class="btn">Login</a>
      <a href="{{ route('register')}}" class="btn">Register</a>
    </div>
  </div>

  <!-- Image Carousel -->
  <div class="carousel">
    <div class="carousel-images">
      <img src="https://philippinesislandhopping.com/wp-content/uploads/2024/04/mayonvolcano.jpg" alt="Image 1">
      <img src="https://www.travelingcebu.com/images/kawasan-falls-aerial-view.jpg" alt="Image 2">
      <img src="https://plus.unsplash.com/premium_photo-1661908853318-893732a14e42?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y2l0eSUyMGxpZ2h0c3xlbnwwfHwwfHx8MA%3D%3D" alt="Image 3">
    </div>
  </div>

  <script>
    // Auto-slide the images
    let currentIndex = 0;
    const images = document.querySelectorAll('.carousel-images img');
    const totalImages = images.length;

    function slideImages() {
      currentIndex = (currentIndex + 1) % totalImages;
      const newTransform = -currentIndex * 100 + '%';
      document.querySelector('.carousel-images').style.transform = `translateX(${newTransform})`;
    }

    setInterval(slideImages, 3000); // Change image every 3 seconds
  </script>

</body>
</html>
