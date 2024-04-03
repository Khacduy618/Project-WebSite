<?php
    $html_spnb1='';
    foreach ($spnb1 as $sp) {
        extract($sp);
        $hinh=$img_path.$Thumbnail;
        $listt=get_tt($sp['id_trth']);
        $linksp="../index.php?act=prdetail&MaSP=".$MaSP;
        $html_spnb1.='<li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="'.$linksp.'" class="link-to-product">
                                    <img src="'.$hinh.'" alt="BanhKem" width="270" height="270" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="'.$linksp.'" class="pr-name">'.$TenSP.'</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount">'.number_format($Gia,0,",",".").' đ</span></ins>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">'.$listt.'</p>
                                    <div class="buttons">
                                        <form action="../index.php?act=addtocart" method="post">
                                            <input type="hidden" name="MaSP" value="'.$MaSP.'">
                                            <input type="hidden" name="TenSP" value="'.$TenSP.'">
                                            <input type="hidden" name="Thumbnail" value="'.$Thumbnail.'">
                                            <input type="hidden" name="Gia" value="'.$Gia.'">
                                            <input type="hidden" name="soluong['.$MaSP.']" value="1">
                                            <input type="submit" name="addtocart" class="btn add-to-cart-btn" value="Thêm vào giỏ hàng">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>';
    }
    $html_spnb2='';
    foreach ($spnb2 as $sp) {
        extract($sp);
        $hinh=$img_path.$Thumbnail;
        $listt=get_tt($sp['id_trth']);
        $linksp="../index.php?act=prdetail&MaSP=".$MaSP;
        $html_spnb2.='<li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="'.$linksp.'" class="link-to-product">
                                    <img src="'.$hinh.'" alt="BanhKem" width="270" height="270" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="'.$linksp.'" class="pr-name">'.$TenSP.'</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount">'.number_format($Gia,0,",",".").' đ</span></ins>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">'.$listt.'</p>
                                    <div class="buttons">
                                        <form action="../index.php?act=addtocart" method="post">
                                            <input type="hidden" name="MaSP" value="'.$MaSP.'">
                                            <input type="hidden" name="TenSP" value="'.$TenSP.'">
                                            <input type="hidden" name="Thumbnail" value="'.$Thumbnail.'">
                                            <input type="hidden" name="Gia" value="'.$Gia.'">
                                            <input type="hidden" name="soluong['.$MaSP.']" value="1">
                                            <input type="submit" name="addtocart" class="btn add-to-cart-btn" value="Thêm vào giỏ hàng">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>';
    }
    $html_spnb3='';
    foreach ($spnb3 as $sp) {
        extract($sp);
        $hinh=$img_path.$Thumbnail;
        $listt=get_tt($sp['id_trth']);
        $linksp="../index.php?act=prdetail&MaSP=".$MaSP;
        $html_spnb3.='<li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="'.$linksp.'" class="link-to-product">
                                    <img src="'.$hinh.'" alt="BanhKem" width="270" height="270" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="product-title"><a href="'.$linksp.'" class="pr-name">'.$TenSP.'</a></h4>
                                <div class="price ">
                                    <ins><span class="price-amount">'.number_format($Gia,0,",",".").' đ</span></ins>
                                </div>
                                <div class="slide-down-box">
                                    <p class="message">'.$listt.'</p>
                                    <div class="buttons">
                                        <form action="../index.php?act=addtocart" method="post">
                                            <input type="hidden" name="MaSP" value="'.$MaSP.'">
                                            <input type="hidden" name="TenSP" value="'.$TenSP.'">
                                            <input type="hidden" name="Thumbnail" value="'.$Thumbnail.'">
                                            <input type="hidden" name="Gia" value="'.$Gia.'">
                                            <input type="hidden" name="soluong['.$MaSP.']" value="1">
                                            <input type="submit" name="addtocart" class="btn add-to-cart-btn" value="Thêm vào giỏ hàng">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>';
    }
