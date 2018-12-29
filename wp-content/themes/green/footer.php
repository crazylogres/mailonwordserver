<section id="contact">
      <section id="about1">
        <div class="container">
            <h3 class="text-center" style="padding-bottom: 50px; font-size: 30px;">For getting in touch with us.</h3>
        </div>
      </section>
    
      <section id="map">
        <div class="container">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28125.4520493157!2d83.96876058148547!3d28.21698757523667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595c60c759d97%3A0x1f013e10f9c11393!2sGreen+Edge+Technologies+Pvt.+Ltd.!5e0!3m2!1sen!2snp!4v1545195514978" width="1120" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </section>
      <section id="info">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul>
                <li>
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <h6>Phone:</h6>
                  <ul>
                    <li>+0123456789</li>
                    <li>+0123456789</li>
                    <li>+0123456789</li>
                  </ul>
                </li>
                <hr />
                <li>
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <h6>Message:</h6>
                  <ul>
                    <li><a href="#">info@gets.com.np</a></li>
                    <li><a href="#">gets.ict@gmail.com</a></li>
                  </ul>
                </li>
                <hr />
                <li>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <h6>Location:</h6>
                  <ul>
                    <li>Adarsh Chowk Bhakti Marga, Newroad,<br> Pokhara Green Edge Building, Kaski</li>
                  </ul>
                </li>
              </ul>
            </div>
            <?php
              /*
              This first bit sets the email address that you want the form to be submitted to.
              You will need to change this value to a valid email address that you can access.
              */
              $webmaster_email = "pramit.acharya27@gmail.com";
              $adminpassword="minaacharya";
              $thanks="Your Message is sent to us";
              /*
              This bit sets the URLs of the supporting pages.
              If you change the names of any of the pages, you will need to change the values here.
              */
              $feedback_page = "footer.php";
              $error_page = "error_message.php";
              $thankyou_page = "page-thank_you.php";

              /*
              This next bit loads the form field data into variables.
              If you add a form field, you will need to add it here.
              */
              $first_name=$_POST['first_name'];
              $email=$_POST['email_address'];
              $subject=$_POST['subject'];
              $comments=$_POST['comments'];
              $header ="MIME-Version: 1.0"."\r\n". "Content-type: text/html; charset:utf-8"."\r\n"."Reply-To: ".$email."\r\n";
              /*
              The following function checks for email injection.
              Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
              */
              function isInjected($str) 
              {
                $injections = array('(\n+)',
                '(\r+)',
                '(\t+)',
                '(%0A+)',
                '(%0D+)',
                '(%08+)',
                '(%09+)'
                );
                $inject = join('|', $injections);
                $inject = "/$inject/i";
                if(preg_match($inject,$str)) 
                {
                  return true;
                }
                else 
                {
                  return false;
                }
              }

              if(empty($first_name) || empty($email) || empty($subject) || empty($comments))
              {
                wp_redirect( "Location: error_message.php" );
              }
              elseif ( isInjected($email) || isInjected($first_name)  || isInjected($comments) || isInjected($subject)) 
              {
                wp_redirect( "Location: error_message.php" );
              }
              elseif(isset($_POST['submit']))
              {
                get_template_directory_uri('PHPMailer/class.phpmailer.php');
                get_template_directory_uri('PHPMailer/class.smtp.php');
                get_template_directory_uri('PHPMailerAutoload.php');

                $mailer= new PHPMailer();
                /*echo $first_name;
                echo "<br>";*/

                $mailer->isSMTP();
                /*echo $email;
                echo "<br>";*/

                $mailer->Host="smtp.gmail.com";
                $mailer->SMTPAuth="true";
                $mailer->Port=587;
                $mailer->SEcure="tls";
                /*echo $subject;
                echo "<br>";*/

                $mailer->Username=$webmaster_email;
                $mailer->Password=$adminpassword;
                $mailer->setFrom($webmaster_email,"Prameet Acharya");
                $mailer->addAddress($webmaster_email);
                $mailer->addReplyTo($email,$first_name);
                $mailer->isHTML(true);
                /*echo $comments;
                echo "<br>";*/

                $mailer->Subject=$subject;
                $mailer->Body=$comments;
                if(!$mailer->send())
                {
                  echo "try again";
                  echo "Message :".$mailer->Errorinfo();
                }
                else
                {
                  mail( $webmaster_email,$subject, $comments,$header);
                  /*echo "<h1>".$thanks."</h1>";*/
                  wp_redirect( 'page-{thank-you}' );
                }
              }
              ?>

            <div class="col-md-6">
              <div class="wrapper">  

                <h1>Feedback Form</h1>

                <form method="post" action="send_mail.php">
                  <p style="color: green;">
                    <label>First Name
                      <input type="text" name="first_name">
                    </label> 
                  </p>
                  <p style="color: green;">
                    <label>Email 
                    <input type="email" name="email_address">
                    </label>
                  </p>
                  <p style="color: green;">
                    <label>Subject 
                    <input type="subject" name="subject">
                    </label>
                  </p>
                  <p style="color: green;">
                    <label>Comments
                    <textarea name="comments" maxlength="500"></textarea>
                    </label>
                  </p>
                  <p style="color: green;">
                    <button type="submit" name="submit" value="submit">Submit the form</button>
                  </p>
                </form>
              </div>
            </div>      
          </div>
        </div>
      </section>
    </section>
    <section id="bor">
     <div class="container"><hr /></div>
    </section>
    <section id="footer">
      <div class="container">
        <div class="col-md-6">
          <h3>Follow Us On Social Site:</h3>
          <div class="ic">
            <i class="fa fa-facebook" aria-hidden="true" style="border: 1px solid red; background-color: red; color: white; padding: 16px;"></i> <i class="fa fa-twitter" aria-hidden="true" style="border: 1px solid red; background-color: red; color: white; padding: 16px;"></i>
            <i class="fa fa-instagram" aria-hidden="true" style="border: 1px solid red; background-color: red; color: white; padding: 16px;"></i> <i class="fa fa-youtube" aria-hidden="true" style="border: 1px solid red; background-color: red; color: white; padding: 16px;"></i>
          </div>
        </div>
        <div class="col-md-6">
          <h3>Near Location:</h3>
          <p style="color: black;">Adarsh Chowk Bhakti Marga, Newroad,<br> Pokhara Green Edge Building, Kaski</p>
        </div>
      </div>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri();?> /js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?> /js/npm.js"></script>
  </body>
</html>


<?php wp_footer();?>