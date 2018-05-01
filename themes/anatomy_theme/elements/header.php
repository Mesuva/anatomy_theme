<?php
/**
 * This is an element file, which is a re-usable part of a template.
 * The first line should be the security line as per other PHP files
 * Below this line you will start to see common HTML that begins an HTML5 document.
 */
?>
<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    /**
     * Below is an HTML link to a stylesheet contained within the theme directory, in this case in the css folder.
     * Note the use of $view->getThemePath(), which ensures that the correct URL is generated.
     */
    ?>

    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/style.css">

    <?php
    /**
     * The following block of code is required in all themes and is used to automatically output style and header
     * script links required by concrete5
     */

    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>

</head>
<body>

<?php
/**
 * To ensure that page content and concrete5's interface can be seperate, a broad wrapping div is required.
 * The $c->getPageWrapperClass() function automatically outputs useful classes that correspond with the page type and
 * template of the page. It also outputs a ccm-page class.
 */
?>
<div class="<?php echo $c->getPageWrapperClass()?>">

    <header>
        <?php
        /**
         * Below is the creation and output of a global area, commonly used in a header or footer area
         * Note that $c is omitted from the display() function.
         */
        $a = new GlobalArea('Header');
        $a->display();
        ?>
    </header>

<?php
/**
 * Next step
 *
 * Open the `footer.php` file and review its comments.
 */
