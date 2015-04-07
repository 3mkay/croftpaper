<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type"
        content="text/html; charset=utf-8" />
  <meta name="robots"
        content="all" />
  <meta name="generator"
        content="RapidWeaver" />
  <meta name="generatorversion"
        content="3.6.5 (3.6.5)" />

  <title>Contact Form</title>
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../../rw_common/themes/smartbusiness/styles.css" />
  <link rel="stylesheet"
        type="text/css"
        media="print"
        href="../../rw_common/themes/smartbusiness/print.css" />
  <link rel="stylesheet"
        type="text/css"
        media="handheld"
        href="../../rw_common/themes/smartbusiness/handheld.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../../rw_common/themes/smartbusiness/css/styles/blue.css" />
        
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../../rw_common/themes/smartbusiness/css/sidebar/sidebar_right.css" />

<script type="text/javascript"
      src="../../rw_common/themes/smartbusiness/javascript.js">
</script>
</head>

<body>
  <div id="container">
    <!-- Start container -->

    <div id="pageHeader">
      <!-- Start page header -->

      <h1>Croft Paper Machinery Ltd</h1>

      <h2>First Choice In Stock Preparation Machinery</h2>
    </div><!-- End page header -->

    <div id="contentTop"></div>

    <div id="contentContainer">
      <!-- Start main content wrapper -->

      <div id="content">
        <!-- Start content -->
        <?php
        if(!array_key_exists('formMessage', $_SESSION))
        $_SESSION['formMessage'] = "";
        if(!array_key_exists('form_element0', $_SESSION))
        $_SESSION['form_element0'] = "";
        if(!array_key_exists('form_element1', $_SESSION))
        $_SESSION['form_element1'] = "";
        if(!array_key_exists('form_element2', $_SESSION))
        $_SESSION['form_element2'] = "";
        if(!array_key_exists('form_element3', $_SESSION))
        $_SESSION['form_element3'] = "";
        ?>

        <div class="message-text">
          <?php
          if (!$_SESSION['formMessage']) { 
          echo 'Please fill in the form below to send us any queries and we will get back to you as soon as possible.';
          } else {
           echo $_SESSION['formMessage'];
           }
           ?>
        </div>
        <br />

        <form action="./files/mailer.php"
              method="post"
              enctype="multipart/form-data">
          <label>Your Name:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element0']; ?>"
                name="form_element0"
                size="40" />
          <br />
          <br />
          <label>Your Email:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element1']; ?>"
                name="form_element1"
                size="40" />
          <br />
          <br />
          <label>Subject:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element2']; ?>"
                name="form_element2"
                size="40" />
          <br />
          <br />
          <label>Message:</label> *
          <br />
          <textarea class="form-input-field"
                name="form_element3"
                rows="8"
                cols="38">
<?php echo $_SESSION['form_element3']; ?>
</textarea>
          <br />
          <br />
          <input class="form-input-button"
                type="reset"
                name="resetButton"
                value="Reset" /> <input class="form-input-button"
                type="submit"
                name="submitButton"
                value="Submit" />
        </form><?php session_destroy(); ?>

        <div class="clearer"></div>

        <div id="breadcrumbcontainer">
          <!-- Start the breadcrumb wrapper -->
        </div><!-- End breadcrumb -->
      </div><!-- End content -->
    </div><!-- End main content wrapper -->

    <div id="sidebarContainer">
      <!-- Start Sidebar wrapper -->

      <div id="navcontainer">
        <!-- Start Navigation -->

        <ul>
          <li><a href="../../index.html"
             rel="self">About Us</a></li>

          <li><a href="../../page1/page1.html"
             rel="self">Complete Paper Machines</a></li>

          <li><a href="../../page2/page2.html"
             rel="self">Paper Machine Parts</a></li>

          <li><a href="../../page5/page5.html"
             rel="self">Tissue Machines</a></li>

          <li><a href="../../page25/page25.html"
             rel="self">Coaters</a></li>

          <li><a href="../../page6/page6.html"
             rel="self">Converting Machines</a></li>

          <li><a href="../../page7/page7.html"
             rel="self">Finishing Machines</a></li>

          <li><a href="../../page8/page8.html"
             rel="self">Stock Preparation Machines</a></li>

          <li><a href="../../page15/page15.html"
             rel="self">Automatic Reel Turn-up</a></li>

          <li><a href="../../page16/page16.html"
             rel="self">Presses/Compactors</a></li>

          <li><a href="../../page18/page18.html"
             rel="self">Sand Separators</a></li>

          <li><a href="../../page19/page19.html"
             rel="self">Reject Trommels</a></li>

          <li><a href="../../page20/page20.html"
             rel="self">Dirt Trap Valves</a></li>

          <li><a href="../../page21/page21.html"
             rel="self">Water Treatment</a></li>

          <li><a href="../../page3/page3.html"
             rel="self">Wanted Machinery</a></li>

          <li>
            <a href="../../page22/page22.html"
                rel="self"
                class="currentAncestor">Contact Us</a>

            <ul>
              <li><a href="page24.php"
                 rel="self"
                 id="current"
                 name="current">Contact Form</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- End navigation -->

      <div class="sideHeader"></div><!-- Sidebar header -->

      <div id="sidebar">
        <!-- Start sidebar content -->

        <br />
        <!-- sidebar content you enter in the page inspector -->
         <!-- sidebar content such as the blog archive links -->
      </div><!-- End sidebar content -->
    </div><!-- End sidebar wrapper -->

    <div id="footer">
      <!-- Start Footer -->

      <p>© 2008 Croft Paper Machinery Ltd - <a href="#"
         id="rw_email_contact"
         name="rw_email_contact">Contact Us</a><script type=
         "text/javascript">
//<![CDATA[
var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":in";var _rwObsfuscatedHref3 = "fo@";var _rwObsfuscatedHref4 = "cro";var _rwObsfuscatedHref5 = "ftp";var _rwObsfuscatedHref6 = "ape";var _rwObsfuscatedHref7 = "r.c";var _rwObsfuscatedHref8 = "o.u";var _rwObsfuscatedHref9 = "k";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;
//]]>
</script></p>
    </div><!-- End Footer -->
  </div><!-- End container -->
</body>
</html>
