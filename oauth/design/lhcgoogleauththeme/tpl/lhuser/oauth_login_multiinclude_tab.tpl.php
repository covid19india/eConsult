<?php if (!isset($_GET['oauth_google']) && !isset($_POST['oauth_google'])) : ?>
<hr>
    <a href="<?php echo erLhcoreClassDesign::baseurl('googleauth/login')?>"><img src="<?php echo erLhcoreClassDesign::design('images/googleauth/btn_google_signin_dark_normal_web.png');?>"></a>
<hr>
<?php else : ?>
<p>Please login to complete process.</p>
<input type="hidden" name="oauth_google" value="<?php echo isset($_POST['oauth_google']) ? $_POST['oauth_google'] : (isset($_GET['oauth_google']) ? $_GET['oauth_google'] : '')?>">
<?php endif; ?>