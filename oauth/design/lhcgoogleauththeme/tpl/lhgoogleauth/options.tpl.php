<h1 class="attr-header"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/googleauth','Google Auth Options')?></h1>

<form action="" method="post">

    <?php include(erLhcoreClassDesign::designtpl('lhkernel/csfr_token.tpl.php'));?>

    <?php if (isset($updated) && $updated == 'done') : $msg = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/googleauth','Settings updated'); ?>
        <?php include(erLhcoreClassDesign::designtpl('lhkernel/alert_success.tpl.php'));?>
    <?php endif; ?>

    <div class="form-group">
        <label>Client ID</label>
        <input class="form-control" type="text" name="google_client_id" value="<?php (isset($ga_options['google_client_id'])) ? print htmlspecialchars($ga_options['google_client_id']) : print ''?>" />
    </div>

    <div class="form-group">
        <label>Client Secret</label>
        <input class="form-control" type="text" name="google_client_secret" value="<?php (isset($ga_options['google_client_secret'])) ? print htmlspecialchars($ga_options['google_client_secret']) : print ''?>" />
    </div>

    <input type="submit" class="btn btn-secondary" name="StoreOptions" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/buttons','Save'); ?>" />

</form>
