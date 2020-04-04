<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lhc_google_auth";
$def->class = "erLhcoreClassModelGoogleAuth";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['oauth_uid'] = new ezcPersistentObjectProperty();
$def->properties['oauth_uid']->columnName   = 'oauth_uid';
$def->properties['oauth_uid']->propertyName = 'oauth_uid';
$def->properties['oauth_uid']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['user_id'] = new ezcPersistentObjectProperty();
$def->properties['user_id']->columnName   = 'user_id';
$def->properties['user_id']->propertyName = 'user_id';
$def->properties['user_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['givenName'] = new ezcPersistentObjectProperty();
$def->properties['givenName']->columnName   = 'givenName';
$def->properties['givenName']->propertyName = 'givenName';
$def->properties['givenName']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['familyName'] = new ezcPersistentObjectProperty();
$def->properties['familyName']->columnName   = 'familyName';
$def->properties['familyName']->propertyName = 'familyName';
$def->properties['familyName']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['email'] = new ezcPersistentObjectProperty();
$def->properties['email']->columnName   = 'email';
$def->properties['email']->propertyName = 'email';
$def->properties['email']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>