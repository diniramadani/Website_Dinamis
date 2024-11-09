<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Website Portofolio</title>
</head>
<body>
  <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      switch ($page) {
        case 'home':
          include "home.php";
          break;
        case 'about':
          include "about.php";
          break;
        case 'contact':
          include "contact.php";
          break;
        case 'pemrogramanmobile':
          include "pemrogramanmobile.php";
          break;
        case 'pemrogramanweb':
          include "pemrogramanweb.php";
          break;
      }
    } else {
      include "home.php";
    }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
  <footer id="footer" class="footer" style="column; height: 10vh;align-items: center; justify-content: center; background-color: #D3CEDF; padding-top: 35px;">
  <div class="container">
    <div class="copyright text-center">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dini Ramadani</strong> <span>All Rights Reserved<br></span></p>
    </div>
  </div>
</footer>
</html>
