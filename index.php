<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm px-3 py-4">
            <a class="navbar-brand" href="#">[website title]</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link nav-menu-text mx-4" href="#">Instruction <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-menu-text mx-4" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-menu-text mx-4" href="#">Contact</a>
                    </li>
                </ul>
               
            </div>
        </nav>
      </header>
      <main>
        <div class="container p-5 text-center">
            <h1 class="">Download Twitch Videos</h1>
            <h4 class="mb-4">Here anyone can UnTwitch - download Twitch.tv videos & clips. Need example?</h4>
            <form action="" id="video-url-form">
            <div class="input-group px-4">
                <input type="url" class="form-control" name="url" id="video-url" placeholder="" aria-label="">
                <span class="input-group-btn">
                    <button class="btn btn-secondary video-url-submit rounded-0" type="submit" aria-label="">Submit</button>
              </span>
            </div>
            </form>
        </div>
        <div class="container download-btns d-none">
          <h2 class="text-center text-secondary">Download [this is just basic demo]</h2><br><hr>
          <a name="" id="" class="btn btn-primary download-1080-btn" href="#" role="button">1080p</a>
          <a name="" id="" class="btn btn-primary download-720-btn" href="#" role="button">720p</a>
          <a name="" id="" class="btn btn-primary download-480-btn" href="#" role="button">480p</a>
          <a name="" id="" class="btn btn-primary download-360-btn" href="#" role="button">360p</a>
        </div>
      </main>
      <footer>

      </footer>
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js?v=<?php echo time();?>"></script>
  </body>
</html>