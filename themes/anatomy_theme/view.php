<?php
/**
 * The view.php file is used in a theme when 'single pages' are requested in concrete5, special pages that don't have
 * a page type associated with them.
 *
 * Structually this file will look similar to the default.php file, except instead of an editable area, a system_errors
 * element is included, as well as the value of $innerContent is output.
 */

defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php
$this->inc('elements/header.php'); ?>

<?php
/**
 * The element and $innerContent lines below are for single pages to output their specific content.
 * View these lines the same as the 'Main' editable area of a templte.
 */
View::element('system_errors', [
    'format' => 'block',
    'error' => isset($error) ? $error : null,
    'success' => isset($success) ? $success : null,
    'message' => isset($message) ? $message : null,
]);

echo $innerContent;
?>


<?php
$this->inc('elements/footer.php');

/**
 * Next step
 *
 * Open the `css/style.css` file and review its comments.
 */