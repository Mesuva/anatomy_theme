<?php
/**
 * This is a page template file and is used to define the actual output of a page on your site.
 * As this file is called default.php, it is used whenever a specific template isn't selected for a page (or can't be
 * found).
 *
 * Other template files will be structured the same as this file, but may have additional HTML and/or editable area.
 * Concrete5 themes commonly have a 'full.php' file, to indicate a full width template. You may also commonly see
 * 'left_sidebar.php' and 'right_sidebar.php' templates within a theme.
 */

/**
 * The first line you see in this file is included for security purposes.
 * It should be included as the first line of any PHP file you create, such as template and element files in your theme
 *
 * The only places it can be ommitted are in files that define classes, such as the package controller.php and
 * page_theme.php. Including at in those files is harmless, however.
 */

defined('C5_EXECUTE') or die("Access Denied.");

/**
 * The next line includes the header.php file from the elements folder within the theme.
 * Within this file you will find the very start HTML of a typical web page, along with code to include certain
 * concrete5 components. By keeping this common code in it's own file, it can be used across different page templates.
 */

$this->inc('elements/header.php');

/**
 * At this point of the template file you are within the 'body' of the page tempalte. This is where you would expect to
 * output unique page content. You can exit a PHP block and include structural HTML such as div, article, main, etc, to
 * wrap the output of your editable area
 */
?>

<main>

    <?php

    /**
     * The following is an example of defining an editable area, where blocks can be placed.
     * The convension is to always have a 'Main' area in your theme, however, you can call the area whatever name you
     * wish. You can also create multiple editable areas in your template file (and your element files)
     */

    $a = new Area('Main');

    /**
     * This line is commonly included when you are using a grid system, such as bootstrap.
     * This will enable the layout editing of your theme, as well as output any required wrapping HTML
     * If you are not adding layout support to your theme this line can be omitted.
     *
     * If used however, ensure that you have $pThemeGridFrameworkHandle defined (uncommented) in your page_theme.php file
     */

//    $a->enableGridContainer();

    /**
     * Finally this line is where the create Editable Area is output to the page.
     */
    $a->display($c);
    ?>

</main>

<?php

/**
 * In the same was as the header element, a footer element is regularly included in a page template
 */
$this->inc('elements/footer.php');

/**
 * Next step
 *
 * Open the file header.php within the elements folder and review its comments.
 */