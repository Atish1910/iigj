    <!-- Footer Start -->
    <section class="bg-blue">

        <div class="container   py-md-3 pt-5 footer wow fadeIn" data-wow-delay="0.1s" id="">
            <!-- <div class="container"> -->
                
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                        <h3 class="text-md-center text-start fw-bold text-white pb-3 ">REACH US</h3>
                    </div>
                </div>
            <div class="row align-items-start">
                <div class="col-md-2">
                    <img src="images/iigj/logo/2.png" width="150px" alt="">
                </div>
                <?php
                    $a = array(  "Delhi", "Mumbai", "Jaipur", "Varanasi", "Udupi");
                    $b = array(  "F-Block, 1-7, Ground Floor, Flatted Factories Complex, Jhandewalan, Rani Jhansi Road, New Delhi-110055", "SP-111A, RK Derewala Tower, KGK Campus EPIP, SEZ Phase-1, Sitapura Industrial Area, Sitapura, Jaipur, Rajasthan 302022", "Bagmal Laxmichand Parikh Campus, Plot No. 111/2,13th Road, M.I.D.C., Andheri (E), Mumbai - 400 093", "Canara Complex, 1St Floor, NH- 66, Karavali Bypass, Post Ambalpadi, Udupi - 576103, Karnataka.", "5th Floor, Kuber Mall, Rathyatra Crossing Varanasi - 221010",);
                    for ($i=0; $i < count($a); $i++) {
                ?>
                <div class="col-md-2 wow slideInUp">
                    <div class="p-3 p-md-0">
                        <h5 class="text-yellow mb-3 fw-bold"><?= $a[$i];?> Campus</h5>
                            <p class="text-white fs_01"><span class="fw-bold fs-6 ">Indian Institute of Gems & Jewellery </span><br>
                            <?= $b[$i];?>
                        </p>
                    </div>
                </div>

                <?php
                    } 
                ?>
            </div>
        </div>
        <!-- Footer End -->

    </section>

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-start  text-center mb-3 mb-md-0">

                    <p class="mb-0">© Copyright  <?= date('Y'); ?>  IIGJ. Designed and developed by <img src="images/iigj/logo/3.png" width="70px" alt=""></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg bg-golden mb-3 mb-md-5 text-white btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <button type="button" class="btn c_btn rounded-pill px-4 right_button py-2" data-bs-toggle="modal"
        data-bs-target="#exampleModal">Apply Now</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title pratafon text-golden" id="exampleModalLabel">Enquire Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        include 'form_01.php'; 
                    ?>
                </div>
            </div>
        </div>
    </div>