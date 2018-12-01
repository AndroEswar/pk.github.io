<?php
    include("header.php");
    include("navbar.php");
?>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="banners/banner.jpg" alt="img banner">
            </div>
            <div class="carousel-item">
                <img src="banners/banner2.jpg" alt="img banner">
            </div>
            <div class="carousel-item">
                <img src="banners/banner1.svg" alt="img banner">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- Category Cotton Silk Sarees -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-center text-success">
                <h2>Cotton Silk Sarees</h2>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php
                    $str = file_get_contents('js/ctnsilk.json');
                    $json = json_decode($str, true);
                    foreach ($json as $prod) {
                        echo '<div class="item">
                            <div class="card">
                                <a href="#"><img src='.$prod["image_url"].' alt="img" class="card-img-top"></a>
                                <div class="card-body">
                                    <span style="font-size: 14px; font-weight: 500; margin-top: 15px;">'.$prod["title"].'</span>
                                    <h6><span class="text-center" style="color: #878787;"><strike>&#8377;'.$prod["original_price"].'</strike></span></h6>
                                    <span class="text-center" style="color: #212121; padding-top: 8px; font-weight: 500; font-size: 16px;">&#8377;'.$prod["selling_price"].'</span>
                                    <p style="opacity: .6; color: inherit;">'.$prod["description"].'</p>
                                    <a href="#"><button class="btn btn-primary btn-sm">Buy Now</button></a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Category Pure Silk Sarees -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-center text-success">
                <h2>Pure Silk Sarees</h2>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php
                    $str = file_get_contents('js/psilk.json');
                    $json = json_decode($str, true);
                    foreach ($json as $prod) {
                        echo '<div class="item">
                            <div class="card">
                                <a href="#"><img src='.$prod["image_url"].' alt="img" class="card-img-top"></a>
                                <div class="card-body">
                                    <span style="font-size: 14px; font-weight: 500; margin-top: 15px;">'.$prod["title"].'</span>
                                    <h6><span class="text-center" style="color: #878787;"><strike>&#8377;'.$prod["original_price"].'</strike></span></h6>
                                    <span class="text-center" style="color: #212121; padding-top: 8px; font-weight: 500; font-size: 16px;">&#8377;'.$prod["selling_price"].'</span>
                                    <p style="opacity: .6; color: inherit;">'.$prod["description"].'</p>
                                    <a href="#"><button class="btn btn-primary btn-sm">Buy Now</button></a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Category Pure Silk Sarees -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-center text-success">
                <h2>Cotton Sarees</h2>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php
                    $str = file_get_contents('js/ctn.json');
                    $json = json_decode($str, true);
                    foreach ($json as $prod) {
                        echo '<div class="item">
                            <div class="card">
                                <a href="#"><img src='.$prod["image_url"].' alt="img" class="card-img-top"></a>
                                <div class="card-body">
                                    <span style="font-size: 14px; font-weight: 500; margin-top: 15px;">'.$prod["title"].'</span>
                                    <h6><span class="text-center" style="color: #878787;"><strike>&#8377;'.$prod["original_price"].'</strike></span></h6>
                                    <span class="text-center" style="color: #212121; padding-top: 8px; font-weight: 500; font-size: 16px;">&#8377;'.$prod["selling_price"].'</span>
                                    <p style="opacity: .6; color: inherit;">'.$prod["description"].'</p>
                                    <a href="#"><button class="btn btn-primary btn-sm">Buy Now</button></a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </div>

<script src="js/owl.carousel.js"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
<?php
    include("footer2.php");
    include("footer.php");
?>