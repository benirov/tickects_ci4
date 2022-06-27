<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Tickes SYstem</title>
	<meta name="description" content="Tickets">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- STYLES -->

	<style {csp-style-nonce}>
	* {
  box-sizing: border-box;
}

html,
body {
  margin: 0;
  padding: 20px 0;
  font-family: "IBM Plex Sans", sans-serif;
  font-weight: 400;
  color: #1A183E;
  line-height: 1;
  background-color: #F0F0F4;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
  -webkit-tap-highlight-color: transparent;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
@media (max-width: 870px) {
  html,
body {
    padding: 0;
  }
}

h1,
h2,
h3,
p {
  margin: 0;
  padding: 0;
}

h1,
h2,
h3 {
  font-weight: 500;
}

.button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}


.tag {
  display: inline-block;
}
.tag-primary {
  padding: 5px 20px;
  color: #2A46CC;
  font-size: 14px;
  background-color: #F0F0F4;
  border-radius: 20px;
}

.box--list {
  padding: 60px 70px 100px;
  max-width: 635px;
  margin-bottom: 60px;
}
@media (max-width: 870px) {
  .box--list {
    margin-bottom: 0;
    padding-bottom: 0;
  }
}
.box--list__header {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
}
.box--list__header-title {
  font-size: 16px;
  line-height: 20px;
}
.box--list__header-link {
  color: #2A46CC;
  font-size: 16px;
  font-weight: 500;
  text-decoration: none;
}
.box--list__header-link svg {
  position: relative;
  top: -1px;
  margin-left: 5px;
}
.box--list__item {
  padding-top: 30px;
  margin-top: 30px;
  border-top: 1px solid #F0F0F4;
}
.box--list__item:first-child {
  border-top-width: 0;
}
.box--list__title {
  margin-bottom: 12px;
  font-size: 18px;
  color: #2A46CC;
}
.box--list__description {
  font-size: 16px;
  line-height: 26px;
}

.box--grid {
  padding: 60px;
  padding-right: 70px;
  max-width: 70%;
  box-shadow: 0 25px 60px #e6e5f5;
}
.box--grid__items {
  display: flex;
  flex-wrap: wrap;
  margin-right: -35px;
}
.box--grid__item {
  width: calc(50% - 35px);
  padding: 30px;
  margin-bottom: 35px;
  border: 1px solid #F0F0F4;
  border-radius: 5px;
  background-color: #fff;
  transition: background-color 250ms;
}
.box--grid__item:nth-child(2n) {
  margin-left: 35px;
}
.box--grid__item:hover {
  color: #fff;
  background-color: #2A46CC;
  transition: background-color 250ms;
}
.box--grid__title {
  margin-bottom: 14px;
  font-size: 18px;
  font-weight: 500;
}
.box--grid__description {
  margin-bottom: 30px;
  font-size: 16px;
  line-height: 26px;
}
.box--grid__button {
  margin-top: -5px;
  text-align: right;
}
@media (max-width: 767px) {
  .box--grid__items {
    border-radius: 0;
    flex-direction: column;
    margin-right: 0;
  }
  .box--grid__item {
    width: 100%;
  }
  .box--grid__item:nth-child(2n) {
    margin-left: 0;
  }
  .box--grid__button {
    text-align: center;
  }
}

.box {
  background-color: #fff;
  border-radius: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (max-width: 870px) {
  .box {
    border-radius: 0;
    max-width: 100%;
    box-shadow: none;
  }
}

.modal-window {
  position: fixed;
  background-color: rgba(255, 255, 255, 0.25);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
}
.modal-window:target {
  visibility: visible;
  opacity: 1;
  pointer-events: auto;
}
.modal-window > div {
  width: 400px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 2em;
  background: white;
}
.modal-window header {
  font-weight: bold;
}
.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}

.modal-close {
  color: #aaa;
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}
.modal-close:hover {
  color: black;
}

.modal-window > div {
  border-radius: 1rem;
}

