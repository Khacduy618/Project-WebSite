<div class="container">
    <div class="row">
        <div class="signin-container">
            <form action="/Lab5-NguyenKhacDuy-PS37404//index.php?act=login" name="frm-login" method="post">
                <p class="form-row">
                    <label for="fid-name">Username:<span class="requite">*</span></label>
                    <input type="text" id="fid-name" name="user" value="" class="txt-input">
                </p>
                <p class="form-row">
                    <label for="fid-pass">Password:<span class="requite">*</span></label>
                    <input type="password" id="fid-pass" name="pass" value="" class="txt-input">
                </p>
                <p class="form-row wrap-btn">
                    <input class="btn btn-submit btn-bold" name="dangnhap" type="submit" value="Login">
                    <a href="../index.php?act=quenmk" class="link-to-help">Forgot your password</a>
                </p>
            </form>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </div>
    </div>
</div>