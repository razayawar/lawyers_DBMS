<?php
session_start();
if(!isset($_SESSION['customer_id'])){
    ?>
    <script>
        window.location.assign('login.php')
    </script>
    <?php
}else{
    ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/atorni/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 14:37:33 GMT -->
<head>
<title>Atorni - Free Bootstrap 5 Template by Colorlib</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/tiny-slider.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script nonce="a0548216-12c4-4def-a18f-8b0b00d00249">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="pt-3 pb-5 top-wrap">
<div class="container-xl">
<div class="row d-flex align-items-end">
<div class="col-md-2 d-flex mb-2 mb-md-0 order-md-2">
<a class="navbar-brand align-items-center m-md-auto" href="index.php">
<span class="flaticon flaticon-law"></span>
<span class="">Atorni <small>Lawfirm Agency</small></span>
</a>
</div>
<div class="col-md topper d-flex mb-md-0 mb-2 align-items-center order-md-1">
<div class="icon d-flex justify-content-center align-items-center order-md-last">
<span class="fa fa-map"></span>
</div>
<div class="pr-md-4 pr-0 text pl-3 pl-md-0 text-md-right">
<p class="con"><span>Free Call</span> <span>+1 234 456 78910</span></p>
<p class="con">Call Us Now 24/7 Customer Support</p>
</div>
</div>
<div class="col-md topper d-flex mb-md-0 align-items-center order-md-3">
<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
</div>
<div class="text pl-3 pl-md-3">
<p class="hr"><span>Our Location</span></p>
<p class="con">198 West 21th Street, Suite 721 New York NY 10016</p>
</div>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg  ftco-navbar-light">
<div class="container-xl">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto mb-2 mb-lg-0">
<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
<li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
<li class="nav-item"><a class="nav-link" href="atty.php">Our Lawyers</a></li>
<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
<li class="nav-item"><a class="nav-link" href="lawyer_regis.php">Lawyers registration</a></li>
<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
<li style="padding-left: 200px;" class="nav-item"><a class="nav-link active"  href="#"><?php echo($_SESSION['name'])   ?></i></a></li>
</ul>
</div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 pt-5 text-center">
<p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-0 bread">About Us</h1>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-about bg-light">

<div class="container-xl">
<div class="row justify-content-center">
<div class="col-md-5 heading-section text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
<span class="subheading">About Us</span>
<h2 class="mb-4">Who We Are</h2>
</div>
<div class="col-md-8 text-center mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
<p>Let’s be clear here. We’re a law firm. But we’re not just any law firm. We do law for small business. 
We’re all about helping small businesses navigate and avoid difficult problems. 
Our focus is also on helping new entrepreneurs get new businesses off the ground and assisting existing businesses
 in remaining safe and protected as they grow. We work through the hard stuff in small business so you can get back 
to doing business you love.
</p>
</div>
<div class="col-md-10">
<div class="video-image img d-flex align-items-center justify-content-center rounded" style="background-image: url(images/about.jpg);" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
<a href="#" class="icon d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></a>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-appointment ftco-section img" style="background-image: url(images/bg_4.jpg);">
<div class="overlay"></div>
<div class="container-xl">
<div class="row">
<div class="col-md-6 d-flex align-items-center order-lg-last pl-lg-5">
<div class="heading-section heading-section-white" data-aos="fade-up">
<span class="subheading">Our Performance</span>
<h2 class="mb-3">We Have Great Results</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<div class="row mt-md-5">
<div class="col-lg-12">
<div class="services d-flex w-100">
<div class="icon icon-2 d-flex align-items-center justify-content-center">
<span class="flaticon-law"></span>
</div>
<div class="text pl-3">
	<h2>Impressive Team</h2>
<p>Law consists of a multidisciplinary group of licensed attorneys, certified paralegals, 
and well-trained legal assistants. All of whom are experienced, seasoned, high-tech and 
dedicated to business issues.</p>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="services d-flex w-100">
<div class="icon icon-2 d-flex align-items-center justify-content-center">
<span class="flaticon-law"></span>
</div>
<div class="text pl-3">
<h2>Very Best Formation Documents</h2>
<p>The Operating Agreement is critical to your long-term success. Access to our expert 
system to build a high-quality, highly customized Operating Agreement.</p>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="services d-flex w-100">
<div class="icon icon-2 d-flex align-items-center justify-content-center">
<span class="flaticon-law"></span>
</div>
<div class="text pl-3">
<h2>Full Service Capabilities</h2>
<p>We are a full-service law firm, which means we hope to be your
 partner for the long-term. We’re here when you start, available as needed,
 and when things get tough. We can also refer you to other professionals.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 d-flex align-items-center">
<form action="#" class="appointment" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
<span class="subheading">Drop A Message</span>
<h2 class="mb-4 appointment-head">Free Case Evaluation</h2>
<div class="row">
<div class="col-md-12 col-lg-6">
<div class="form-group">
<label for="name">Your Full Name</label>
<input type="text" class="form-control" placeholder="Your Full Name">
</div>
</div>
<div class="col-md-12 col-lg-6">
<div class="form-group">
<label for="email">Email Address</label>
<input type="text" class="form-control" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="subject">Select Subject</label>
<div class="form-field">
<div class="select-wrap">
<div class="icon"><span class="fa fa-chevron-down"></span></div>
<select name="" id="" class="form-control">
<option value="">Practice Areas</option>
<option value="">Business Law</option>
<option value="">Criminal Law</option>
<option value="">Family Law</option>
<option value="">Judicial Law</option>
<option value="">Personal Injury</option>
<option value="">Real Estate Law</option>
</select>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="name">Message</label>
<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
</div>
</div>
<div class="col-md-12">
<input type="submit" value="Send message" class="btn btn-primary py-3 px-4 rounded">
</div>
</div>
</form>
</div>
</div>
</div>
</section>
<section class="ftco-section testimony-section bg-light">
<div class="container-xl">
<div class="row justify-content-center pb-4">
<div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
<span class="subheading">Testimonial</span>
<h2 class="mb-3">Happy Clients</h2>
</div>
</div>
<div class="row">
<div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
<div class="carousel-testimony">
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">I am grateful that I found them, their process was fast and excellent which helped me
 get the relief that I needed. Their team was very responsive, professional, experienced.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="pl-3 tx">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">This was a divorce case, which at first made me think to go with a more traditional way of finding a
 lawyer which, and thought that the better way was to go with a more personal firm.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="pl-3 tx">
<p class="name">Lily O'Neill</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">I don’t understand why not all the law firms do business this way! Having the care that is given to my 
case by my case manager made all the difference and made me feel secure with the firm.

</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
<div class="pl-3 tx">
<p class="name">Elizabeth Jones
</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">I am grateful that I found them, their process was fast and excellent which helped me
 get the relief that I needed. Their team was very responsive, professional, experienced.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="pl-3 tx">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
<div class="text">
<p class="mb-4 msg">I don’t understand why not all the law firms do business this way! Having the care that is given to my 
case by my case manager made all the difference and made me feel secure with the firm.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="pl-3 tx">
<p class="name">Lily O'Neill</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-intro img" style="background-image: url(images/bg_4.jpg);">
<div class="overlay"></div>
<div class="container-xl">
<div class="row justify-content-center">
<div class="col-md-12 heading-section heading-section-white text-center">
<h2 class="mb-4">Need Legal Advicer?</h2>
<p class="mb-0"><a href="#" class="btn btn-black">0-1230-456-7890</a> <a href="#" class="btn btn-white"><span class="__cf_email__" data-cfemail="156c7a60677078747c79557078747c793b767a78">[email&#160;protected]</span></a></p>
</div>
</div>
</div>
</section>
<footer class="ftco-footer">
<div class="container-xl">
<div class="row mb-5 pb-5 justify-content-between">
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2 logo d-flex">
<a class="navbar-brand align-items-center" href="index-2.html">
<span class="flaticon flaticon-law"></span>
<span class="">Atorni <small>Lawfirm Agency</small></span>
</a>
</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<ul class="ftco-footer-social list-unstyled mt-2">
<li><a href="#"><span class="fa fa-twitter"></span></a></li>
<li><a href="#"><span class="fa fa-facebook"></span></a></li>
<li><a href="#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Recent Posts</h2>
<div class="block-21 mb-4 d-flex">
<a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
<div class="text">
<h3 class="heading"><a href="#">Main practice areas of the firm include admiralty</a></h3>
<div class="meta">
<div><a href="#"><span class="fa fa-calendar"></span> Oct. 18, 2020</a></div>
<div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
<div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
</div>
</div>
</div>
<div class="block-21 mb-4 d-flex">
<a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
<div class="text">
<h3 class="heading"><a href="#">Main practice areas of the firm include admiralty</a></h3>
<div class="meta">
<div><a href="#"><span class="fa fa-calendar"></span> Oct. 18, 2020</a></div>
<div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
<div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Explore</h2>
<ul class="list-unstyled">
<li><a href="index.php"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
<li><a href="about.php"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
<li><a href="atty.php"><span class="fa fa-chevron-right mr-2"></span>Our Lawyers</a></li>
<li><a href="contact.php"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
<li><a href="lawyer_regis.php"><span class="fa fa-chevron-right mr-2"></span>Lawyers regisration</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
<li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><span class="__cf_email__" data-cfemail="127b7c747d526b7d6760767d7f737b7c3c717d7f">[email&#160;protected]</span></span></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid px-0 py-5 bg-black">
<div class="container-xl">
<div class="row">
<div class="col-md-12 text-center">
<p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a></p>
</div>
</div>
</div>
</div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/aos.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
							window.dataLayer = window.dataLayer || [];
							function gtag(){dataLayer.push(arguments);}
							gtag('js', new Date());

							gtag('config', 'UA-23581568-13');
						</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"798e4c8a2d131904","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/atorni/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 14:37:34 GMT -->
</html>
<?php
}
?>