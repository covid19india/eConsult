<?php

$gSettings = erLhcoreClassModelChatConfig::fetch('googleauth_options');
$googleAuthdata = (array)$gSettings->data;

// Call Google API
$gClient = new Google_Client();
$gClient->setClientId($googleAuthdata['google_client_id']);
$gClient->setClientSecret($googleAuthdata['google_client_secret']);
$gClient->setRedirectUri(erLhcoreClassXMP::getBaseHost() . $_SERVER['HTTP_HOST'] . erLhcoreClassDesign::baseurl('googleauth/auth'));
$gClient->addScope(array('openid','profile','email'));
$gClient->setAccessType("offline");

if (isset($_GET['choose']) && $_GET['choose'] == 1) {
    $gClient->setPrompt('select_account consent');
} else {
    $gClient->setPrompt('none');
}

$authUrl = $gClient->createAuthUrl();

header('Location: ' . $authUrl);
exit;

?>