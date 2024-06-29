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

</head>

<body>

    <?php include 'nav.php'; ?>

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="header-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 main-img d-none d-md-block" src="<?= LINK; ?>images/iigj/banners/1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container position-relative">
                            <div class="row align-items-end  ">
                                <div class="col-md-5 text-start">

                                    <h1 class="text-white head-text_02 "><span class="text-golden">PIONEERS IN
                                        </span><br>JEWELLERY <br> EDUCATION</h1>
                                    <p class=""> Indian Institute of Gems & Jewellery, an initiative of the Gem &
                                        Jewellery Export Promotion Council (GJEPC), was established under the aegis of
                                        the Ministry of Commerce & Industries in 2003 to create the next generation of
                                        jewellery professionals.</p>
                                    <div class="">
                                        <h4 class="text-golden fw-bold">EDUCTAION TRAINING SKILLING</h4>
                                        
                                    </div>
                                </div>
                                <div class="col-md-3 pe-md-3  border-end ">
                                    <div class="hrad-img">
                                        <img src="<?= LINK; ?>images/iigj/1.png" loading="lazy"  alt="">
                                        <div class="box text-center ">
                                            <span class="h5 text-white fw-bold">DELHI | MUMBAI | JAIPUR <br> VARANASI | UDUPI</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 d-none d-md-block pt-3 pt-md-0 h_abform" id="form_01">
                                    <div class="rounded-3 over_hidden pt-3 bg-white">
                                        <div class="">
                                            <h3 class=""> Admission Open 2024</h2>
                                                <h6 class="">Apply Now</h6>
                                        </div>
                                        <?php include 'form_01.php';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <!-- Carousel End -->


        <!-- ------------------------------------------------------------------------------------------------------------ -->
        <section class="py-5 bg-grey" id="programmes">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3 class="text-center fw-bold text-golden pb-md-3 pb-0 ">PROGRAMMES OFFERS</h3>
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
                        data-bgimg="<?= LINK; ?>images/iigj/scholership/<?= $a[$i];?>.png"  loading="lazy"  alt="">

                        <div class="box-001 <?= $c[$i];?>">
                            <img src="images/iigj/scholership/icons/<?= $a[$i];?>.png" width="34" class="filter" loading="lazy"  alt="">
                            <h4 class="text-white mt-2"><?= $e[$i];?></h4>
                            <p>IIGJ's Certificate Courses are offered in a variety of gem and jewellery topics to suit
                                different requirements. These are of short duration and are useful for all who wish to
                                learn something new in jewellery or to upgrade existing skills.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn c_btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?= $a[$i];?>"> Read More </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $a[$i];?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-golden fw-bold" id="exampleModalLabel">
                                                <?= $e[$i];?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark">
                                            <div class="table-responsive center_tagline">
                                                <?= $g[$i];?>
                                            </div>
                                            <div class="text-center overlap_modal">

                                                <a href="<?= LINK; ?>" class="btn c_btn py-2 px-3 ms-2 mt-3 "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal_<?= $a[$i];?>">Know
                                                    More</a>

                                                <div class="modal fade" id="exampleModal_<?= $a[$i];?>" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel_<?= $a[$i];?>"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content bg-white">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title pratafon text-golden"
                                                                    id="exampleModalLabel_<?= $a[$i];?>">
                                                                    Enquire
                                                                    Now</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
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
                    data-bgimg="<?= LINK; ?>images/iigj/course/bg_02.jpg"  loading="lazy"  alt="">
                    <div class="col-md-6">
                        <div class=" text-white">
                            <h3 class="mb-0 text-white fw-bold">FIND YOUR COURSE <br><br></h3>
                            <p>Pursue the Futuristic course of your choice. Select your Programme and Specialization from the
                                list below:</p>
                        </div>
                        <div class="">
                            <div class="form_01 my-md-3 w-100 ">
                                <form class="enqui_form_ai" action="" method="post">
                                    <div class="">
                                        <!-- <h3 class="t-lgreen pb-3 text-blue" id="exampleModalLabel">Apply Now</h3> -->
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <select class="form-select dept_01 form_servi"
                                                        placeholder="graduation" name="n_graduation">
                                                        <option selected disabled>Select Programmes</option>
                                                        <option value="under-graduation">DEGREE PROGRAMMES</option>
                                                        <option value="post-graduation">POST GRADUATE DIPLOMA PROGRAMMES</option>
                                                        <option value="diploma">DIPLOMA PROGRAMMES</option>
                                                        <option value="certificate">CERTIFICATE COURSES</option>
                                                        <option value="short-term">SHORT TERM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <select class="form-select course_01  form_deptart" name="n_dept">
                                                        <option selected value disabled="">Select Specialization</option>
                                                        <?php 
                                                            foreach ($b as $k => $v) {
                                                                // print_r($k);
                                                                ?>
                                                        <optgroup CLASS="text-capitalize" label="<?= $k;?>" class="d-none">
                                                            <?php 
                                                            foreach ($v as $k1 => $v1) {
                                                                // print_r($k1);

                                                            ?>
                                                            <option data-course="<?= $k;?>" value="<?= $k1;?>">
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


                                                <div class="modal fade" id="exampleModal_01" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <?php 
                                                            foreach ($b as $k => $v) {
                                                            foreach ($v as $k1 => $v1) {
                                                                // print_r($k1);
                                                        ?>
                                                    <div class="modal-dialog course_data d-none modal-lg "
                                                        label="<?= $k1;?>">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-golden text-start">
                                                                <h1 class="modal-title fs-5 text-uppercase  text-white"
                                                                    id="exampleModalLabel_form"><?= $k1;?></h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-start">
                                                                <h3 class=""><?= $v1['head']; ?></h3>
                                                                <div class="">
                                                                    <p><b>Course Location :</b> <?= $v1['location']; ?>
                                                                    </p>
                                                                    <p><b>Course Duration :</b> <?= $v1['duration']; ?>
                                                                    </p>
                                                                    <p><b>Eligibility :</b> <?= $v1['elebligity']; ?>
                                                                    </p>
                                                                    <p><b>Course Overview & Career Options
                                                                            :<br></b><?= $v1['overview']; ?></p>
                                                                </div>
                                                                <div class="text-center overlap_modal">

                                                                    <a href="<?= LINK; ?>"
                                                                        class="btn c_btn py-2 px-3 ms-2 mt-3 "
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModal_<?= $k1;?>">Know
                                                                        More</a>

                                                                    <div class="modal fade" id="exampleModal_<?= $k1;?>"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel_<?= $k1;?>"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content bg-white">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title pratafon text-golden"
                                                                                        id="exampleModalLabel_<?= $k1;?>">
                                                                                        Enquire
                                                                                        Now</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
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
                        <p>Indian Institute of Gems & Jewellery offers a variety of programmes/courses of varying
                            durations from its 5 centres. Click on the type of programme/course that interests you and
                            follow the links to explore the details</p>
                        <ul class=" course_01 text-white fw-bold lh-lg mb-3">
                            <li>DEGREE PROGRAMMES</li>
                            <li>POST GRADUATE DIPLOMA PROGRAMMES</li>
                            <li>DIPLOMA PROGRAMMES</li>
                            <li>CERTIFICATE COURSES</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->



        

        <section class="bg-blue mt-md-5" id="placement">
            <div class="container py-5">
                <div class="row mb-5">
                    <h3 class="text-center text-white fw-bold ">PLACEMENT HIGHLIGHTS</h3>
                </div>
                <div class="row justify-content-center text-center">
                    <?php
                    $a = array( "22000", "37", "100");
                    $b = array( "Alumni Offers", "Years Of Legacy", "Placement Assistance");
                    $c = array( " border-end mb-4 mb-md-0", " border-end  mb-4 mb-md-0","");
                    $d = array( "+", "+", "%");
                    $e = array( "1", "2", "3");
                    for ($i=0; $i < count($a); $i++) {
                ?>
                    <div class="col-md-3 col-6 <?= $c[$i];?>">
                        <img src="images/iigj/highlights/<?= $e[$i];?>.png" class="filter" width="50px" loading="lazy"  alt="">
                        <div class=" pb-3">
                            <p class="text-white fs-4"><span
                                    class="display-4 mb-0 fw-bold text-white count"><?= $a[$i];?></span><?= $d[$i];?>
                            </p>
                            <small class="text-white"><?= $b[$i];?></small>
                        </div>
                    </div>
                    <?php
                } 
                ?>
                    <div class="text-center pt-3 pb-0">
                        <a href="<?= LINK; ?>" class="btn c_btn py-2 px-3 ms-2 mt-3 " data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Apply Now</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->


        <!-- ---------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------- -->
        <section class="py-5 bg-white" id="recruters">
            <div class="container wow fadeInUp" data-wow-delay="0.1s">
                
            <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3 class="text-center fw-bold text-golden pb-3 ">OUR RECRUTERS</h3>
                    </div>
                </div>
                <div class="row justify-content-center company">
                    <div class="col-md-10 shadow">
                        <div class="row pb-5 pb-md-0 justify-content-center text-center company_001 company-carousel owl-carousel">
                            <?php
                            for ($i=1; $i < 44; $i++) {
                            ?>
                            <div class="col-md-12 company_01">
                                <img src="images/iigj/placement/logo<?= $i+1;?>.jpg" loading="lazy"  alt="">
                            </div>

                            <?php
                            } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="bg-light py-5" id="corporatetraining">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <h3>Corporate Training</h3>
                        <p>IIGJ offers outcome-focused training programmes for the gem & jewellery industry that are
                            relevant to business needs, for improved performance/productivity of the organisation. <br>
                            These programmes, such as Retail Sales Associate & Gold Appraisal Training, are essentially
                            outlined to offer a diverse spectrum of training solutions to gem & jewellery businesses
                            through existing sets of readily available as well as customised programmes. <br>Based on
                            IIGJ’s dialogues with gem & jewellery businesses of different strengths and sizes, there has
                            emerged a compelling and ever-growing requirement for trained jewellery professionals in
                            various departments.</p>

                    </div>
                    <div class="col-md-6">
                        <div class="row benefits">
                            <h4>Three types of Corporate Training are available:</h4>
                            <?php
                            $a = array("Off-the Shelf (Retail Sales Associate and Gold Appraisal)", "Customised (As per customer’s specific requirements)", "Hire-Train-Depute");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <div class="col-md-12 img_01 pb-2">
                                <div class="d-flex align-items-center">
                                    <img src="images/iigj/benefits/arrow.jpg" width="18px" height="18px" loading="lazy"  alt="">
                                    <div class="ps-md-3">
                                        <p class="mb-0"><b><?= $a[$i];?></b></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            } 
                            ?>

                        </div>
                        <div class="row benefits">
                            <?php
                            $a = array("Retail Sales Associate", "Gold Appraisal Training");
                            $b = array(  "This 150-hour programme empowers the sales team in a jewellery company with required selling skills and product knowledge to strengthen customer management skills leading to improved sales performance.","This is a 2-day programme for corporates, such as banks, or groups of small business owners that covers modern techniques of appraising the value of gold jewellery for loans. Training sessions can be conducted in any location in India or at the Institute.");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <div class="col-md-12 img_01 pb-3">
                                <div class="d-flex align-items-center">
                                    <img src="images/iigj/benefits/star.jpg" width="18px" height="18px" loading="lazy"  alt="">
                                    <div class="ps-md-3">
                                        <p class="mb-0"><b><?= $a[$i];?></b><br><?= $b[$i];?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            } 
                            ?>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->



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
                                <iframe width="100%" height="300" src="<?= $a[$i];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5 class="fw-bold ">GJEPC's Foray into Academics & Lab Testing Services</h5>
                        <p>Since its inception in 1966, GJEPC has represented India’s gem and jewellery industry on
                            numerous international platforms. It works with the Ministry of Commerce & Industries, Govt.
                            of India, to formulate policies supporting the industry’s growth while organising numerous
                            programmes to promote exports, such as the prestigious annual India International Jewellery
                            Shows (IIJS) as well as other image-building exercises and trade meets. In its mission “To
                            enable every individual associated with the Indian gems and jewellery industry to achieve
                            their full potential” GJEPC is always engaged in activities and programmes that will further
                            strengthen India’s base in jewellery design and manufacturing capabilities</p>
                    </div>
                    <div class="col-md-6">
                        <iframe width="100%" height="315" class="rounded-3 "
                            src="https://www.youtube.com/embed/s8YA-yFK7t0?si=cnaJeUE8TJu8lujx"
                            title="YouTube video player" frameborder="0"
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
                            data-bgimg="<?= LINK; ?>images/iigj/campus/<?= $a[$i];?>.jpg"  loading="lazy"  alt="">
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
        </script>
        <!-- Start of HubSpot Embed Code -->
        <!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/45253889.js"></script> -->
        <!-- End of HubSpot Embed Code -->
</body>

</html>