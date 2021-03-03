<?php include('header.php'); ?>

<link rel="stylesheet" href="css/jquerysctipttop.css" />

<section class="slider-area page-banner-area pos-rel mt_70" style="background-image: url('img/career_banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="slider__cont page-banner__cont col-md-12">
                <h1>Career</h1>
                <p>For a career will take oneto the correct path of education</p>
            </div>
        </div>
    </div>
</section>

<section class="career-area pos-rel">
    <div class="bg-triangle bg-triangle--flip">
        <img src="img/triangle.png" alt="triangle" />
    </div>
    <div class="container">
        <div class="row">
            <div class="career__box">
                <div class="career__inr">
                    <div class="career__form">
                        <form action="/action_page.php">
                            <div class="row">
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="email">Email address <span>*</span></label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="phNumber">Phone Number <span>*</span></label>
                                    <input type="text" class="form-control" id="phNumber">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="fName">First Name <span>*</span></label>
                                    <input type="text" class="form-control" id="fName">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="lName">Last Name <span>*</span></label>
                                    <input type="text" class="form-control" id="lName">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="role">Role <span>*</span></label>
                                    <select class="form-control" id="role">
                                        <option>Management</option>
                                        <option>Sales</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="experience">Work Experience <span>*</span></label>
                                    <input type="text" class="form-control" id="experience">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="noticePeriod">Notice Period <span>*</span></label>
                                    <input type="text" class="form-control" id="noticePeriod">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="currentCtc">Current Salary <span>*</span></label>
                                    <input type="text" class="form-control" id="currentCtc">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="expectedCtc">Expected Salary <span>*</span></label>
                                    <input type="text" class="form-control" id="expectedCtc">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="resume">Resume <span>*</span></label>
                                    <input type="file" class="form-control" id="resume">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="portfolio">Portfolio/Website URL</label>
                                    <input type="url" class="form-control" id="portfolio">
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <label for="leaving">Reason for leaving the current/previous organization</label>
                                    <textarea class="form-control" rows="5" id="leaving"></textarea>
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <label for="jobType">Job Type <span>*</span></label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Full-Time
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Internship
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Contract
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12">
                                    <button type="submit" class="career__submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-triangle">
        <img src="img/triangle.png" alt="triangle" />
    </div>
</section>



<?php include('footer.php'); ?>