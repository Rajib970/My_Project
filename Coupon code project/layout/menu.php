<?php
  //$page=$_SERVER['PHP_SELF'];
  $current_pages=basename($_SERVER['PHP_SELF']);
  $pages=explode(".", $current_pages);
  $page=$pages['0'];
  
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">Indiashopees</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=$siteurl?>sites">Search Business
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item" id="query">
            <a class="nav-link" href="query?company=<?=$page?>">Submit a Query</a>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>