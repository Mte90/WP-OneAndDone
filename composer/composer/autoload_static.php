<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f93718b58f3c97c854fea451639c5cb
{
    public static $files = array (
        'c14057a02afc95b84dc5bf85d98c5b66' => __DIR__ . '/../..' . '/admin/includes/lib/Wp-dismissible-notices-handler/handler.php',
        'e7a23b473708f4b0fb5b99fe921bee83' => __DIR__ . '/../..' . '/public/includes/lib/Widgets-helper/wph-widget.php',
        '9b6589aa6a8382a7459438252aee60ae' => __DIR__ . '/../..' . '/includes/lib/Fakepage/fake-page.php',
        '33463dafc79559dfcabd4bb559eb4b57' => __DIR__ . '/../..' . '/admin/includes/lib/Cpt_columns/CPT_Columns.php',
        '5883ee4b643b7e87de56323bec06b24c' => __DIR__ . '/../..' . '/includes/lib/Language/language.php',
        'ce20db008ec08ec1de765a16020c5985' => __DIR__ . '/../..' . '/includes/lib/Cpt-core/CPT_Core.php',
        '9c9ba5b7922c4da6a6ffadd6544d169a' => __DIR__ . '/../..' . '/includes/lib/Taxonomy_core/Taxonomy_Core.php',
        'a50f2d2ba04e0c6b552331bf2bdeba41' => __DIR__ . '/../..' . '/admin/includes/lib/Wp-review-me/review.php',
        '1fa8862ea6a31004f198b1e9b7b6b499' => __DIR__ . '/../..' . '/includes/lib/Template/template.php',
        '8585965b6d416e38b2582f2efe0c6909' => __DIR__ . '/../..' . '/admin/includes/lib/Cmb2/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Composer\\CustomDirectoryInstaller' => 
            array (
                0 => __DIR__ . '/..' . '/idct/composer-custom-directory/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f93718b58f3c97c854fea451639c5cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f93718b58f3c97c854fea451639c5cb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9f93718b58f3c97c854fea451639c5cb::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
