<?php

class erLhcoreClassExtensionLhcgoogleauth {

    public function __construct() {

    }

    public function run() {
        $this->registerAutoload ();
        include_once 'extension/lhcgoogleauth/vendor/autoload.php';

        $dispatcher = erLhcoreClassChatEventDispatcher::getInstance();

        $dispatcher->listen('instance.extensions_structure', array(
            $this,
            'checkStructure'
        ));

        $dispatcher->listen('instance.registered.created', array(
            $this,
            'instanceCreated'
        ));

        $dispatcher->listen('user.login_after_success_authenticate', array(
            $this,
            'loginSuccess'
        ));
    }

    public function loginSuccess($params)
    {
        if (isset($_POST['oauth_google']) && is_numeric($_POST['oauth_google'])) {
            $gauth = erLhcoreClassModelGoogleAuth::fetch($_POST['oauth_google']);
            if ($gauth instanceof erLhcoreClassModelGoogleAuth && $gauth->user_id == 0){
                $gauth->user_id = $params['current_user']->getUserID();
                $gauth->saveThis();
            }
        }
    }

    /**
     * Checks automated hosting structure
     *
     * This part is executed once in manager is run this cronjob.
     * php cron.php -s site_admin -e instance -c cron/extensions_update
     *
     * */
    public function checkStructure()
    {
        erLhcoreClassUpdate::doTablesUpdate(json_decode(file_get_contents('extension/lhcgoogleauth/doc/structure.json'), true));
    }

    /**
     * Used only in automated hosting enviroment
     */
    public function instanceCreated($params)
    {
        try {
            // Just do table updates
            erLhcoreClassUpdate::doTablesUpdate(json_decode(file_get_contents('extension/lhcgoogleauth/doc/structure.json'), true));
        } catch (Exception $e) {
            erLhcoreClassLog::write(print_r($e, true));
        }
    }

    public function registerAutoload() {
        spl_autoload_register ( array (
            $this,
            'autoload'
        ), true, false );
    }

    public function autoload($className) {
        $classesArray = array (
            'erLhcoreClassModelGoogleAuth'         => 'extension/lhcgoogleauth/classes/erlhcoreclassmodelgoogleauth.php',
        );

        if (key_exists ( $className, $classesArray )) {
            include_once $classesArray [$className];
        }
    }

    public static function getSession() {
        if (! isset ( self::$persistentSession )) {
            self::$persistentSession = new ezcPersistentSession ( ezcDbInstance::get (), new ezcPersistentCodeManager ( './extension/lhcgoogleauth/pos' ) );
        }
        return self::$persistentSession;
    }

    public function __get($var) {
        switch ($var) {
            case 'settings' :
                $this->settings = include ('extension/lhcgoogleauth/settings/settings.ini.php');
                return $this->settings;
                break;

            default :
                break;
        }
    }

    private static $persistentSession;
}


