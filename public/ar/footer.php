<footer>
    <section class="footer-area pos-rel pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="ftr__logo col-md-12">
                    <div class="ftr__img">
                        <img src="img/logo.png" alt="logo" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ftr__social ftr__list col-md-12">
                    <ul>
                        <li><a href="#"><img src="img/icon-instagram.png" alt="instagram icon" /></a></li>
                        <li><a href="#"><img src="img/icon-facebook.png" alt="facebook icon" /></a></li>
                        <li><a href="#"><img src="img/icon-youtube.png" alt="youtube icon" /></a></li>
                        <li><a href="#"><img src="img/icon-tumblr.png" alt="tumblr icon" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="ftr__links ftr__list col-md-12">
                    <ul>
                        <li>
                            <a href="partners.php">Partners</a>
                        </li>
                        <li>
                            <a href="success-stories.php">Success Stories</a>
                        </li>
                        <li>
                            <a href="news-and-events.php">News & Events </a>
                        </li>
                        <li>
                            <a href="career.php">Career</a>
                        </li>
                        <li>
                            <a href="contact-us.php">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row copyright-area">
                <div class="copyright-lft col-sm-12">
                    <p>Solitaire Copyright © 2020. Powered by <a href="https://www.linekw.com" target="_blank">Line.</a></p>
                </div>
            </div>
        </div>
    </section>    

    <script src="js/bootstrap.min.js"></script>
    <script>
        
        /*Scroll to top when arrow up clicked END*/

        jQuery("#langSwitch").change(function() {
            var option = jQuery(this).find('option:selected');
            window.location.href = option.data("url");
        });

        jQuery(".topbar__search__btn").on('click', function() {
           jQuery('.search-area--top').removeClass('is-hidden');
           jQuery('.search-area--top').addClass('is-active');
        });
        jQuery(".top__search__btn--bar").on('click', function() {
           jQuery('.search-area--top').addClass('is-hidden').removeClass('is-active');
        });
        jQuery( document ).on( 'keydown', function ( e ) {
            if ( e.keyCode === 27 ) { // ESC
                jQuery('.search-area--top').addClass('is-hidden').removeClass('is-active');
            }
        });
        jQuery(".menu-button").on('click', function(){
            jQuery('.hdr-navList').removeClass('is-closed').addClass('is-open');
            jQuery('body').addClass('overflow-hide');   
        });

        jQuery(".cross__icon--hover").on('click', function(){
            jQuery('.hdr-navList').addClass('is-closed').removeClass('is-open');
            jQuery('body').removeClass('overflow-hide');   
        });
        // function updateProgress(num1, num2){
        //   var percent = Math.ceil( num1 / num2 * 100 ) + '%';
        //   document.getElementById('progress').style.width = percent;
        // }
        
        // window.addEventListener('scroll', function(){
        //   var top = window.scrollY;
        //   var height = document.body.getBoundingClientRect().height - window.innerHeight;
        //   updateProgress(top, height);
        // });
    </script>
</footer>
<div class="chat-wrapper container">
    <div class="ftr__chat">
        <div class="chat__box is-hidden">
            <div class="chat__inr">
                <div class="chat__hed">
                    <h4>
                        <i><img src="img/icon_chat.png" alt="" /></i>
                        Chat
                    </h4>
                </div>
                <div class="chat__form">
                    <form action="/action_page.php">
                        <div class="form-group col-12 col-sm-12 col-md-12">
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-12">
                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-12">
                            <textarea class="form-control" rows="5" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12">
                            <button type="submit" class="chat__submit">Send <span><i class="fas fa-paper-plane"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="chat__icon">
            <div class="chat__open" id="openChat">
                <i>
                    <img src="img/icon_chat.png" alt="" />
                </i>
            </div>
            <div class="chat__open chat__cross is-hidden" id="closeChat">
                <i>
                    <img src="img/icon_cross.png" alt="" />
                </i>
            </div>
        </div>  
    </div>
</div>
<a class="ftr__topBtn" id="backTop" href="#top" return="" false="" style="display: inline;">
    <i class="fas fa-angle-up"></i>
</a>
<script>
    jQuery("#openChat").on('click', function() {
        jQuery('.chat__box').removeClass('is-hidden');
        jQuery(this).addClass('is-hidden');
        jQuery('#closeChat').removeClass('is-hidden');
    });

    jQuery("#closeChat").on('click', function() {
        jQuery('.chat__box').removeClass('is-hidden');
        jQuery(this).addClass('is-hidden');
        jQuery('.chat__box ').addClass('is-hidden');
        jQuery('#openChat').removeClass('is-hidden');
    });
    /*Scroll to top when arrow up clicked BEGIN*/
    jQuery(window).scroll(function() {
        var height = jQuery(window).scrollTop();
        if (height > 100) {
            jQuery('#backTop').fadeIn();
        } else {
            jQuery('#backTop').fadeOut();
        }
    });
    jQuery(document).ready(function() {
        jQuery("#backTop").click(function(event) {
            event.preventDefault();
            jQuery("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
    });
</script>
</main>
</body>
</html>