.modal-window div:not(:last-of-type) {
  margin-bottom: 15px;
}

.timeline {
  position: relative;
  width: 660px;
  margin: 0 auto;
  margin-top: 20px;
  padding: 1em 0;
  list-style-type: none;
}

.timeline:before {
  position: absolute;
  left: 50%;
  top: 0;
  content: ' ';
  display: block;
  width: 6px;
  height: 100%;
  margin-left: -3px;
  background: #009DDD;
  background: -moz-linear-gradient(top, rgb(0,157,221,0) 0%, rgb(0,157,221) 8%, rgb(0,157,221) 92%, rgb(0,157,221,0) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
  background: -webkit-linear-gradient(top, rgb(0,157,221,0) 0%, rgb(0,157,221) 8%, rgb(0,157,221) 92%, rgb(0,157,221,0) 100%);
  background: -o-linear-gradient(top, rgb(0,157,221,0) 0%, rgb(0,157,221) 8%, rgb(0,157,221) 92%, rgb(0,157,221,0) 100%);
  background: -ms-linear-gradient(top, rgb(0,157,221,0) 0%, rgb(0,157,221) 8%, rgb(0,157,221) 92%, rgb(0,157,221,0) 100%);
  background: linear-gradient(to bottom, rgb(0,157,221,0) 0%, rgb(0,157,221) 8%, rgb(0,157,221) 92%, rgb(0,157,221,0) 100%);
  
  z-index: 5;
}

.timeline li {
  padding: 1em 0;
}

.timeline li:after {
  content: "";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

.direction-l {
  position: relative;
  width: 300px;
  float: left;
  text-align: right;
}

.direction-r {
  position: relative;
  width: 300px;
  float: right;
}

.flag-wrapper {
  position: relative;
  display: inline-block;
  
  text-align: center;
}

.flag {
  position: relative;
  display: inline;
  background: #fff;
  padding: 6px 10px;
  border-radius: 5px;
  
  font-size: 24px;
  font-weight: 700;
  text-align: left;
}

.direction-l .flag {
  -webkit-box-shadow: -1px 2px 3px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: -1px 2px 3px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: -1px 2px 3px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-r .flag {
  -webkit-box-shadow: 1px 2px 3px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: 1px 2px 3px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: 1px 2px 3px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-l .flag:before,
.direction-r .flag:before {
  position: absolute;
  top: 50%;
  right: -40px;
  content: ' ';
  display: block;
  width: 12px;
  height: 12px;
  margin-top: -10px;
  background: #F4F5F5;
  border-radius: 10px;
  border: 4px solid #009DDD;
  z-index: 10;
}

.direction-l .flag.xl:before {
  position: absolute;
  top: 50%;
  right: -47.5px;
  content: ' ';
  display: block;
  width: 25px;
  height: 25px;
  margin-top: -15px;
  background: #F4F5F5;
  border-radius: 20px;
  border: 5px solid #009DDD;
  z-index: 10;
}

.direction-r .flag:before {
  left: -40px;
}

.direction-l .flag:after {
  content: "";
  position: absolute;
  left: 100%;
  top: 50%;
  height: 0;
  width: 0;
  margin-top: -8px;
  border: solid transparent;
  border-left-color: rgb(248,248,248);
  border-width: 8px;
  pointer-events: none;
}

.direction-r .flag:after {
  content: "";
  position: absolute;
  right: 100%;
  top: 50%;
  height: 0;
  width: 0;
  margin-top: -8px;
  border: solid transparent;
  border-right-color: rgb(248,248,248);
  border-width: 8px;
  pointer-events: none;
}

.flag.wbg {
  background: transparent;
  border: none;
  box-shadow: none;
}


.time-wrapper {
  display: inline;
  
  line-height: 1em;
  font-size: 0.66666em;
  color: rgb(250,80,80);
  vertical-align: middle;
}

.direction-l .time-wrapper {
  float: left;
}

.direction-r .time-wrapper {
  float: right;
}

.time {
  display: inline-block;
  padding: 4px 6px;
  background: rgb(248,248,248);
}

.desc {
  margin: 1em 0.75em 0 0;
  
  font-size: 16px;
  line-height: 1.5em;
}

.direction-r .desc {
  margin: 1em 0 0 0.75em;
}

/* ================ Timeline Media Queries ================ */

@media screen and (max-width: 660px) {

.timeline {
 	width: 100%;
	padding: 4em 0 1em 0;
}

.timeline li {
	padding: 2em 0;
}

.direction-l,
.direction-r {
	float: none;
	width: 100%;

	text-align: center;
}

.flag-wrapper {
	text-align: center;
}

.flag {
	background: rgb(255,255,255);
	z-index: 15;
}

.direction-l .flag:before,
.direction-r .flag:before {
  position: absolute;
  top: -30px;
	left: 50%;
	content: ' ';
	display: block;
	width: 12px;
	height: 12px;
	margin-left: -9px;
	background: #fff;
	border-radius: 10px;
	border: 4px solid #009DDD;
	z-index: 10;
}

 .direction-l .flag.xl:before {
    left: calc(50% - 7.5px);
    top: -35px;
  }
  
.direction-l .flag:after,
.direction-r .flag:after {
	content: "";
	position: absolute;
	left: 50%;
	top: -8px;
	height: 0;
	width: 0;
	margin-left: -8px;
	border: solid transparent;
	border-bottom-color: rgb(255,255,255);
	border-width: 8px;
	pointer-events: none;
}

.time-wrapper {
	display: block;
	position: relative;
	margin: 4px 0 0 0;
	z-index: 14;
}

.direction-l .time-wrapper {
	float: none;
}

.direction-r .time-wrapper {
	float: none;
}
  
 .flag.wbg {
  background: #fff;
  -webkit-box-shadow: -1px 2px 3px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: -1px 2px 3px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: -1px 2px 3px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}


.desc {
	position: relative;
	margin: 1em 0 0 0;
	padding: 1em;
	background: rgb(245,245,245);
	-webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
	-moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
	box-shadow: 0 0 1px rgba(0,0,0,0.20);
	
  z-index: 15;
}

.direction-l .desc,
.direction-r .desc {
	position: relative;
	margin: 1em 1em 0 1em;
	padding: 1em;
	
  z-index: 15;
}

}

.hide {
  display: none !important;
}

@media screen and (min-width: 400px ?? max-width: 660px) {

.direction-l .desc,
.direction-r .desc {
	margin: 1em 4em 0 4em;
}

}

	</style>
</head>
<body>


<div class="box box--grid">
  <label for="">Login With Email: <?php echo get_cookie("email");?></label>
  <br>
  <br>
  <br>
	<div class="box--grid__items">

  <?php
    if(count($tickets) > 0){

      foreach ($tickets as $key => $value) {
        ?>
          <div class="box--grid__item">
            <h3 class="box--grid__title"><?php echo $value["title"];?></h3>
            <p class="box--grid__description"><?php echo $value["description"];?></p>
            <span class="tag tag-primary">Status: <?php echo $value["nombre_status"];?></span>
            <a href="#open-modal" onclick="getDetailTickect(<?php echo $value['id'];?>)" class="tag tag-primary" style="cursor: pointer;"><i class="fa-solid fa-info" title="info"></i></a>
          </div>
        <?php
      }
      ?>
      <?php

    }else{
      ?><h3 class="box--grid__title">Don't have tickets</h3><?php
    }
  ?>
	</div>

  <div id="open-modal" class="modal-window" style="overflow: auto;">
    <div style="width: auto;color: white;background-color: #81b6ed;">
      <a href="#" title="Close" class="modal-close" style="color: white;">Close</a>
      <h1>History</h1>
      <br>
      <div  class="history-content">

      </div>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo base_url('assets/js/generic.js'); ?>"></script>
</html>
