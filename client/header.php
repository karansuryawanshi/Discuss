<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img class="header_logo_image" src="./public/logo.jpeg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>

        <?php
          if(isset($_SESSION['user']['username'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="?login=true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?signup=true">Signup</a>
            </li>
        <?php } ?>

        <!-- if user and username is present then show logout else login -->

        <!-- <?php
        if($_SESSION['user']['username']){ ?>
        <li class="nav-item">
          <a class="nav-link" href="/discuss">Logout</a>
        </li>
        <?php } ?>
        
        <?php
        if(!$_SESSION['user']['username']){ ?>
          <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Signup</a>
        </li>
        <?php } ?> -->

        <!-- user and username is is undefined in this method -->

        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
      </ul>
    </div>
  </div>
</nav>