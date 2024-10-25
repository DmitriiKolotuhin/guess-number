<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7c63d28f96d8e7034b7e355c803c6f9
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '2ee48161a56e057040ef845f238ca942' => __DIR__ . '/../..' . '/src/Controller.php',
        'f8fd45748464f95f995a04ad91e2cef6' => __DIR__ . '/../..' . '/src/View.php',
        '786ebda2089dad8e0f0a40c976c078f7' => __DIR__ . '/../..' . '/src/Game.php',
        '1dfaefef88b21a2f2ff3e41dea77072d' => __DIR__ . '/../..' . '/src/Database.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Haiven\\GuessNumber\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Haiven\\GuessNumber\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Haiven\\GuessNumber\\Controller' => __DIR__ . '/../..' . '/src/Controller.php',
        'Haiven\\GuessNumber\\Database' => __DIR__ . '/../..' . '/src/Database.php',
        'Haiven\\GuessNumber\\Game' => __DIR__ . '/../..' . '/src/Game.php',
        'Haiven\\GuessNumber\\View' => __DIR__ . '/../..' . '/src/View.php',
        'cli\\Arguments' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Arguments.php',
        'cli\\Colors' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Colors.php',
        'cli\\Memoize' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Memoize.php',
        'cli\\Notify' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Notify.php',
        'cli\\Progress' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Progress.php',
        'cli\\Shell' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Shell.php',
        'cli\\Streams' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Streams.php',
        'cli\\Table' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Table.php',
        'cli\\Tree' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/Tree.php',
        'cli\\arguments\\Argument' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/arguments/Argument.php',
        'cli\\arguments\\HelpScreen' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/arguments/HelpScreen.php',
        'cli\\arguments\\InvalidArguments' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/arguments/InvalidArguments.php',
        'cli\\arguments\\Lexer' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/arguments/Lexer.php',
        'cli\\notify\\Dots' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/notify/Dots.php',
        'cli\\notify\\Spinner' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/notify/Spinner.php',
        'cli\\progress\\Bar' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/progress/Bar.php',
        'cli\\table\\Ascii' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/table/Ascii.php',
        'cli\\table\\Renderer' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/table/Renderer.php',
        'cli\\table\\Tabular' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/table/Tabular.php',
        'cli\\tree\\Ascii' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/tree/Ascii.php',
        'cli\\tree\\Markdown' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/tree/Markdown.php',
        'cli\\tree\\Renderer' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/tree/Renderer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite7c63d28f96d8e7034b7e355c803c6f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7c63d28f96d8e7034b7e355c803c6f9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite7c63d28f96d8e7034b7e355c803c6f9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite7c63d28f96d8e7034b7e355c803c6f9::$classMap;

        }, null, ClassLoader::class);
    }
}
