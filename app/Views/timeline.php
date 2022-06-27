<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Tickes SYstem</title>
	<meta name="description" content="Tickets">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<!-- STYLES -->

	<style {csp-style-nonce}>
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


<!-- The Timeline -->

<ul class="timeline">
<!-- Item 1 -->
  	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag wbg">April 2022</span>
				<span class="time-wrapper hide"><span class="time">2011 - 2013</span></span>
			</div>
			<div class="desc">WooCommerce integration, release of Point of Sale system</div>
		</div>
	</li>

  
  
	<!-- Item 2 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag wbg">March 2022</span>
				<span class="time-wrapper hide"><span class="time">2013 - present</span></span>
			</div>
			<div class="desc">WooCommerce integration, release of Point of Sale system</div>
		</div>
	</li>
  
	<!-- Item 3 Focsued -->
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag xl">May 2022 </span>
				<span class="time-wrapper hide"><span class="time">2011 - 2013</span></span>
			</div>
			<div class="desc">WooCommerce integration, release of Point of Sale system</div>
		</div>
	</li>

	<!-- Item 4 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag wbg">June 2022</span>
				<span class="time-wrapper hide"><span class="time">2008 - 2011</span></span>
			</div>
			<div class="desc">Shopify integration, Cometa Token private sale for early investors and ICO
</div>
		</div>
	</li>
 
  <li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag wbg">July</span>
				<span class="time-wrapper hide"><span class="time">2011 - 2013</span></span>
			</div>
			<div class="desc">Shopify integration, Cometa Token private sale for early investors and ICO</div>
		</div>
	</li>

  
</ul>

</body>
</html>
