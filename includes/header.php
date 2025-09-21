
<!-- Then your HTML starts here -->
   <div class="search-popup">
    <div class="search-popup-container">

      <form role="search" method="get" class="form-group" action="">
        <input type="search" id="search-form" class="form-control border-0 border-bottom"
          placeholder="Type and press enter" value="" name="s" />
        <button type="submit" class="search-submit border-0 position-absolute bg-white"
          style="top: 15px;right: 15px;"><svg class="search" width="24" height="24">
            <use xlink:href="#search"></use>
          </svg></button>
      </form>
      <h5 class="cat-list-title">Browse Categories</h5>

      <ul class="cat-list">
        <li class="cat-list-item mb-3">
          <a href="#" title="Make-Up">Make-Up</a>
        </li>
        <li class="cat-list-item mb-3">
          <a href="#" title="Skin Care">Skin Care</a>
        </li>
        <li class="cat-list-item mb-3">
          <a href="#" title="Bath Products">Bath Products</a>
        </li>
        <li class="cat-list-item mb-3">
          <a href="#" title="Hair">Hair</a>
        </li>
        <li class="cat-list-item mb-3">
          <a href="#" title="Body Care">Body Care</a>
        </li>
        <li class="cat-list-item mb-3">
          <a href="#" title="Nails">Nails</a>
        </li>
        <li class="cat-list-item mb-3">
          <a href="#" title="Tools $ Brushes">Tools $ Brushes</a>
        </li>
      </ul>

    </div>
  </div>

  <nav class="navbar navbar-expand-lg text-uppercase fs-6 py-3 px-0 px-md-3 border-bottom align-items-center">
    <div class="container-fluid">
      <div class="row justify-content-between align-items-center w-100 py-2">

        <div class="col-auto">
          <a class="navbar-brand" href="index.html">
            <img src="images/news.jpg" alt="logo">
          </a>
        </div>

        <div class="col-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end  flex-grow-1 gap-5 pe-3">
                <li class="nav-item dropdown">
                  <!-- <a  href="#" id="dropdownHome" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Home</a> -->
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownShop" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Style</a>
                  <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownShop">
                  <?php
include_once("config.php");
$newcatqry = "SELECT * FROM category2 ORDER BY id DESC";
$newcatresult = mysqli_query($conn, $newcatqry) or exit("category2 select fail: " . mysqli_error($conn));

while ($newrow = mysqli_fetch_array($newcatresult)) {
?>
  <li>
    
    <a href="viewstyle.php?id=<?php echo $newrow['id']; ?>" class="dropdown-item item-anchor">
      <?php echo htmlspecialchars($newrow['catnam']); ?>
    </a>
  </li>
<?php
}
?>

                  </ul>
                </li>
                               <!-- Category Dropdown in Navbar -->
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="dropdownShop" data-bs-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">Category</a>
  <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownShop">
    <?php
    include_once("config.php");
    $catqry = "SELECT * FROM categories ORDER BY id DESC";
    $catresult = mysqli_query($conn, $catqry) or exit("Category select fail: " . mysqli_error($conn));

    while ($row = mysqli_fetch_array($catresult)) {
    ?>
      <li>
        <!-- FIXED: catid parameter used in URL -->
        <a href="viewsubcategory.php?catid=<?php echo $row['id']; ?>" class="dropdown-item item-anchor">
          <?php echo htmlspecialchars($row['catname']); ?>
        </a>
      </li>
    <?php
    }
    ?>
  


                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownBlog" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Blog</a>
                  <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownBlog">
                    <li>
                      <a href="blog-classic.html" class="dropdown-item item-anchor">Blog <span
                          class="badge bg-secondary">pro</span></a>
                    </li>
                    <li>
                      <a href="blog-grid-with-sidebar.html" class="dropdown-item item-anchor">Blog with Sidebar <span
                          class="badge bg-secondary">pro</span></a>
                    </li>
                    <li>
                      <a href="single-post-no-sidebar.html" class="dropdown-item item-anchor">Single Post <span
                          class="badge bg-secondary">pro</span></a>
                    </li>
                    <li>
                      <a href="single-post.html" class="dropdown-item item-anchor">Single post with Sidebar <span
                          class="badge bg-secondary">pro</span></a>
                    </li>
                  </ul>
                </li> -->
 </li>
  </ul>
</li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownPages" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Pages</a>
                  <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                    <li>
                      <a href="about.php" class="dropdown-item item-anchor">About </a>
                    </li>
                    <li>
                      <a href="cart.php" class="dropdown-item item-anchor">Cart </a>
                    </li>
                    <li>
                      <a href="checkout.php" class="dropdown-item item-anchor">Checkout </a>
                    </li>
                    <!-- <li>
                      <a href="coming-soon.html" class="dropdown-item item-anchor">Coming Soon <span
                          class="badge bg-secondary">pro</span></a>
                    </li> -->
                    <li>
                      <a href="contanct.php" class="dropdown-item item-anchor">Contact</a>
                    </li>
                    <!-- <li>
                      <a href="error-page.html" class="dropdown-item item-anchor">Error Page <span
                          class="badge bg-secondary">pro</span></a>
                    </li> -->
                    <!-- <li>
                      <a href="faqs.html" class="dropdown-item item-anchor">FAQs <span
                          class="badge bg-secondary">pro</span></a>
                    </li> -->
                    <li>
                      <a href="myac.php" class="dropdown-item item-anchor">My Account </a>
                    </li>
                    <!-- <li>
                      <a href="order-tracking.html" class="dropdown-item item-anchor">Order Tracking <span
                          class="badge bg-secondary">pro</span></a>
                    </li> -->
                    <li>
                      <a href="whishlist.php" class="dropdown-item item-anchor">Wishlist</a>
                    </li>
                  </ul>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="contanct.php">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <ul class="list-unstyled d-flex m-0 mt-3 mt-xl-0">
            <li>
              <a href="whishlist.php" class="text-uppercase mx-3">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
                <span class="wishlist-count"></span>
              </a>
            </li>
              <li>
              <a href="myac.php" class="text-uppercase mx-3">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#user"></use>
                </svg>
                <span class="wishlist-count"></span>
              </a>
            </li>
            <li>
  
            <?php

$cartCount = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $cartCount += $item['qty']; // Total quantity count
    }
}
?>

<a href="cart.php" class="text-uppercase mx-3">
    <svg width="24" height="24" viewBox="0 0 24 24">
        <use xlink:href="#cart"></use>
    </svg>
    
</a>

            </li>
            <li>
             <a href="logout.php" class="mx-3" title="Logout">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
    <polyline points="16 17 21 12 16 7"/>
    <line x1="21" y1="12" x2="9" y2="12"/>
  </svg>
</a>

            </li>
            <li class="search-box">
              <a href="#" class="search-button mx-3">
                <svg width="24" height="24" viewBox="0 0 24 24" class="search">
                  <use xlink:href="#search"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>

      </div>

    </div>
  </nav>