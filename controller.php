<?php

/**
 * This is a concrete5 package controller file. It is responsible for defining the details of the package as well as
 * installing any components the package contains.
 *
 * In this case the package installs a new theme and requires only a few lines of code to do so.
 */

/**
 * The first line of PHP required in a controller.php is a name space declaration.
 * It follows the pattern Concrete\Package\YourPackageHandle
 *
 * In the below you will see package handle as AnatomyTheme
 * This is the folder name of the package, where the underscore has been removed and each word has been title-cased
 * You will need to change this line for each package you create
 */
namespace Concrete\Package\AnatomyTheme;

/**
 * Use statements in code are used to specify particular files/classes to use
 *
 * In this case, the following two use statements tell the code to use Package and Theme classes from concrete5's core
 * Simply leave these in place
 */

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;


/**
 * A concrete5 controller file is a PHP class
 */
class Controller extends Package
{

    /**
     * This line defines the package handle and needs to match your package folder name exactly
     * You will need to change the handle within this line for each package you create
     */
    protected $pkgHandle = 'anatomy_theme';

    /**
     * This line sets the minimum required version of concrete5 for your package. Theme packages generally don't need to
     * target specific versions of concrete5 unless they are using very new features.
     */
    protected $appVersionRequired = '8.0';

    /**
     * This line defines the package version number. You can set this to any number you like, but it is good practice to
     * follow a MAJOR.MINOR.PATCH conversion. For example, increment the major number for large scale changes to your
     * package, the minor number for new features, and the patch number for bug fixes or minor updates.
     *
     * A further convention is to keep the major version number a zero while the package is in development.
     *
     * Increments of any value will allow a package upgrade to be triggered via the dashboard.
     */
    protected $pkgVersion = '0.5.1';

    /**
     * This required function returns the name/title of the package, which can be any text. Note that the text is
     * surrounded by a t() function. This allows for translations to be provded for this text.
     *
     * Ensure you change the text within this function to correctly name your theme package
     */
    public function getPackageName()
    {
        return t('Anatomy Theme Package');
    }

    /**
     * This required function returns a text description of the package.
     */
    public function getPackageDescription()
    {
        return t('A package to illustrate the files and structure of a typical concrete5 theme');
    }

    /**
     * This required function is called when the package is installed. In this case we are only installing a theme.
     */
    public function install()
    {
        /**
         * This line should always appear within the package controller's install function, before other steps
         */
        $pkg = parent::install();

        /**
         * This line installs the theme held within the package. The theme handle must match the folder name of the
         * theme within the package's themes folder.
         *
         * For a theme package, it is common to use the same handle for the package and the theme it contains
         */
        Theme::add('anatomy_theme', $pkg);
    }
}

/**
 * Next step
 *
 * Open the themes folder and note the folder in there, anatomy_theme - that is matching the theme handle above
 * Open the anatomy_theme folder and continue reading the README.md within it
 */

