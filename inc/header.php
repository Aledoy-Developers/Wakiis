<nav class="navbar navbar-expand-md sticky-top navbar-light" id="navbar">
<div class="container navbar-container">
 <a class="navbar-brand" href="./"><img src="images/logo.png" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'index.php') { echo 'm-active'; } ?>" href="./">Company</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link <?php if ($page == 'company.php') { echo 'm-active'; } ?>" href="company">Company</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if ($page == 'vendors.php' || $page == 'riders.php') { echo 'm-active'; } ?>" href="#" id="partnerDropdown">
          Become a Partner
        </a>
        <div class="dropdown-menu" aria-labelledby="partnerDropdown">
          <a class="dropdown-item <?php if ($page == 'vendors.php') { echo 'm-active'; } ?>" href="vendors">Partner Vendor</a>
          <a class="dropdown-item <?php if ($page == 'riders.php') { echo 'm-active'; } ?>" href="riders">Partner Rider</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'career.php') { echo 'm-active'; } ?>" href="career">Career</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'blog.php') { echo 'm-active'; } ?>" href="blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'contact.php') { echo 'm-active'; } ?>" href="contact">Contact</a>
      </li>
      <li class="nav-item">
        <div class="menuNav">
          <div class="menuNavL">
            <a href="">
              <button><i class="ph ph-arrow-circle-up-right"></i> App</button>
            </a>
          </div>
          <div class="menuNavR">
            <div class="menuNavRa">
              <img src="images/nav-icon.svg" class="img-fluid">
            </div>
            <div class="menuNavRb">
              <div class="menuNavRb-sub">Support</div>
              <div class="menuNavRb-head"> 080 8646 8601</div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>