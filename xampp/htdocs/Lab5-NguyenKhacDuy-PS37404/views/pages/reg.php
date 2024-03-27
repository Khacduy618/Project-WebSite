<div class="container">
    <div class="row">
        <div class="signup-container">
            <form action="reg.php" method="post">
                <p class="form-row">
                    <label for="full-name">Fullname:<span class="requite">*</span></label>
                    <input type="text" name="name">
                </p>
                <p class="form-row">
                    <label for="fid-email">Email:<span class="requite">*</span></label>
                    <input type="email" name="email">
                </p>
                <p class="form-row">
                    <label for="fid-name">Username:<span class="requite">*</span></label>
                    <input type="text" name="user">
                </p>
                <p class="form-row">
                    <label for="fid-pass">Password:<span class="requite">*</span></label>
                    <input type="password" name="pass">
                </p>
                <p class="form-row wrap-btn">
                    <input class="btn btn-submit btn-bold" name="dangky" type="submit" value="Đăng ký">
                    <a href="../index.php?act=login" class="link-to-help">Login now!</a>
                </p>
            </form>
        </div>    
    </div>
</div>