<?php include('inc/head.php') ?>
<title>Henry Golding's Portfolio</title>
</head>
<body>
  <?php include('inc/menu.php') ?>
  <main>
    <div class="banner">
      <div class="greeting">      
        <h1 id="name-container"></h1>
        <h3 id="dev-container"></h3>
      </div>
      <a class="banner-link" href="#projects">Scroll down<br><i class="fas fa-2x fa-sort-down"></i></a>
    </div>
    <section class="projects row" id="projects">
      <div class="projects-container col-xs-12 col-md-6 col-lg-4">
        <a class="card" href="https://netmatters.henry-golding.netmatters-scs.co.uk" target="_blank">
          <div class="card-top">
            <img src="images/netmatters.jpg" alt="netmatters homepage" class="card-img-top">
          </div>
        <h2>Netmatters Homepage</h2>
        <p>A recreation of the Netmatters homepage, built using HTML, SCSS and Javascript. 
          Works responsively and is compatible with all browsers, including the silly ones.</p>
      </a>
      </div>
      <div class="projects-container col-xs-12 col-md-6 col-lg-4">
        <a class="card" href="https://nfi-wine-merchants.herokuapp.com" target="_blank">
          <div class="card-top">
            <img src="images/nfi-wine-merchants.jpg" alt="nfi wine merchants" class="card-img-top">
          </div>
        <h2>NFI Wine Merchants</h2>
        <p>An e-commerce app, built using Flask and SQLite. Working prototype featuring account 
          creation and administration, and the ability to make and view orders.</p>
      </a>
      </div>
      <div class="projects-container col-xs-12 col-md-6 col-lg-4">
        <a class="card" href="https://junkwars.tr130.co.uk" target="_blank">
          <div class="card-top">
            <img src="images/junkwars.jpg" alt="" class="card-img-top">
          </div>
        <h2>Junkwars</h2>
        <p>A Covid-themed homage to the BBS game 'Drugwars', written with PHP and Postgresql.</p>
      </a>
      </div>
      <div class="projects-container col-xs-12 col-md-6 col-lg-4">
        <a class="card" href="https://eastern-racing.tr130.co.uk" target="_blank">
          <div class="card-top">
            <img src="images/car_mgmt.jpg" alt="" class="card-img-top">
          </div>
        
        <h2>TR130 Car Management</h2>
        <p>A complex management system for job and parts control in a racing car company, written with Django and Postgresql.
          Customers can view service history, pay invoices and send messages to their manager. 
          Employees can log time and request parts. Managers can generate invoices, create jobs and order parts.
        </p>
      </a>
      </div>
      <div class="projects-container col-xs-12 col-md-6 col-lg-4">
        <a class="card" href="https://nim.tr130.co.uk" target="_blank">
          <div class="card-top">
            <img src="images/nim.jpg" alt="" class="card-img-top">
          </div>
        <h2>Nim</h2>
        <p>A version of Nim (as played in 'Last Year at Marienbad') written in Javascript. 
          I have programmed the computer to guarantee optimal play. The computer can be beaten, but never loses.
        </p>
      </a>
      </div>
    </section>
    <section class="contact row" id="contact">
      <div class="contact-info col-xs-12 col-md-4">
        <h2>Get in Touch</h2>
        <p>I'd love to hear from you. You can email me at:</p>
        <a href="mailto:henry@tr130.co.uk">henry@tr130.co.uk</a>
        <p>Alternatively, please fill in the contact form and I'll get back to you.</p>
      </div>
      <form class="contact-form col-xs-12 col-md-8 row" action="contact.php" method="post">
        <div class="form-group col-xs-12 col-md-6"><input class="" type="text" name="name" id="name" placeholder="Full Name*" required></div>
        <div class="form-group col-xs-12 col-md-6"><input class="" type="tel" name="phone" id="phone" placeholder="Contact Number"></div>
        <div class="form-group col-xs-12"><input class="" type="email" name="email" id="email" placeholder="Email address*" required></div>
        <div class="form-group col-xs-12"><input class="" type="text" name="subject" id="subject" placeholder="Subject"></div>
        <div class="form-group col-xs-12"><textarea class="" name="message" id="message" cols="30" rows="8" placeholder="Message*" required></textarea></div>
        <div class="form-group"><input id="submit_btn" type="submit" value="Submit"></div>
      </form>
    </section>
    <section class="up">
      <a class="up-link" href="#">
        <i class="fas fa-sort-up"></i>
        Back to top
      </a>
    </section>
  </main>
  <script src="https://kit.fontawesome.com/6024042655.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="sidebar.js"></script>
  <script src="banner.js"></script>
  <script src="contact.js"></script>
</body>
</html>
