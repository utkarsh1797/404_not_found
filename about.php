<?php

/* This project is Devloped By : Amit Gupta 
 * +91 9810980641 
 Amit Gupta */

require_once './include/constants_files.php';
require HEADER;
?>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="about-us.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>  

<style>
.separator-type, .title-type, .intro-type, .content-type .intro-type p {
    position: relative;
}
.intro-type .container {
    padding: 107px 0px 102px 0px !important;
}
#product-header-section, .intro-type .container {
    padding: 68px 15px 72px !important;
}
@media (min-width: 1630px)
.container {
    width: 1630px;
}
.parallax {
    background-attachment: inherit !important;
}
.parallax {
    background-attachment: inherit !important;
    background-repeat: repeat;
    background-size: cover;
    position: absolute;
    top: 0px;
    bottom: 0px;
    width: 100%;
    z-index: -10;
}
.company-heading h1 {
    margin-bottom: 40px;
    line-height: 80px;
    color: #fff;
    font-weight: 700 !important;
    text-align: center;
}
.seo-header, .product-header, .intro-type .container h1.white, .company-heading h1 {
    font-family: 'Raleway', sans-serif;
    font-weight: 100 !important;
    text-transform: capitalize;
    font-size: 65px;
    margin-bottom: 20px;
}
.company-sections h2, .careers-sections h2, .perks-section h2 {
    font-weight: 800;
    font-size: 50px;
}
.company-sections h2, .company-sections h3, .careers-sections h2, .perks-section h2 {
    font-family: 'proxima-nova', sans-serif;
}
.company-sections h3 {
    font-size: 25px;
    font-weight: 700;
    margin: 14px 0;
    font-family: 'proxima-nova', sans-serif;
    text-transform: capitalize;
}
.red-border {
    width: 50%;
    border-bottom: 1px solid #d2282e;
    margin: 0 auto;
    height: 16px;
}
.company-sections p {
    margin-top: 20px;
}
.ct-u-size22 {
    font-size: 22px;
}
.ct-u-fontWeight300 {
    font-weight: 300;
}
.marginTop40 {
    margin-top: 40px !important;
}
.ct-u-paddingBoth100 {
    padding: 100px 15px;
}
.culture-section {
    background: linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, 0.45)), url(https://www.solodev.com/assets/culture.jpg) top no-repeat;
    /* background-color: #095c87; */
    /* color: #fff; */
}
.company-sections, .careers-sections, .left-headquarter-section-img, .right-headquarter-section-img {
    text-align: center;
}
.ct-u-paddingBoth100 {
    padding: 100px 15px;
}
.company-sections h2, .careers-sections h2, .perks-section h2 {
    font-weight: 800;
    font-size: 50px;
}
.company-sections h2, .company-sections h3, .careers-sections h2, .perks-section h2 {
    font-family: 'proxima-nova', sans-serif;
}
.slick-slider {
    margin-bottom: 0;
}
.slick-slider {
    position: relative;
    display: block;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}
