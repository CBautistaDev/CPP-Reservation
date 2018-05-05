

<?php





if  (isset($_POST['book'])) {
  // Required field names
$required = array('name',  'email', 'start_day', 'start_hour', 'reason');

// Loop over field names, make sure each one exists and is not empty
$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}


if ($error) {
  echo " All field requied ";
} else {
  require 'book.php';

}

}


?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>


<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Advising Reservation</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=10.0" name="viewport" />

<link href="https://www.cpp.edu/common/resources/css/css-2016.css?v=1493476946063" rel="stylesheet" />
<link href="https://www.cpp.edu/common/resources/css/cpp-print.css?v=1372871296540" media="print" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://www.cpp.edu/common/resources/css/header-2016-acc.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">


  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

 <script type="text/javascript">
   $(document).ready(function() {
     $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 15,
            minTime: '8',
            maxTime: '5:00pm',
            defaultTime: '8',
            startTime: '8:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
         });
   });
 </script>



</head>

<body>
  <div class="page-container">
  <header>
    <div id="logobar">
      <div class="span4 logo">
        <a href="/index.shtml" id="cpp-header-logo-link"><img alt="Cal Poly Pomona" src="img/logo.png"/></a>
      </div>

      <button aria-label="expand navigation menu" class="hamburger"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
      <button aria-label="close navigation menu" class="cross" style="display:none;"><span class="glyphicon glyphicon-remove"></span></button>
      <button aria-label="open search box" class="search"><span class="glyphicon glyphicon-search"></span></button>
      <a class="hidden-screen-reader-info" href="#main-body">Skip To Main Content</a>
    </div>


    <div class="menu" id="full-expanded-menu" style="display:none;">
      <div class="full-expanded-menu-container">

        <nav aria-label="Main University Navigation">

          <div class="row">
            <nav id="main-university-nav">
              <ul>
                <li class="nav-highlight"><a href="http://www.cpp.edu/~library/index.shtml">LIBRARY</a></li>
                <li class="nav-highlight"><a aria-label="ONLINE SERVICES" href="https://my.cpp.edu" title="ONLINE SERVICES">ONLINE SERVICES</a></li>
                <li class="nav-highlight"><a aria-label="bronco411" href="https://apps.cpp.edu/bronco411/search/" title="bronco411">DIRECTORY</a></li>
                <li class="nav-highlight"><a href="http://maps.cpp.edu/">MAPS</a></li>
                <li class="nav-highlight"><a aria-label="Cpp calendar" href="http://www.cpp.edu/events/" title="Cpp calendar">CALENDAR</a></li>
              </ul>
            </nav>

          </div>

          <nav class="row">
            <form action="https://gsa.cpp.edu/search" class="center-search" id="searchcpp" method="get" role="search">
              <div class="toCenter">
                <label class="acc_label" for="searchbar">SEARCH Box</label>

                <input class="search-query_new" id="searchbar" maxlength="256" name="q" placeholder="SEARCH CPP.EDU" size="155" style="height:35px;font-size:12pt;" title="search" type="text" />

                <input alt="SEARCH" class="button" id="searchbutton" src="/common/resources/img/submit_button.png" title="SEARCH" type="image" />
                <input name="site" type="hidden" value="default_collection" />
                <input name="client" type="hidden" value="cpp-fe" />
                <input name="output" type="hidden" value="xml_no_dtd" />
                <input name="proxystylesheet" type="hidden" value="cpp-fe" />
                <input name="markup" type="hidden" value="html5" />
              </div>
            </form>
          </nav>

          <div class="row" id="univesrity-sub-menu-nav">
            <nav aria-label="About Cal Poly Pomona" class="sub-nav-column">
              <ul>
                <li class="menu-header"><a aria-label="Cpp About" href="/~aboutcpp/index.shtml" title="Cpp About">About Cal Poly Pomona</a></li>
                <li><a aria-label="Cpp Overview" href="http://www.cpp.edu/~aboutcpp/calpolypomona-overview/index.shtml" title="Cpp Overview">Cal Poly Pomona Overview</a></li>
                <li><a aria-label="Cpp Visitor Information" href="http://www.cpp.edu/~aboutcpp/visitor-information/index.shtml" title="Cpp Visitor Information">Visitor Information</a></li>
                <li><a aria-label="Cpp Campus Maps &amp; Tours" href="http://www.cpp.edu/maps/campus-tours/index.shtml" title="Cpp Campus Maps &amp; Tours">Campus Maps &amp; Tours</a></li>
                <li><a aria-label="Cpp News" href="http://polycentric.cpp.edu/" title="Cpp News">News</a></li>
                <li><a aria-label="Cpp Events" href="http://www.cpp.edu/events" title="Cpp Events">Events</a></li>
                <li><a aria-label="Cpp Administration" href="http://www.cpp.edu/~aboutcpp/administration/index.shtml" title="Cpp Administration">Administration</a></li>
                <li><a aria-label="Cpp Annual Security Report" href="http://www.cpp.edu/annual-security-report.shtml" title="Cpp Annual Security Report">Annual Security Report</a></li>
                <li><a aria-label="Cpp Campus Safety Plan" href="http://www.cpp.edu/campus-safety-plan.shtml" title="Cpp Campus Safety Plan">Campus Safety Plan</a></li>
              </ul>
            </nav>


            <nav aria-label="Admissions Information" class="sub-nav-column">
              <ul>
                <li class="menu-header"><a aria-label="Cpp Admissions" href="http://www.cpp.edu/~admissions/index.shtml" title="Cpp Admissions">Admissions</a></li>
                <li><a aria-label="Cpp Undergraduate Admissions" href="http://www.cpp.edu/~admissions/index.shtml#undergraduate" title="Cpp Undergraduate Admissions">Undergraduate Admissions</a></li>
                <li><a aria-label="Cpp Graduate Admissions" href="http://www.cpp.edu/~admissions/index.shtml#graduate" title="Cpp Graduate Admissions">Graduate Admissions</a></li>
                <li><a aria-label="Cpp International Admissions" href="http://www.cpp.edu/~admissions/index.shtml#international" title="Cpp International Admissions">International Admissions</a></li>
                <li><a aria-label="Cpp Continuing Education Admissions" href="http://www.cpp.edu/~extended-education/index.shtml" title="Cpp Continuing Education Admissions">Continuing Education Admissions</a></li>
                <li><a aria-label="Cpp Military &amp; Veterans Admissions" href="http://www.cpp.edu/~admissions/veterans/index.shtml" title="Cpp Military &amp; Veterans Admissions">Military &amp; Veterans Admissions</a></li>
                <li><a aria-label="Cpp Financial Aid &amp; Scholarships" href="http://www.cpp.edu/~financial-aid/index.shtml" title="Cpp Financial Aid &amp; Scholarships">Financial Aid &amp; Scholarships</a></li>
                <li><a aria-label="Cpp Student Accounts &amp; Fees" href="http://www.cpp.edu/~student-accounting/index.shtml" title="Cpp Student Accounts &amp; Fees">Student Accounts &amp; Fees</a></li>
                <li><a aria-label="Cpp Outreach, Recruitment, &amp; Educational Partnerships" href="http://www.cpp.edu/~outreach/index.shtml" title="Cpp Outreach, Recruitment, &amp; Educational Partnerships">Outreach, Recruitment, &amp; Educational Partnerships </a></li>
              </ul>
            </nav>

            <nav aria-label="Academics Information" class="sub-nav-column">
              <ul>
                <li class="menu-header"><a aria-label="Cpp Academics" href="http://www.cpp.edu/~academics/index.shtml" title="Cpp Academics">Academics</a></li>
                <li><a aria-label="Cpp Colleges &amp; Departments" href="http://www.cpp.edu/~academics/colleges-departments/index.shtml" title="Cpp Colleges &amp; Departments">Colleges &amp; Departments</a></li>
                <li><a aria-label="Cpp Majors &amp; Degrees" href="http://www.cpp.edu/~academics/majors-degrees/index.shtml" title="Cpp Majors &amp; Degrees">Majors &amp; Degrees</a></li>
                <li><a aria-label="Cpp University Catalog &amp; Academic Schedules" href="http://www.cpp.edu/~academics/university-catalog/index.shtml" title="Cpp University Catalog &amp; Academic Schedules">University Catalog &amp; Academic Schedules</a></li>
                <li><a href="http://www.cpp.edu/~library/index.shtml">University Library</a></li>
                <li><a aria-label="Cpp Research" href="http://www.cpp.edu/~academics/research.shtml" title="Cpp Research">Research</a></li>
                <li><a aria-label="Cpp Academic Resources" href="http://www.cpp.edu/~academics/academic-resources/index.shtml" title="Cpp Academic Resources">Academic Resources</a></li>
                <li><a href="http://www.cpp.edu/~registrar/index.shtml">Registrar</a></li>
              </ul>
            </nav>

            <nav aria-label="Campus Life Information" class="sub-nav-column">
              <ul>

                <li class="menu-header"><a aria-label="Campus Life" href="http://www.cpp.edu/~campus-life/index.shtml" title="campus life Campus Life">Campus Life</a></li>
                <li><a aria-label="campus life Student Services" href="http://www.cpp.edu/~campus-life/student-services/index.shtml" title="campus life Student Services">Student Services</a></li>
                <li><a aria-label="campus life Student Activities" href="http://www.cpp.edu/~campus-life/student-activities/index.shtml" title="campus life Student Activities">Student Activities</a></li>
                <li><a aria-label="campus life Recreation &amp; Fitness" href="http://www.cpp.edu/~campus-life/recreation-fitness/index.shtml" title="campus life Recreation &amp; Fitness">Recreation &amp; Fitness</a></li>
                <li><a aria-label="campus life Health &amp; Wellness" href="http://www.cpp.edu/~campus-life/health-wellness/index.shtml" title="campus life Health &amp; Wellness">Health &amp; Wellness</a></li>
                <li><a aria-label="campus life Housing &amp; Dining" href="http://www.cpp.edu/~campus-life/housing-dining/index.shtml" title="campus life Housing &amp; Dining">Housing &amp; Dining</a></li>
                <li><a aria-label="campus life Diversity" href="http://www.cpp.edu/~campus-life/diversity/index.shtml" title="campus life Diversity">Diversity</a></li>
                <li><a aria-label="campus life Calendars &amp; Events" href="http://events.cpp.edu" title="campus life Calendars &amp; Events">Calendars &amp; Events</a></li>
                <li><a aria-label="campus life Campus Safety &amp; Emergency Info" href="http://www.cpp.edu/~campus-life/campus-safety-info/index.shtml" title="campus life Campus Safety &amp; Emergency Info">Campus Safety &amp; Emergency Info</a></li>
              </ul>
            </nav>

            <div class="sub-nav-column">
              <nav aria-labelledby="athletics-menu-header">
                <ul>
                  <li class="menu-header" id="athletics-menu-header">Athletics</li>
                  <li><a class="external-link" href="http://www.broncoathletics.com/">Visit Athletics Website</a></li>
                </ul>
              </nav>

              <nav aria-label="Campus Giving Informaion">
                <ul>
                  <li class="menu-header"><a aria-label="Cpp Giving" href="http://www.cpp.edu/~giving/index.shtml" title="Cpp Giving">Giving</a></li>
                  <li><a aria-label="Cpp Why Give" href="http://www.cpp.edu/~giving/why-give/index.shtml" title="Cpp Why Give">Why Give</a></li>
                  <li><a aria-label="Cpp Ways to Give" href="http://www.cpp.edu/~giving/ways-to-give/index.shtml" title="Cpp How to Give">Ways to Give</a></li>
                  <li><a aria-label="Cpp Where to Give" href="http://www.cpp.edu/~giving/where-to-give/index.shtml" title="Cpp Where to Give">Where to Give</a></li>
                </ul>
              </nav>
            </div>

            <button aria-label="close expaned menu" class="closemenu hidden-screen-reader-info">close expanded menu</button>
          </div>
        </nav>
      </div>
    </div>


  </header>
        <header aria-title="college header" id="college-header">
          <div class="row college-header" id="college-header-title">
            <button aria-label="close college menu" class="college-cross"></button>
            <button aria-label="expand college menu" class="college-hamburger"></button>

            <h1><a href="/~cba/index.shtml">College of Business Administration
                    </a></h1>



          </div>














  <main aria-label="main content" class="span8" id="main-body">



      <form id="msform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <h1>Advising Reservation </h1>
      </br>
        <p> For incoming students with no CPP email </p>


        <!-- fieldsets -->

          <input type="text" required = "" name="name" placeholder="Name" />
          <input type="text" required = "" name="email" placeholder="Email" />
          <input  name="start_day" required = "" type="date" placeholder="Pick Date" /></td>
          <input  class ="timepicker" required = "" name="start_hour" placeholder="Pick Time" /></td>
          <input name="reason" placeholder="Reason for visit"/></td>

          <button onclick="return confirm('Please make sure that email, time and day are correct')" type="submit" class="next action-button" name="book" />Schedule</button>

         <?php
            global $msg;

            echo $msg; ?>



      </form>
