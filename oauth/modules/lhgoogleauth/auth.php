<?php

if (isset($_GET['error']) && $_GET['error'] == 'immediate_failed') {
    erLhcoreClassModule::redirect('googleauth/login','?choose=1');
    exit;
}

use Google\Auth\OAuth2;

$gSettings = erLhcoreClassModelChatConfig::fetch('googleauth_options');
$googleAuthdata = (array)$gSettings->data;

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to Live Helper Chat');
$gClient->setClientId($googleAuthdata['google_client_id']);
$gClient->setClientSecret($googleAuthdata['google_client_secret']);
$gClient->setRedirectUri(erLhcoreClassXMP::getBaseHost() . $_SERVER['HTTP_HOST'] . erLhcoreClassDesign::baseurl('googleauth/auth'));
$gClient->addScope('openid','profile','email');

// https://developers.google.com/people/quickstart/php

if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $gClient->setAccessToken($token);

    $google_oauthV2 = new Google_Service_Oauth2($gClient);
    $userInfo = $google_oauthV2->userinfo->get();

    $user = erLhcoreClassModelGoogleAuth::findOne(array('filter' => array('oauth_uid' => $userInfo->id)));

    if (!($user instanceof erLhcoreClassModelGoogleAuth)) {
        $user = new erLhcoreClassModelGoogleAuth();
        $user->oauth_uid = $userInfo->id;
        $user->givenName = $userInfo->givenName;
        $user->familyName = $userInfo->familyName;
        $user->email = $userInfo->email;
        $user->saveThis();
    }

    if ($user->user_id == 0) {
        if (erLhcoreClassUser::instance()->isLogged()) {
            $user->user_id = erLhcoreClassUser::instance()->getUserID();
            $user->saveThis();
            erLhcoreClassModule::redirect('user/account','#!#googleauth');
            exit;
        } else {
            erLhcoreClassModule::redirect('user/login', '?oauth_google=' . $user->id);
            exit;
        }
    } elseif (erLhcoreClassUser::instance()->isLogged()) {
        erLhcoreClassModule::redirect('/');
        exit;
    } else {
        // Login user instantly as during password change he verified his logins
        erLhcoreClassUser::instance()->setLoggedUser($user->user_id);
        erLhcoreClassModule::redirect('/');
        exit;
    }
}

exit;
?>