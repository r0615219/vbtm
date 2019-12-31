<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */
return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 1,
        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,
        // Control Panel trigger word
        'cpTrigger' => 'admin',
        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => getenv('SECURITY_KEY'),
        // Whether to save the project config out to config/project.yaml
        // (see https://docs.craftcms.com/v3/project-config.html)
        'useProjectConfigFile' => false,
        'aliases' => [
            'basePath' => $_SERVER['DOCUMENT_ROOT'],
            'baseUrl' => strtolower((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://') . $_SERVER['SERVER_NAME']),
        ],
    ],
    // Dev environment settings
    'dev' => [
        'enableTemplateCaching' => false,
        'backupOnUpdate' => false,
        'devMode' => true,
        'siteUrl' => strtolower((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://') . $_SERVER['SERVER_NAME']),
    ],
    // Staging environment settings
    'staging' => [
        'enableTemplateCaching' => false,
        'backupOnUpdate' => false,
        'devMode' => false,
        'siteUrl' => strtolower((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://') . $_SERVER['SERVER_NAME']),
    ],
    // Production environment settings
    'production' => [
        'enableTemplateCaching' => true,
        'backupOnUpdate' => true,
        'devMode' => false,
        'siteUrl' => strtolower((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://') . $_SERVER['SERVER_NAME']),
    ],
];
