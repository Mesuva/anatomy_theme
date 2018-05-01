<?php
/**
 * This element file is used to complete the HTML page. It outputs another global area and then closes the div that
 * was initially opened in the header element file. 
 */
?>
<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

    <footer>
        <?php
        $a = new GlobalArea('Footer');
        $a->display();
        ?>
    </footer>

</div>

<?php
/**
 * This line is required to automatically output footer scripts by concrete5
 */
View::element('footer_required'); ?>


<?php
/**
 * The next link is a link to a javascript files stored within the themes js folder.
 */
?>
<script src="<?php echo $this->getThemePath() . '/js/script.js';?>"></script>

</body>
</html>

<?php
/**
 * Next step
 *
 * Open the view.php file and review its comments
 */
