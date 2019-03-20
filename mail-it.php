<?php

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    // bad email
    $errorMessage = "<div class='alert alert-warning' role='alert'>please enter a valid email</div>";
    return;
} else {
  // valid email
	$to = 'paul.mcneme@gmail.com';
	$subject = 'HTML email... check!';
	$message = "
         <!DOCTYPE html>
          <html>
          <head>
            <title>email design</title>
            <style type='text/css'>
              @import url('https://fonts.googleapis.com/css?family=Maven+Pro');
              td {
                vertical-align: top;
                font-family: 'Maven Pro', sans-serif;
              }
              .default-light-font-styling {
                color: #EDEFF1;
                text-shadow: 1px 1px 2px #E8EDF3;
              }
              .default-dark-font-styling {
                color: #252729;
                font-size: 1.3rem;
                font-weight: 400;
                text-shadow: 1px 1px 2px #E8EDF3;
              }

              .npLink {
                font-size: 2.5rem;
                text-decoration: none;
                color: #252729;
                text-shadow: 1px 1px 2px #E8EDF3;
              }
              a {
                color: #252729 !important;
                text-decoration: none !important;
              }
            </style>
          </head>
          <body>
          <table border='1' align='center' cellpadding='0' cellspacing='0' width='600' style='border-collapse: collapse;'>
           <tr background='https://picsum.photos/600/?image=1056;gravity=south'>
            <td>
              <table width='100%'>
              <tr>
                <td width='20%' style='padding: 10px 10px 8px 5px;'>
                  <img src='https://nerdypilot.com/images/nerdy-4.png' alt='nerdy pilot logo' height='50px'>
                </td>
                <td width='75%' style='padding: 5px 10px 8px 5px; float:right; text-align:right;'>
                 <a href='https://nerdypilot.com' class='npLink' target='_blank'>NerdyPilot.com</a>
                </td>
              </tr>
              </table>
              <table width='100%'>
                <tr>
                <td height='200px' width='80%' style='padding-top: 50px; padding-right: 50px; padding-bottom: 50px; padding-left: 50px; vertical-align: middle; text-align: center;'>
                  <p class='default-dark-font-styling'>Thanks for visiting <span style='text-decoration: none;'>nerdypilot.com</span> and trying my emailer tool. If you are reading this (and you <span style='font-style: italic'>obviously</span> are!) then you are now witness to my awesome coding abilities.</p> 
                  <p class='default-dark-font-styling'>He's full stack AND does html emails??... whaaaaaa?</p> 
                <p class='default-dark-font-styling'>Let's make something awesome!</p>
                  <p class='default-dark-font-styling'>Don't worry, I haven't added you to any rogue email list. This will be the only email you get!</p>
                </td>
              </tr>
              </table>
            </td>
           </tr>
           <tr >
            <td bgcolor='#ffffff' style='padding: 75px 20px 75px 20px;'>
             <table cellpadding='0' cellspacing='0' width='100%'>
                <tr>
                  <td style='text-align: center;'>
                    <a href='https://nerdypilot.com' class='npLink' target='_blank'>Nerdy Pilot</a>
                  </td>
                </tr>
             </table>
             <table cellpadding='0' cellspacing='0' width='100%'>
                <tr>
                  <td style='text-align: center;'>
                    <span class='default-dark-font-styling'> making the world <span style='text-decoration: line-through'>wide web</span> a better place through code!</span>
                  </td>
                </tr>
             </table>
            </td>
           </tr>
           <tr>
            <td bgcolor='#70bbd9' height='55px' style='text-align: center; vertical-align: middle;'>
             <span class='default-dark-font-styling'>Here's some things I do...</span>
            </td>
           </tr>
           <tr>
            <td bgcolor='#ffffff' style='padding-top: 25px;'>
             <table cellpadding='0' cellspacing='0' width='100%'>
              <tr>
                <td width='33%' height='150px'>
                  <table cellpadding='0' cellspacing='0' width='100%'>
                    <tr>
                      <td style='text-align:center;'>
                        <a href='https://www.linkedin.com/in/paulmcneme/' class='npLink' target='_blank'>
                          <img src='https://nerdypilot.com/images/linkedin-icon.png' alt='I am on Linked In' height='100px' display='block'>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td style='text-align:center; padding-top: 10px;'>
                        <span class='default-dark-font-styling'>I Link</span>
                      </td>
                    </tr>
                  </table>
                </td>
                <td width='33%' height='150px'>
                  <table cellpadding='0' cellspacing='0' width='100%'>
                    <tr>
                      <td style='text-align:center;'>
                        <a href='https://stackoverflow.com/users/8650157/awp?tab=profile' class='npLink' target='_blank'>
                          <img src='https://nerdypilot.com/images/stack-icon.png' alt='I am on Linked In' height='100px' display='block'>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td style='text-align:center; padding-top: 10px;'>
                        <span class='default-dark-font-styling'>I Stack</span>
                      </td>
                    </tr>
                  </table>
                </td>
                  <td width='33%' height='150px'>
                  <table cellpadding='0' cellspacing='0' width='100%'>
                    <tr>
                      <td style='text-align:center;'>
                        <a href='https://playoverwatch.com/en-us/career/pc/AWP-11854' class='npLink' target='_blank'>
                          <img src='https://nerdypilot.com/images/overwatch-icon.png' alt='I am on Linked In' height='100px' display='block'>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td style='text-align:center; padding-top: 10px;'>
                        <span class='default-dark-font-styling'>I Overwatch</span>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
             </table>
            </td>
           </tr>
           <tr>
            <td bgcolor='#70bbd9' style='text-align:center;'>
              <p class='default-dark-font-styling'>But that's not all!</p>
              <p class='default-dark-font-styling'>...let's go on a coding adventure!</p>
              <p style='font-size:0.7rem;text-align: right;padding: 0 4px 0 8px;''><span style='padding: 0 4px 0 4px;'>&copy;</span>copyright 2019, all those rights reserved</p>
            </td>
           </tr>
          </table>
          </body>
          </html>

          	";
          $headers[] = "MIME-Version: 1.0";
          $headers[] = 'Content-type: text/html; charset=iso-8859-1';
          $headers[] = 'From: Nerdy Pilot <paul@nerdypilot.com>';
          $headers[] = 'Reply-To: Paul <paul.mcneme@gmail.com>';
          $headers[] = 'Bcc: paul.mcneme@gmail.com';
          $headers[] = 'X-Mailer: PHP/' . phpversion();
          $success = mail($to, $subject, $message, implode("\r\n", $headers));
          if (!$success) {
            $errorMessage = "<div class='alert alert-warning' role='alert'>error_get_last()['message']</div>";
          } else {
            $errorMessage = "<div class='alert alert-success' role='alert'>Email sent!</div>";
          }
      } // if valid email

    } // if POST
