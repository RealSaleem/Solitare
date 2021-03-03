<?php include('header.php'); ?>

<section class="query-area hero-section gradient-overlay contact-full-screen">

        

            <div class="row w-100 m-0">

                <div class="col-md-7">

                    <div class="left_c">

                    <a href="contact-us.php"><i><img src="img/back-btn.svg" width="20"></i> Back</a>    

                    <h1>Let’s Create Experiences Together.</h1>

                    <div class="logo_icon">

                       <img src="img/logo_icon.svg">

                    </div>

                    </div>

                </div>

                 <div class="col-md-5">

                   

                  <div class="c_form">

                      <h3>We'd love to hear from you.</h3>

                      <p>Reach out to us for any general question or just to say Hi!</p>



                      <form>

  

    <input type="text" class="form-control c-user" placeholder="Name *">

    <input type="text" class="form-control c-email" placeholder="Email *">

    <input type="text" class="form-control c-phone" placeholder="Phone">

    <textarea class="form-control c-message" placeholder="Message" rows="5"></textarea>



  <button type="submit" class="btn btn-primary">Submit</button>

</form>



                  </div>



                </div>

            </div>

        

    </section>

<script>
    //autocomplete off
    jQuery(document).ready(function () {
    	jQuery(".c_form input").attr("autocomplete", "off");
        jQuery('body').addClass('query-page');

	});
</script>