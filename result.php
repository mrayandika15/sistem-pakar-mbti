<?php

header('Expires: '.date('r'));
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
if(isset($_POST['d'])){
  $a=$b=array();
  for($i=1;$i<=40;$i++){
    $a[$i]=isset($_POST['d'][$i]) && $_POST['d'][$i]==1?1:0;
    $b[$i]=isset($_POST['d'][$i]) && $_POST['d'][$i]==2?1:0;
  }
// Introvert
  $I=($b[3]+$b[6]+$b[8]+$b[12]+$a[17]+$b[20]+$a[26]+$b[27]+$b[28]+$a[32])/10;
// Extrovert
  $E=($a[3]+$a[6]+$a[8]+$a[12]+$b[17]+$a[20]+$b[26]+$a[27]+$a[28]+$b[32])/10;
// Sensing
  $S=($b[4]+$a[7]+$a[13]+$a[14]+$a[16]+$a[19]+$b[23]+$b[29]+$a[30]+$b[33])/10;
// Intuition
  $N=($a[4]+$b[7]+$b[13]+$b[14]+$b[16]+$b[19]+$a[23]+$a[29]+$b[30]+$a[33])/10;
// Thinking
  $T=($a[1]+$b[2]+$a[9]+$b[11]+$a[18]+$a[22]+$b[24]+$b[38]+$a[39]+$a[40])/10;
// Feeling
  $F=($b[1]+$a[2]+$b[9]+$a[11]+$b[18]+$b[22]+$a[24]+$a[38]+$b[39]+$b[40])/10;
// Judging
  $J=($a[5]+$b[10]+$b[15]+$b[21]+$a[25]+$b[31]+$b[34]+$a[35]+$a[36]+$b[37])/10;
// Perceiving
  $P=($b[5]+$a[10]+$a[15]+$a[21]+$b[25]+$a[31]+$a[34]+$b[35]+$b[36]+$a[37])/10;

  $resultStr=($I>$E?'I':'E').($S>$N?'S':'N').($T>$F?'T':'F').($J>$P?'J':'P');
  include 'inc/config.php';
  $sql="SELECT * FROM tbl_interprestation WHERE symbol='{$resultStr}' ";
  $result=$db->query($sql);
  $data=$result->fetch_object();
?>
<!doctype html>
<html>
  <head>
    <title>MBTI Result</title>
    <meta http-equiv="expires" content="<?php echo date('r');?>" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <link rel='stylesheet' href='css/mbti.css?<?php echo md5(date('r'));?>' />
    <link href="vendors/plyr/plyr.css" rel="stylesheet" />
    <link href="css/theme.css" rel="stylesheet" />
  </head>
  <style>
    li{
      color: #000;

    }

  </style>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
          <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="#"> <span class="text-primary fs-3 ps-2">Tes Psikologis</span></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Back To Home</a></li>

              </ul>

            </div>
          </div>
        </nav>



    <div class="container mt-8">
          <div class="row flex-center mb-5">
            <div class="col-lg-8 text-center">
            <h1><?php echo $data->symbol;?></h1>
            <h2>(<?php echo $data->short;?>)</h2>
              <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

            <div class="text-start">
            <h1 class="fw-bold fs-md-2 fs-lg-2 fs-xl-2 text-start">Deskripsi</h1>
              <p class="text-start fw-2 fs-1" style="color: #000;" ><li><?php echo implode('</li><li>',explode('|',$data->description));?></li></p>
            </div>

            <div class="text-start">
            <h1 class="fw-bold fs-md-2 fs-lg-2 fs-xl-2 text-start">Saran Pengembangan</h1>
              <p class="text-start fw-2 fs-1" style="color: #000;" >  <li><?php echo implode('</li><li>',explode('|',$data->improvement));?></li></p>
            </div>


            <div class="text-start">
            <h1 class="fw-bold fs-md-2 fs-lg-2 fs-xl-2 text-start">Saran Profesi</h1>
              <p class="text-start fw-2 fs-1" style="color: #000;" > <li><?php echo implode('</li><li>',explode(',',$data->profession));?></li></p>
            </div>


            <div class="text-start">
            <h1 class="fw-bold fs-md-2 fs-lg-2 fs-xl-2 text-start">Pasangan/Partner Alami:</h1>
              <p class="text-start fw-2 fs-1" style="color: #000;" >       <?php echo $data->partner;?></p>
            </div>



 <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-2 mt-10">

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




            </div>
          </div>



    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/plyr/plyr.polyfilled.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="js/theme.js"></script>


  </body>
</html>
<?php
}
