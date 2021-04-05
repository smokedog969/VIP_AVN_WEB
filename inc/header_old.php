<!--MENU BUTTON JPANEL-->
<div class="side-menu" style="display: none;">
    <h3>Navigation</h3>
    <ul class="side-menu-navigation">
        <li><a href="#">Home</a></li>
        <li><a href="#service">Services</a></li>
        <!-- <li><a href="#clients">Clients</a></li> -->
        <li><a href="#location">Location</a></li>
        <!-- <li><a href="#team">Team</a></li> -->
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>
<header class="header">
    <div class="box container big-text">
        <div class="header-brand-wrapper">
            <!-- <a class="header-brand" href="index.php">VIP AVIATION BERLIN</a> -->
            <a href="index.php">
                <img class="header-brand" alt="Logo" src="../img/VIP_LOGO.png" width="100" height="70">
            </a>
        </div>
        <nav class="header-navbar">
            <button id="side-menu-trigger">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <ul class="header-navbar-links">
                <li><a href="#">Home</a></li>
                <li><a href="#service">Services</a></li>
                <!-- <li><a href="#clients">Clients</a></li> -->
                <li><a href="#location">Location</a></li>
                <!-- <li><a href="#team">Team</a></li> -->
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="box2 container">


        <div class="slogan">

            <!----- PHP MAILER MESSAGE ----->

            <?php if (isset($_GET['contacted'])): ?>
            <p class="contact-subheading">Message was sended</p>
            <?php endif; ?>
            <!----- PHP MAILER MESSAGE ----->

            <div class="slogan-top big-text">
                Executive Aircraft Services
            </div>
            <div class="slogan-bottom big-text">
                VIP AVIATION BERLIN
            </div>
            <a href="#service" class="button slogan-button big-text">
                Show more
            </a>
        </div>
    </div>

    <!-- ANIMATION START -->
    <!-- <div class="intro">
         <div class="intro-text">
             <div class="hide">
                 <span class="anim">FIRST CLASS HANDLING</span>
             </div>
             <div class="hide">
                 <span class="anim">FOR EXECUTIVE AND BUSINESS FLIGHTS</span>
             </div>
             <div class="hide">
                 <span class="anim">IN BERLIN</span>
             </div>
         </div>
     </div>
     <div class="slider"></div> -->
    <!-- ANIMATION END -->

</header>