<?php

class erLhcoreClassModelGoogleAuth
{
	use erLhcoreClassDBTrait;

	public static $dbTable = 'lhc_google_auth';

	public static $dbTableId = 'id';

	public static $dbSessionHandler = 'erLhcoreClassExtensionLhcgoogleauth::getSession';

	public static $dbSortOrder = 'DESC';

    public function getState()
    {
        return array(
            'id' => $this->id,
            'oauth_uid' => $this->oauth_uid,
            'givenName' => $this->givenName,
            'email' => $this->email,
            'familyName' => $this->familyName,
            'user_id' => $this->user_id
        );
    }

    public function __toString()
    {
        return $this->oauth_uid;
    }

    public function __get($var)
    {
        switch ($var) {
                
            case 'callback_url':
                $this->callback_url = '';
                return $this->callback_url;
                break;

            default:
                ;
                break;
        }
    }

    public $id = null;

    public $oauth_uid = null;

    public $user_id = 0;

    public $givenName = '';

    public $email = '';

    public $familyName = '';
}

?>