</main>


<main aria-label="main content" class="span4" id="main-body">
</br>
</br>
</br>
</br>


  <img src="img/welcome.png" alt="ssc" style="width:300px;height:350px;">

</main>
</div>


</div>
</main>












</div>
</div>



<footer aria-label="Footer">










  <div aria-hidden="true" class="modal hide fade" id="feedbackModal" role="dialog" tabindex="-1"></div>
  <div class="container">
    <div class="row">
      <div class="span2">
        <div class="footer-nav">
          <p><a aria-label="Cpp Contact Us" href="http://www.cpp.edu/contact.shtml" title="Cpp Contact Us">Contact Us</a></p>
          <p><a href="http://www.cpp.edu/accessibility.shtml">Accessibility</a></p>
          <p><a aria-label="Cpp Jobs" href="http://www.cpp.edu/&#126;jobs/index.shtml" title="Cpp Jobs">Jobs</a></p>
          <p><a aria-label="Cpp A-Z Index" href="http://www.cpp.edu/alpha-index/index.shtml" title="Cpp A-Z Index">A-Z Index</a></p>
        </div>
      </div>
      <div class="span2">
        <div class="footer-nav">
          <p><a href="https://csupomona.intelliresponse.com">Ask Billy</a></p>
          <p><a href="http://www.cpp.edu/&#126;officeofequity/titleIX/index.shtml">Title IX</a></p>
          <p><a aria-label="Cpp Privacy" href="http://www.cpp.edu/privacy.shtml" title="footer - Privacy">Privacy</a></p>
          <p><a aria-label="Cpp Safety and Emergency Info" href="http://www.cpp.edu/&#126;safety/index.shtml" title="Cpp Safety and Emergency Info">Safety&#160;&amp; Emergency Info</a></p>
        </div>
      </div>
      <div class="span2">
        <div class="footer-nav">
          <p><a href="https://apps.cpp.edu/idm/login.aspx?ReturnUrl=%2fidm%2fuser_account.aspx">Change Your Password</a></p>
          <p><a href="https://cpp.service-now.com/ehelp">eHelp</a></p>
          <p><a aria-label="Cpp Feedback" href="http://www.cpp.edu/website-feedback.php" title="Cpp Feedback">Feedback</a></p>
          <p><a href="https://www.cpp.edu/file-viewers.shtml">Document Readers</a></p>
          <p><a href="/cppReservationSytem">CPP Students Reservation</a></p>

        </div>
      </div>
      <div class="span2">
        <div class="footer-nav">
          <p><a href="http://www.cpp.edu/email.shtml">Email</a></p>
          <p><a href="https://my.cpp.edu">MyCPP</a></p>
          <p><a href="http://www.cpp.edu/&#126;broncodirect">BroncoDirect</a></p>
          <p><a href="https://blackboard.cpp.edu/">Blackboard</a></p>
          <p><a href="/admin">Reservation Admin</a></p>

        </div>
      </div>
      <div class="span4">
        <div class="social-media-links">
          <a href="http://www.facebook.com/calpolypomona"><img alt="Facebook Logo" src="img/social/facebook-60x60.png" style="height: 30px; width: 30px;"/></a>
             <a href="http://twitter.com/calpolypomona"><img alt="Twitter Logo" height="30" src="img/social/twitter-60x60.png" style="height: 30px; width: 30px;" width="30"/></a>
          <a href="http://portfolios.cpp.edu/"><img alt="Portfolium Logo" src="img/social/portfolium-60x60.png" style="height: 30px; width: 30px;"/></a>
          <a href="https://www.linkedin.com/company/cal-poly-pomona"><img alt="LinkedIn Logo" src="img/social/linkedin-60x60.png" style="height: 30px; width: 30px;"/></a>
           <a href="http://www.youtube.com/calpolypomona"><img alt="YouTube Logo" src="img/social/youtube-60x60.png" style="height: 30px; width: 30px;"/></a>
             <a href="http://instagram.com/calpolypomona"><img alt="Instagram Logo" src="img/social/instagram-60x60.png" style="height: 30px; width: 30px;"/></a></div>
        <div class="clearfix"></div>
        <p align="right" class="copyright-text">&#169;
          <script type="text/javascript">
            // <![CDATA[
            document.write(new Date().getFullYear());
            // ]]>
          </script>
          California State Polytechnic University, Pomona<br/><span id="sid-container"> <span class="sid">


</html>
