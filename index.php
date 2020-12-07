<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Pro Scientist</title>
		<style>
			* {
    font-family: Sofia Pro;
    font-weight: 300;

}

body, ul, li {
    margin: 0;
    padding: 0;

}

p, li, h1, h2, h3, h4 {
    color: darkslategray;

}

body {
    background-color: azure;
}


.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.wrapper{
    width: 96%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2%;

}

header {
    background-color: black;
    padding: 10px 0px;
}

.logo{
	margin: 0;
    background: url(logo.png);
    background-size: 70px 70px;
    float: left;
    width: 70px;
    height: 70px;
}

header nav{
	float: right;
}

header:after {
    content: "";
    clear: both;
    display: block;
}

header nav li {
    list-style-type: none;
    float: left;
    margin-left: 20px;
    margin-top: 20px;
}

header nav li a {
	display: inline-block;
    text-decoration: none;
    color: white;
    font-size: 25px;
    text-transform: uppercase;

}

.nav-links a:hover{
    color: red;
}

.burger{
	display: none;
	cursor: pointer;
}

.burger div{
	width: 25px;
	height: 3px;
	background-color: rgb(226, 226, 226);
	margin: 5px;
}

.welcome{
    height: 100vh;
    background: url(bg.jpg);
    background-size: cover;
    background-blend-mode: darken;
}

h1{
    margin: 0;
    color: black;
    text-align: center;
    padding-top: 100px;
    font-size: 50px;
}

.small{
    text-align: center;
    font-size: 35px;
    color: black;
}

.base{
    display: flex;
}

.img{
    padding-top: 100px;
}

.small2{
    font-size: 20px;
    margin-left: 20px;

}

.big{
    font-size: 30px;
    margin-left: 20px;
}

.base2{
    display: flex;
    flex-direction: row-reverse;
}


		</style>
	</head>
	<body>
		<div class="topnav" id="myTopnav">
  			<a href="index.php" class="active">Home</a>
			<a href="blog.html">Blog</a>
			<a href="#">About</a>
			<a href="login.php">login</a>
			<a href="register.php">Register</a>
			<a href="dashboard.php">Dashboard</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
			<p href="#" style="float: right; color: white; font-family: fantasy; padding-right: 10px; font-size: 20px;">Pro Scientist</p>
		</div>

		<section class="welcome">
			<h1>Welcome to Pro Scientist!!</h1>
			<p class="small">Free information with best of videos and explanation with sourse code.</p>
		</section>

		<section class="base">
			<div class="para">
				<p class="big">Why is coding important??</p>
				<p class="small2">Code powers our digital world. Every website, smartphone app, computer programme, calculator and even microwave relies on code in order to operate. This makes coders the architects and builders of the digital age.Over the next 10 years it is estimated that there will be 1.4 million jobs in computer sciences and only around 400,000 graduates qualified to do them.Jobs not directly linked to computer sciences – such as banking, medicine and journalism – will also be affected by the need for at least an understanding of programming and coding. Linda Liukas, co-founder of coding workshop programme Rail Girls, believes that coding is “the literacy of the 21st century” and the need for people to speak the ABC of programming is imminent.“Our world is increasingly run by software and we need more diversity in the people who are building it. More importantly, writing software is about expression, creativity – and practical application,” Liukas told IBTimes UK.“Our kids should learn to bend, join, break and combine code in a way it wasn’t designed to. It’s a whole generation of kids that will use code like our generation used words.”</p>
			</div>
			<div class="img">
				<img src="https://source.unsplash.com/150x150/?coding,website">
			</div>
		</section>

		<section class="base2">
			<div class="para">
				<p class="big">Why should you have a website??</p>
				<p class="small2">The importance of a website for marketing extends to every aspect of your digital marketing strategy. As the backbone of your online presence, every type of communication, piece of content, or advertisement that you put online will drive the consumer back to your website. As such, it’s important that your website gives consumers a clear idea of what your brand is about and what types of products or services you offer.Let’s start with your social media marketing. Though you use third-party social media sites to reach and engage with consumers, you have to have a place to send consumers to when they want to learn more about your business.The importance of a website for content marketing is also significant. Your content needs a place to live. Whether it’s blog posts or product descriptions, you need a place to display that information so that prospective customers can find it. Your website is the perfect place to house all of the great content your business creates to inform and engage your target audience – just like the blog post you’re reading right now that’s providing you with more information.</p>
			</div>
			<div class="img">
				<img src="https://source.unsplash.com/150x150/?web,website">
			</div>
		</section>

		<section class="base">
			<div class="para">
				<p class="big">Why is Education important??</p>
				<p class="small2">Education is not just to read and write but to make use of it for their own advantages and to utilize the knowledge for their growth.Also one can lead their own life without depending on others. It is not about making people literate, as literacy is entirely different from education.Literacy is meant as the ability to read and write, whereas education is finding out the reason behind everything and using the reading-writing skills to improve their lives. It helps the countries to grow economically and cherish with prosperity.To live a flawless life, education is very important for every individual. Lets discuss what is education and the importance of education.</p>
			</div>
			<div class="img">
				<img src="https://source.unsplash.com/150x150/?achool,study">
			</div>
		</section>
		<section class="info">
			<h2>If you want the premium content like the videos and the source code, then <a href="register.php">Click here</a> To sign up to our website.</h2>
			<div class="products"></div>
		</section>



		<script>
			function myFunction() {
			  var x = document.getElementById("myTopnav");
			  if (x.className === "topnav") {
			    x.className += " responsive";
			  } else {
			    x.className = "topnav";
			  }
			}
		</script>
	</body>
</html>