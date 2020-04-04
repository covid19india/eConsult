<?php

$gauth = erLhcoreClassModelGoogleAuth::fetch($Params['user_parameters']['id']);

if ($gauth->user_id == erLhcoreClassUser::instance()->getUserID()){
    $gauth->removeThis();
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

?>