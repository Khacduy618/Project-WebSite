   <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="../" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><span class="current-page">Đăng ký</span></li>
            </ul>
        </nav>
        <div id="main-content" class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex">
                        <?php
                            if(isset($thongbao)&&($thongbao != ""))
                                echo '<div style="height: 40px; color:white; display:flex; align-items:center;" class="notify col-lg-7">
                                        '.$thongbao.'
                                    </div>';
                            
                            if (isset($thongbaoCheck) && ($thongbaoCheck != "")) {
                                echo '<div style="height: 40px; color:white; display:flex; align-items:center;" class="notify col-lg-7">
                                        '.$thongbaoCheck.'
                                    </div>';
                            }
                        ?>
                        
                        <div class="signup-container">
                            <form action="../index.php?act=reg" method="post">
                                <p class="form-row">
                                    <label for="full-name">Fullname:<span >*</span></label>
                                    <input type="text" name="name" required>
                                </p>
                                <p class="form-row">
                                    <label for="fid-email">Email:<span >*</span></label>
                                    <input type="email" name="email" required>
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Username:<span >*</span></label>
                                    <input type="text" name="user" required>
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Password:<span >*</span></label>
                                    <input type="password" name="pass" required>
                                </p>
                                <p class="form-row wrap-btn">
                                    <input class="btn btn-submit btn-bold" name="dangky" type="submit" value="Đăng ký">
                                    <a href="../index.php?act=login" class="link-to-help">Login now!</a>
                                </p>
                            </form>
                            
                        </div>
                    </div>
                    
                </div>

            </div>

        </div>

    </div> 