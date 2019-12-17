contato

<?php
   echo "
 <section id='section-contact' class='section appear clearfix'>
    <div class='container'>

      <div class='row mar-bot40'>
        <div class='col-md-offset-3 col-md-6'>
          <div class='section-header'>
            <h2 class='section-heading animated' data-animation='bounceInUp'>Contact us</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia
              non numquam.</p>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-8 col-md-offset-2'>
          <div id='sendmessage'>Your message has been sent. Thank you!</div>
          <div id='errormessage'></div>
          <form action='' method='post' role='form' class='contactForm'>
            <div class='form-group'>
              <input type='text' name='name' class='form-control' id='name' placeholder='Your Name' data-rule='minlen:4'
                data-msg='Please enter at least 4 chars' />
              <div class='validation'></div>
            </div>
            <div class='form-group'>
              <input type='email' class='form-control' name='email' id='email' placeholder='Your Email' data-rule='email'
                data-msg='Please enter a valid email' />
              <div class='validation'></div>
            </div>
            <div class='form-group'>
              <input type='text' class='form-control' name='subject' id='subject' placeholder='Subject' data-rule='minlen:4'
                data-msg='Please enter at least 8 chars of subject' />
              <div class='validation'></div>
            </div>
            <div class='form-group'>
              <textarea class='form-control' name='message' rows='5' data-rule='required' data-msg='Please write something for us'
                placeholder='Message'></textarea>
              <div class='validation'></div>
            </div>

            <div class='text-center'><button type='submit' class='line-btn green'>Send Message</button></div>
          </form>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>
  <!-- map -->
  <section id='section-map' class='clearfix'>
    <iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15869.304415495235!2d-39.4604014!3d-6.0866935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c72a72a1e5bb104!2sMotel%20Germanos!5e0!3m2!1spt-BR!2sbr!4v1576155605556!5m2!1spt-BR!2sbr' width='100%' height='380' frameborder='0' style='border:0;' allowfullscreen=''></iframe>

  <section id='footer' class='section footer'>
    <div class='container'>
      <div class='row animated opacity mar-bot0' data-andown='fadeIn' data-animation='animation'>
        <div class='col-sm-12 align-center'>
          <ul class='social-network social-circle'>
            <li><a href='#' class='icoRss' title='Rss'><i class='fa fa-rss'></i></a></li>
            <li><a href='#' class='icoFacebook' title='Facebook'><i class='fa fa-facebook'></i></a></li>
            <li><a href='#' class='icoTwitter' title='Twitter'><i class='fa fa-twitter'></i></a></li>
            <li><a href='#' class='icoGoogle' title='Google +'><i class='fa fa-google-plus'></i></a></li>
            <li><a href='#' class='icoLinkedin' title='Linkedin'><i class='fa fa-linkedin'></i></a></li>
          </ul>
        </div>
      </div>

      <div class='row align-center copyright'>
        <div class='col-sm-12'>
          <p>&copy; GREEN Theme</p>
          <div class='credits'>
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
            -->
            Designed by <a href='https://bootstrapmade.com/'>BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  ";
  ?> 