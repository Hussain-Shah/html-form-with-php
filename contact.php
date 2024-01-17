<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


list ($NAME, $EMAIL, $Phone, $Website, $interested_in, $MESSAGE) = arry_values($_POST);

$html 


<!doctype html>
<html lang="en" ng-app="rilind">
<head>
<meta charset="utf-8">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="theme-color" content="#272F34" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-16x16.png">

<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/build.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/1app.min.css">
<link rel="stylesheet" type="text/css" href="css/app.min.css">

<link rel="stylesheet" href="css/bottom_contact_css.css">
<script src="js/angular/angular.min.js"></script>
<script src="js/angular/angular-sanitize.js"></script>
<script src="js/angular/moment.min.js"></script>
<script src="js/angular/aos.js"></script>
<script src="js/angular/base.min.js"></script>
<script src="js/angular/bootstrap.min.js"></script>
<script src="app.js"></script>
 
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-261522729-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-261522729-1');
</script>

 <style media="screen">
        .bg-init,
        .animsition-overlay-slide {
            z-index: 999999999009 !important;
            background-color: #9442f2 !important;
            display: block;
            background-image: url('img/logo background.jpg');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-init" ng-controller="HeaderCtrl">
  <div class="header" id="studio-header">
    <div id="menu" class="mobile-d-n">
      <a href="./home.html"><img src="img/studio/logo-03.png" alt="" class="logoja"></a>
      <div id="menu_lines" class="midnightHeader default">
        <span></span>
        <span></span>
      </div>


      <div id="logo">
        <a href="./home.html" data-animsition-out-class="overlay-slide-out-left" class="animsition-link">
          <h5>Work</h5>
        </a>
        <a href="./studio.html" data-animsition-out-class="overlay-slide-out-left" class="animsition-link">
          <h5>Studio</h5>
        </a>
        <a href="./services.html" data-animsition-out-class="overlay-slide-out-left" class="animsition-link">
          <h5>Services</h5>
        </a>
        <div class="button_collapse_navi">
          <div class="las_line"></div>
          <div class="las_line"></div>
        </div>
        <div style="position:relative; display: none;" id="open_nav">
          <a href="./webdevelopment.html" data-animsition-out-class="overlay-slide-out-left" class="animsition-link">
            <p>Web Development</p>
          </a>
          <a href="./appdevelopment.html" data-animsition-out-class="overlay-slide-out-left" class="animsition-link">
            <p>App Development</p>
          </a>
          <a href="./digitalmarkiting.html" data-animsition-out-class="overlay-slide-out-left" class="animsition-link">
            <p>Digital Marketing</p>
          </a>
          <a href="./prototype.html" data-animsition-out-class="overlay-slide-out-left" class="animsition-link">
            <p>Prototype</p>
          </a>
        </div>
        <a href="./contact.html" data-animsition-out-class="overlay-slide-out-left" class="animsition-link">
          <h5>Contact</h5>
        </a>

      </div>


    </div>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark desktop-d-n mobile_navigation_bar">

      <a href="./home.html" class="navbar-brand"><img src="img/logo-03.png" alt="" srcset=""></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <div id="nav-icon1">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav coll_mobile_nav">
          <li class="nav-item">
            <a class="nav-link animsition-link" href="./home.html">work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link animsition-link" href="./studio.html">Studio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link animsition-link" href="./services.html">services</a>
          </li>
          <li class="nav-item inner_class_tab_tag">
            <a class="nav-link animsition-link" href="./webdevelopment.html">Web Development</a>
          </li>
          <li class="nav-item inner_class_tab_tag">
            <a class="nav-link animsition-link" href="./appdevelopment.html">App Development</a>
          </li>
          <li class="nav-item inner_class_tab_tag">
            <a class="nav-link animsition-link" href="./digitalmarkiting.html">Digital Marketing</a>
          </li>
          <li class="nav-item inner_class_tab_tag">
            <a class="nav-link animsition-link" href="./prototype.html">Prototype</a>
          </li>
          <li class="nav-item">
            <a class="nav-link animsition-link" href="./contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
<div>
<div class="animsition-overlay">
<section class="contact_holder2" style = "background-image: url('img/map2.png');" >
<div class="contact_dark_section">
<div class="row">
<h2>Have an idea?</h2>
<p>Bring your next project to life. Please fill in the information below and one of our consultants
will reach out to you today!</p>
</div>
<div id="mc_embed_signup">
<form method="post" id="mc-embedded-subscribe-form" class="validate" data-netlify="true" onsubmit="submit" data-netlify-honeypot="bot-field" action="/thankyou.html/">
<div class="row input_row">
 <input name="bot-field" style="display: none;">
<!-- <input type="hidden" name="_captcha" value="false"> -->
<input type="text" value="" name="NAME" class="" id="mce-FNAME" placeholder="Full Name" required>
<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required>
<input type="text" value="" name="Phone" class="" id="mce-MMERGE4" placeholder="Phone" required>
<input type="text" value="" name="Website" class="" id="mce-MMERGE3" placeholder="Website">
<!-- <input type="hidden" name="_next" value="https://infiniti.dev/thankyou.html"> -->
<select name="interested_in" id="" class="full_width">
<option value="" selected disabled>Interested In </option>
<option value="Mobile App development">Mobile App development</option>
<option value="Web development">Web development</option>
<option value="E-commerce Marketing">E-commerce Marketing</option>
<option value="Mobile App Marketing">Mobile App Marketing</option>
<option value="B2B Marketing">B2B Marketing</option>
<option value="Lead Generation">Lead Generation</option>
<option value="Other">Other</option>
</select>
<textarea name="MESSAGE" id="mce-MMERGE2" placeholder="Message" id="" cols="30" rows="10"></textarea>

</div>
<div class="row" style="padding: 5px;">
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>

<div style="position: absolute; left: -5000px;" aria-hidden="true">
<input type="text" name="b_4d5bf31cd0d012031c3af0d1d_cbd0f44ebf" tabindex="-1" value="">
</div>
<div class="clear">
<input type="submit" value="Let's Go" name="subscribe" id="mc-embedded-subscribe" class="button_submit_a">
</div>
</div>
</form>
</div>


<div class="row footer_row_contact_">
  <ul>
  <li><a class="contact_footer">Email us here </a></li>
    <li><a href="mailto:hasnatalipersonal@gmail.com" style="text-transform:lowercase"><span>hasnatalipersonal@gmail.com</span></a></li>
  </ul>
<ul>
  <li><a href="https://goo.gl/maps/FiPUGZf1cjEhPWm59" target="_blank">5400 Ramsey st, Fayetteville,<br> North Carolina, USA</a></li>
    <li> ------------------------</li>
<li><a href="https://maps.app.goo.gl/V3K2WjQAKL1mERGG7?g_st=iw" target="_blank">Block F G 7/3, Blue Area, Islamabad,<br>
   Islamabad Capital Territory</a></li>
</ul>
<ul>
<li><a href="https://instagram.com/syed_h_a_naqvi?igshid=YmMyMTA2M2Y=">Instagram</a></li>
<li><a href="https://www.facebook.com/profile.php?id=100012656712549&mibextid=LQQJ4d">Facebook</a></li>
<li><a href="https://www.linkedin.com/company/infiniti-dev/">LinkedIn</a></li>
</ul>
</div>


</div>
<style>
  .contact_footer {
    font-size: 15px !important
  }
</style>
<div class="contact_dark_section_maps">
<div id="map">
  <div class="map_img">
  </div>

</div>
</div>

</section>
</div>
<style>
    .no_foot_spec {
        display: none !important;
        visibility: hidden !important;
    }
</style>
<script>
        function initMap() {
            var e = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                scrollwheel: !1,
                center: {
                  lat: 35.13042789166139,
                  lng: -78.86665794017601
                },
                styles: [{
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{
                        color: "#e9e9e9"
                    }, {
                        lightness: 17
                    }]
                }, {
                    featureType: "landscape",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f5f5f5"
                    }, {
                        lightness: 20
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 17
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 29
                    }, {
                        weight: .2
                    }]
                }, {
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 18
                    }]
                }, {
                    featureType: "road.local",
                    elementType: "geometry",
                    stylers: [{
                        color: "#ffffff"
                    }, {
                        lightness: 16
                    }]
                }, {
                    featureType: "poi",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f5f5f5"
                    }, {
                        lightness: 21
                    }]
                }, {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{
                        color: "#dedede"
                    }, {
                        lightness: 21
                    }]
                }, {
                    elementType: "labels.text.stroke",
                    stylers: [{
                        visibility: "on"
                    }, {
                        color: "#ffffff"
                    }, {
                        lightness: 16
                    }]
                }, {
                    elementType: "labels.text.fill",
                    stylers: [{
                        saturation: 36
                    }, {
                        color: "#333333"
                    }, {
                        lightness: 40
                    }]
                }, {
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "transit",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f2f2f2"
                    }, {
                        lightness: 19
                    }]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#fefefe"
                    }, {
                        lightness: 20
                    }]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#fefefe"
                    }, {
                        lightness: 17
                    }, {
                        weight: 1.2
                    }]
                }]
            });
            new google.maps.Marker({
                position: {
                  lat: 25.0771753,
                  lng: 55.1496346
                },
                map: e,
                icon: "img/logo-03.png"
            })
        }
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6V1PFtdP3xYfm9KQuKR618IS28g50FNY&callback=initMap">
    </script>

