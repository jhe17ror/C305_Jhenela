<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jhenela Gozum - Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <style>
    /* --------------------- THEME VARIABLES --------------------- */
    :root {
      --bg-color: #4a574aff;
      --text-color: #333;
      --header-gradient-1: #305e38ff;
      --header-gradient-2: #062e1aff;
      --header-text: #D2DCB6;
      --social-text: #B4DEBD;
      --social-border: #B4DEBD;
      --social-hover-bg: #B4DEBD;
      --social-hover-text: #4C763B;
      --container-bg: #ECF4E8;
      --shadow-color: rgba(132, 168, 135, 0.1);
      --heading-color: #075a44ff;
      --heading-border: #106850ff;
      --list-bg: #d4f4dd;
      --list-hover-bg: #8bd696ff;
      --contact-hover: #064e3bff;
      --footer-text: #948585ff;
      --profile-border: #658C58;
      --profile-glow: #ABE7B2;
    }

    html[data-theme="dark"] {
      --bg-color: #1d231d;
      --text-color: #e5e5e5;
      --header-gradient-1: #1f3c25;
      --header-gradient-2: #021a10;
      --header-text: #b4c59c;
      --social-text: #8fbf96;
      --social-border: #8fbf96;
      --social-hover-bg: #8fbf96;
      --social-hover-text: #1f3c25;
      --container-bg: #2a302a;
      --shadow-color: rgba(0, 0, 0, 0.4);
      --heading-color: #0e8a68;
      --heading-border: #0a6a52;
      --list-bg: #3a4a3d;
      --list-hover-bg: #2d7a57;
      --contact-hover: #1da77e;
      --footer-text: #bdbdbd;
      --profile-border: #3e5c3e;
      --profile-glow: #4fa46a;
    }

    /* --------------------- DEFAULT STYLING --------------------- */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      scroll-behavior: smooth;
      transition: 0.3s;
    }

    a { text-decoration: none; transition: 0.3s; }

    header {
      background: linear-gradient(90deg, var(--header-gradient-1), var(--header-gradient-2));
      color: var(--header-text);
      padding: 50px 20px 80px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    header img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 5px solid var(--profile-border);
      margin-bottom: 20px;
      object-fit: cover;
      animation: fadeInDown 1s ease-out;
      transition: 0.3s;
    }

    header h1 {
      margin: 10px 0 5px;
      font-size: 36px;
      animation: fadeInUp 1s ease-out 0.3s;
    }

    header p {
      margin: 5px 0;
      font-size: 18px;
      animation: fadeInUp 1s ease-out 0.5s;
    }

    .socials {
      margin-top: 15px;
      animation: fadeInUp 1s ease-out 0.7s;
    }

    .socials a {
      margin: 0 10px;
      color: var(--social-text);
      font-weight: bold;
      display: inline-block;
      padding: 8px 15px;
      border: 2px solid var(--social-border);
      border-radius: 25px;
      transition: 0.3s;
    }

    .socials a:hover {
      background: var(--social-hover-bg);
      color: var(--social-hover-text);
      transform: translateY(-3px);
    }

    .container {
      max-width: 900px;
      margin: -60px auto 50px;
      background: var(--container-bg);
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 10px 30px var(--shadow-color);
      opacity: 0;
      transform: translateY(50px);
      animation: fadeInContainer 1s forwards 1s;
      transition: 0.3s;
    }

    h2 {
      color: var(--heading-color);
      margin-top: 30px;
      margin-bottom: 10px;
      border-bottom: 2px solid var(--heading-border);
      padding-bottom: 5px;
    }

    ul { list-style: none; padding: 0; }

    ul li {
      background: var(--list-bg);
      margin: 5px 0;
      padding: 10px;
      border-radius: 5px;
      transition: 0.3s;
    }

    ul li:hover {
      background: var(--list-hover-bg);
      transform: translateX(5px);
    }

    .contact-info p { margin: 5px 0; transition: 0.3s; }
    .contact-info p:hover { color: var(--contact-hover); }

    footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      color: var(--footer-text);
    }

    .profile-pic:hover {
      box-shadow: 0 0 20px 5px var(--profile-glow);
      transform: scale(1.05);
    }

    /* Theme & login buttons container */
    .top-buttons {
      position: fixed;
      top: 20px;
      right: 20px;
      display: flex;
      gap: 10px;
      z-index: 1000;
    }

    .theme-toggle, .login-toggle {
      border: none;
      padding: 10px 15px;
      border-radius: 20px;
      cursor: pointer;
      font-size: 18px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      transition: 0.3s;
    }

    .theme-toggle { background: #fff; color: #000; }
    .login-toggle { background: #4C763B; color: #fff; }

    html[data-theme="dark"] .theme-toggle { background: #2b2b2b; color: #fff; }
    html[data-theme="dark"] .login-toggle { background: #1f3c25; color: #fff; }

    @keyframes fadeInDown { 0% { opacity: 0; transform: translateY(-20px); } 100% { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInContainer { to { opacity: 1; transform: translateY(0); } }

    @media (max-width: 600px) {
      header h1 { font-size: 28px; }
      header p { font-size: 16px; }
      .container { margin: -40px 20px 20px; padding: 30px; }
    }
  </style>
</head>

<body>

  <div class="top-buttons">
    <button class="theme-toggle" onclick="toggleTheme()">🐱</button>

    @if(session()->has('logged_in'))
        <!-- Logout button appears if logged in -->
        <form method="GET" action="/logout" class="mb-0">
            <button type="submit" class="login-toggle">Login</button>
        </form>
    @else
        <!-- Login button appears if not logged in -->
        <a href="{{ url('/login') }}" class="login-toggle">Logout</a>
    @endif
</div>




  <header>
    <img src="{{ asset('image/IMG_7961.jpeg') }}" class="profile-pic">
    <h1>Jhenela Gozum</h1>
    <p>Web Developer | Creative Designer | Learner</p>

    <div class="socials">
      <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
      <a href="https://github.com" target="_blank">GitHub</a>
      <a href="mailto:jgozum23-0211@cca.edu.ph">Email</a>
    </div>
  </header>

  <div class="container">
    <h2>About Me</h2>
    <p>Hello! I am Jhenela Gozum, a passionate developer who loves creating beautiful websites and exploring the outside world. I combine creativity with problem-solving to build modern web projects.</p>

    <h2>Hobbies</h2>
    <ul>
      <li>Reading self-improvement books</li>
      <li>Painting and Drawing</li>
      <li>Cooking and Eating</li>
      <li>Traveling and exploring new cultures</li>
      <li>Playing Badminton</li>
      <li>Creating UX/Web Designs in Figma</li>
    </ul>

    <h2>Skills</h2>
    <ul>
      <li>HTML</li>
      <li>Finance</li>
      <li>PHP, Laravel</li>
      <li>Figma/Canva Design</li>
      <li>Problem-solving & teamwork</li>
    </ul>

    <h2>Contact</h2>
    <div class="contact-info">
      <p>Email: jhenela@gmail.com</p>
      <p>Phone: +63 912 345 6789</p>
      <p>Location: Philippines</p>
      <p>Where to: Angeles City, Pampanga</p>
    </div>
  </div>

  <footer>
    &copy; 2025 Jhenela Gozum. All rights reserved.
  </footer>

  <script>
  // Theme toggle
  function toggleTheme() {
    const html = document.documentElement;
    const btn = document.querySelector(".theme-toggle");
    if (html.getAttribute("data-theme") === "light") {
      html.setAttribute("data-theme", "dark");
      btn.textContent = "🐶";
    } else {
      html.setAttribute("data-theme", "light");
      btn.textContent = "🐱";
    }
  }

  // Simulated login state
  let isLoggedIn = false;
  const loginBtn = document.querySelector('.login-toggle');

  function updateLoginButton() {
    // Change button text based on login state
    loginBtn.textContent = isLoggedIn ? 'Logout' : 'Login';

    // Update the click behavior dynamically
    loginBtn.onclick = () => {
      isLoggedIn = !isLoggedIn;
      updateLoginButton();
      // alert removed
    };
  }

  // Initialize login button on page load
  updateLoginButton();

  // Fade in container on scroll
  const container = document.querySelector('.container');
  window.addEventListener('scroll', () => {
    const rect = container.getBoundingClientRect();
    if(rect.top < window.innerHeight - 50){
      container.style.animation = 'fadeInContainer 1s forwards';
    }
  });
</script>


</body>
</html>
