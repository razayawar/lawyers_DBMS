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
<?php
include('config.php');
$select = "SELECT * FROM `lawyers`";
$result = $conn->query($select);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/atorni/atty.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 14:37:34 GMT -->

<head>
  <title>Atorni - Free Bootstrap 5 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/esi.css">
  <link rel="stylesheet" href="css/tiny-slider.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script
    nonce="6eb59a12-9bc9-4d44-afba-8f6648c5c51b">(function (w, d) { !function (f, g, h, i) { f[h] = f[h] || {}; f[h].executed = []; f.zaraz = { deferred: [], listeners: [] }; f.zaraz.q = []; f.zaraz._f = function (j) { return function () { var k = Array.prototype.slice.call(arguments); f.zaraz.q.push({ m: j, a: k }) } }; for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l); f.zaraz.init = () => { var m = g.getElementsByTagName(i)[0], n = g.createElement(i), o = g.getElementsByTagName("title")[0]; o && (f[h].t = g.getElementsByTagName("title")[0].text); f[h].x = Math.random(); f[h].w = f.screen.width; f[h].h = f.screen.height; f[h].j = f.innerHeight; f[h].e = f.innerWidth; f[h].l = f.location.href; f[h].r = g.referrer; f[h].k = f.screen.colorDepth; f[h].n = g.characterSet; f[h].o = (new Date).getTimezoneOffset(); if (f.dataLayer) for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({ ...t[1], ...u[1] }))))) zaraz.set(s[0], s[1], { scope: "page" }); f[h].q = []; for (; f.zaraz.q.length;) { const v = f.zaraz.q.shift(); f[h].q.push(v) } n.defer = !0; for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith("_zaraz_"))).forEach((x => { try { f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x)) } catch { f[h]["z_" + x.slice(7)] = w.getItem(x) } })); n.referrerPolicy = "origin"; n.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h]))); m.parentNode.insertBefore(n, m) };["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>



</head>


<!-- Mirrored from preview.colorlib.com/theme/atorni/atty.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 14:37:44 GMT -->

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
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

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link active" href="atty.php">Our Lawyers</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="lawyer_regis.php">Lawyers registration</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
          <li style="padding-left: 200px;" class="nav-item"><a class="nav-link active" href="#">
              <?php echo($_SESSION['name'])   ?></i>
            </a></li>
        </ul>
      </div>
  </nav>
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 pt-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                  class="fa fa-chevron-right"></i></a></span> <span>Attorney <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">Attorneys</h1>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container-xl">
      <div class="container">
        <form action="find.php" method="post">
            <div class="form-group">
              <label for=""></label>
              <input type="text" name="name" class="form-control" placeholder="Search Lawyers By Location">
              
              <input type="submit" name="submit" value="Fetch Record" class="btn btn-primary px-2 py-1">
            </div>
        </form>
        <br>
        <br>
      </div>
        <div class="container mytable">

          <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th style="width: 250px;">S.No</th>
                <th style="width: 250px;">Image</th>
                <th style="width: 250px;">Name</th>
                <th style="width: 250px;">Service</th>
                <th style="width: 250px;">location</th>
                <th style="width: 250px;">Appoinment</th>
                

              </tr>
            </thead>

            <tbody>
              <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      ?>
              <tr>
                <td style="text-align: center;">
                  <?php echo($row['id']);?>
                </td>
                <td style="text-align: center;">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo($row['img']); ?>" alt="user-image" style="width: 45px; height: 45px"
                      class="rounded-circle" />
                  </div>
                </td>
                <td style="text-align: center;">
                  <p class="fw-normal mb-1">
                    <?php echo($row['name']);?>
                  </p>
                </td>
                <td style="text-align: center;">
                  <p class="fw-normal mb-1">
                    <?php echo($row['services']);?>
                  </p>
                </td>
                <td style="text-align: center;">
                  <p class="fw-normal mb-1">
                    <?php echo($row['address']);?>
                  </p>
                </td>
                <td style="text-align: center;">
                  <a href="appointment.php" class="btn btn-primary px-5 py-3">
                    Book Now
                  </a>
                </td>
              </tr>

              <?php
    }}

  ?>


            </tbody>



          </table>
        </div>
</body>
</section>


<section class="ftco-intro img" style="background-image: url(images/bg_4.jpg);">
  <div class="overlay"></div>
  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-md-12 heading-section heading-section-white text-center">
        <h2 class="mb-4">Need Legal Advicer?</h2>
        <p class="mb-0"><a href="#" class="btn btn-black">0-1230-456-7890</a> <a href="#"
            class="btn btn-white">youremail@email.com</a></p>
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
            <a class="navbar-brand align-items-center" href="index.html">
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
              <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San
                  Francisco, California, USA</span></li>
              <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a>
              </li>
              <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span
                    class="text">info@yourdomain.com</span></a></li>
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
          <p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright ©
            <script>document.write(new Date().getFullYear());</script>2023 All rights reserved | This template is
            made
            with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
              target="_blank" rel="nofollow noopener">Colorlib</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/script.js"></script>
<script src="js/aos.js"></script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer=""
  src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
  integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
  data-cf-beacon="{&quot;rayId&quot;:&quot;79e91ab5becade47&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.2.0&quot;,&quot;si&quot;:100}"
  crossorigin="anonymous"></script>

</body>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</html>
<?php
}
?>