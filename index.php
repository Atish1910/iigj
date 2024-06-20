<?php
  include 'link.php';
//   ob_start('ob_gzhandler');
//   date_default_timezone_set('Asia/Kolkata');
//   setcookie("utm_medium", isset($_GET['utm_medium']) ? $_GET['utm_medium'] : 'Direct', strtotime(date('Y-m-d H:i:s'))+1200);
  
  $a = file_get_contents('course_01.json');
  $b = json_decode($a, true);
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CUCET Application Form 2024, Registration Form, Scholarships - Chandigarh University Entrance Exam</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content=" CUCET 2024, CU Common Entrance Test, Best university in India, best university in Punjab, Universities in punjab, ugc recognized university, cu, chandigarh university"
        name="keywords">
    <meta
        content="CUCET 2024 Entrance Test and Scholarship Exam conducting by Chandigarh University for admission in Engineering, MBA, Law, Hotel Management, Journalism and Other programs."
        name="description">

    <!-- Favicon -->
    <link href="<?= LINK; ?>images/favicon.png" rel="icon">

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
                    <img class="w-100 main-img" src="<?= LINK; ?>images/chandigarh-uni/banners/1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container position-relative">
                            <div class="row align-items-center mb-90">
                                <div class="col-md-5 text-start">
                                    <span class="text-white fw-normal lh-base pt-4 pt-md-0 pb-3">FUELING FUTURES,
                                        EMPOWERING DREAMS</span>

                                    <h1 class="text-white head-text_02 "><span class="text-light-blue">INDIA’S
                                            NO.1</span><br>PRIVATE <br> UNIVERSITY</h1>
                                    <p class="">Chandigarh University Common Entrance Test (CUCET) opens the doors to
                                        global opportunities and exceptional careers, recognizing academic excellence
                                        and providing remarkable support through</p>
                                    <div class="head-text_01 ">
                                        <h6 class="mb-0 h4 text-white ">Scholarships worth</h6>
                                        <span class="display-2  position-relative  ps-5"><sup class="fs-5">$</sup>170
                                            <sub class="fs-5">CR</sub></span>
                                    </div>
                                </div>
                                <div class="col-md-3 pe-md-3  border-end ">
                                    <div class="hrad-img">
                                        <img src="<?= LINK; ?>images/chandigarh-uni/2.jpg" alt="">
                                        <div class="box text-start ">
                                            <h4 class="text-white">EART UPTO <br> <span
                                                    class="display-2 fw-bold text-light-blue">100%</span><br><span
                                                    class="fs-5">to unlock your scholarly potential and pave the way for
                                                    your bright future.</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 pt-5 pb-3  pt-md-0  h_abform">
                                    <div class="">
                                        <h3 class="text-white">CUCET APPLICATION FORM 2024</h2>
                                            <h6 class="text-white">APPLY FOR CUCET 2024 (PHASE-I)</h6>
                                            <span class="bg-red_01">REGISTRATION END DATE: 20 JUNE 2024</span>
                                    </div>
                                    <?php 
                                            include 'form_01.php'; 
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!---our top ranked patanered start--->
        <section class="pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container pb-5" id="about-us">
                <div class="row  position-relative m-top">
                    <div class="col-md-4 box_02 pb-4 pbd-md-0">
                        <div class="row  ">
                            <div class="col-md-8">
                                <h6 class=" fw-bold"><span class="h6 text-light-blue">BESTOWED WITH A+
                                        ACCREDITATION</span>
                                    BY NATIONAL ASSESSMENT AND ACCREDITATION COUNCIL (NAAC)</h3>
                            </div>
                            <div class="col-md-4 pt-3 ">
                                <img src="images/chandigarh-uni/3.jpg" class="ranking" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex  pb-4 pbd-md-0">
                        <img src="images/chandigarh-uni/4.jpg" class="img-02" alt="">
                    </div>
                    <div class="col-md-5 box_02">
                        <div class="row placements_01 h_our owl-carousel owl-carousel-vertical h-100">
                            <?php
                                for ($i=0; $i < 32; $i++) {
                            ?>
                            <div class="col-md-12 wow slideInUp ">
                                <div class="row bg-box ">
                                    <div class="col-md-8">
                                        <small class=" fw-bold">CU Rank <br>
                                            <p class="text-light-blue mb-0 fs-4">4th</p>Amongst Top Universities In Pune
                                        </small>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="<?= LINK; ?>images/chandigarh-uni/placement/<?= $i+1; ?>.png"
                                            class="ranking" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------ -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <h4 class="fw-bold">INDIA'S PREMIER SCHOLARSHIP</h4>
                    </div>
                </div>
                <div class="row ">
                    <?php
                        $a = array("1","2","3","4");
                        $b = array("mt-5 mt-md-0","mt-5 ","mt-5 mt-md-0","mt-5");
                        $c = array("","box-002","","box-002");
                        $d = array("Available By","Student Diversity from","Ensuring","Hallmark of Academic");
                        $e = array("1.30 Lakh+ <br>Students","All 28 Indian States and 8 Union Territories","Inclusivity and Equality","Accomplishment and Potential");
                        for ($i=0; $i < count($a); $i++) {
                            ?>
                    <div class="col-md-3 position-relative bg_height <?= $b[$i];?>"
                        data-bgimg="<?= LINK; ?>images/chandigarh-uni/scholership/<?= $a[$i];?>.jpg">
                        <div class="box-001 <?= $c[$i];?>">
                            <div class="">
                                <img src="images/chandigarh-uni/scholership/icons/<?= $a[$i];?>.png" width="34"
                                    class="filter" alt="">
                            </div>
                            <small class="mb-0"><?= $d[$i];?></small>
                            <h4 class="text-white"><?= $e[$i];?></h4>
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
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <h4 class="fw-bold mb-0">CHANDIGARH UNIVERSITY</h4>
                        <h2>COMMON ENTRANCE TEST (CUCET)</h2>
                        <small>Chandigarh University Common Entrance Test (CUCET 2024) is a national-level entrance exam
                            and scholarship test mandatory for admission. CUCET exam forms the basis of eligibility that
                            is mandatory for admission in Engineering, MBA, Pharmacy, LLM, and Integrated Law programs.
                            The amount of the scholarship depends on the fee of the program, the date of admission, and
                            the performance of the student in CUCET 2024.</small>
                    </div>
                </div>
                <div class="row pt-5 px-3 px-md-0">
                    <div class="col-md-4 position-relative bg_height_01 mb-5 mb-md-0"
                        data-bgimg="<?= LINK; ?>images/chandigarh-uni/test/1.jpg">
                        <div class="box-003">
                            <h2 class="text-white"><span class="text-light-blue">SEIZE <br> YOUR GOLDEN <br> CHANCE
                                    <br></span>TO EARN <br>SCHOLARSHIPS <br> WORTH </h2>
                            <div class="bg-contain position-relative head_text_02"
                                data-bgimg="<?= LINK; ?>images/chandigarh-uni/test/2.jpg">
                                <p class="text-white ps-3 mb-0"><sup>$</sup> <span class="display-2">170</span><br><sub>
                                        CRORES</sub></p>
                            </div>
                        </div>
                        <img src="<?= LINK; ?>images/chandigarh-uni/test/3.webp" class="test-img" alt="">
                    </div>
                    <div class="col-md-4 box_02  mb-5 mb-md-0">
                        <div class="">
                            <h5 class="mb-0">CUCET Phase-I</h5>
                            <p>October 2023 - June 2024</p>
                        </div>


                        <div>
                            <?php
                            $a = array("90.01 to 100 Marks:", "80 to 90 Marks:", "70 to 79.99 Marks:", "60 to 69.99 Marks:", "50 to 59.99 Marks:", "40 to 49.99 Marks:", "30 to 39.99 Marks:");
                            $b = array( "100% Scholarship", "50% Scholarship", "40% Scholarship", "30% Scholarship", "25% Scholarship", "15% Scholarship", "Eligible");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <p class="fs-5 "><?= $a[$i];?><br><span class="fs-6  fw-bold"><?= $b[$i];?></span></p>

                            <?php
                            } 
                        ?>
                            <div class="d-grid">
                                <button class="btn btn-primary">Apply Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 box_03">
                        <div class=" text-white">
                            <h5 class="mb-0 text-white">CUCET Phase-I</h5>
                            <p>October 2023 - June 2024</p>
                        </div>


                        <div>
                            <?php
                            $a = array("90.01 to 100 Marks:", "80 to 90 Marks:", "70 to 79.99 Marks:", "60 to 69.99 Marks:", "50 to 59.99 Marks:", "40 to 49.99 Marks:", "30 to 39.99 Marks:");
                            $b = array( "100% Scholarship", "50% Scholarship", "40% Scholarship", "30% Scholarship", "25% Scholarship", "15% Scholarship", "Eligible");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <p class="fs-5 text-white"><?= $a[$i];?><br><span class="fs-6  fw-bold"><?= $b[$i];?></span>
                            </p>

                            <?php
                            } 
                            ?>
                            <div class="d-grid">
                                <button class="btn btn-primary " disabled>Comming Soon</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ------------------------------------------------------------------------------------------------------------ -->
        <section class="py-5">
            <div class="container">
                <div class="row py-5 position-relative bg_height_02 px-3 px-md-0"
                    data-bgimg="<?= LINK; ?>images/chandigarh-uni/course/bg_01.jpg">
                    <div class="col-md-5">
                        <div class=" text-white">
                            <h3 class="mb-0 text-white fw-bold">FIND YOUR COURSE <br><br></h3>
                            <p>Pursue the Futuristic course of your choice. Select your Discipline and Program from the
                                list below:</p>
                        </div>
                        <div class="">
                            <?php 
                                foreach ($b as $k => $v)
                                    // print_r($v);
                                    // die;
                            ?>
                            <div class="form_01 my-md-3 w-100 ">
                                <form class="enqui_form_ai" action="" method="post">
                                    <div class="">
                                        <!-- <h3 class="t-lgreen pb-3 text-blue" id="exampleModalLabel">Enquire Now</h3> -->
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <select class="form-control form_servi" placeholder="graduation"
                                                        name="n_graduation">
                                                        <option selected disabled>Select Discipline</option>
                                                        <option value="engineering">Engineering</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <select class="form-select course_01  form_deptart" name="n_dept">
                                                        <option selected value="">Select Programme</option>
                                                        <optgroup label="engineering" class="d-none">
                                                            <?php 
                                                                $a = file_get_contents('course_01.json');
                                                                $b = json_decode($a, true);
                                                                foreach ($b as $k => $v) {
                                                                    foreach ($v as $k1 => $v1) {
                                                                    // print_r($k1);
                                                            ?>
                                                            <option data-course="engineering" value="<?= $k1;?>">
                                                                <?= $v1['head']; ?></option>
                                                            <?php 
                                                                }}
                                                            ?>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center  nav_01 d-grid table_css">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">View Program</button>
                                                <!-- Modal -->
                                                <div class="modal fade " id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <?php 
                                                        $i =0;
                                                        foreach ($v as $k2 => $v2) {
                                                        // print_r($k2);
                                                    ?>

                                                    <div class="modal-dialog course_data d-none modal-lg" label="<?= $k2;?>"
                                                        data-course="<?= $k2;?>">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-blue text-start">
                                                                <h1 class="modal-title fs-5  text-white"
                                                                    id="exampleModalLabel">Program Details for
                                                                    <?= $v2['head'];?></h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-start">
                                                                <div class="">
                                                                    <h3 class="text-blue">ELIGIBILITY & FEE DETAILS</h3>
                                                                    <p><b>Eligibility- </b><?= $v2['elebligity']; ?></p>

                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>PROGRAM FEE</th>
                                                                                <th>AMOUNT</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Semester Fee</td>
                                                                                <td><?= $v2['fees']; ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="">
                                                                    <h3 class="text-blue">CUCET PHASE I</h3>
                                                                    <table class="table table-bordered">
                                                                        <?php
                                                                        $i =0;
                                                                        foreach (($v2['table_02']) as $k4 => $v4) {

                                                                        ?>
                                                                        <thead>
                                                                            <tr>
                                                                                <?php 
                                                                                    $i = 0;
                                                                                    foreach (($v4) as $k5 => $v5) {
                                                                                    ?>
                                                                                <th><?= $k5;?></th>
                                                                                <?php
                                                                                    $i++;}
                                                                                    ?>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <?php 
                                                                                    foreach (($v5) as $k6 => $v6) {
                                                                                        // print_r($v6);
                                                                                    ?>
                                                                            <tr>
                                                                                    <td><?= $v6;?></td>
                                                                            </tr>
                                                                                    <?php
                                                                                    $i++;}
                                                                                ?>
                                                                        </tbody>
                                                                        <?php 
                                                                        }?>
                                                                    </table>

                                                                </div>
                                                                <div class="">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>OTHER FEE DETAILS</th>
                                                                                <th>AMOUNT</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Examination Fee</td>
                                                                                <td>2500/- INR</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Security</td>
                                                                                <td>2000/- INR</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                <?php 
                                                    $i++;}
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php 
                                
                            ?>
                        </div>

                    </div>
                    <div class="col-md-4 text-white border-end pt-4 pt-md-0">
                        <p>Following AIT MBA Specialized Programs are having different Scholarship slabs. <br><br>Please
                            visit the program webpage by clicking the links below for more information.</p>
                        <ul class="h_list_num list-unstyled course_01 lh-lg mb-3">
                            <li class="1"><a href="https://www.cuchd.in/bfe/" target="_blank"><i
                                        class="fa fa-link pe-3"></i>MBA Banking & Financial Engineering
                                    with SBI & Tally</a></li>
                            <li class="1"><a href="https://www.cuchd.in/management/mba-strategic-hr.php"
                                    target="_blank"><i class="fa fa-link pe-3"></i>MBA Strategic HR with AON
                                    Consulting</a></li>
                            <li class="1"><a href="https://www.cuchd.in/management/mba-fintech.php" target="_blank"><i
                                        class="fa fa-link pe-3"></i>MBA Fintech with NSE Academy</a>
                            </li>
                            <li class="1"><a href="https://www.cuchd.in/management/mba-strategic-hr.php"
                                    target="_blank"><i class="fa fa-link pe-3"></i>MBA - Strategic Human Resources
                                    (ITP)</a></li>
                            <li class="1"><a href="https://www.cuchd.in/finance-and-accounting/mba-applied-finance.php"
                                    target="_blank"><i class="fa fa-link pe-3"></i>MBA (Applied Finance)</a></li>
                        </ul>
                        <p class="h4 fw-bold text-white">NOTE: <br><span class="h6 text-white fw-normal">The average
                                outflow of scholarship will be 10%. </span></p>
                    </div>
                    <div class="col-md-3">
                        <div class=" text-white">
                            <h3 class="mb-0 text-white fw-bold">AIT MBA Specialized <br> Programs Slabs:</h3>
                        </div>


                        <div>
                            <?php
                            $a = array("90.01 to 100 Marks:", "80 to 89.89 Marks:", "70 to 79.99 Marks:", "60 to 69.99 Marks:", "50 to 59.99 Marks:", "40 to 49.99 Marks:");
                            $b = array( "40% Scholarship", "40% Scholarship", "30% Scholarship", "20% Scholarship", "15% Scholarship", "10% Scholarship");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <p class="fs-5 text-white"><?= $a[$i];?><br><span class="fs-6  fw-bold"><?= $b[$i];?></span>
                            </p>

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
        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>PROGRAMS FOR WHICH CUCET <br>
                            IS COMPULSORY:</h3>
                        <div class="row benefits">
                            <?php
                            $a = array("Bachelor of Engineering", "Bachelor of Pharmacy", "Pharm D.", "Master of Pharmacy", "Master of Pharmacy", "Master of Pharmacy", "Integrated Law programs", "Master of Business Administration (MBA) and Specialized MBA Programs", "Master of Pharmacy", "Master of Law");
                            $b = array( "(B.E.)", "(B. Pharmacy)","", "(Industrial Pharmacy)", "(Pharmaceutics)", "(Pharmacology)", "(BA+LLB, BBA+LLB, B. Com + LLB)","", "(Pharmaceutical Chemistry)", "(LLM)");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <div class="col-md-6 img_01 pb-2">
                                <div class="d-flex align-items-center">
                                    <img src="images/chandigarh-uni/benefits/arrow.jpg" width="18px" height="18px"
                                        alt="">
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
                    <div class="col-md-6">
                        <h3>ONE EXAM MULTIPLE BENEFITS</h3>
                        <p>At Chandigarh University, it is our aim to ensure that every deserving student gets the
                            opportunity to achieve success and fulfill their dreams. With CU's CUCET scholarships
                            support program, we are investing in our collective future and ensuring that students can
                            maximize their success by:</p>
                        <div class="row benefits">
                            <?php
                            $a = array("Access To Quality Education", "Assures Career Advantage", "Bridging Financial Gap", "Special Privileges For 100% Scholarship Students");
                            $b = array(  "Fulfill your dream to study at a prestigious university by receiving a merit-based scholarship.", "Earning a scholarship is prestigious. Stand out in comparison to others during your job search by earning a scholarship.", "Pursue your dreams and ambitions with CUCET scholarships. Financial constraints will not pause your academic journey.", "Students with a 100% scholarship in the CUCET 2024 will receive special privileges, such as a chance to be a part of the Board of Studies at CU.");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <div class="col-md-6 img_01 pb-3">
                                <div class="d-flex align-items-center">
                                    <img src="images/chandigarh-uni/benefits/star.jpg" width="18px" height="18px"
                                        alt="">
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


        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section>
            <div class="container py-5">
                <div class="row">
                    <h3 class="text-center fw-bold ">OUR INCREDIBLE ACHIEVEMENTS</h3>
                </div>
                <div class="row px-3 px-md-0">
                    <?php include "admission-details.php";?>
                </div>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="bg-blue pb-5">
            <div class="container py-5  mb-md-5">
                <div class="row mb-5">
                    <h3 class="text-center text-white fw-bold ">PLACEMENT HIGHLIGHTS 2023-24</h3>
                </div>
                <div class="row pb-5 mb-5">
                    <?php
                    $a = array( "9000+", "900+", "1.7CR", "54.75LPA", "20LPA", "15LPA", "10LPA", "5LPA");
                    $b = array( "Placement <br> Offers", "Company <br> Visits", "Highest International <br>Package Offered", "Highest National <br> Package Offered", "Package Offered by <br>30+ Companies", "Package Offered by <br> 50+ Companies", "Package Offered by <br> 100+ Companies", "Package Offered by <br> 400+ Companies");
                    $c = array( " border-end border-bottom", " border-end border-bottom", " border-end border-bottom", " border-bottom", " border-end", "border-end", "border-end", "");
                    for ($i=0; $i < count($a); $i++) {
                ?>
                    <div class="col-md-3 col-6 <?= $c[$i];?>">
                        <div class=" pb-3">
                            <h6 class="display-4 mb-0 fw-bold text-white"><?= $a[$i];?></h6>
                            <small class="text-white"><?= $b[$i];?></small>
                        </div>
                    </div>
                    <?php
                } 
                ?>
                    <div class="text-center pt-3 pb-5 pb-md-0">
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- <section class="bg-white"> -->
        <div class="container py-5 placements">
            <div class="row  align-items-stretch  project-carousel owl-carousel">
                <?php
                    $a = array( "1", "2", "3", "4", "5");
                    $b = array( "Dinesh Potla", " Vandana Vandana", "Abhishek Dimri", "Ameya Ohri", "Shanya Trehan");
                    $c = array( "IBM CSE Cloud <br> Computing Student", "CSE Student", "IBM CSE Cloud <Computing Student>", "CSE General <br> Student", "CSE General <br> Student");
                    $d = array( "52.11", "54.75", "44", "52.11", "51");
                    for ($i=0; $i < count($a); $i++) {
                ?>
                <div class="col-md-12 position-relative bg_height_01 pb-5 mb-md-0 px-md-4"
                    data-bgimg="<?= LINK; ?>images/chandigarh-uni/test/1.jpg">
                    <div class="company">
                        <img src="images/chandigarh-uni/placements/0<?= $a[$i];?>.webp" class="" alt="">
                    </div>
                    <div class="text-white py-5   position-relative z_index_01">
                        <h5 class="text-white display-6 mb-0"><?= $b[$i];?></h5>
                        <small><?= $c[$i];?></small>
                        <div class="head-text_03  pb-5">
                            <span class="display-2 text-yellow z_index_01  position-relative  ps-5"><sup
                                    class="fs-5">$</sup><?= $d[$i];?>
                                <sub class="fs-5">LPA</sub></span>
                        </div>
                    </div>
                    <img src="images/chandigarh-uni/placements/<?= $a[$i];?>.webp" class="student" alt="">
                </div>

                <?php
                    } 
                ?>
            </div>
        </div>
        <!-- </section> -->
        <!-- ---------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------- -->

        <section>
            <div class="container py-5 ">
                <div class="row justify-content-center company-carousel owl-carousel">
                    <?php
                    for ($i=1; $i < 17; $i++) {
                ?>
                    <div class="col-md-12 company_01">
                        <img src="images/chandigarh-uni/company/<?= $i+1;?>.webp" alt="">
                    </div>

                    <?php
                    } 
                ?>
                </div>
            </div>
        </section>
        <!-- ---------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------- -->


        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section>
            <div class="container py-5 mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3 class="text-center fw-bold ">VENTURE INTO ENTREPRENEURSHIP</h3>
                        <p class="">Nurturing leaders of tomorrow, by building the foundation for their dreams and
                            equipping them with global exposure and industry support.</p>
                    </div>
                </div>
                <div class="row  align-items-stretch ">
                    <?php
                    $a = array( "1", "2", "3");
                    $b = array( "150", "7", "50");
                    $c = array( "Start-ups running successfully", "Start-ups Recognised by Start-up India", "Companies with more than 50 Lakh Turnover");
                    for ($i=0; $i < count($a); $i++) {
                ?>
                    <div class="col-md-4 venture_01 position-relative  bg_height_03"
                        data-bgimg="<?= LINK; ?>images/chandigarh-uni/venture/<?= $a[$i];?>.webp">
                        <div class="text-white  ">
                            <div class="head-text_03 ">
                                <span class="display-2 text-yellow">
                                    <?= $b[$i];?>+
                                    <sub class="fs-5"></sub></span>
                                <p><?= $c[$i];?></p>
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




        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="bg-light-blue">
            <div class="container placements_01  students-carousel owl-carousel">
                <?php
                   $a = array( "1", "2", "3", "4", "5");
                   $b = array( "Dinesh Potla", " Vandana Vandana", "Abhishek Dimri", "Ameya Ohri", "Shanya Trehan");
                   $c = array( "IBM CSE Cloud Computing Student", "CSE Student", "IBM CSE Cloud Computing Student", "CSE General  Student", "CSE General Student");
                   $d = array( "52.11", "54.75", "44", "52.11", "51");
                   for ($i=0; $i < count($a); $i++) {
                ?>
                <div class="row justify-content-center position-relative">
                    <div class="col-md-6 text-center">
                        <img src="images/chandigarh-uni/placements/<?= $a[$i];?>.webp" class="student_02" alt="">
                    </div>
                    <div class="col-md-6  py-5  text-white">
                        <h3 class="text-white">Countless Opportunities at One Place</h3>
                        <p>There is nothing wrong in saying that Chandigarh University is a placement workshop for CSE
                            engineering. If you want to be a CSE engineer, choose Chandigarh University as it offers
                            100% placement in this sector. Thank you Chandigarh University for getting me placed in
                            Deloitte. </p>
                        <div class="">
                            <h4 class="text-white"><?= $b[$i];?></h4>
                            <span>- <?= $c[$i];?> <br> (Batch 2017-2021)</span>
                            <div class="bg-white company_01">
                                <img src="images/chandigarh-uni/placements/0<?= $a[$i];?>.webp" class="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    } 
                ?>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->


        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="feature " data-bgimg="<?= LINK; ?>images/chandigarh-uni/feature/bg_01.webp">
            <div class="container">
                <div class="row ">
                    <div class="col-md-2 bg-blue py-2 text-center logo_01 rounded-3">
                        <img src="<?= LINK; ?>images/chandigarh-uni/feature/1.webp" width="150px" alt="">
                    </div>
                </div>
                <div class="row position-relative z_index_01">
                    <div class="col-md-5 text-white">
                        <h2 class="text-white">Space Science &amp; Technology Research Center</h2>
                        <p>Kalpana Chawla Centre for Research in Space Science and Technology is paving the way for
                            advancement in space technology with discovery, research, and education. The Centre is
                            providing satellite design training to students from 21 nations and communicating with 28
                            countries that are part of the Satellite Networked Open Ground Station (SatNOGS). Hon’ble
                            Defence Minister of India, Shri Rajnath SIngh inaugurated the KCCRSST at Chandigarh
                            University.</p>
                    </div>
                    <div class="col-md-7">
                        <div class="">
                            <h2 class="text-white">DISTINCTIVE FEATURE <br>OF THE GROUND STATION</h2>
                        </div>
                        <div class="row">
                            <?php
                            $a = array(  "Can communicate with SatNOGS networked ground stations across the globe", "Research on 3D Printed Aluminum / Plastic structures that can be used in SPACE explorations", "Thermal study of materials in vacuum", "Star gazing centre", "Experimental studies on compact structures of satellite for LEO", "Experimental materials for antennae and deployment methods", "Unmanned aerial vehicle design", "Model rocketry lab");
                            for ($i=0; $i < count($a); $i++) {
                        ?>
                            <div class="col-md-6 position-relative ps-5">
                                <small class="star text-white"><?= $a[$i];?></small>
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

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 ">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/nMJV4MbwEYI?si=setnjzDV0NQEPya8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-8 text-center pt-5">
                        <h2>GAIN GLOBAL EXPOSURE THROUGH EXTENSIVE INTERNATIONAL NETWORK</h2>
                    </div>

                </div>

                <div class="row  justify-content-center">
                    <?php
                            $a = array("490","1700","340");
                            $b = array("Collaborations","Students","Internships");
                            $c = array("with Top Ranked Foreign Universities in 95+ countries","Traveled Abroad for Semester, Summer & Cultural Exchange Programs","in Walt Disney, USA (Highest in the Region)");
                            for ($i=0; $i < count($a); $i++) {
                        ?>
                    <div class="col-md-4 text-center p-md-5">
                        <h2 class="display-3 text-light-blue fw-bold mb-0"><?= $a[$i];?>+</h2>
                        <h4 class="fw-bold"><?= $b[$i];?></h4>
                        <p><?= $c[$i];?></p>
                    </div>
                    <?php
                        } 
                    ?>
                </div>

            </div>

        </section>



        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="py-5">
            <div class="container position-relative z_index_01 mb_30">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center pb-3">
                        <h2>OUR OFFICE OF INTERNATIONAL RELATIONS</h2>
                        <p>offers exclusive opportunities to explore the world</p>
                    </div>

                </div>

                <div class="row  justify-content-center">
                    <?php
                        $a = array( "INTERNATIONAL SUMMER/WINTER PROGRAMS", "SEMESTER ABROAD/EXCHANGE PROGRAMS", "HIGHER EDUCATION PROGRAMS", "GLOBAL IMMERSION PROGRAMS", "INTERNATIONAL PLACEMENTS", "SEMESTER ABROAD/EXCHANGE PROGRAMS");
                        $b = array(  "Short duration programs of 2-4 weeks are perfect way for students to balance their desire for international exposure with the academic life", "An opportunity to complete your semester abroad which further add to your international experience and let you grow your network both on personal & professional level.", "An opportunity to visit international universities for certificate programs or to pursue master's degree in decided field.", "An opportunity to be professionally attached to multinational companies and start-ups. It aims to provide CU students the experience of studying and working abroad.", "Fortune 500 Global & National Companies such as Microsoft, Google, Amazon and others have been consistently among the Top Recruiters at Chandigarh University Placement Drives.", "Fortune 500 Global & National Companies such as Microsoft, Google, Amazon and others have been consistently among the Top Recruiters at Chandigarh University Placement Drives.");
                        $c = array( "1", "2", "3", "4", "5","3");
                        for ($i=0; $i < count($a); $i++) {
                    ?>
                    <div class="col-md-4 mb-4 d-flex align-items-stretch">
                        <div class="bg-blue rounded-3 p-4 inter text-white">
                            <h4 class="text-white fw-bold"><?= $a[$i];?></h4>
                            <small><?= $b[$i];?></small>
                            <div class="pt-3">
                                <img src="images/chandigarh-uni/inter/<?= $c[$i];?>.png" alt="">
                            </div>
                        </div>
                    </div>
                    <?php
                    } 
                ?>

                </div>

            </div>
        </section>

        <section class="d-md-block d-none">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/chandigarh-uni/slider/1.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/chandigarh-uni/slider/2.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/chandigarh-uni/slider/3.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="fw-bold">WORLD-CLASS CAMPUS INFRASTRUCTURE</h2>
                        <p>Known for its academic excellence and cutting edge research, Chandigarh University boasts
                            world-class infrastructure sprawling over 250 acres.</p>
                        <div class="">
                            <h5 class="fw-bold text-blue mb-0">30+</h5>
                            <small>Industry-Sponsored Advanced Research Labs (Microsoft, HPE, IBM, RedHat, etc.)
                                <br><br></small>

                            <h5 class="fw-bold text-blue mb-0">14 CENTERS OF EXCELLENCE</h5>
                            <small>(Industry-collaborated Labs) launched on campus by top MNCs<br><br></small>

                            <h5 class="fw-bold text-blue mb-0">350+</h5>
                            <small>Corporate Mentors guide students in their research and entrepreneurial
                                endeavors<br><br></small>
                        </div>
                    </div>
                    <div
                        class="col-md-7  infra position-relative  rounded-3 over_hidden p-0  infra-carousel owl-carousel">
                        <?php
                            $a = array( "1", "2", "3", "4");
                            $b = array( "HODOPHILE is a travel company with the vision of adding unforgettable memories in the memory baskets of its customers. It organizes Group Trips, Corporate Trips, Customized Trips, etc. and has served 300 customers so far.", "I always wanted to be my own boss. So after joining CU, I immediately registered myself with Technology Business Incubator (TBI). Access to seed funding, continuous guidance and start-up support facilities at CU TBI gave me the platform to turn my idea into a business.", "An IoT system that controls the farm using Android Application and gives a real-time value of all farming necessities that are further made visible to a farmer on his smart phone application.", "SewaPoint is a Hyper-local Fintech start-up based on ITeS through which we render the mandatory Govt. & Banking services to the BoP, preferably the one residing in the rural areas.");
                            $c = array( "Apurva Chaudhary", "Jai Chachra", "Praveen Soni", "Nilesh Sinha");
                            $d = array( "Co-Founder, HODOPHILE Travel Company", "CEO- Just Charge Company", "Founder and CEO, Team DOTS", "CEO- SewaPoint, Service Consultant");
                            for ($i=0; $i < count($a); $i++) {
                        ?>
                        <div class="row justify-content-center position-relative">
                            <div class="d-flex align-items-stretch">
                                <div class="">
                                    <div class="col-md-12 text-center">
                                        <img src="images/chandigarh-uni/infra/<?= $a[$i];?>.webp" class="student_02"
                                            alt="">
                                    </div>
                                    <div class="col-md-12  bg-blue  rounded-3  px-5 py-4  text-white">
                                        <p><?= $b[$i];?></p>
                                        <div class="bg-light-blue rounded-3 d-inline-block px-3 py-2">
                                            <h4 class="text-white"><?= $c[$i];?></h4>
                                            <span><?= $d[$i];?></span>
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
            </div>
        </section>
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->



        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section>
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h3 class="text-center fw-bold ">STATE-OF-THE ART RESEARCH FACILITIES</h3>
                        <p class="">With cutting-edge laboratories and industry sponsored Centres of Excellence for
                            research, CU provides an ideal environment for engineering education.</p>
                    </div>
                </div>
                <div class="row   pt-5 facilities-carousel owl-carousel">
                    <?php
                            $a = array("1","2","3","4","5");
                            $b = array("XRD Lab","Artificial Intelligence Lab","Mol-Biology Lb","FMS Lab","3D Painting Lab");
                            for ($i=0; $i < count($a); $i++) {
                        ?>
                    <div class="col-md-12 d-flex align-items-stretch justify-content-center  city">
                        <div class="rounded-3 over_hidden">
                            <img src="images/chandigarh-uni/facilities/<?= $a[$i];?>.webp" class="" alt="">
                            <div class="d-flex align-items-center p-3  justify-content-between bg-blue">
                                <h5 class="fw-bold mb-0 text-white"><?= $b[$i];?></h5>
                                <p class="mb-0"><a href="">Read More</a></p>
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



        <!-- ------------------------------------------------------------------------------------------------------------ -->
        <section class="  position-relative bg_height_02 pt_90 rounded-0"
            data-bgimg="<?= LINK; ?>images/chandigarh-uni/city/bg_01.webp">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6">
                        <h2 class="display-3  text-white">CHANDIGARH, THE CITY BEAUTIFUL</h2>
                        <h5 class="text-white">Chandigarh has been ranked Best among States & Union Territories in the
                            field of education.- HRD Report</h5>
                    </div>
                </div>
                <div class="row   pt-5 city-carousel owl-carousel">
                    <?php
                            $a = array("Explore ","Well-Connected","Travel","Business");
                            $b = array("You can engulf yourself in the rare epitome of modernization and architectural wonder at Chandigarh. From the World Heritage site in Capitol complex to the world renowned Rock Garden there is so much to explore in this wonderful city.","Chandigarh is well connected via road, rail and recently built International airport connects the city to the world. Wide, well maintained roads and parking spaces all over the city ease local transport.","Chandigarh is in the foothills of the Shivalik Range, which means you can visit quiet and mesmerizing hill stations such as Shimla, Kasauli and Solan. Perfect for a weekend getaway to rejuvenate yourself.","Chandigarh University has become North India's central university for the IT and Service Industry. Numerous opportunities are available for young professionals such as plug and play facilities in state-of-the-art environment friendly buildings.");
                            $c = array("","","","");
                            $d = array("1","2","3","4");
                            for ($i=0; $i < count($a); $i++) {
                        ?>
                    <div class="col-md-12 d-flex align-items-stretch justify-content-center h_300 city">
                        <div class="">
                            <div class="d-flex align-items-center  justify-content-center  py-3">
                                <h2 class="fw-bold text-white mb-0 "><?= $a[$i];?></h2>
                                <i class="fab fa-instagram text-yellow ps-3 fs-2"></i>
                            </div>
                            <p class="text-white"><?= $b[$i];?></p>
                            <img src="images/chandigarh-uni/city/<?= $d[$i];?>.webp" class="" alt="">
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