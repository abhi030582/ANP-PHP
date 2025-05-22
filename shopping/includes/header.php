<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand text-white fw-bold" href="index.php">Shopping Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="about-us.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" 
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php">All Products</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="shop-categories.php">Category Wise</a></li>
                    </ul>
                </li>

                <?php if ($_SESSION['id'] == 0): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" 
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">Users</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="admin/">Admin</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="my-wishlist.php">My Wishlist</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" 
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="my-orders.php">Orders</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="my-profile.php">Profile</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="change-password.php">Change Password</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="manage-addresses.php">Addresses</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link text-white" href="contact-us.php">Contact Us</a>
                </li>
            </ul>

            <?php if ($_SESSION['id'] != 0): ?>
                <span class="text-white me-3"><strong>Welcome:</strong> <?php echo $_SESSION['username']; ?></span>
            <?php endif; ?>

            <form class="d-flex">
                <?php 
                $uid = $_SESSION['id'];
                $ret = mysqli_query($con, "SELECT SUM(productQty) AS qtyy FROM cart WHERE userId='$uid'");
                $result = mysqli_fetch_array($ret);
                $cartcount = $result['qtyy'] ?? 0;
                ?>
                <a class="btn btn-outline-light" href="my-cart.php">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-light text-primary ms-1 rounded-pill"><?php echo $cartcount; ?></span>
                </a>
            </form>
        </div>
    </div>
</nav>
