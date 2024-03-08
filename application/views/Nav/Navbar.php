<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "home"? "active":null ?>" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "about"? "active":null ?>" href="#">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "showcase"? "active":null ?>" href="#">SHOWCASE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "blog"? "active":null ?>" href="#">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "joinus"? "active":null ?>" href="#">JOIN US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo strtolower($title) == "contact"? "active":null ?>" href="#">CONTACT</a>
        </li>
			</ul>
      <div class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </div>
    </div>
  </div>
</nav>
