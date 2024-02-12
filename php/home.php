<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_SESSION['name'])) {

 ?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="cz"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Přihlásit se">
    <meta name="description" content="">
    <title>Dashboard</title>
    <link rel="stylesheet" href="jos.css" media="screen">
<link rel="stylesheet" href="Dashboard.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="jos.js" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../images/golden.png"
}</script>
    <meta name="theme-color" content="#34c1f4">
    <meta property="og:title" content="Dashboard">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="cz"><header class="u-black u-clearfix u-header u-header" id="sec-0205"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="home.php" class="u-hover-feature u-image u-logo u-image-1" title="Domov" data-image-width="1008" data-image-height="1008">
          <img src="../images/golden.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container" wfd-invisible="true">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-custom-color-5 u-text-grey-90 u-text-hover-palette-4-base" style="padding: 10px;">Odhlásit se</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Potvrdit</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-custom-color-5 u-text-grey-90 u-text-hover-palette-4-base" href="Dashboard.html" style="padding: 10px;">Dashboard</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><h2 class="u-align-center u-text u-text-custom-color-5 u-text-default u-text-1">Odhlásit se</h2><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a href="logout.php" class="u-button-style u-nav-link">Potvrdit</a>
</li></ul>
</div>

</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70" wfd-invisible="true"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-gradient u-section-1" id="carousel_49fc">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <a  class="u-btn u-btn-round u-button-style u-custom-color-5 u-custom-item u-hover-custom-color-5 u-radius u-btn-1">Přihlášen jako: <?php echo $_SESSION['name']; ?></a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <a  class="u-btn u-btn-round u-button-style u-custom-color-5 u-custom-item u-hover-custom-color-5 u-radius u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Přihlašovací jméno: <?php echo $_SESSION['user_name']; ?></a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <a href="logout.php" class="u-btn u-btn-round u-button-style u-custom-color-7 u-custom-item u-hover-custom-color-7 u-radius u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Odhlásit se</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-4 u-section-2" id="sec-ff7c">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-custom-color-5 u-text-default u-text-1"> Ještě to budeeee trvaaaat 😅</h2>
        <div class="u-countdown u-countdown-1" data-target-date="Sun, 12 Dec 2021 14:45:00 GMT" data-for="per-visitor" data-time-left="154000m" data-timer-id="0938" data-target-number="100" data-direction="down" data-start-time="Mon, 12 Feb 2024 21:20:32 GMT" data-frequency="10s" data-after-count="none" data-redirect-url="https://">
          <div class="u-countdown-wrapper u-spacing-20">
            <div class="u-countdown-item u-countdown-years u-custom-color-5 u-hidden u-radius-7 u-spacing-10 u-countdown-item-1">
              <div class="u-countdown-counter u-spacing-0 u-countdown-counter-1"><div class="u-countdown-number u-text-custom-color-4">0</div><div class="u-countdown-number u-hidden u-text-custom-color-4">0</div></div>
              <div class="u-countdown-label u-text-custom-color-4 u-countdown-label-1">Let</div>
            </div>
            <div class="u-countdown-separator u-hidden u-text-custom-color-4 u-countdown-separator-1">:</div>
            <div class="u-countdown-days u-countdown-item u-custom-color-5 u-radius-7 u-spacing-10 u-countdown-item-2">
              <div class="u-countdown-counter u-spacing-0 u-countdown-counter-2"><div class="u-countdown-number u-text-custom-color-4">1</div><div class="u-countdown-number u-text-custom-color-4">0</div><div class="u-countdown-number u-text-custom-color-4">6</div></div>
              <div class="u-countdown-label u-text-custom-color-4 u-countdown-label-2">Dnů</div>
            </div>
            <div class="u-countdown-separator u-text-custom-color-4 u-countdown-separator-2">:</div>
            <div class="u-countdown-hours u-countdown-item u-custom-color-5 u-radius-7 u-spacing-10 u-countdown-item-3">
              <div class="u-countdown-counter u-spacing-0 u-countdown-counter-3"><div class="u-countdown-number u-text-custom-color-4">2</div><div class="u-countdown-number u-text-custom-color-4">2</div></div>
              <div class="u-countdown-label u-text-custom-color-4 u-countdown-label-3">Hodin</div>
            </div>
            <div class="u-countdown-separator u-text-custom-color-4 u-countdown-separator-3">:</div>
            <div class="u-countdown-item u-countdown-minutes u-custom-color-5 u-radius-7 u-spacing-10 u-countdown-item-4">
              <div class="u-countdown-counter u-spacing-0 u-countdown-counter-4"><div class="u-countdown-number u-text-custom-color-4">4</div><div class="u-countdown-number u-text-custom-color-4">0</div></div>
              <div class="u-countdown-label u-text-custom-color-4 u-countdown-label-4">Minut</div>
            </div>
            <div class="u-countdown-separator u-text-custom-color-4 u-countdown-separator-4">:</div>
            <div class="u-countdown-item u-countdown-seconds u-custom-color-5 u-radius-7 u-spacing-10 u-countdown-item-5">
              <div class="u-countdown-counter u-spacing-0 u-countdown-counter-5"><div class="u-countdown-number u-text-custom-color-4">0</div><div class="u-countdown-number u-text-custom-color-4">0</div></div>
              <div class="u-countdown-label u-text-custom-color-4 u-countdown-label-5">Vteřin</div>
            </div>
            <div class="u-countdown-separator u-hidden u-text-custom-color-4 u-countdown-separator-5">:</div>
            <div class="u-countdown-item u-countdown-numbers u-custom-color-5 u-hidden u-radius-7 u-spacing-10 u-countdown-item-6">
              <div class="u-countdown-counter u-spacing-0 u-countdown-counter-6"><div class="u-countdown-number u-text-custom-color-4">0</div><div class="u-countdown-number u-text-custom-color-4">0</div><div class="u-countdown-number u-text-custom-color-4">1</div><div class="u-countdown-number u-text-custom-color-4">0</div><div class="u-countdown-number u-text-custom-color-4">0</div></div>
              <div class="u-countdown-label u-text-custom-color-4 u-countdown-label-6">Věcí</div>
            </div>
          </div>
          <div class="u-countdown-message u-hidden">
            <p>Sorry, the time is up.</p>
          </div>
        </div>
        <a class="u-active-black u-border-2 u-border-active-black u-border-black u-border-hover-black u-btn u-btn-round u-button-style u-hover-black u-none u-radius-50 u-text-active-white u-text-hover-white u-btn-1">Bude to dělo 👌</a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-a6b9"><div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-white u-text-1">JOS - Jednoduchý Operační Software </p>
    </div></footer>

</body></html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
