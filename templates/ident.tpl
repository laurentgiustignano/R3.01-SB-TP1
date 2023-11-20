<form class="row g-3" method="post" action="ident.php">
    <div class="col-md-4 ">
        <label for="signin-login" class="form-label"><?php echo $labelLogin;?></label>
        <input type="text"
               class="form-control"
               name="login"
               id="signin-login"
               placeholder='<?php echo $phLogin;?>'
               required>
    </div>
    <div class="col-md-4">
        <label for="signin-pwd" class="form-label"><?php echo $labelPwd;?></label>
        <input type="password"
               class="form-control"
               name="pwd"
               id="signin-pwd"
               placeholder="<?php echo $phPwd;?>"
               required>
    </div>
    <div class="row g-3">
        <div class="col-md-2">
            <button class="btn btn-primary" type="submit"><?php echo $connexion;?></button>
        </div>
    </div>
</form>

