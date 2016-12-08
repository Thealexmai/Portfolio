<!doctype html>
<html>
  <head>
    <?php
      $currentPage = "Home";
      include "inc/head.inc";
    ?>
  </head>

<body>

    <!-- Navigation -->
    <?php
      include "inc/nav.inc";
    ?>

    <!-- Top Section -->
    <section id="first">
      <div class="container push-down">
          <div id="introContent">
            <h1>Computer Science &amp; Business Student</h1>
            <p>Aspiring Project Manager</p>
            <p>I like to make data <em>come to life</em> by using them to tell stories.</p>
          </div><!-- .content -->
      </div><!-- .container -->

    </section>

    <section id="headerInBetween">
      <div class="container">
        <div class="column1">
          <h2>What I do</h2>
          <p>I am pursuing a double major in computer science and in business at the University of Rochester. I seek to create tech solutions to solve business needs and problems. I love application development - creating applications that are human-centered and have great user interface and design.</p>
          <img src="img/coding.jpg" alt="Photo of platform stack" class="first-icon img-responsive">
        </div>

        <div class="column2">
          <h2>What I love</h2>
          <p>I love to travel. I have been to 10 different states and four countries. I mostly visit New York City - everytime I'm there I explore a different spot. I also love to get my hands on the latest innovative technologies and experiment.</p>
          <img src="img/travel.png" alt="Icon of traveling" class="first-icon img-responsive">
        </div>

        <div class="column3">
          <h2>Where I'm from</h2>
          <p>I am from Honolulu, Hawaii. Although the state consists of mainly nine islands, I have only been to two. My goal is to explore each of the islands before permanently moving to the mainland.</p>
          <img src="img/hawaii.png" alt="Icon of Hawaii" class="first-icon img-responsive">
        </div>
      </div>
    </section>
    <!-- Second Section -->
    <section id="second" class="alternate-section">
        <div class="container">

            <h1>Accomplishments</h1>

            <div class="content">
              <article>

                <!-- Major accomplishment 1 -->
                <div class="accomplishment-wrapper">
                  <div class="section2-column1">
                    <img src="img/waldo.jpg" alt="image of Waldo" class="img-responsive">
                  </div>
                  <div class="section2-column2">
                    <h2>Waldo</h2>
                    <p>Waldo is a personal project that is also mobile-friendly. It is an app that takes information from the public and tells the number of open public study spots on the University of Rochester campus. This project was delivered in a week and is only a prototype. I am continually working on improving it. It is programmed using HTML, CSS, Bootstrap, AngularJS, Python, and SQLite.</p>
                  </div>
                </div>

                <!-- Major accomplishment 2 -->
                <div class="accomplishment-wrapper">
                  <div class="section2-column1">
                    <img src="img/akpsi.jpeg" alt="image of AKPsi logo" class="img-responsive">
                  </div>
                  <div class="section2-column2">
                    <h2>Alpha Kappa Psi</h2>
                    <p>In Alpha Kappa Psi, I have been in a few different positions. I have served as Parliamentarian, Master of Rituals, and Webmaster. During my time in these roles, I proactively reached out to the Student Association Government to update our bylaws and consitution before our renewal time was due. I created a rotational leadership program for new members to improve the onboarding process and membership retention rates. And I organized two all-day events for new member evaluation per semester.</p>
                  </div>
                </div>

                <!-- Major accomplishment 3 -->
                <div class="accomplishment-wrapper">
                  <div class="section2-column1">
                    <img src="img/exelon.png" alt="image of Exelon logo" class="img-responsive">
                  </div>
                  <div class="section2-column2">
                    <h2>IT Project Manager Intern</h2>
                    <p>During summer of 2016, I interned at Exelon Corporation under their Business Services Company. While I was a Project Manager Intern, I took on many projects that were related to the operations of the team. I managed a Microsoft SharePoint restructure and upgrade project which decreased capacity storage by 63 percent and lowered cost to the firm. I conducted user acceptance testing of applications on mobile platforms, ensuring on-time deployment. And I assisted project managers with long-range project planning to ensure money is available for future projects.</p>
                  </div>
                </div>

                <!-- Major Accomplishment 4 -->
                <div class="accomplishment-wrapper">
                  <div class="section2-column1">
                    <img src="img/uofr.png" alt="image of U of R logo" class="img-responsive">
                  </div>
                  <div class="section2-column2">
                    <h2>Workshop Leader</h2>
                    <p>I am currently a workshop leader for the computer science department at the University of Rochester. I lead workshops in introductory Java and object oriented programming courses. Some of my responsibilities include the following. I lead 12 students in a workshop to improve Java programming abilities and theory by guiding group discussion. I evaluate and provide feedback and improvements to the professor and to students regarding the course. And I participate in a workshop leader course to improve on leadership and teamwork skills.</p>
                  </div>
                </div>
              </article>

              <aside>
                <h3>Follow Me</h3>
                <p>LinkedIn</p>
                <p>Github</p>
                <p>Portfolio Page</p>

              </aside>
                

            </div><!-- .content -->

       </div><!-- .container -->

    </section>


<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>
