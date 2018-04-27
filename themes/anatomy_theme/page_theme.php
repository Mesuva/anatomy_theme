<?php
/**
 * Like the package controller.php file, the first line within a page_theme.php file is a namespace declaration.
 *
 * It will be the namespace of your package, plus \Theme\YourThemeHandle;
 * In this example, both the package handle and the theme handle are the same, this is commonly the case
 *
 * If you had a package with a handle/folder of my_concrete5_package and a theme with the handle of my_concrete5_theme
 * the name space would be: Concrete\Package\MyConcrete5Package\Theme\MyConcrete5Theme
 */

namespace Concrete\Package\AnatomyTheme\Theme\AnatomyTheme;

/**
 * Include this use statement to correctly refer to the core Theme class
 */
use Concrete\Core\Page\Theme\Theme;

/**
 * This file always contains a PageTheme class - leave the following line as is
 */
class PageTheme extends Theme
{
    /**
     * This required function returns the name of the theme
     */
    public function getThemeName()
    {
        return t('Anatomy Theme');
    }

    /**
     * This required function returns a description of the theme
     */
    public function getThemeDescription()
    {
        return t('A highly commented example theme');
    }

    /**
     * This is a function used to automatically include commonly used scripts
     * If you are creating a theme that requires jQuery for example, you would tell concrete5 that your theme requires it here.
     * Requiring an asset prevents the same script from being loaded twice, avoiding conflicts and other errors.  
     *    
     * In the commented out example below, jquery is included, as well as the css scripts for font-awesome
     * Refer to https://documentation.concrete5.org/developers/appendix/asset-list for a complete list of assets that
     * be included
     */
    public function registerAssets()
    {
//        $this->requireAsset('javascript', 'jquery');
//        $this->requireAsset('css', 'font-awesome');
    }

    /**
     * This line is used to indicate what grid system you are using, to enable custom grid layout editing
     * Many themes use bootstrap for grids and the setting for this is below - commented out
     */

//    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    /**
     * Below are additional functions and settings that can be included to further control a theme
     * They do not need to be altered unless you wish to explore more advanced theming options
     * Refer to the concrete5 documentation for full details on how to implement these functions
     */

    public function getThemeBlockClasses()
    {
        return [];
    }

    public function getThemeAreaClasses()
    {
        return [];
    }

    public function getThemeDefaultBlockTemplates()
    {
        return [];
    }

    public function getThemeResponsiveImageMap()
    {
        return [];
    }

    public function getThemeEditorClasses()
    {
        return [];
    }

    public function getThemeAreaLayoutPresets()
    {
        return [];
    }

}

/**
 * Next step
 *
 * Open the `default.php` file and review its comments.
 */
