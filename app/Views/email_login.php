<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Tickes SYstem</title>
	<meta name="description" content="Tickets">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/global.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
</head>
<body>

<section class="loader-section" style="display: none;">
        <div class="loader">
            <span style="--i: 6"></span>
            <span style="--i: 7"></span>
            <span style="--i: 8"></span>
            <span style="--i: 9"></span>
            <span style="--i: 10"></span>
            <span style="--i: 11"></span>
            <span style="--i: 12"></span>
            <span style="--i: 13"></span>
            <span style="--i: 14"></span>
            <span style="--i: 15"></span>
            <span style="--i: 16"></span>
            <span style="--i: 17"></span>
            <span style="--i: 18"></span>
            <span style="--i: 19"></span>
            <span style="--i: 20"></span>
        </div>
    </section>
<div class="container">
  <main class="signup-container">
    <h1 class="heading-primary">Log in<span class="span-blue">.</span></h1>
    <p class="text-mute">Enter your email to view your tickets.</p>
    <div class="login-wrapper">
    </div>

    <form class="signup-form">
      <label class="inp">
        <input type="email" id="email" name="email" class="input-text" placeholder="&nbsp;">
        <span class="label">Email</span>
        <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
      </label>
      <button type="button"class="btn btn-login">Check tikects</button>
    </form>
    <p class="text-mute"> You still don't have tickets generated?  <h4 style="color: #2196f3;">Submit a request to <label>tickectci4@gmail.com</label> and start tracking</4></p>
  </main>
  <div class="welcome-container">
    <img src="/assets/img/login.png" alt="Login">
  </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo base_url('assets/js/generic.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/login.js'); ?>"></script>
</html>
