<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" href="assets\css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Website Portofolio</title>
</head>
<body>
  <header>
    <?php include "includes/navbar.php" ?>
  </header>
  <section id ="main" style="background-color: #BFECFF; display: flex; flex-direction: column; height: 100vh; align-items: center; justify-content: center;">
      <div class="container">
        <div class="row text-center">
          <div class="col pb-3">
            <h2 style="padding-bottom: 100px;">Contact Me</h2>
          </div>
        </div>
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6">
            <form name="submit-to-google-sheet">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama"></div>
              <div class="mb-3">
                <label for="email1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email"></div>
              <div class="mb-3">
                  <label for="pesan" class="form-label">Message</label>
                  <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
              </div>
            <button type="submit" class="btn btn-primary btn-kirim">Submit</button>
            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Loading... </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>