.slick-slider .slick-track, .slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}
.slick-list {
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slider .item {
    overflow: hidden;
}
.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
.logos {
    margin-right: -5px;
    margin-left: -5px;
}
ul.logos li {
    cursor: pointer;
}
.logos > li {
    float: left;
    width: 16.66666%;
    padding: 5px;
}
.logos .logos-inner {
    position: relative;
}
.slick-slide img {
    display: inline-block;
}
.logo-image {
    position: relative;
    width: 100%;
}
ul.logos li {
    cursor: pointer;
}
.logos > li {
    float: left;
    width: 16.66666%;
    padding: 5px;
}
.logos .logos-inner {
    position: relative;
}
.slick-slide img {
    display: inline-block;
}
img {
    display: inline-block;
    max-width: 100%;
    vertical-align: middle;
}
.fa {
  font-size: 42px;
}
.btn-solodev-red-reversed {
    background-color: #fff;
    color: #d2282e;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    padding: 12px 35px;
}
.btn, .btn-blk {
    font-size: 18px !Important;
}
a:hover, a:focus {
    text-decoration: none;
}
.ct-u-size19 {
 margin-top: 40px; 
}
a:hover {
    color: #000;
}
section.clients-home .clients-logos .client-logos-repeater {
    height: 260px;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
}

section.clients-home .clients-logos .client-logos-repeater img {
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    left: 0;
    right: 0;
}
.logo-title {
    position: absolute;
    display: none;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    font-size: 16px;
    font-weight: 700;
    line-height: 16px;
    text-transform: uppercase;
    color: #FFF;
    background-color: #0079c2;
}
.ct-u-paddingBottom100 {
  margin-top: 40px;
}
.culture-section {
  background-size: cover;
  color: #fff;
}
</style>
<body>
    <div class="ct-pageWrapper" id="ct-js-wrapper">
    <section class="company-heading intro-type" id="parallax-one">
       <div class="container">
          <div class="row product-title-info">
             <div class="col-md-12">
                <h1>
                  <b><em>About Us</em></b>
                </h1>
             </div>
          </div>
       </div>
       <div class="parallax" id="parallax-cta" style="background-image:url(assets/images/maternity.png);">
          &nbsp;
       </div>
    </section>
    <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
       <div class="container text-center">
          <h2>
             WHAT DRIVES US
          </h2>
          <div class="col-md-8 col-md-offset-2">
             <div class="red-border">
                &nbsp;
             </div>
             <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">
               This app works for the betterment of the women(especially mothers). We all are well aware of the problems that are being faced by the women during pregnancy ; the unsaid problems , the upcoming problems , and the emergency situations ; each one of this is being discussed by us through this app , making women fearless to discuss anything regarding their situation. Along with the app that is trying to help women we are also proposing an AMBULANCE service solution ; basically two ways of service ; one be the regular 24*7 service being provided on one click through the app , another one being the emergency ambulance(A WELL EQUIPPED ONE) that is to be arranged during the critical labour pain situation. Through this app and website we are trying to propose a method that would help in bringing the death rate of the infants and mothers that could have been prevented if correct measures and treatment would have been done.
             </p>
             <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
          </div>
       </div>
    </section>
    <section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
       <div class="container">
          <div class="col-md-8 col-md-offset-2">
             
          </div>
          
          
       </div>
    </section>
    <section class="customers-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
    <div class="container">
       <div class="col-md-8 col-md-offset-2">
          <h2>
            <b><i>Paitents</i></b>
          </h2>
          <h3>
             <em>Trusted by some of the world&rsquo;s leading Hospitals.</em>
          </h3>
          <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60 marginTop40">
             I believe that these 9 months are very precious and one always wants them the best as anything can go wrong at any point. So it is very helpful at this time to have a good support, especially on the healthcare front especially from the doctors. Certainly, one has multiple options to select from, to go to any kind of facilities available in the city and we are happy we chose Sakra World Hospital for our baby’s arrival. The reason was very simple - I had a really good feedback for the facility as well as the doctor and our experience was also amazing when we visited the hospital for the first time. When we met Dr. Chitra we were pretty confident from the first consultation itself that we are in the right hands. Theses 9 months are definitely not easy and it has almost been a roller coaster with so many ups and downs and mostly downs. We used to panic and would get depressed at times and that is when the immense support from the doctor and her team made us feel most comfortable. So our overall experience has been very good as we have always got all the care, attention and proper treatment at all time.
          </p>
       </div>
       <div class="clearfix">
          &nbsp;
       </div>
    </div>
    </header>
    <main>
       <div class="container-fluid ct-u-paddingTop40 ct-u-paddingBottom100">
          <div class="row">
             <div class="col-md-12 ct-content">
                <section class="clients-home">
                   <div class="container">
                      <div class="clients-logos text-center">
                         <!-- starting row div -->
                         <div class="row">
                            <div class="col-md-4 client-logos-repeater">
                               <a href="/path/to/detail/zeina.html" class="Appolo"><img src="assets/images/Hospital/Apollo-Hospitals.png" width="110px"></a>
                               <div class="logo-title">
                                  <div class="displayTable">
                                     <div class="displayTableCell">
                                        <b><i>Apollo-Hospital</i></b>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4 client-logos-repeater">
                               <a href="/path/to/detail/logic.html" class="Logic"><img src="assets/images/Hospital/Capital-Hospitals.png"width="110px"></a>
                               <div class="logo-title">
                                  <div class="displayTable">
                                     <div class="displayTableCell">
                                        <b><i>Capital-Hospital</i></b>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4 client-logos-repeater">
                               <a href="/path/to/detail/smart.html" class="Smart"><img src="assets/images/Hospital/Fortis-Hospitals.png"width="110px"></a>
                               <div class="logo-title">
                                  <div class="displayTable">
                                     <div class="displayTableCell">
                                        <b><i>Fortis-Hospital</i></b>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-4 client-logos-repeater">
                               <a href="/path/to/detail/softtech.html" class="Softtech"><img src="assets/images/Hospital/MaxCure-Hospitals.png"width="110px"></a>
                               <div class="logo-title">
                                  <div class="displayTable">
                                     <div class="displayTableCell">
                                        <b><i>MaxCure-Hospital</i></b> 
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4 client-logos-repeater">
                               <a href="/path/to/detail/wheel.html" class="Wheel"><img src="assets/images/Hospital/Max-logo.png"width="110px"></a>
                               <div class="logo-title">
                                  <div class="displayTable">
                                     <div class="displayTableCell">
                                        <b><i>Max-Hospital</i></b>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4 client-logos-repeater">
                               <a href="/path/to/detail/3designs.html" class="3designs"><img  src="assets/images/Hospital/omni.jpg"width="110px"></a>
                               <div class="logo-title">
                                  <div class="displayTable">
                                     <div class="displayTableCell">
                                        <b><i>Omni-Hospital</i></b>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-4 client-logos-repeater">
                               <a href="/path/to/detail/heart.html" class="Heart"><img src="assets/images/Hospital/Sagar-Hospital.png"width="110px"></a>
                               <div class="logo-title">
                                  <div class="displayTable">
                                     <div class="displayTableCell">
                                        <b><i>Sagar-Hospital</i></b>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4 client-logos-repeater">
                               <a href="/path/to/detail/devtech.html" class="Devtech"><img src="assets/images/Hospital/women.jpg"width="110px"></a>
                               <div class="logo-title">
                                  <div class="displayTable">
                                     <div class="displayTableCell">
                                        <b><i>Women Healing Hospital</i></b>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4 client-logos-repeater">
                               <a href="/path/to/detail/chartz.html" class="Chartz"><img src="assets/images/Hospital/Shalby-Hospitals.png"width="110px"></a>
                               <div class="logo-title">
                                  <div class="displayTable">
                                     <div class="displayTableCell">
                                        <b><i>Shalby-Hospital</i></b>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- closing row div -->
                      </div>
                   </div>
                </section>
             </div>
          </div>
       </div>
    </main>
</body>

<?php
require_once FOOTER;
?>