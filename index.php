<!DOCTYPE html>
<!--
Template Name: Besloor
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>SAMSAT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<style>*{border:1px red solid !important}</style>
<?php session_start();	?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('img/bgsamsat.jpeg');"> 
  <!-- <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <div class="fl_left"> 
        <ul class="nospace">
          <li><i class="fas fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="far fa-envelope"></i> info@domain.com</li>
        </ul>
      </div>
      <div class="fl_right"> 
        <ul class="nospace">
          <li><a href="index.html"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Help Centre"><i class="fas fa-life-ring"></i></a></li>
          <li><a href="login.php" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
        </ul>
      </div>
    </div> -->
  <!-- </div> --> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">UPTD PPRD WILAYAH PASER</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Dashboard</a></li>
          <li><a class="drop" href="#">Slider</a>
            <ul>
              <li><a href="profil/profil.php">Sejarah</a></li>
              <li><a href="profil/visimisi.php">Visi Misi</a></li>
              <li><a href="profil/strukturorg.php">Struktur Organisasi</a></li>
              <!-- <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
              <li><a href="pages/font-icons.html">Font Icons</a></li> -->
            </ul>
          </li>
          <li><a class="active" href="#">Berita</a>
            <!-- <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul> -->
          </li>
          <li><a href="../samsat/info/info.php">Pengumuman</a></li>
          <li class="active"><a href="#">Agenda</a></li>
          <li class="active"><a href="#">Persyaratan Wajib Pajak</a></li>
          <li class="active"><a href="#">Pengarsipan data wajib Pajak</a></li>
          <li class="active"><a href="#">Dokumen</a></li>
          <li class="active"><a href="#">Galeri</a></li>
          <li class="active"><a href="#"></a>Laporan</li>
          <!-- <li><a href="#">Blog</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li> -->
          <?php
          if (isset($_SESSION["username"])) { 
            echo "<li><a href='logout.php'>Admin</a></li>";
          }
          else {
            echo "<li><a href='login.php'>Login</a></li>";
          }
            ?>
         
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="center">
      <h3 class="heading underline">SAMSAT</h3>
      <p>Sistem Administrasi Manunggal Satu Atap, atau dalam Bahasa Inggris One-stop Administration Services Office, adalah suatu sistem administrasi yang dibentuk untuk memperlancar dan mempercepat pelayanan kepentingan masyarakat yang kegiatannya diselenggarakan dalam satu gedung.</p>
      <footer><a class="btn" href="#">Masuk Ke Website</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">Jenis Pelayanan Samsat</h6>
    </div>
    <ul class="nospace group overview btmspace-80">
      <li class="one_fifth">
        <article><a href="#"><i class="fas fa-eraser"></i></a>
          <h6 class="heading"><a href="#">Samsat Payment Point</a></h6>
          <p>Samsat yang melayani pembayaran Pajak Kendaraan Bermotor (PKB) dan pengesahan STNK 1 tahun yang berada dekat dengan lokasi / tempat tinggal Wajib Pajak.&hellip;</p>
          <footer><a href="#">View Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_fifth">
        <article><a href="#"><i class="fas fa-cut"></i></a>
          <h6 class="heading"><a href="#">Samsat Online</a></h6>
          <p>layanan jaringan elektronik yang diselenggarakan Tim Pembina Samsat Nasional berdasarkan peraturan perundang-undangan Republik Indonesia untuk pembayaran dan pengesahan tahunan secara online Pajak Kendaraan Bermotor, SWDKLLJ (Sumbangan Wajib Dana Kecelakaan Lalu Lintas Jalan), dan PNBP Pengesahan STNK (Surat Tanda Nomor Kendaraan) yang dapat dilakukan secara Nasional melalui aplikasi layanan mobile. &hellip;</p>
          <footer><a href="#">View Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_fifth">
        <article><a href="#"><i class="fas fa-rocket"></i></a>
          <h6 class="heading"><a href="#">Samling</a></h6>
          <p>inovasi layanan pemungutan pajak kendaraan bermotor dengan cara menjemput ke desa yang selama ini jauh atau tidak terjangkau dari Kantor Samsat induk dan Samsat Keliling.&hellip;</p>
          <footer><a href="#">View Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_fifth">
        <article><a href="#"><i class="fas fa-rocket"></i></a>
          <h6 class="heading"><a href="#">Samsat Pembantu Paten</a></h6>
          <p>inovasi layanan pemungutan pajak kendaraan bermotor dengan cara menjemput ke desa yang selama ini jauh atau tidak terjangkau dari Kantor Samsat induk dan Samsat Keliling.&hellip;</p>
          <footer><a href="#">View Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_fifth">
        <article><a href="#"><i class="fas fa-rocket"></i></a>
          <h6 class="heading"><a href="#">Samsat Penuh Longikis</a></h6>
          <p>inovasi layanan pemungutan pajak kendaraan bermotor dengan cara menjemput ke desa yang selama ini jauh atau tidak terjangkau dari Kantor Samsat induk dan Samsat Keliling.&hellip;</p>
          <footer><a href="#">View Details &raquo;</a></footer>
        </article>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#">Quis molestie convallis</a></footer>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <article class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">Kegiatan</h6>
    </div>
    <ul class="nospace group figures btmspace-80">
      <li class="one_third first">
        <figure><img src="images/demo/348x261.png" alt="">
          <figcaption><em>01</em> <a href="#">Rajia Air Permukaan</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/demo/348x261.png" alt="">
          <figcaption><em>02</em> <a href="#">Rajia Kendaraan Bermotor</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/demo/348x261.png" alt="">
          <figcaption><em>03</em> <a href="#">Sosialisasi Pergub</a></figcaption>
        </figure>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="../samsat/fotokegiatan/poto.php">Foto Kegiatan</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="bgded overlay startlt light" style="background-image:url('images/demo/backgrounds/01.png');">
  <section id="segment" class="hoc clear"> 
    <div class="two_third">
      <h6 class="heading underline font-x2">Mauris at tellus dui integer</h6>
      <p class="btmspace-50">Eu tortor bibendum est faucibus gravida donec velit lacus blandit ultricies placerat a pharetra a nulla pellentesque sit donec scelerisque etiam et tellus eget urna.</p>
      <article><a href="#"><i class="fas fa-flag-checkered"></i></a>
        <h6 class="heading">Turpis nulla id nisl</h6>
        <p>Suspendisse fermentum purus commodo ultricies adipiscing augue ante facilisis dolor eget varius justo elit sit amet leo vivamus suspendisse&hellip;</p>
        <footer><a href="#">Read More &raquo;</a></footer>
      </article>
      <article><a href="#"><i class="fas fa-recycle"></i></a>
        <h6 class="heading">Scelerisque pellentesque</h6>
        <p>Sed leo duis adipiscing ligula eget risus curabitur id quam a odio malesuada euismod mauris faucibus aliquet urna vivamus et libero duis sed&hellip;</p>
        <footer><a href="#">Read More &raquo;</a></footer>
      </article>
    </div> -->
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="wrapper row2">
  <section class="hoc container clear"> 
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">Justo maecenas at lectus</h6>
    </div>
    <ul class="nospace group figures latest btmspace-80">
      <li class="one_third first">
        <figure><img src="images/demo/348x261.png" alt="">
          <figcaption><a href="#">Sem integer vulputate</a>
            <time datetime="2045-04-03"><strong>03</strong> Apr</time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/demo/348x261.png" alt="">
          <figcaption><a href="#">Lectus vitae lorem quisque</a>
            <time datetime="2045-04-02"><strong>02</strong> Apr</time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/demo/348x261.png" alt="">
          <figcaption><a href="#">Pede purus faucibus in</a>
            <time datetime="2045-04-01"><strong>01</strong> Apr</time>
          </figcaption>
        </figure>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#">Bibendum eget hendrerit</a></footer>
  </section>
