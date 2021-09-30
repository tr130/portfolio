<?php include('inc/head') ?>
<title>Henry Golding's Portfolio | SCS Scheme</title>
</head>
<body>
  <header>
    <button id="sidebar-open">
      <span id="sidebar-open-out" class="iconify" data-icon="line-md:menu-fold-right" data-inline="false"></span>
    </button>
    <button id="sidebar-close">
      <span id="sidebar-open-in" class="iconify" data-icon="line-md:menu-fold-left" data-inline="false"></span>
    </button>
    <div id="sidebar-main" class="sidebar">
      <div class="initials"><a href="index.html">HG</a></div>
      <nav>
        <ul class="navlist">
          <li>
            <a href="aboutme.html">About Me</a>
          </li>
          <li>
            <a href="index.html#projects">My Portfolio</a>
          </li>
          <li>
            <a href="codingexamples.html">Coding Examples</a>
          </li>
          <li>
            <a href="scsscheme.html">SCS Scheme</a>
          </li>
          <li class="contact-link">
            <a href="index.html#contact">Contact Me</a>
          </li>
        </ul>
      </nav>
      <div class="social">
        <ul>
          <li>
            <a href="https://github.com/tr130" target="_blank"><span class="iconify" data-icon="akar-icons:github-fill"
                data-inline="false"></span></a>
          </li>
          <li>
            <a href="https://www.codewars.com/users/tr130" target="_blank"><span class="iconify" data-icon="cib:codewars"
                data-inline="false"></span></a>
          </li>
          <li>
            <a href="https://www.hackerrank.com/hgolding" target="_blank"><span class="iconify" data-icon="simple-icons:hackerrank" data-inline="false"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <section class="aboutme">
      <h1 class="aboutme-header">SCS / Treehouse</h1>
      <h3 class="aboutme-subtitle">Introduction to the Scion Coalition Scheme</h3>
      <p class="aboutme-text">
        The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to
        give willing candidates the opportunity to enter the industry as web developers. Under the supervision of senior
        web developers, scions generally aim to complete training within six to nine months. The course is intensive and
        therefore the level of learning achieved is extensive in a short space of time.
      </p>
      <h3 class="aboutme-subtitle">About Netmatters</h3>
      <ul class="aboutme-text">
        <li>Established in 2008</li>
        <li>Norfolk's leading technology company</li>
        <li>Winner of the Princess Royal Training Award</li>
        <li>Winner of EDP Skills of Tomorrow Award</li>
        <li>80+ staff, 2 locations across Norfolk</li>
        <li>Digital Marketing, Website & Software development & IT Support</li>
        <li>Broad spectrum of clients, working nationwide</li>
        <li>Operates to strict company values</li>
      </ul>
      <h3 class="aboutme-subtitle">Treehouse</h3>
      <p class="aboutme-text">Treehouse is an online learning community, featuring videos covering a number of topics
        from basic HTML to C# programming, iOS development, data analysis, and more. By completing courses users can
        earn points, allowing them to track their progress and see how much they've covered in certain areas.
        <br><br>Total Score: <span id="treehouse-score"></span>
        <br><a href="https://teamtreehouse.com/henrygolding2" target="_blank">teamtreehouse.com/henrygolding2</a></p>
        <div id="treehouse-badges" class="container row"><h3 class="col-12">Badges</h3></div>


      </p>
    </section>
  </main>
  <script src="https://kit.fontawesome.com/6024042655.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <script src="sidebar.js"></script>
  <script src="treehouse.js"></script>
</body>

</html>