?>

<!DOCTYPE html>
<html>
<head>
	<title>Send it! - HTML emailer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style type="text/css">
    #email-status {
      height: 35px;
      width: 100%;
      text-align: center;
    }
    #form-div {
      width: 80%;
      margin: 30px auto;
      text-align: center;
    }
    #email {
      width: 80%;
      display: inline;
      margin: 15px auto;
    }
    #sendButton {
      margin-left: 15px;
    }
    #inside-form-div {
      width: 70%;
      margin: 0 auto;
    }
    #captcha-div {
      text-align: center;
      margin: 15px auto;
    }
    .g-recaptcha {
        display: inline-block;
    }

    #terms {
      border: 1px solid black;
      border-radius: 8px;
      width: 55%;
      margin: 40px auto;
      padding: 10px;
    }

  </style>
</head>
<body>
    <div class="container">
      <div id="email-status"><?php echo $errorMessage; ?></div>
      <div id="form-div">
        <div id="instructions">Enter email below to receive a nice html email from nerdypilot.</div>
      	<form method="POST" action="mail-it.php" id="form">
          <div class="form-row" id="inside-form-div">
            <input type="email" name="email" id="email" placeholder="email address" required>
          </div> 
          <div class="container" id="captcha-div">
            <div class="g-recaptcha" data-sitekey="6Le7wpgUAAAAAAi4BDIseONVz0xL1-zZPAZS7bPh"></div>
          </div>
      		<button type="button" class="btn btn-primary" id="sendButton">send it!</button> 
      	</form>
      </div>
      <div id="terms">
        <p style="font-size:1.2rem;">Why this page?</p>
        <p>I initially set out to demonstrate that I could write an html email... well, I did that. Then I realized I needed a site to actually send the email. Here it is.</p>
        <p style="font-size:1.2rem;">Privacy policy:</p>
        <p> I won't collect your email address to send you spam. Deal?</p>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $('#sendButton').click(function(){
        $('#form').submit();
      });
    </script>
  </body>
</html>

