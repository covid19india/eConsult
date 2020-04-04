Google Authentication support

## Install instructions

1. Clone github repository
2. Put cloned folder in extension/ directory
3. Activate extension in settings/settings.ini.php file
```
'extensions' => 
    array (          
        'lhcgoogleauth'
    ),
```
4. Install composer requirements with. You have to download composer or just have it installed already.
``` 
cd extension/lhcgoogleauth && composer.phar update
```
5. Clean cache. Just click clean cache in Live Helper Chat back office.
6. Execute doc/install.sql on database manager or just run
    ```
    php cron.php -s site_admin -e lhcgoogleauth -c cron/update_structure
    ```
9. Enter settings in module configuration from left menu Modules -> Google Auth
10. That's it.

You will have to create web application project in google.

