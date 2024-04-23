<?php
    $html_danhmuc=showdanhmuc($listdanhmuc);
    $html_sanpham='';
    foreach ($listsanpham as $sp) {
        extract($sp);
        $hinh=$img_path.$Thumbnail;
        $listt=get_tt($sp['id_trth']);
        $linksp="../index.php?act=prdetail&MaSP=".$MaSP;
        $html_sanpham.='<li class="product-item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="'.$linksp.'" class="link-to-product">
                                        <img src="'.$hinh.'" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <h4 class="product-title"><a href="#" class="pr-name">'.$TenSP.'</a></h4>
                                    <div class="price">
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
   
   <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="../" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><span class="current-page">Sản phẩm</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain category-page left-sidebar">
        <div class="container">
            <div class="row">
                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="product-category grid-style">
                        <div id="top-functions-area" class="top-functions-area" >
                            <div class="flt-item to-right">
                                <span class="flt-title">Sắp xếp</span>
                                <div class="wrap-selectors">
                                    <div class="selector-item orderby-selector">
                                        <select name="orderby" class="orderby" aria-label="Shop order" onchange="this.options[this.selectedIndex].value && (window.location= this.options[this.selectedIndex].value);">
                                            <option value="0" selected="selected">Tất cả</option>
                                            <option <?php if (isset($_GET['DM_ID'])) {
                                                echo 'value="../index.php?act=product&DM_ID='.$DM_ID.'&field=MaSP&sort=desc"';
                                            } echo 'value="../index.php?act=product&field=MaSP&sort=desc"';?>> Mới</option>
                                            <option <?php if (isset($_GET['DM_ID'])) {
                                                echo 'value="../index.php?act=product&DM_ID='.$DM_ID.'&field=Gia&sort=desc"';
                                            }echo 'value="../index.php?act=product&field=Gia&sort=desc"';?> >Giá: Cao</option>
                                            <option <?php if (isset($_GET['DM_ID'])) {
                                                echo ' value="../index.php?act=product&DM_ID='.$DM_ID.'&field=Gia&sort=asc"';
                                            } echo ' value="../index.php?act=product&field=Gia&sort=asc"';?>>Giá: Thấp</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <ul class="products-list">
                                <?=$html_sanpham;?>
                            </ul>
                        </div>

                        <div class="biolife-panigations-block">
                            <ul class="panigation-contain">
                            <?php
                                if ($current_page > 3) {
                                    $first_page = 1;
                                    ?>
                                    <li><a class="link-page" href="<?php if (isset($_GET['DM_ID']) && ($_GET['DM_ID'] > 0)) { ?>
                                    ../index.php?act=product&DM_ID=<?= $_GET['DM_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $first_page ?>
                                    <?php }else{?>../index.php?act=product&per_page=<?= $item_per_page ?>&page=<?= $first_page ?><?php } ?>">First</a></li>
                                    <?php
                                }
                                if ($current_page > 1) {
                                    $prev_page = $current_page - 1;
                                    ?>
                                    <li><a class="link-page" href="<?php if (isset($_GET['DM_ID']) && ($_GET['DM_ID'] > 0)) { ?>
                                        ../index.php?act=product&DM_ID=<?= $_GET['DM_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>
                                        <?php }else{?>../index.php?act=product&per_page=<?= $item_per_page ?>&page=<?= $prev_page ?><?php } ?>">Prev</a></li>
                                <?php }
                                ?>
                                <?php for ($num = 1; $num <= $totalpages; $num++) { ?>
                                    <?php if ($num != $current_page) { ?>
                                        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                                            <li><a class="link-page" href="<?php if (isset($_GET['DM_ID']) && ($_GET['DM_ID'] > 0)) { ?>
                                                ../index.php?act=product&DM_ID=<?= $_GET['DM_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $num ?>
                                                <?php }else{?>../index.php?act=product&per_page=<?= $item_per_page ?>&page=<?= $num ?> <?php } ?>"><?= $num ?></a></li>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <li><a class="current-page link-page"><?= $num ?></a></li>
                                    <?php } ?>
                                <?php } ?>
                                <?php
                                if ($current_page < $totalpages - 1) {
                                    $next_page = $current_page + 1;
                                    ?>
                                    <li><a class="link-page" href="<?php if (isset($_GET['DM_ID']) && ($_GET['DM_ID'] > 0)) { ?>
                                        ../index.php?act=product&DM_ID=<?= $_GET['DM_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $next_page ?>
                                    <?php }else{ ?>../index.php?act=product&per_page=<?= $item_per_page ?>&page=<?= $next_page ?> <?php } ?>">Next</a></li>
                                <?php
                                }
                                if ($current_page < $totalpages - 3) {
                                    $end_page = $totalpages;
                                    ?>
                                    <li><a class="link-page" href="<?php if (isset($_GET['DM_ID']) && ($_GET['DM_ID'] > 0)) { ?>
                                        ../index.php?act=product&DM_ID=<?= $_GET['DM_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $end_page ?>
                                        <?php }else{ ?>../index.php?act=product&per_page=<?= $item_per_page ?>&page=<?= $end_page ?> <?php } ?>">Last</a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>

                    </div>

                </div>
                <!-- Sidebar -->
                <aside id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="biolife-mobile-panels">
                        <span class="biolife-current-panel-title">Sidebar</span>
                        <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                    </div>
                    <div class="sidebar-contain">
                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Danh mục</h4>
                            <div class="wgt-content">
                                <ul class="cat-list">
                                    <li><a href="../index.php?act=product">Tất cả</a></li>
                                    <?=$html_danhmuc;?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>