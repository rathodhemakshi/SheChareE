    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                    <!-- <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">S</span>he<span class="text-secondary">C</span>are</h1>
                    </a> -->
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?php if(isset($index)){echo $index;} else {echo '';}?>">Home</a>
                        <a href="about.php" class="nav-item nav-link <?php if(isset($about)){echo $about;} else {echo '';}?>" >About</a>
                        <a href="product.php" class="nav-item nav-link <?php if(isset($product)){echo $product;} else {echo '';}?>">Product</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">S</span>he<span class="text-secondary">C</span>are</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="service.php" class="nav-item nav-link <?php if(isset($service)){echo $service;} else {echo '';}?>">Service</a>
                        <a href="gallery.php" class="nav-item nav-link <?php if(isset($gallery)){echo $gallery;} else {echo '';}?>">Gallery</a>
                        <a href="contact.php" class="nav-item nav-link <?php if(isset($contact)){echo $contact;} else {echo '';}?>">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
