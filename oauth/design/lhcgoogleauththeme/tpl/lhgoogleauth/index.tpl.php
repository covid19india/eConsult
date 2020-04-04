<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/googleauth','Google Auth');?></h1>

<ul>
    <li><a href="<?php echo erLhcoreClassDesign::baseurl('googleauth/options')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/googleauth','Options');?></a></li>
</ul>

<p>Callback URL in Google Project has to be set to this:</p>
<input type="text" class="form-control form-control-sm" value="<?php echo erLhcoreClassXMP::getBaseHost() . $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::baseurl('googleauth/auth') ?>">