?>
<div class="page-contain">
    <div id="main-content" class="main-content">

        <div class="main-slide block-slider">
            <ul class="biolife-carousel nav-none-on-mobile" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
                <li>
                    <div class="slide-contain slider-opt03__layout01">
                        <div class="media">
                            <div class="child-elememt">
                                <img src="../assets/images/slide/slide1.png" width="500" height="500" alt="">
                            </div>
                        </div>
                        <div class="text-content">
                            <i class="first-line">Sữa chua cốm</i>
                            <h3 class="second-line">Nhà làm</h3>
                            <p class="third-line">Sự kết hợp giữa sữa chua sánh đặc,chua thanh, ngọt dịu quyện với cốm non dẻo thơm, bùi béo</p>
                            <p class="buttons">
                                <a href="../index.php?act=prdetail&MaSP=80" class="btn btn-bold">Mua ngay</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slide-contain slider-opt03__layout01">
                        <div class="media">
                        <div class="child-elememt">
                                
                                <img src="../assets/images/slide/slide2.png" width="500" height="500" alt="">
                                
                            </div>
                        </div>
                        <div class="text-content">
                            <i class="first-line">Bánh su sầu riêng</i>
                            <h3 class="second-line">Sầu riêng tự nhiên</h3>
                            <p class="third-line">Sự ra đời của chiếc bánh crepe được làm từ những trái sầu riêng sạch chín tự nhiên</p>
                            <p class="buttons">
                                <a href="../index.php?act=prdetail&MaSP=81" class="btn btn-bold">Mua ngay</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slide-contain slider-opt03__layout01">
                        <div class="media">
                        <div class="child-elememt">
                                
                                <img src="../assets/images/slide/slide3.png" width="500" height="500" alt="">
                                
                            </div>
                        </div>
                        <div class="text-content">
                            <i class="first-line">Bánh Donut</i>
                            <p class="third-line">Có tạo hình bắt mắt, bánh vàng ươm, thơm, ngon, mềm xốp</p>
                            <p class="buttons">
                                <a href="../index.php?act=prdetail&MaSP=82" class="btn btn-bold">Mua ngay</a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="special-slide">
            <div class="container">
                <ul class="biolife-carousel dots_ring_style" data-slick='{"arrows": false, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "speed": 800, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}' >
                    
                    <?php
                                foreach ($spnew as $sp) {
                                    extract($sp);
                                    $hinh=$img_path.$Thumbnail;
                                    $linksp="../index.php?act=prdetail&MaSP=".$MaSP;
                                    echo '
                                    <li>
                                        <div class="slide-contain biolife-banner__special">
                                            <div class="banner-contain">
                                                <div class="media">
                                                    <a href="'.$linksp.'" class="bn-link">
                                                        <figure><img src="'.$hinh.'" width="516" height="384" alt=""></figure>
                                                    </a>
                                                </div>
                                                <div class="text-content">
                                                    <b class="first-line">'.$TenSP.'</b>
                                                    <span class="second-line"></span>
                                                    <div class="product-detail">
                                                        <h4 class="product-name">Giá</h4>
                                                        <div class="price price-contain">
                                                            <ins><span class="price-amount">'.number_format($Gia,0,",",".").'₫</span></ins>
                                                        </div>
                                                        <div class="buttons">
                                                            <form action="../index.php?act=addtocart" method="post">
                                                                <input type="hidden" name="MaSP" value="'.$MaSP.'">
                                                                <input type="hidden" name="TenSP" value="'.$TenSP.'">
                                                                <input type="hidden" name="Thumbnail" value="'.$Thumbnail.'">
                                                                <input type="hidden" name="Gia" value="'.$Gia.'">
                                                                <input type="hidden" name="soluong['.$MaSP.']" value="1">
                                                                <input type="submit" name="addtocart" class="btn add-to-cart-btn" value="Thêm vào giỏ hàng">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>';
                                }
                            ?>
                </ul>
            </div>
        </div>

        <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
            <div class="container">

                <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                    <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                        <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                            <li class="tab-element active">
                                <a data-toggle="tab" href="../index.php#tab01_1st" class="tab-link">Bánh Kem</a>
                            </li>
                            <li class="tab-element" >
                                <a data-toggle="tab" href="../index.php#tab01_2nd" class="tab-link">Bánh ngọt</a>
                            </li>
                            <li class="tab-element" >
                                <a data-toggle="tab" href="../index.php#tab01_3rd" class="tab-link">Mix vị</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab01_1st" class="tab-contain active">
                            <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                            <?=$html_spnb1;?>
                            </ul>
                        </div>
                        <div id="tab01_2nd" class="tab-contain ">
                            <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                            <?=$html_spnb2;?>
                            </ul>
                        </div>
                        <div id="#tab01_3rd" class="tab-contain ">
                            <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                            <?=$html_spnb3;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>