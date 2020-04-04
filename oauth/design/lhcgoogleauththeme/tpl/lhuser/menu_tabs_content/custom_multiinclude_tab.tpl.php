<div role="tabpanel" class="tab-pane" id="googleauth">
    <?php if (erLhcoreClassUser::instance()->hasAccessTo('lhgoogleauth','use_admin')) : ?>
        <?php foreach (erLhcoreClassModelGoogleAuth::getList(array('filter' => array('user_id' => erLhcoreClassUser::instance()->getUserID()))) as $loggedAccount) : ?>
        <a class="btn btn-sm btn-danger mb-1 mr-1" href="<?php echo  erLhcoreClassDesign::baseurl('googleauth/remove')?>/<?php echo $loggedAccount->id?>">Logout - <?php echo htmlspecialchars($loggedAccount->givenName . ' '. 	$loggedAccount->familyName . '[' . $loggedAccount->email . ']')?></a>
        <?php endforeach; ?>
    <?php endif; ?>
    <br/>
    <a href="<?php echo  erLhcoreClassDesign::baseurl('googleauth/login')?>"><img src="<?php echo erLhcoreClassDesign::design('images/googleauth/btn_google_signin_dark_normal_web.png');?>"></a>
</div>
