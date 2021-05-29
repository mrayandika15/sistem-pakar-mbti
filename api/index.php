<?php

header('Expires: '.date('r'));
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
include 'inc/config.php';
$sql="SELECT * FROM tbl_statements ORDER BY rand()";
$result=$db->query($sql);
$data=array();
while($row=$result->fetch_object()) $data[]=$row;
?>
<!doctype html>
<html>
  <head>
    <title>Tes Kepribadian</title>
    <meta http-equiv="expires" content="<?php echo date('r');?>" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <link rel='stylesheet' href='css/mbti.css?<?php echo md5(date('r'));?>' />
    <link href="vendors/plyr/plyr.css" rel="stylesheet" />
    <link href="css/theme.css" rel="stylesheet" />
  </head>
  <body>
  <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="#"> <span class="text-primary fs-3 ps-2">Tes Kepribadian</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link text-600" href="#Apaitu">Apa Itu MBTI </a></li>
              <li class="nav-item"><a class="nav-link text-600" href="#Manfaat">Manfaat</a></li>
              <li class="nav-item"><a class="nav-link text-600" href="#Tes">Test MBTI </a></li>
            </ul>

          </div>
        </div>
      </nav>
      <section class="py-0">
        <div class="bg-holder d-none d-md-block" style="background-image:url(assets/img/noted.svg);background-position:right bottom;background-size:contain;width:100%;">
        </div>
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center min-vh-75 my-lg-8">
            <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
              <h1 class="mb-4 display-1 lh-sm">Tes Kepribadian Online</h1>
              <p class="mt-4 mb-5 fs-1 lh-base">Sebuah Tes Psikologis yang membagi manusia <br class="d-none d-lg-block" />menjadi 16 tipe kepribadian berdasarkan   <br class="d-none d-lg-block" />4 dimensi utama yang berlawanan.</p><a class="btn btn-lg btn-primary hover-top" href="#Tes" role="button">Test Sekarang !</a>
            </div>
          </div>
        </div>
      </section>






      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-2" id="Apaitu">

        <div class="container">
          <div class="row flex-center mb-5">
            <div class="col-lg-8 text-center">
              <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Apa Itu MBTI ?</h1>
              <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
              <p class="fw-normal text-start" >merupakan tes psikologi (psikotes) yang terinspirasi oleh teori tipologi. Teori tersebut diusulkan oleh Carl Gustav Jung melalui buku Psychological Types pada tahun 1921. Teori ini kemudian dikembangkan kembali oleh Isabel Briggs Myers and Katharine C. Briggs sekitar awal tahun 1940.</p>


               <p class="fw-normal text-start" >  Psikotes ini dirancang untuk mengukur kecerdasan individu, bakat, dan tipe kepribadian seseorang. Tes ini juga dipakai untuk mengetahui karakter kepribadian karyawan perusahaan agar dapat ditempatkan pada bidang-bidang yang membuat potensi karyawan tersebut optimal. Dalam Tes 16 Kepribadian ini, ada 4 dimensi kecenderungan sifat dasar manusia:</p>

              <ul class="text-start mt-5">
                <li>Dimensi pemusatan perhatian: Introvert (I) vs. Ekstrovert (E)</li>
                <li>Dimensi memahami informasi dari luar : Sensing (S) vs. Intuition (N)</li>
                <li>Dimensi menarik kesimpulan & keputusan : Thinking (T) vs. Feeling (F)</li>
                <li>Dimensi pola hidup : Judging (J) vs. Perceiving (P)</li>
              </ul>

            </div>
          </div>

        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="Manfaat">

        <div class="container">
          <div class="row flex mb-5">
            <div class="col-lg-8 text-start">
              <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Manfaat</h1>
              <hr class=" text-primary my-4" style="height:3px; width:70px;" />
              <h1 class="fw-bold fs-md-2 fs-lg-2 fs-xl-2">Bimbingan Konseling</h1>
              <p class="mx-auto">Hasil yang kamu dapatkan dapat kamu gunakan untuk referensi memilih jurusan kuliah hingga pertimbangan karir.</p>
              <h1 class="fw-bold fs-md-2 fs-lg-2 fs-xl-2 mt-4">Pengembangan Diri</h1>
              <p class="mx-auto">Dengan mengetahui kelebihan dan kekurangan dirimu, kamu bisa mengembangkan dirimu lebih baik dengan mengasah kelebihan serta memperbaiki kekurangan.</p>
              <h1 class="fw-bold fs-md-2 fs-lg-2 fs-xl-2 mt-4">Pergaulan</h1>
              <p class="mx-auto">Saat kamu mengetahui tipe kepribadian orang lain, kamu dapat lebih mudah bergaul dan menyesuaikan diri dengan orang lain.</p>
            </div>
            <div class="col-lg-4 text-start ">
                <img style="width: 100%;display:flex ; justify-content: center; align-items: center;margin-top: 100px;" src="assets/img/illus2.svg" alt="">
            </div>

          </div>

        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
  <section id="Tes">

  <div class="container">

        <div class="container-fluid">
          <div class="row flex-center mb-5">
            <div class="col-lg-12 text-center">
            <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5 ">Tes Kepribadian</h1>
            <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
            <h5 class="mx-auto text-center mt-5 ">Pilih salah satu opsi yang paling menggambarkan diri Anda di setiap barisnya.</h5>
            <h5 class="mx-auto text-center mb-5 "> Pastikan Anda berada di situasi yang tenang agar hasilnya dapat optimal.</h5>
            </div>


            <div class="col-lg-10 text-center d-flex justify-content-center ">
            <form style="width: 100%;" action='result.php' method='post'>
           <?php
            foreach($data as $d){
              echo "
              <div class = 'd-flex justify-content-between mt-5  ' style='width:100%;'  >
              <h6 class='fw-normal fs-1' style='width:32%;' >{$d->statement1}</h6>
              <div class='radiobutton'>
              <input type='radio' name='d[{$d->id}]' value='1' required/>
              <input type='radio' name='d[{$d->id}]' value='2' required/>
              </div>
            <h6 class='fw-normal fs-1' style='width:32%'>{$d->statement2}</h6>
              </div>
                  ";
            }

           ?>

          <input type='submit' value='Submit' class=' btn btn-lg mt-5 btn-primary hover-top'/>

            </form>
            </div>



          </div>

        </div>




  </section>


    <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6">

        <div class="container">
          <div class="row flex-center">
            <div class="col-auto mb-4">
              <ul class="list-unstyled list-inline mb-0">
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">Home</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#Apaitu">Apa itu MBTI</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#Manfaat">Manfaat</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#Tes">Tes MBTI</a></li>
              </ul>
            </div>
          </div>
          <div class="row flex-center">
            <div class="col-auto mb-4">
              <p class="mb-0 fs--1 text-dark">&copy; Muhammad Rayandika&nbsp;
               &nbsp;Tito wahyu Ramadhan&nbsp;
               &nbsp;Tirtazia Meigita&nbsp;
              </p>
            </div>
          </div>

        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



    </main>

  <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/plyr/plyr.polyfilled.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="js/theme.js"></script>



  </body>
</html>
