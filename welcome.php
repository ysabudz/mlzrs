<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" href="/favicon.ico" type="image/x-icon">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Great+Vibes&family=Alex+Brush&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

<title>Marie's 19th Birthday Gift!</title>

<style>

/* ✨ TITLE */
h1 {
    font-family: "Great Vibes", cursive;
    font-weight: 400;
    font-size: 120px;
    text-shadow: 0 0 10px lightskyblue;
    margin: 0;
}

h2 {
    font-family: 'Poppins', sans-serif;
    letter-spacing: 2px;
    margin-top: -90px;
    text-shadow: 0 0 10px lightskyblue;
    font-weight: bold;
}

/* 🌤 BACKGROUND */
body {
  background-image: radial-gradient(circle, whitesmoke, skyblue);
  margin: 0;
  font-family: Montserrat, sans-serif;
}

/* HEADER */
.header-section {
    background-color: aliceblue;
    text-align: center;
    padding: 40px 10px;
}

/* 🌐 NAVBAR (UPDATED) */
.navbar-custom {
    background-color: deepskyblue;
    width: 100%;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;

    display: flex;
    justify-content: center;
    gap: 40px;

    font-family: Montserrat, sans-serif;
}

li {
    display: inline;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 10px 25px;
    text-decoration: none;
    font-size: 18px;
    border-radius: 8px;
    transition: 0.3s ease;
}

li a:hover {
    background-color: whitesmoke;
    color: deepskyblue;
}

.active {
    background-color: whitesmoke;
    color: deepskyblue;
}

/* 📦 CENTER CONTAINER */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

/* 💌 MESSAGE BOX */
.short-message {
    text-align: justify;
    padding: 30px;
    background-color: aliceblue;
    color: darkblue;
    width: 50%;
    border: 5px solid darkblue;
    border-radius: 20px;
    box-shadow: 0 0 100px rgba(0, 123, 255, 0.7);
    margin: 50px auto;

    transform: translateY(50px);
    opacity: 0;
    animation: slideInBottom 0.8s ease-out forwards;
}

@keyframes slideInBottom {
  from {
    transform: translateY(50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

</style>
</head>

<body>

<!-- HEADER -->
<div class="header-section">
    <p style="font-size: 80px; margin: 0;">Marie's 19th!</p>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-custom">
    <ul>
        <li><a class="active" href="homepage.html">Welcome!</a></li>
        <li><a href="cake.html">Birthday Cake</a></li>
        <li><a href="login.html">Log Out</a></li>
    </ul>
</nav>

<!-- CONTENT -->
<div class="short-message">
    <p>
        Hey, Marie :) <br><br>
        Happy happy birthday to you! I can't believe you're 19 already... <br><br>

        Disclaimer: The website is not perfect but I did my best to execute what I had in mind. This is also supposed to be for your eyes only; thus, the login page. <br><br>

        However, feel free to share the link to others! You have my consent :> <br><br>

        Loving you always (no matter how goofy you are), <br>
        Ysa <3
    </p>
</div>

</body>
</html>