</div> -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <section id="testimonials" class="hoc container clear"> 
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">morbi ac diam quis felis</h6>
    </div>
    <ul class="nospace group btmspace-80">
      <li class="one_third first">
        <blockquote>Aliquet ullamcorper vivamus a metus nullam arcu duis augue nisl pulvinar sit amet hendrerit commodo feugiat pharetra lorem quisque porttitor leo vitae tincidunt rutrum urna turpis laoreet enim</blockquote>
        <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
          <figcaption>
            <h6 class="heading">A. Doe</h6>
            <em>CEO / Company Name</em></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <blockquote>Sed iaculis metus pede feugiat ante quisque mi curabitur lectus in molestie sed consectetuer fusce cursus mattis leo suspendisse facilisis sodales nulla in molestie in vehicula elementum ligula</blockquote>
        <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
          <figcaption>
            <h6 class="heading">B. Doe</h6>
            <em>Director / Company Name</em></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <blockquote>Donec dictum sed ut odio in risus eleifend consectetuer suspendisse potenti nam dictum laoreet lectus aenean laoreet ipsum consectetuer lacus ut convallis lectus ac magna in ornare nisi vitae massa</blockquote>
        <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
          <figcaption>
            <h6 class="heading">C. Doe</h6>
            <em>Marketing / Company Name</em></figcaption>
        </figure>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#">Cras fringilla gravida</a></footer>
  </section>
</div> -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h6 class="heading">UPTD PAJAK RETRIBUSI WILAYAH PASER</h6>
      <!-- <nav>
        <ul class="nospace inline pushright uppercase">
          <li><a href="index.html"><i class="fas fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
        </ul>
      </nav> -->
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_quarter first">
        <h6 class="heading">Pengelola</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fas fa-map-marker-alt"></i>
            <address>
            l., Jl. Sultan Ibrahim Chaliluddin, Tanah Grogot, Kabupaten Paser, Kalimantan Timur 76251
            </address>
          </li>
          <li><i class="fas fa-phone"></i> +6282351979849 </li>
          <li><i class="far fa-envelope"></i> pasersamsat@gmail.com </li>
        </ul>
        <!-- <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
        </ul> -->
      </div>
      <div class="one_quarter">
        <h6 class="heading">Kontak Saran</h6>
        <p class="nospace btmspace-15">Kritik dan Saran Anda sangat berguna untuk meningkatkan kualitas pelayanan kami</p>
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Masukkan pengaduan Anda">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <!-- <div class="one_quarter">
        <h6 class="heading">Dictum sit amet tortor</h6>
        <ul class="nospace linklist">
          <li><a href="#">Est a orci donec eleifend</a></li>
          <li><a href="#">Dignissim erat proin diam</a></li>
          <li><a href="#">Aenean vehicula augue</a></li>
          <li><a href="#">Et neque sed ligula nisl</a></li>
          <li><a href="#">Dictum quis tempus eu</a></li>
        </ul>
      </div> -->
      <!-- <div class="one_quarter">
        <h6 class="heading">Proin tincidunt venenatis</h6>
        <ul class="nospace clear latestimg">
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        </ul>
      </div> -->
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <!-- <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p> -->
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>