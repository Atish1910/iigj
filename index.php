<?php
  include 'link.php';
  
  $a = file_get_contents('program.json');
  $b = json_decode($a, true);
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>IIGJ Admission Open 2024</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="<?= LINK; ?>images/iigj/logo/fevicon.png" rel="icon">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= LINK; ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= LINK; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= LINK; ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= LINK; ?>css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?= LINK; ?>css/style.css" rel="stylesheet">


  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WPZNGG3B');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body>

  <?php include 'nav.php'; ?>


  <section class="bg_height_04 px-3 px-md-0 vh_section" data-bgimg="<?= LINK; ?>images/iigj/banners/01.png">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4 d-none d-md-block h_abform">
          <div class="rounded-3 over_hidden bg-white">
            <div class=" pt-4 mb-0 text-center">
              <h5 class="fw-bold text-blue mb-0">Apply Now</h5>
            </div>
            <?php include 'form_01.php';?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row  d-block d-md-none pt-3 pt-md-0 h_abform" id="form_01">
        <div class="rounded-3 over_hidden pt-3 bg-white">
          <div class="text-center">
            <h3 class=""> Admission Open 2024</h2>
              <h6 class="">Apply Now</h6>
          </div>
          <?php include 'form_01.php';?>
        </div>
      </div>
    </div>
  </section>


  <!-- ------------------------------------------------------------------------------------------------------------ -->
  <section class="py-5 bg-grey" id="programs">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h3 class="text-center fw-bold text-golden pb-md-3 pb-0 ">PROGRAMS OFFERED BY IIGJ CAMPUSES</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <?php
                                $a = array("1","2","3","4","5");
                                $b_01 = array("mt-5 mt-lg-0","mt-5 ","mt-5 mt-lg-0","mt-5","mt-5");
                                $c = array("box-002","","box-002","","box-002");;
                                include 'city_course.php';
                                $e = array(  "Delhi", "Mumbai", "Jaipur", "Varanasi", "Udupi",);
                                for ($i=0; $i < count($a); $i++) {
                            ?>
        <div class="col-lg-4 col-md-6  position-relative bg_height <?= $b_01[$i];?>"
          data-bgimg="<?= LINK; ?>images/iigj/scholership/<?= $a[$i];?>.png" loading="lazy" alt="">

          <div class=" box-001 <?= $c[$i];?>">
            <img src="images/iigj/scholership/icons/<?= $a[$i];?>.png" width="34" class="filter" loading="lazy" alt="">
            <h4 class="text-white mt-2"><?= $e[$i];?></h4>
            <p></p>
            <!-- Button trigger modal -->
            <button type="button" class="btn c_btn" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $a[$i];?>">
              Read More </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?= $a[$i];?>" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-golden fw-bold" id="exampleModalLabel">
                      <?= $e[$i];?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-dark">
                    <div class="table-responsive center_tagline text-capitalize">
                      <?= $g[$i];?>
                    </div>
                    <div class="text-center overlap_modal">

                      <a href="<?= LINK; ?>" class="btn c_btn py-2 px-3 ms-2 mt-3 " data-bs-toggle="modal"
                        data-bs-target="#exampleModal_<?= $a[$i];?>">Know
                        More</a>

                      <div class="modal fade" id="exampleModal_<?= $a[$i];?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel_<?= $a[$i];?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content bg-white">
                            <div class="modal-header">
                              <h5 class="modal-title pratafon text-golden" id="exampleModalLabel_<?= $a[$i];?>">
                                Enquire
                                Now</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <?php include 'form_01.php'; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <?php
                                } 
                            ?>
      </div>
    </div>
  </section>

  <!-- ------------------------------------------------------------------------------------------------------------ -->
  <!-- ----------------------------------------------------------------------------------------------------------- -->


  <!-- ------------------------------------------------------------------------------------------------------------ -->
  <section class="">
    <div class="container">
      <div class="row py-5 position-relative bg_height_02 px-3 px-md-0"
        data-bgimg="<?= LINK; ?>images/iigj/course/bg_02.jpg" loading="lazy" alt="">
        <div class="col-md-6">
          <div class=" text-white">
            <h3 class="mb-0 text-white fw-bold">FIND YOUR COURSE <br><br></h3>
            <p>Pursue the course of your choice. Select your preferred programme and specialisation from the list below:
            </p>
          </div>
          <div class="">
            <div class="form_01 my-md-3 w-100 ">
              <form class="enqui_form_ai" action="" method="post">
                <div class="">
                  <!-- <h3 class="t-lgreen pb-3 text-blue" id="exampleModalLabel">Apply Now</h3> -->
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <select class="form-select dept_01 form_servi" placeholder="graduation" name="n_graduation">
                          <option selected disabled>Select programs</option>
                          <option value="undergraduate-degree-program">undergraduate degree program</option>
                          <option value="postgraduate-diploma-programs"> postgraduate diploma programs</option>
                          <option value="diploma-programs">diploma programs</option>
                          <option value="certificate-courses">certificate courses</option>
                          <option value="short-term-programs">short term programs</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <select class="form-select course_01  form_deptart" name="n_dept">
                          <option selected value disabled="">Select Specialization
                          </option>
                          <?php 
                                                            foreach ($b as $k => $v) {
                                                                // print_r($k);
                                                                ?>
                          <optgroup class="text-capitalize d-none" label="<?= $k;?>">
                            <?php 
                                                            foreach ($v as $k1 => $v1) {
                                                                // print_r($k1);

                                                            ?>
                            <option data-course="<?= $k;?>" class="text-capitalize" value="<?= $k1;?>">
                              <?= $v1['head']; ?></option>
                            <?php 
                                                            }
                                                        ?>
                          </optgroup>
                          <?php 
                                                        }
                                                    ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 text-center   nav_01 table_css">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn c_btn rounded-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModal_01">View Program</button>
                      <!-- Modal -->


                      <div class="modal fade" id="exampleModal_01" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <?php 
                                                            foreach ($b as $k => $v) {
                                                            foreach ($v as $k1 => $v1) {
                                                                // print_r($k1);
                                                        ?>
                        <div class="modal-dialog course_data d-none modal-xl " label="<?= $k1;?>">
                          <div class="modal-content">
                            <div class="modal-header bg-golden text-start">
                              <h1 class="modal-title fs-5 text-uppercase  text-white" id="exampleModalLabel_form">
                                <?= str_replace('-', ' ',($k)); ?></h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                              <h4 class="fw-bold text-blue text-capitalize">
                                <?= $v1['head']; ?><br>
                              </h4>
                              <div class="">
                                <p class="text-capitalize"><b>Course Location :</b> <?= $v1['location']; ?></p>
                                <p class="text-capitalize"><b>Course Duration :</b> <?= $v1['duration']; ?></p>
                                <p class="text-capitalize"><b>Eligibility :</b> <?= $v1['eligibility']; ?>
                                </p>
                                <!-- <p><b>Start Date :</b> <?= $v1['date']; ?></p> -->
                                <p><b>Course Overview
                                    :<br></b><?= $v1['overview']; ?></p>
                              </div>
                              <div class="text-center overlap_modal">

                                <a href="<?= LINK; ?>" class="btn c_btn py-2 px-3 ms-2 mt-3 " data-bs-toggle="modal"
                                  data-bs-target="#exampleModal_<?= $k1;?>">Know
                                  More</a>

                                <div class="modal fade" id="exampleModal_<?= $k1;?>" tabindex="-1"
                                  aria-labelledby="exampleModalLabel_<?= $k1;?>" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content bg-white">
                                      <div class="modal-header">
                                        <h5 class="modal-title pratafon text-golden" id="exampleModalLabel_<?= $k1;?>">
                                          Enquire
                                          Now</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <?php include 'form_01.php'; ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>


                            </div>
                          </div>
                        </div>
                        <?php }}; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
        <div class="col-md-6 text-white border-end pt-4 pt-md-0">
          <p>Indian Institute of Gems & Jewellery offers a variety of programs/courses of varying
            durations from its 5 centres. Click on the type of prograinterinterests you and
            follow the links to explore the details</p>
          <ul class=" course_01 text-white fw-bold lh-lg mb-3">
            <li>UNDERGRADUATE DEGREE PROGRAM</li>
            <li>POSTGRADUATE DIPLOMA PROGRAMS</li>
            <li>DIPLOMA PROGRAMS</li>
            <li>CERTIFICATE COURSES</li>
            <li>SHORT TERM PROGRAMS</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------------------------------------ -->





  <section class="bg-blue mt-md-5" id="placement">
    <div class="container py-5">
      <div class="row mb-3">
        <h3 class="text-center text-white fw-bold ">PLACEMENT HIGHLIGHTS</h3>
      </div>
      <div class="row justify-content-center text-center">
        <?php
                    $a = array( "22000", "37", "100");
                    $b = array( "Alumni", "Years Of Legacy", "Placement Assistance");
                    $c = array( " border-end mb-4 mb-md-0", " border-end  mb-4 mb-md-0","");
                    $d = array( "+", "+", "%");
                    $e = array( "1", "2", "3");
                    for ($i=0; $i < count($a); $i++) {
                ?>
        <div class="col-md-3 col-6 <?= $c[$i];?>">
          <img src="images/iigj/highlights/<?= $e[$i];?>.png" class="filter" width="50px" loading="lazy" alt="">
          <div class=" pb-3">
            <p class="text-white fs-4 mb-0"><span
                class="display-5 mb-0 fw-bold text-white count"><?= $a[$i];?></span><?= $d[$i];?>
            </p>
            <small class="text-white"><?= $b[$i];?></small>
          </div>
        </div>
        <?php
                } 
                ?>
        <div class="text-center">
          <a href="<?= LINK; ?>" class="btn c_btn py-2 px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply
            Now</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------------------------------------ -->


  <!-- ---------------------------------------------------------------------------- -->
  <!-- ---------------------------------------------------------------------------- -->
  <section class="py-5 bg-white" id="recruiter">
    <div class="container wow fadeInUp" data-wow-delay="0.1s">

      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h3 class="text-center fw-bold text-golden pb-3 ">GET PLACED WITH TOP BRANDS</h3>
        </div>
      </div>
      <div class="row justify-content-center company">
        <div class="col-md-12 shadow">
          <div class="row pb-5 pb-md-0 justify-content-center text-center company_001">
            <?php
                            for ($i=0; $i < 13; $i++) {
                            ?>
            <div class="col-md-3 col-4  company_01">
              <img src="images/iigj/placement/<?= $i+1;?>.jpg" loading="lazy" alt="">
            </div>

            <?php
                            } 
                            ?>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!---our top ranked patanered end--->
  <section class="py-5 bg-grey" id="testimonals">
    <div class="container wow fadeInUp" data-wow-delay="0.1s">
      <div class="row">
        <div class="col-md-4">
          <div class="pt-md-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="display-1 text-yellow">IIGJ</div>
            <h2 class="display-3">SUCCESS<br> STORIES</h2>
          </div>
        </div>
        <div class="col-md-8 owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
          <?php
                            $a = array( "https://www.youtube.com/embed/FOlwWzDoVrc?si=TkJ7Z8IjvVHkac3M", "https://www.youtube.com/embed/p30BUc506nY?si=yokUqavZn_g6t-tV","https://www.youtube.com/embed/Enrq-93FUPE?si=FE0DqltJVMJQWtBP","https://www.youtube.com/embed/nDnP36hFfQQ?si=Z9rNFprfsu2Iy3RZ");
                            for ($i=0; $i < count($a); $i++) { 
                        ?>
          <div class="row align-items-stretch">
            <div class="testimonial-item">
              <iframe width="100%" height="300" src="<?= $a[$i];?>" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>



  <!-- ---------------------------------------------------------------------------- -->
  <!-- ---------------------------------------------------------------------------- -->


  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <section id="about">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h3 class="text-center fw-bold text-golden pb-3 ">ABOUT US</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <!-- <h5 class="fw-bold ">GJEPC's Foray into Academics & Lab Testing Services</h5> -->
          <p>Indian Institute of Gems & Jewellery, an initiative of the Gem & Jewellery Export Promotion Council
            (GJEPC), was established in 2003 under the aegis of the Ministry of Commerce & Industries (Govt. of
            India). The objective is to create the next generation of gems & jewellery professionals. The USP of IIGJ
            campuses in Delhi, Mumbai, Jaipur, Varanasi and Udupi are: state-of-the-art gems & jewellery training
            facilities, experienced & industry-trained faculty and industry-aligned, practical-oriented curriculums.
          </p>
        </div>
        <div class="col-md-6">
          <iframe width="100%" height="315" class="rounded-3 "
            src="https://www.youtube.com/embed/s8YA-yFK7t0?si=cnaJeUE8TJu8lujx" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------------------------------------ -->



  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <section id="location">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h3 class="text-center fw-bold text-golden pb-3 ">OUR CAMPUSES</h3>
        </div>
      </div>
      <div class="row  align-items-stretch justify-content-between ">
        <?php
                    $a = array( "1", "2", "3","4","5");
                    $b = array(  "DELHI", "MUMBAI", "JAIPUR", "VARANASI", "UDUPI");
                    for ($i=0; $i < count($a); $i++) {
                ?>
        <div class="col-md-2 mb-4">
          <div class="text-white venture_01 position-relative  bg_height_03"
            data-bgimg="<?= LINK; ?>images/iigj/campus/<?= $a[$i];?>.jpg" loading="lazy" alt="">
            <div class="head-text_03 ">
              <span class="h6 text-white fw-bold">
                <?= $b[$i];?>
            </div>
          </div>
        </div>

        <?php
                    } 
                ?>
      </div>
    </div>
  </section>

  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------------------------------------ -->


  <?php include "footer.php"; ?>


  <!-- ///////////////////////// POP UP Banner  ////////////////////////////////////// -->
  <!-- ///////////////////////// POP UP Banner  ////////////////////////////////////// -->

  <button type="button" class="btn c_btn_01 open_popup d-none" data-bs-toggle="modal"
        data-bs-target="#popup">Apply Now</button>
    <div class="modal fade open_popup" id="popup" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        <button type="button" class="btn-close btn_close " data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body owl-carousel popup-carousel p-0">
        <?php
              $a = array("1","2","3","4");
              for ($i=0; $i < count($a); $i++) { 
          ?>
          <div class="row align-items-stretch">
            <div class="">
              <img src="images/iigj/popup/<?= $a[$i];?>.jpg" class="w-100 img-fluid" alt="">
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
        </div>
    </div>

    

  <!-- ///////////////////////// POP UP Banner  ////////////////////////////////////// -->
  <!-- ///////////////////////// POP UP Banner  ////////////////////////////////////// -->
  
  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------------------------------------ -->
  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="<?= LINK; ?>js/bootstrap.min.js"></script>
  <script src="<?= LINK; ?>lib/wow/wow.min.js"></script>
  <script src="<?= LINK; ?>lib/easing/easing.min.js"></script>
  <script src="<?= LINK; ?>lib/waypoints/waypoints.min.js"></script>
  <script src="<?= LINK; ?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= LINK; ?>lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= LINK; ?>js/main.js"></script>
  <script type="text/javascript">
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://widgets.in8.nopaperforms.com/emwgts.js";
    document.body.appendChild(s);



    ///// load the page and pop up
    // $(".open_popup").trigger("click");
  </script>


  <!--Form Tracking for Forms-->
  <script type="text/javascript">
    function ZFAdvLead() {}
    ZFAdvLead.utmPValObj = ZFAdvLead.utmPValObj || {};

    ZFAdvLead.utmPNameArr = new Array('utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content');
    ZFAdvLead.utmcustPNameArr = new Array();
    ZFAdvLead.isSameDomian = false;

    ZFAdvLead.prototype.zfautm_sC = function (paramName, path, domain, secure) {
      var value = ZFAdvLead.utmPValObj[paramName];
      if (typeof value !== "undefined" && value !== null) {
        var cookieStr = paramName + "=" + encodeURIComponent(value);
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + 7);
        cookieStr += "; expires=" + exdate.toGMTString();
        cookieStr += "; path=/";
        if (domain) {
          cookieStr += "; domain=" + encodeURIComponent(domain);
        }
        if (secure) {
          cookieStr += "; secure";
        }
        document.cookie = cookieStr;
      }
    };
    ZFAdvLead.prototype.zfautm_ini = function () {
      this.zfautm_bscPCap();
      var url_search = document.location.search;
      for (var i = 0; i < ZFAdvLead.utmcustPNameArr.length; i++) {
        var zf_pN = ZFAdvLead.utmcustPNameArr[i];
        var zf_pV;
        if (zf_pN == 'referrername') {
          zf_pV = (document.URL || '').slice(0, 1500);
        } else {
          zf_pV = this.zfautm_gP(url_search, zf_pN);
          if (zf_pV == undefined || zf_pV == '') {
            zf_pV = this.zfautm_gC(zf_pN);
          }
        }
        if (typeof zf_pV !== "undefined" && zf_pV !== null & zf_pV != "") {
          ZFAdvLead.utmPValObj[zf_pN] = zf_pV;
        }
      }
      for (var pkey in ZFAdvLead.utmPValObj) {
        this.zfautm_sC(pkey);
      }
    };
    ZFAdvLead.prototype.zfautm_bscPCap = function () {
      var trafSrc = this.zfautm_calcTrafSrc();
      if (trafSrc.source != "") {
        ZFAdvLead.utmPValObj.utm_source = trafSrc.source;
      }
      if (trafSrc.medium != "") {
        ZFAdvLead.utmPValObj.utm_medium = trafSrc.medium;
      }
      if (trafSrc.campaign != "") {
        ZFAdvLead.utmPValObj.utm_campaign = trafSrc.campaign;
      }
      if (trafSrc.term != "") {
        ZFAdvLead.utmPValObj.utm_term = trafSrc.term;
      }
      if (trafSrc.content != "") {
        ZFAdvLead.utmPValObj.utm_content = trafSrc.content;
      }
    }
    ZFAdvLead.prototype.zfautm_calcTrafSrc = function () {
      var u1 = '',
        u2 = '',
        u3 = '',
        u4 = '',
        u5 = '';
      var search_engines = [
        ['bing', 'q'],
        ['google', 'q'],
        ['yahoo', 'q'],
        ['baidu', 'q'],
        ['yandex', 'q'],
        ['ask', 'q']
      ]; //List of search engines 
      var ref = document.referrer;
      ref = ref.substr(ref.indexOf('//') + 2);
      ref_domain = ref;
      ref_path = '/';
      ref_search = '';

      // Checks for campaign parameters
      var url_search = document.location.search;
      if (url_search.indexOf('utm_source') > -1 || url_search.indexOf('utm_medium') > -1 || url_search.indexOf(
          'utm_campaign') > -1 || url_search.indexOf('utm_term') > -1 || url_search.indexOf('utm_content') > -1) {
        u1 = this.zfautm_gP(url_search, 'utm_source');
        u2 = this.zfautm_gP(url_search, 'utm_medium');
        u3 = this.zfautm_gP(url_search, 'utm_campaign');
        u4 = this.zfautm_gP(url_search, 'utm_term');
        u5 = this.zfautm_gP(url_search, 'utm_content');
      } else if (this.zfautm_gP(url_search, 'gclid')) {
        u1 = 'Google Ads';
        u2 = 'cpc';
        u3 = '(not set)';
        if (!ZFAdvLead.utmcustPNameArr.includes('gclid')) {
          ZFAdvLead.utmcustPNameArr.push('gclid');
        }
      } else if (ref) {
        var r_u1 = this.zfautm_gC('utm_source');
        var r_u2 = this.zfautm_gC('utm_medium');
        var r_u3 = this.zfautm_gC('utm_campaign');
        var r_u4 = this.zfautm_gC('utm_term');
        var r_u5 = this.zfautm_gC('utm_content');
        if (typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" &&
          typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
          // separate domain, path and query parameters
          if (ref.indexOf('/') > -1) {
            ref_domain = ref.substr(0, ref.indexOf('/'));
            ref_path = ref.substr(ref.indexOf('/'));
            if (ref_path.indexOf('?') > -1) {
              ref_search = ref_path.substr(ref_path.indexOf('?'));
              ref_path = ref_path.substr(0, ref_path.indexOf('?'));
            }
          }
          u2 = 'referral';
          u1 = ref_domain;
          // Extract term for organic source
          for (var i = 0; i < search_engines.length; i++) {
            if (ref_domain.indexOf(search_engines[i][0]) > -1) {
              u2 = 'organic';
              u1 = search_engines[i][0];
              u4 = this.zfautm_gP(ref_search, search_engines[i][1]) || '(not provided)';
              break;
            }
          }
        } else {
          if (typeof r_u1 !== "undefined") {
            u1 = r_u1;
          }
          if (typeof r_u2 !== "undefined") {
            u2 = r_u2;
          }
          if (typeof r_u3 !== "undefined") {
            u3 = r_u3;
          }
          if (typeof r_u4 !== "undefined") {
            u4 = r_u4;
          }
          if (typeof r_u5 !== "undefined") {
            u5 = r_u5;
          }
        }
      } else {
        var r_u1 = this.zfautm_gC('utm_source');
        var r_u2 = this.zfautm_gC('utm_medium');
        var r_u3 = this.zfautm_gC('utm_campaign');
        var r_u4 = this.zfautm_gC('utm_term');
        var r_u5 = this.zfautm_gC('utm_content');
        if (typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" &&
          typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
          var locRef = document.URL;
          locRef = locRef.substr(locRef.indexOf('//') + 2);
          if (locRef.indexOf('/') > -1) {
            locRef = locRef.substr(0, locRef.indexOf('/'));
          }
          u1 = locRef;
          u2 = 'referral';
        } else {
          if (typeof r_u1 !== "undefined") {
            u1 = r_u1;
          }
          if (typeof r_u2 !== "undefined") {
            u2 = r_u2;
          }
          if (typeof r_u3 !== "undefined") {
            u3 = r_u3;
          }
          if (typeof r_u4 !== "undefined") {
            u4 = r_u4;
          }
          if (typeof r_u5 !== "undefined") {
            u5 = r_u5;
          }
        }
      }
      return {
        'source': u1,
        'medium': u2,
        'campaign': u3,
        'term': u4,
        'content': u5
      };
    }
    ZFAdvLead.prototype.zfautm_gP = function (s, q) {
      try {
        var match = s.match('[?&]' + q + '=([^&]+)');
        return match ? decodeURIComponent(match[1]) : '';
      } catch (e) {
        return '';
      }
    }
    ZFAdvLead.prototype.zfautm_gC = function (cookieName) {
      var cookieArr = document.cookie.split('; ');
      for (var i = 0; i < cookieArr.length; i++) {
        var cookieVals = cookieArr[i].split('=');
        if (cookieVals[0] === cookieName && cookieVals[1]) {
          return decodeURIComponent(cookieVals[1]);
        }
      }
    };
    ZFAdvLead.prototype.zfautm_gC_enc = function (cookieName) {
      var cookieArr = document.cookie.split('; ');
      for (var i = 0; i < cookieArr.length; i++) {
        var cookieVals = cookieArr[i].split('=');
        if (cookieVals[0] === cookieName && cookieVals[1]) {
          return cookieVals[1];
        }
      }
    };
    ZFAdvLead.prototype.zfautm_iframeSprt = function () {
      var zf_frame = document.getElementsByTagName("iframe");
      for (var i = 0; i < zf_frame.length; ++i) {
        if ((zf_frame[i].src).indexOf('formperma') > 0) {
          var zf_src = zf_frame[i].src;
          for (var prmIdx = 0; prmIdx < ZFAdvLead.utmPNameArr.length; prmIdx++) {
            var utmPm = ZFAdvLead.utmPNameArr[prmIdx];
            utmPm = (ZFAdvLead.isSameDomian && (ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1)) ? "zf_" + utmPm :
              utmPm;
            var utmVal = this.zfautm_gC_enc(ZFAdvLead.utmPNameArr[prmIdx]);
            if (typeof utmVal !== "undefined") {
              if (utmVal != "") {
                if (zf_src.indexOf('?') > 0) {
                  zf_src = zf_src + '&' + utmPm + '=' + utmVal;
                } else {
                  zf_src = zf_src + '?' + utmPm + '=' + utmVal;
                }
              }
            }
          }
          if (zf_frame[i].src.length < zf_src.length) {
            zf_frame[i].src = zf_src;
          }
        }
      }
    };
    ZFAdvLead.prototype.zfautm_DHtmlSprt = function () {
      var zf_formsArr = document.forms;
      for (var frmInd = 0; frmInd < zf_formsArr.length; frmInd++) {
        var zf_form_act = zf_formsArr[frmInd].action;
        if (zf_form_act && zf_form_act.indexOf('formperma') > 0) {
          for (var prmIdx = 0; prmIdx < ZFAdvLead.utmPNameArr.length; prmIdx++) {
            var utmPm = ZFAdvLead.utmPNameArr[prmIdx];
            var utmVal = this.zfautm_gC(ZFAdvLead.utmPNameArr[prmIdx]);
            if (typeof utmVal !== "undefined") {
              if (utmVal != "") {
                var fieldObj = zf_formsArr[frmInd][utmPm];
                if (fieldObj) {
                  fieldObj.value = utmVal;
                }
              }
            }
          }
        }
      }
    };
    ZFAdvLead.prototype.zfautm_jsEmbedSprt = function (id) {
      document.getElementById('zforms_iframe_id').removeAttribute("onload");
      var jsEmbdFrm = document.getElementById("zforms_iframe_id");
      var embdSrc = jsEmbdFrm.src;
      for (var prmIdx = 0; prmIdx < ZFAdvLead.utmPNameArr.length; prmIdx++) {
        var utmPm = ZFAdvLead.utmPNameArr[prmIdx];
        utmPm = (ZFAdvLead.isSameDomian && (ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1)) ? "zf_" + utmPm :
          utmPm;
        var utmVal = this.zfautm_gC_enc(ZFAdvLead.utmPNameArr[prmIdx]);
        if (typeof utmVal !== "undefined") {
          if (utmVal != "") {
            if (embdSrc.indexOf('?') > 0) {
              embdSrc = embdSrc + '&' + utmPm + '=' + utmVal;
            } else {
              embdSrc = embdSrc + '?' + utmPm + '=' + utmVal;
            }
          }
        }
      }
      jsEmbdFrm.src = embdSrc;
    };
    var zfutm_zfAdvLead = new ZFAdvLead();
    zfutm_zfAdvLead.zfautm_ini();
    if (document.readyState == "complete") {
      zfutm_zfAdvLead.zfautm_iframeSprt();
      zfutm_zfAdvLead.zfautm_DHtmlSprt();
    } else {
      window.addEventListener('load', function () {
        zfutm_zfAdvLead.zfautm_iframeSprt();
        zfutm_zfAdvLead.zfautm_DHtmlSprt();
      }, false);
    }
  </script>
  <!--End-->

  <!--Form Tracking for Existing User-->
  <script type="text/javascript">
    function ZFAdvLead() {}
    ZFAdvLead.utmPValObj = ZFAdvLead.utmPValObj || {};

    ZFAdvLead.utmPNameArr = new Array('utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content');
    ZFAdvLead.utmcustPNameArr = new Array();
    ZFAdvLead.isSameDomian = false;

    ZFAdvLead.prototype.zfautm_sC = function (paramName, path, domain, secure) {
      var value = ZFAdvLead.utmPValObj[paramName];
      if (typeof value !== "undefined" && value !== null) {
        var cookieStr = paramName + "=" + encodeURIComponent(value);
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + 7);
        cookieStr += "; expires=" + exdate.toGMTString();
        cookieStr += "; path=/";
        if (domain) {
          cookieStr += "; domain=" + encodeURIComponent(domain);
        }
        if (secure) {
          cookieStr += "; secure";
        }
        document.cookie = cookieStr;
      }
    };
    ZFAdvLead.prototype.zfautm_ini = function () {
      this.zfautm_bscPCap();
      var url_search = document.location.search;
      for (var i = 0; i < ZFAdvLead.utmcustPNameArr.length; i++) {
        var zf_pN = ZFAdvLead.utmcustPNameArr[i];
        var zf_pV;
        if (zf_pN == 'referrername') {
          zf_pV = (document.URL || '').slice(0, 1500);
        } else {
          zf_pV = this.zfautm_gP(url_search, zf_pN);
          if (zf_pV == undefined || zf_pV == '') {
            zf_pV = this.zfautm_gC(zf_pN);
          }
        }
        if (typeof zf_pV !== "undefined" && zf_pV !== null & zf_pV != "") {
          ZFAdvLead.utmPValObj[zf_pN] = zf_pV;
        }
      }
      for (var pkey in ZFAdvLead.utmPValObj) {
        this.zfautm_sC(pkey);
      }
    };
    ZFAdvLead.prototype.zfautm_bscPCap = function () {
      var trafSrc = this.zfautm_calcTrafSrc();
      if (trafSrc.source != "") {
        ZFAdvLead.utmPValObj.utm_source = trafSrc.source;
      }
      if (trafSrc.medium != "") {
        ZFAdvLead.utmPValObj.utm_medium = trafSrc.medium;
      }
      if (trafSrc.campaign != "") {
        ZFAdvLead.utmPValObj.utm_campaign = trafSrc.campaign;
      }
      if (trafSrc.term != "") {
        ZFAdvLead.utmPValObj.utm_term = trafSrc.term;
      }
      if (trafSrc.content != "") {
        ZFAdvLead.utmPValObj.utm_content = trafSrc.content;
      }
    }
    ZFAdvLead.prototype.zfautm_calcTrafSrc = function () {
      var u1 = '',
        u2 = '',
        u3 = '',
        u4 = '',
        u5 = '';
      var search_engines = [
        ['bing', 'q'],
        ['google', 'q'],
        ['yahoo', 'q'],
        ['baidu', 'q'],
        ['yandex', 'q'],
        ['ask', 'q']
      ]; //List of search engines 
      var ref = document.referrer;
      ref = ref.substr(ref.indexOf('//') + 2);
      ref_domain = ref;
      ref_path = '/';
      ref_search = '';

      // Checks for campaign parameters
      var url_search = document.location.search;
      if (url_search.indexOf('utm_source') > -1 || url_search.indexOf('utm_medium') > -1 || url_search.indexOf(
          'utm_campaign') > -1 || url_search.indexOf('utm_term') > -1 || url_search.indexOf('utm_content') > -1) {
        u1 = this.zfautm_gP(url_search, 'utm_source');
        u2 = this.zfautm_gP(url_search, 'utm_medium');
        u3 = this.zfautm_gP(url_search, 'utm_campaign');
        u4 = this.zfautm_gP(url_search, 'utm_term');
        u5 = this.zfautm_gP(url_search, 'utm_content');
      } else if (this.zfautm_gP(url_search, 'gclid')) {
        u1 = 'Google Ads';
        u2 = 'cpc';
        u3 = '(not set)';
        if (!ZFAdvLead.utmcustPNameArr.includes('gclid')) {
          ZFAdvLead.utmcustPNameArr.push('gclid');
        }
      } else if (ref) {
        var r_u1 = this.zfautm_gC('utm_source');
        var r_u2 = this.zfautm_gC('utm_medium');
        var r_u3 = this.zfautm_gC('utm_campaign');
        var r_u4 = this.zfautm_gC('utm_term');
        var r_u5 = this.zfautm_gC('utm_content');
        if (typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" &&
          typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
          // separate domain, path and query parameters
          if (ref.indexOf('/') > -1) {
            ref_domain = ref.substr(0, ref.indexOf('/'));
            ref_path = ref.substr(ref.indexOf('/'));
            if (ref_path.indexOf('?') > -1) {
              ref_search = ref_path.substr(ref_path.indexOf('?'));
              ref_path = ref_path.substr(0, ref_path.indexOf('?'));
            }
          }
          u2 = 'referral';
          u1 = ref_domain;
          // Extract term for organic source
          for (var i = 0; i < search_engines.length; i++) {
            if (ref_domain.indexOf(search_engines[i][0]) > -1) {
              u2 = 'organic';
              u1 = search_engines[i][0];
              u4 = this.zfautm_gP(ref_search, search_engines[i][1]) || '(not provided)';
              break;
            }
          }
        } else {
          if (typeof r_u1 !== "undefined") {
            u1 = r_u1;
          }
          if (typeof r_u2 !== "undefined") {
            u2 = r_u2;
          }
          if (typeof r_u3 !== "undefined") {
            u3 = r_u3;
          }
          if (typeof r_u4 !== "undefined") {
            u4 = r_u4;
          }
          if (typeof r_u5 !== "undefined") {
            u5 = r_u5;
          }
        }
      } else {
        var r_u1 = this.zfautm_gC('utm_source');
        var r_u2 = this.zfautm_gC('utm_medium');
        var r_u3 = this.zfautm_gC('utm_campaign');
        var r_u4 = this.zfautm_gC('utm_term');
        var r_u5 = this.zfautm_gC('utm_content');
        if (typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" &&
          typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
          var locRef = document.URL;
          locRef = locRef.substr(locRef.indexOf('//') + 2);
          if (locRef.indexOf('/') > -1) {
            locRef = locRef.substr(0, locRef.indexOf('/'));
          }
          u1 = locRef;
          u2 = 'referral';
        } else {
          if (typeof r_u1 !== "undefined") {
            u1 = r_u1;
          }
          if (typeof r_u2 !== "undefined") {
            u2 = r_u2;
          }
          if (typeof r_u3 !== "undefined") {
            u3 = r_u3;
          }
          if (typeof r_u4 !== "undefined") {
            u4 = r_u4;
          }
          if (typeof r_u5 !== "undefined") {
            u5 = r_u5;
          }
        }
      }
      return {
        'source': u1,
        'medium': u2,
        'campaign': u3,
        'term': u4,
        'content': u5
      };
    }
    ZFAdvLead.prototype.zfautm_gP = function (s, q) {
      try {
        var match = s.match('[?&]' + q + '=([^&]+)');
        return match ? decodeURIComponent(match[1]) : '';
      } catch (e) {
        return '';
      }
    }
    ZFAdvLead.prototype.zfautm_gC = function (cookieName) {
      var cookieArr = document.cookie.split('; ');
      for (var i = 0; i < cookieArr.length; i++) {
        var cookieVals = cookieArr[i].split('=');
        if (cookieVals[0] === cookieName && cookieVals[1]) {
          return decodeURIComponent(cookieVals[1]);
        }
      }
    };
    ZFAdvLead.prototype.zfautm_gC_enc = function (cookieName) {
      var cookieArr = document.cookie.split('; ');
      for (var i = 0; i < cookieArr.length; i++) {
        var cookieVals = cookieArr[i].split('=');
        if (cookieVals[0] === cookieName && cookieVals[1]) {
          return cookieVals[1];
        }
      }
    };
    ZFAdvLead.prototype.zfautm_iframeSprt = function () {
      var zf_frame = document.getElementsByTagName("iframe");
      for (var i = 0; i < zf_frame.length; ++i) {
        if ((zf_frame[i].src).indexOf('formperma') > 0) {
          var zf_src = zf_frame[i].src;
          for (var prmIdx = 0; prmIdx < ZFAdvLead.utmPNameArr.length; prmIdx++) {
            var utmPm = ZFAdvLead.utmPNameArr[prmIdx];
            utmPm = (ZFAdvLead.isSameDomian && (ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1)) ? "zf_" + utmPm :
              utmPm;
            var utmVal = this.zfautm_gC_enc(ZFAdvLead.utmPNameArr[prmIdx]);
            if (typeof utmVal !== "undefined") {
              if (utmVal != "") {
                if (zf_src.indexOf('?') > 0) {
                  zf_src = zf_src + '&' + utmPm + '=' + utmVal;
                } else {
                  zf_src = zf_src + '?' + utmPm + '=' + utmVal;
                }
              }
            }
          }
          if (zf_frame[i].src.length < zf_src.length) {
            zf_frame[i].src = zf_src;
          }
        }
      }
    };
    ZFAdvLead.prototype.zfautm_DHtmlSprt = function () {
      var zf_formsArr = document.forms;
      for (var frmInd = 0; frmInd < zf_formsArr.length; frmInd++) {
        var zf_form_act = zf_formsArr[frmInd].action;
        if (zf_form_act && zf_form_act.indexOf('formperma') > 0) {
          for (var prmIdx = 0; prmIdx < ZFAdvLead.utmPNameArr.length; prmIdx++) {
            var utmPm = ZFAdvLead.utmPNameArr[prmIdx];
            var utmVal = this.zfautm_gC(ZFAdvLead.utmPNameArr[prmIdx]);
            if (typeof utmVal !== "undefined") {
              if (utmVal != "") {
                var fieldObj = zf_formsArr[frmInd][utmPm];
                if (fieldObj) {
                  fieldObj.value = utmVal;
                }
              }
            }
          }
        }
      }
    };
    ZFAdvLead.prototype.zfautm_jsEmbedSprt = function (id) {
      document.getElementById('zforms_iframe_id').removeAttribute("onload");
      var jsEmbdFrm = document.getElementById("zforms_iframe_id");
      var embdSrc = jsEmbdFrm.src;
      for (var prmIdx = 0; prmIdx < ZFAdvLead.utmPNameArr.length; prmIdx++) {
        var utmPm = ZFAdvLead.utmPNameArr[prmIdx];
        utmPm = (ZFAdvLead.isSameDomian && (ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1)) ? "zf_" + utmPm :
          utmPm;
        var utmVal = this.zfautm_gC_enc(ZFAdvLead.utmPNameArr[prmIdx]);
        if (typeof utmVal !== "undefined") {
          if (utmVal != "") {
            if (embdSrc.indexOf('?') > 0) {
              embdSrc = embdSrc + '&' + utmPm + '=' + utmVal;
            } else {
              embdSrc = embdSrc + '?' + utmPm + '=' + utmVal;
            }
          }
        }
      }
      jsEmbdFrm.src = embdSrc;
    };
    var zfutm_zfAdvLead = new ZFAdvLead();
    zfutm_zfAdvLead.zfautm_ini();
    if (document.readyState == "complete") {
      zfutm_zfAdvLead.zfautm_iframeSprt();
      zfutm_zfAdvLead.zfautm_DHtmlSprt();
    } else {
      window.addEventListener('load', function () {
        zfutm_zfAdvLead.zfautm_iframeSprt();
        zfutm_zfAdvLead.zfautm_DHtmlSprt();
      }, false);
    }
  </script>
  <!--End-->
</body>

</html>