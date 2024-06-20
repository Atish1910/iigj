<div class="container center_tagline admission mt-3 py-4 mt-md-0 pt-md-0">
    <ul class="row justify-content-center text-center testimonals nav nav-pills" id="pills-tab" role="tablist">
        <li class="col-md-3 d-flex justify-content-center pe-0 px-3  nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                <img src="images/chandigarh-uni/testi/1.jpg" alt=""></button>
        </li>
        <li class="col-md-3 d-flex justify-content-center px-0 nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                <img src="images/chandigarh-uni/testi/2.jpg" alt="">
            </button>
        </li>
        <li class="col-md-3 d-flex justify-content-center ps-0 nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                <img src="images/chandigarh-uni/testi/3.jpg" alt="">
            </button>
        </li>
        <li class="col-md-3 d-flex justify-content-center ps-0 nav-item" role="presentation">
            <button class="nav-link" id="pills-career-tab" data-bs-toggle="pill" data-bs-target="#pills-career"
                type="button" role="tab" aria-controls="pills-career" aria-selected="false">
                <img src="images/chandigarh-uni/testi/4.jpg" alt="">
            </button>
        </li>

    </ul>
    <div class=" tab-content testi" id="pills-tabContent">
        <div class="tab-pane  fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row justify-content-center pt-md-5">
                <?php
                    $a = array("1","1","3");
                    $b = array("<p>Among India's Top <br><b> Ranked Private Universities in the QS World University Rankings 2024 <br></b><small class='fw-normal'>(Global Rank #771-780)</small></p>","<p>Among All Private <br><b> India Universities in QS Asia University Rankings 2024</b></p>","<p>Among All Private <br><b> Indian Universities In QS World Rankings 2023</b></p>");
                    for ($i=0; $i < count($a); $i++) {
                ?>
                <div class="col-md-3 position-relative ">
                    <div class="border_img">
                        <small>RANKS</small>
                        <h2 class="display-3 fw-bold"><?= $a[$i];?> <sup class="h6">st</sup></h2>
                        <?= $b[$i];?>
                    </div>
                </div>

                <?php
                } 
                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row justify-content-center pt-md-5">
                <?php
                            $a = array("27","38","36","34","15");
                            $b = array("Universities In India By NIRF Rankings 2023","Institutions For Engineering In India By NIRF Rankings 2023","Institutions For Management Studies In India By NIRF Rankings 2023","Institutions For Pharmacy In India By NIRF Rankings 2023","Institutions For Architecture In India By NIRF Rankings 2023");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                <div class="col-md-2 position-relative">
                    <div class="border_img">
                        <small>RANKS</small>
                        <h2 class="display-3 fw-bold"><?= $a[$i];?> <sup class="h6">st</sup></h2>
                        <p>Among India's Top <br><b><?= $b[$i];?></b></p>
                    </div>
                </div>

                <?php
                            } 
                            ?>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row justify-content-center pt-md-5">
                <?php
                            $a = array("14","19","55","38","38","10");
                            $b = array("Engineering Institutions of India By Outlook I-CARE Rankings 2022","Law Colleges of India By Outlook I-CARE Rankings 2022","Sciences Colleges of India by Outlook I-Care Rankings 2022","BCA Colleges of India by Outlook I-Care Rankings 2022","BBA Institutions  of India by Outlook I-Care Rankings 2022","Mass Communication Colleges of India by Outlook I-Care Rankings 2022");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                <div class="col-md-2 position-relative">
                    <div class="border_img">
                        <small>RANKS</small>
                        <h2 class="display-3 fw-bold"><?= $a[$i];?> <sup class="h6">st</sup></h2>
                        <p>Among India's Top <br><b><?= $b[$i];?></b></p>
                    </div>
                </div>

                <?php
                            } 
                            ?>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-career" role="tabpanel" aria-labelledby="pills-career-tab">
        <div class="row justify-content-center pt-md-5">
                <?php
                            $a = array("All Engineering Programs","All CSE Programs");
                            $b = array("ABET Accreditation For Globally Recognized Engineering Programs","ABET Accreditation For Gold Standard Computer Science Programs");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                <div class="col-md-2 position-relative">
                    <div class="border_img">
                        <img src="images/chandigarh-uni/testi/abet.webp" width="80px" alt="">
                        <p><?= $a[$i];?><br><b><?= $b[$i];?></b></p>
                    </div>
                </div>

                <?php
                            } 
                            ?>
            </div>
        </div>
    </div>
</div>