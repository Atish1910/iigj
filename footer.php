    <!-- Footer Start -->
    <div class="container bg-gray footer wow fadeIn" data-wow-delay="0.1s" id="n_contact">
        <!-- <div class="container"> -->
        <div class="row ">
            <div class="col-md-4 wow slideInUp py-5 footer_01">
                <div class="p-3 p-md-0">
                    <h4 class="text-yellow mb-3 fw-bold">Our Institute</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bagmal Laxmichand Campus, 111/2, Road
                            No. 13, M.I.D.C. Andheri (E), Mumbai 93.</p>
                        <p class="mb-2"><a href="tel:+91-88790 26633"><i class="fa fa-phone-alt me-3"></i>+91 22 4290
                                6666,
                                +91-88790 26633.</a></p>
                        <p class="mb-2"><a href="mailto:admissions@iigj.ac.in"><i
                                    class="fa fa-envelope me-3"></i>admissions@iigj.ac.in</a></p>
                </div>
            </div>
            <div class="col-md-8 py-5">
                <h4 class="text-yellow mb-3 fw-bold">IIGJ’S Courses</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul><small><b>DEGREE PROGRAMMES</b></small>
                                <li><small>B.Des In Jewellery Design (4 Years) - Jaipur</small></li>
                                <li><small>B.A. In Gem & Jewellery Design (3 Years) - Mumbai</small></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul><small><b>POST GRADUATE DIPLOMA PROGRAMMES</b></small>
                                <li><small>PG Diploma in Jewellery Management - Mumbai</small></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul><small><b>DIPLOMA PROGRAMMES</b></small>
                                <li><small>Design - Manual</small></li>
                                <li><small>Design - CAD (Rhinoceros & Matrix)</small></li>
                                <li><small>Manufacturing</small></li>
                                <li><small>Gemmology</small></li>
                            </ul>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-3 mb-md-0">
                    &copy; <?= date('Y'); ?> <a class="fw-bold text-light" href="#">IIGJ</a>, All Right
                    Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg bg-dark text-white btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <button type="button" class="btn c_btn rounded-pill px-4 right_button " data-bs-toggle="modal"
        data-bs-target="#exampleModal">Apply Now</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-golden">
                <div class="modal-header">
                    <h5 class="modal-title pratafon text-white" id="exampleModalLabel">Enquire Now</h5>
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