<?php
include("../include/session.php");

$page_publisher = "https://facebook.com/melvinjonesrepol";
$page_modified_time = "2023-10-08T13:37:36+00:00";
$page_title = "Forgot Password - Digital Barangay";
$page_description = "";
$page_keywords = "digital barangay, lgu, lgu management system";
$page_image = "https://digitalbarangay.com/images/ogimage.png";
$page_author = "Melvin Jones Repol";
$page_canonical = "https://digitalbarangay.com/forgot-password/";
$page_url = $page_canonical;
$directory = "../";
$directory_img = $directory;
$isForm = true;

include("../include/header.php");

?>


<body class="d-flex flex-column min-vh-100">
  <?php include("../include/nav.php"); ?>

  <main>
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-7">
          <div class="container">
            <form action="<?php htmlspecialchars('php_self'); ?>" method="post" id="form">
              <div class="row">
                <div class="col-md-6">
                  <h1>Forgot Password</h1>
                  <br>
                  <div class="input-group2">
                    <input type="email" placeholder="Email" name="email" required>
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="form-group mt-2">
                    <button id="executeCaptcha" class="btn btn-primary shadow px-5">Forgot</button>
                    <a type="button" class="btn btn-outline-primary px-4"
                      href="../login?utm_source=forgot-password">Login</a>
                    <br><br>
                    <a class="fpass" href="../signup?utm_source=forgot-password">No account yet?</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </main>

  <?php include("../include/footer.php"); ?>
</body>

</html>