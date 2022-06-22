<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Tickes SYstem</title>
	<meta name="description" content="Tickets">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

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

	</style>
</head>
<body>


<div class="box box--grid">
	<div class="box--grid__items">
		<div class="box--grid__item">
			<h3 class="box--grid__title">Quick start</h3>
			<p class="box--grid__description">Boardme is a solution that offers User Onboarding as a Service.</p>
			<span class="tag tag-primary">Get started</span>
		</div>
		
		<div class="box--grid__item">
			<h3 class="box--grid__title">Listeners</h3>
			<p class="box--grid__description">Programmatic access over your onboarding layer.</p>
			<span class="tag tag-primary">API</span>
		</div>
		
		<div class="box--grid__item">
			<h3 class="box--grid__title">Projects</h3>
			<p class="box--grid__description">project that should be loaded into your website when boardme is installed.</p>
			<span class="tag tag-primary">Application</span>
		</div>
		
		<div class="box--grid__item">
			<h3 class="box--grid__title">Install</h3>
			<p class="box--grid__description">This article helps you install boardme into your website or application.</p>
			<span class="tag tag-primary">Get started</span>
		</div>
	</div>
</body>
</html>
