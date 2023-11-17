<!-- ***** Header Area Start ***** -->

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="img/logo.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="index.php" <?php if ($isActive === "index.php") echo ' class="active"'; ?>>Home</a></li>
                                                                        
                        <li class="scroll-to-section"><a href="products.php" <?php if ($isActive === "products.php") echo ' class="active"'; ?>>Products</a></li>

                        <?php  
                        if (isset($_SESSION['name'])) { ?>
                            <form method="post">
                                <button type="submit" name="sign_out" class="btn btn-primary ms-5">Sign Out</button>
                            </form>
                        <?php } ?>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
