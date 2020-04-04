<?php
$tpl = erLhcoreClassTemplate::getInstance('lhgoogleauth/index.tpl.php');

$Result['content'] = $tpl->fetch();

$Result['path'] = array(
    array(
        'url' => erLhcoreClassDesign::baseurl('googleauth/index'),
        'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('chat/googleauth', 'Google Auth')
    )
);

?>