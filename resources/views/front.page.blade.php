<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jhenela Gozum - Welcome</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Full-screen landing page */
    * { margin:0; padding:0; box-sizing: border-box; }

    body, html {
      height: 100%;
      font-family: 'Roboto', sans-serif;
    }

    .landing-page {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      background: linear-gradient(135deg, #4a574aff, #062e1aff);
      color: #fff;
      text-align: center;
      transition: 0.5s;
    }

    .landing-page h1 {
      font-size: 48px;
      margin-bottom: 20px;
      animation: fadeInDown 1s ease-out;
    }

    .landing-page p {
      font-size: 20px;
      margin-bottom: 40px;
      animation: fadeInUp 1s ease-out 0.3s;
    }

    .enter-btn {
      background-color: #B4DEBD;
      color: #4C763B;
      font-size: 18px;
      padding: 12px 25px;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      transition: 0.3s;
      animation: fadeInUp 1s ease-out 0.5s;
    }

    .enter-btn:hover {
      background-color: #4C763B;
      color: #B4DEBD;
      transform: scale(1.05);
    }

    @keyframes fadeInDown {
      0% { opacity:0; transform: translateY(-20px); }
      100% { opacity:1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
      0% { opacity:0; transform: translateY(20px); }
      100% { opacity:1; transform: translateY(0); }
    }

    /* Optional: add a small logo animation */
    .logo {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 5px solid #778873;
      margin-bottom: 30px;
      object-fit: cover;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    @media (max-width: 600px) {
      .landing-page h1 { font-size: 32px; }
      .landing-page p { font-size: 16px; }
      .enter-btn { font-size: 16px; padding: 10px 20px; }
    }
  </style>
</head>
<body>

  <div class="landing-page">
    <img src="{{ asset('image/IMG_7961.jpeg') }}" class="logo" alt="Profile Picture">
    <h1>Welcome to Jhenela Gozum's Portfolio</h1>
    <p>Web Developer | Creative Designer | Learner</p>
    <button class="enter-btn" onclick="enterPortfolio()">Enter Portfolio</button>
  </div>

  <script>
    function enterPortfolio() {
      // Redirect to your main portfolio page
      window.location.href = 'portfolio.'; // Replace with the actual file name of your main page
    }
  </script>

</body>
</html>
