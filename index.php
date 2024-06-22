<?php
  include 'link.php';
//   ob_start('ob_gzhandler');
//   date_default_timezone_set('Asia/Kolkata');
//   setcookie("utm_medium", isset($_GET['utm_medium']) ? $_GET['utm_medium'] : 'Direct', strtotime(date('Y-m-d H:i:s'))+1200);
  
  $a = file_get_contents('program.json');
  $b = json_decode($a, true);
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Study Jewellery Design</title>
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
                    <img class="w-100 main-img" src="<?= LINK; ?>images/iigj/banners/1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container position-relative">
                            <div class="row align-items-center mb-90">
                                <div class="col-md-5 text-start">
                                    <span class="text-white fw-normal lh-base pt-4 pt-md-0 pb-3">FUELING FUTURES,
                                        EMPOWERING DREAMS</span>

                                    <h1 class="text-white head-text_02 "><span class="text-golden">INDIA’S
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
                                        <img src="<?= LINK; ?>images/iigj/2.jpg" alt="">
                                        <div class="box text-start ">
                                            <h4 class="text-white">EART UPTO <br> <span
                                                    class="display-2 fw-bold text-golden">100%</span><br><span
                                                    class="fs-5">to unlock your scholarly potential and pave the way for
                                                    your bright future.</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 pt-3 pt-md-0 h_abform" id="form_01">
                                    <div class="rounded-3 over_hidden pt-3 bg-white">
                                        <div class="">
                                            <h3 class=""> Admission Open 2024</h2>
                                            <h6 class="">Enquire Now</h6>
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
        <!-- Carousel End -->


        <!-- ------------------------------------------------------------------------------------------------------------ -->
        <section class="py-5 bg-grey" id="n_courses">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3 class="text-center fw-bold text-golden pb-md-3 pb-0 ">CERTIFICATE COURSES</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                        $a = array("1","2","3","4","5");
                        $b_01 = array("mt-5 mt-md-0","mt-5 ","mt-5 mt-md-0","mt-5","mt-5");
                        $c = array("box-002","","box-002","","box-002");;
                        include 'city_course.php';
                        $e = array(  "Delhi", "Jaipur", "Mumbai", "Udupi", "Varanasi",);
                        for ($i=0; $i < count($a); $i++) {
                            ?>
                    <div class="col-md-4 position-relative bg_height <?= $b_01[$i];?>"
                        data-bgimg="<?= LINK; ?>images/iigj/scholership/<?= $a[$i];?>.jpg">

                        <div class="box-001 <?= $c[$i];?>">
                            <img src="images/iigj/scholership/icons/<?= $a[$i];?>.png" width="34" class="filter" alt="">
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
                    data-bgimg="<?= LINK; ?>images/iigj/course/bg_01.jpg">
                    <div class="col-md-5">
                        <div class=" text-white">
                            <h3 class="mb-0 text-white fw-bold">FIND YOUR COURSE <br><br></h3>
                            <p>Pursue the Futuristic course of your choice. Select your Discipline and Program from the
                                list below:</p>
                        </div>
                        <div class="">
                            <?php 
                                foreach ($b as $k => $v)
                                    // print_r($k);
                                    // die;
                            ?>
                            <div class="form_01 my-md-3 w-100 ">
                                <form class="enqui_form_ai" action="" method="post">
                                    <div class="">
                                        <!-- <h3 class="t-lgreen pb-3 text-blue" id="exampleModalLabel">Enquire Now</h3> -->
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <select class="form-select dept_01 form_servi"
                                                        placeholder="graduation" name="n_graduation">
                                                        <option selected disabled>Select Discipline</option>
                                                        <option value="degree">DEGREE PROGRAMMES</option>
                                                        <option value="post-diploma">POST GRADUATE DIPLOMA PROGRAMMES
                                                        </option>
                                                        <option value="diploma">DIPLOMA PROGRAMMES</option>
                                                        <!-- <option value="certificate-courses">CERTIFICATE COURSES</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <select class="form-select course_01  form_deptart" name="n_dept">
                                                        <option selected value disabled="">Select Programme</option>
                                                        <?php 
                                                            foreach ($b as $k => $v) {
                                                                // print_r($k);
                                                                ?>
                                                        <optgroup label="<?= $k;?>" class="d-none">
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
                                            <div class="col-md-12 text-center   nav_01 d-grid table_css">
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

                                                                    <a href="<?= LINK; ?>" class="btn c_btn py-2 px-3 ms-2 mt-3 " data-bs-toggle="modal" data-bs-target="#exampleModal_<?= $k1;?>">Know More</a>

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


        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section  id="n_about">
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


        <section class="bg-blue">
            <div class="container py-5">
                <div class="row mb-5">
                    <h3 class="text-center text-white fw-bold ">PLACEMENT HIGHLIGHTS 2023-24</h3>
                </div>
                <div class="row justify-content-center text-center">
                    <?php
                    $a = array( "22000", "37", "100");
                    $d = array( "+", "+", "%");
                    $b = array( "Alumni Offers", "Years Of Legacy", "Placement Assistance");
                    $c = array( " border-end mb-4 mb-md-0", " border-end  mb-4 mb-md-0","");
                    for ($i=0; $i < count($a); $i++) {
                ?>
                    <div class="col-md-3 col-6 <?= $c[$i];?>">
                        <img src="images/iigj/scholership/icons/4.png" class="filter" width="50px" alt="">
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


        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3 class="text-center fw-bold text-golden pb-3 ">MESSAGE FROM CHAIRMAN, GJEPC</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4  infra  p-md-0">
                        <div class="row justify-content-center position-relative">
                            <div class="d-flex align-items-stretch  justify-content-center ">
                                <div class="">
                                    <div class="col-md-12 text-center pb-md-0 pb-4 ">
                                        <img src="images/iigj/chairman/1.jpg" class="student_02 rounded-3 over_hidden"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ps-md-4">
                        <p>Indian Institute of Gems & Jewellery (IIGJ) and IIGJ Research & Laboratories Center (RLC) are
                            two important initiatives of GJEPC for the sustainable development of the Indian gem &
                            jewellery industry. <br><br> IIGJ, with its new curriculum and courses as per the latest
                            requirement of the industry, aims to fulfil the widening gap between demand and availability
                            of skilled professionals for the gem & jewellery industry. Our endeavour is to harness the
                            full potential of any deserving and ambitious candidate by providing the latest,
                            industry-relevant and comprehensive curriculum. Our efforts in the past 30 years have
                            transformed the lives of thousands of students, who have been absorbed by the industry
                            doyens. <br><br> Our laboratory services through IIGJ RLC boost the confidence of buyers and
                            sellers from both domestic and overseas gem & jewellery markets. Well-established processes
                            over the last 49 years, the latest and state-of-the-art machines, and trained & experienced
                            technical staff provide accurate and unbiased reports to discerning buyers and sellers. Our
                            research findings over the years are a treasure trove for any keen entrant into this
                            exciting field. <br><br> On behalf of GJEPC, I invite each aspirant to reap rich benefits by
                            associating with IIGJ and IIGJ RLC. <br><br> Best wishes!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------ -->




        <!---our top ranked patanered end--->
        <section class="py-5 bg-grey" id="n_placement">
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
                    $a = array( "Disha Jain", "Shivam Deshmukh", "Ankita Tulsiani", "KINNARI AJMERA", "Jheel Kapadia", "Chirag Soni", "Rishik Agrawal", "Mukesh Patel", "Amrish Srivastav");
                    $b = array( "Student, IIGJ Jaipur","Student, IIGJ Jaipur","Student, IIGJ Jaipur","Student, IIGJ Mumbai","Student, IIGJ Mumbai","Student, IIGJ Mumbai","Student, IIGJ Varanasi","Student, IIGJ Varanasi","Student, IIGJ Varanasi",);
                    $c = array("I enrolled at IIGJ to get a basic know-how of jewellery designing but by the end of the        course, I acquired an advanced understanding - starting from scratch to the end of the product. Today, I am        thoroughly equipped with knowledge and skill-sets to make for a great start in the industry.", "IIGJ Jaipur is not only an institute but a platform, which helped me from                holding a pencil to design to the actual manufacturing of jewellery. IIGJ Jaipur gave a whole lot of                practical knowledge with the support of great teachers. It is one of the leading institutes with all                facilities for jewellery designing and manufacturing.", "An essential aspect of a creative designer is not being afraid to fail” and                this is exactly what is taught at IIGJ. Studying here was an exuberant experience as it gave an ideal                combination of both practical and theoretical skills, thus setting the right ground for a successful                career. Now I can say: ‘Design is not just about how it looks but how it works’", "IIGJ Mumbai is a treasure for abundance practical knowledge & in enhancing ones                creativity. During these 3 years, It's always been to learn & explore something interesting every single                day. The faculty creates such a creative vibe, that it ensures you come up with good result. It also                conducts Industrial Visits, where you can directly interact with Industry Professionals & also gives you                an opportunity to work with reputed companies. So If your aim is to be a Gem, then IIGJ is a perfect                Guide to your Success.", "This is the best place to learn everything about Jewellery. They teach you the                from the basic of jewellery and turn you to the professional jewellery maker so that you are ready to                enter the industry. The faculty are also very supportive and patient to teach you the same thing till                you donâ€™t learn They also have 3years B.A Degree course in jewellery. And also provide internship in a                well know firm and also help you with your placements for permanent job.", "It was an incredible experience, I learned the various aspect of Jewellery right                from Jewellery Designing, CAD, Diamond Grading, Gemmology and many more. This helped me a lot to learn                Jewellery Design in Absolute Detail and start my own business I must say IIGJ Mumbai is fantastic                platform for those who would like to enter the Jewellery industry or start their own business. I would                like to extend my gratitude to all faculty member for immense support and guidance.", "It was a great experience studying at IIGJ Varanasi, a memory to cherish for                lifetime. My experience at IIGJ was full of learning and grooming. I am thankful to all the faculties,                mentors and entire department for providing us with quality education. I am also thankful to IIGJ to                provide me help to setup new manufacturing unit.", "I always wanted to learn about jewellery-making, the whole procedure of learning                and making. I now have a better understanding on the techniques/materials . Now I have better knowledge                of Jewellery manufacturing process and I can utilize this knowledge to expand my business.", "IIGJ Varanasi is one of the best Institute in UP for providing Jewellery manufacturing training . I really enjoyed 1 year of my training in Diploma course. I learned a lot and now I am able to increase my efficiency in manufacturing.");;
                    for ($i=0; $i < count($a); $i++) { 
                    ?>
                        <div class="row align-items-stretch">
                            <div class="testimonial-item rounded align-items-stretch p-4 p-lg-5 mb-5">
                                <img class="mb-4" src="<?= LINK; ?>images/iigj/students/0<?= $i+1; ?>.jpg" alt="">
                                <p class="mb-4"><?= $b[$i]; ?></p>
                                <h5><?= $a[$i]; ?></h5>
                                <span class="text-dark"><?= $c[$i]; ?></span>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="row pt-5 pt-md-0 justify-content-center company-carousel owl-carousel">
                    <?php
                    for ($i=1; $i < 36; $i++) {
                    ?>
                    <div class="col-md-12 company_01">
                        <img src="images/iigj/placement/logo<?= $i+1;?>.jpg" alt="">
                    </div>

                    <?php
                    } 
                ?>
                </div>
            </div>
        </section>

        <!-- ---------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------- -->

        <section class="bg-light py-5" id="n_corporate">
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
                                    <img src="images/iigj/benefits/arrow.jpg" width="18px" height="18px" alt="">
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
                                    <img src="images/iigj/benefits/star.jpg" width="18px" height="18px" alt="">
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
        <section id="n_location">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h3 class="text-center fw-bold text-golden pb-3 ">OUR CAMPUSES</h3>
                    </div>
                </div>
                <div class="row  align-items-stretch justify-content-center ">
                    <?php
                    $a = array( "1", "2", "3","4","5");
                    $b = array(  "DELHI", "MUMBAI", "JAIPUR", "VARANASI", "UDUPI");
                    for ($i=0; $i < count($a); $i++) {
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="text-white venture_01 position-relative  bg_height_03"
                            data-bgimg="<?= LINK; ?>images/iigj/campus/<?= $a[$i];?>.jpg">
                            <div class="head-text_03 ">
                                <span class="h4 text-white fw-bold">
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