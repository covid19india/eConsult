<?php

$tpl = erLhcoreClassTemplate::getInstance('lhgoogleauth/options.tpl.php');

$tOptions = erLhcoreClassModelChatConfig::fetch('googleauth_options');
$data = (array)$tOptions->data;

if ( isset($_POST['StoreOptions']) ) {

    $definition = array(
        'google_client_id' => new ezcInputFormDefinitionElement(
            ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
        ),
        'google_client_secret' => new ezcInputFormDefinitionElement(
            ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
        )
    );

    $form = new ezcInputForm( INPUT_POST, $definition );
    $Errors = array();

    if ( $form->hasValidData( 'google_client_id' ) ) {
        $data['google_client_id'] = $form->google_client_id;
    } else {
        $data['google_client_id'] = '';
    }

    if ( $form->hasValidData( 'google_client_secret' )) {
        $data['google_client_secret'] = $form->google_client_secret;
    } else {
        $data['google_client_secret'] = '';
    }

    $tOptions->explain = '';
    $tOptions->type = 0;
    $tOptions->hidden = 1;
    $tOptions->identifier = 'googleauth_options';
    $tOptions->value = serialize($data);
    $tOptions->saveThis();

    $tpl->set('updated','done');
}

$tpl->set('ga_options',$data);

$Result['content'] = $tpl->fetch();

$Result['path'] = array(
    array(
        'url' => erLhcoreClassDesign::baseurl('googleauth/index'),
        'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('googleauth/module', 'Google Auth')
    ),
    array(
        'title' => erTranslationClassLhTranslation::getInstance()->getTranslation('googleauth/module', 'Options')
    )
);

?>