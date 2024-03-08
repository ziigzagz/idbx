<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "home"? "active":null ?>"
					 href="<?php echo base_url()?>Home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "about"? "active":null ?>"
					 href="<?php echo base_url()?>About">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "showcase"? "active":null ?>"
					 href="<?php echo base_url()?>Showcase">SHOWCASE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "blog"? "active":null ?>"
					 href="<?php echo base_url()?>Blog">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "joinus"? "active":null ?>"
					 href="<?php echo base_url()?>JoinUs">JOIN US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "contact"? "active":null ?>"
					 href="<?php echo base_url()?>Contact">CONTACT</a>
        </li>
			</ul>
      <div class="d-flex" role="search">
        <button class="btn " type="submit">Search</button>
      </div>
    </div>
  </div>
</nav>