</div>

<span class="no_foot_spec">
<footer class="footer_main footer_general">
<div class="container">
<div class="row footer_row_contact_1">
<ul class="mobile-d-n">
<li><img src="img/studio/logo-05.jpeg" alt=""></li>
</ul>
<ul>

<li><a href="./home.html">work</a></li>
<li><a href="./studio.html">studio</a></li>
<li><a href="./services.html">services</a></li>
<li><a href="./webdevelopment.html">web development</a></li>
<li><a href="./appdevelopment.html">app development</a></li>
<li><a href="./digitalmarkiting.html">digital marketing</a></li>
<li><a href="./contact.html">contact</a></li>
</ul>
<ul>
<li><a>Email us here </a></li>
  <li><a href="mailto:hasnatalipersonal@gmail.com" style="text-transform:lowercase"><span>hasnatalipersonal@gmail.com</span></a></li>
</ul>
<ul>
<li>
<a href="https://goo.gl/maps/FiPUGZf1cjEhPWm59" target="_blank">P389+GWG, Block F G 7/3, Blue Area, Islamabad,<br>
   Islamabad Capital Territory

</a>
</li>
</ul>
<ul>
<li><a href="https://instagram.com/syed_h_a_naqvi?igshid=YmMyMTA2M2Y=">Instagram</a></li>
<li><a href="https://www.facebook.com/profile.php?id=100012656712549&mibextid=LQQJ4d">Facebook</a></li>
<li><a href="https://www.linkedin.com/company/infiniti-dev/">LinkedIn</a></li>
</ul>
</div>
</div>
</footer> </span>

<script src="js/angular/magnetCurs.js"></script>
<script src="js/home.min.js"></script>

</html>
;

$mail = new PHPMailer(true);

try {
    //Recipients
    $mail->setFrom($EMAIL, $NAME);
    $mail->addAddress('mh525456@gmail.com', 'Hussain');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $html;
    $mail->AltBody = strip_tags($html);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>