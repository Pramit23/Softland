<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="<?php echo site_url('');?>" class="mb-0">SoftLand</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="<?php echo site_url('');?>" class="nav-link">Home</a></li>
                <li><a href="<?php echo site_url('Features'); ?>" class="nav-link">Features</a></li>
                <li><a href="<?php echo site_url('Pricing'); ?>" class="nav-link">Pricing</a></li>

                <li class="has-children">
                  <a href="<?php echo site_url('Blog'); ?>" class="nav-link">Blog</a>
                  <ul class="dropdown">
                    <li><a href="<?php echo site_url('Blog'); ?>" class="nav-link">Blog</a></li>
                    <li><a href="<?php echo site_url('Blog_Single'); ?>" class="nav-link">Blog Single</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url('Contact'); ?>" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
              data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>

    </header>
