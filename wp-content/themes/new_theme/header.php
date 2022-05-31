<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class=''>
    <div class='pt-4 row p-0 m-0 align-items-center'>
      <div class='col-sm-5 w-auto mx-auto justify-content-center'>
        <h3 class="h-100">(828) 667-8182</h3>
      </div>
      <div class='col-sm-7 w-auto mx-auto d-none d-md-block'>
        <h6 class='heading--info w-auto'>280 Smokey Park Hwy Asheville, NC 28806</h6>
        <h6 class='heading--info'>Behind El Chapalas mexican restaurant</h6>
      </div>

      <div class="row p-2 d-none d-md-flex">
        <div class="col-2 d-flex justify-content-around ms-auto">
          <i class="text-black fa fa-facebook" aria-hidden="true"></i>
          <i class="text-black fa fa-instagram" aria-hidden="true"></i>
          <i class="text-black fa fa-youtube-play" aria-hidden="true"></i>
        </div>
      </div>
    </div>

    <nav class='px-1 bg-light navbar navbar-expand-md navbar-light'>
      <div class="navbar-brand">West Side Scooter Sales</div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav col">
          <li class="nav-item active">
            <a class="nav-link" href="#">Scooters for sale<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Service & Repairs<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Parts & Accessories<span class="sr-only">(current)</span></a>
          </li>
          <div class="col-3 justify-content-around ms-auto d-flex">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <i class="fa fa-user fs-3" aria-hidden="true"></i>
                <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <i class="fa fa-search fs-3" aria-hidden="true"></i>
                <span class="sr-only">(current)</span></a>

            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <i class="fa fa-shopping-cart fs-3" aria-hidden="true"></i>
                <span class="sr-only">(current)</span></a>
            </li>
          </div>
        </ul>

      </div>

    </nav>
  </header>