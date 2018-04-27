# Anatomy of a concrete5 theme - Theme structure

The following is an outline of a minimal, but complete, concrete5 theme. Like web development in general, there are many
approaches to developing a concrete5 theme, but the core requirements remain the same.

## Theme structure

As a minimum, a theme requires the following files:
* a `page_theme.php` file - this is used to define the theme details, such as its name and description
* a `default.php` file - this is the default template used by the theme
* a `view.php` file - this is used as the template for 'single pages' (explained within the file)

Within this example there are are additional folders and files. These files are optional but are typical of a concrete5 
theme:
* a `thumbnail.png` file - a preview image of your theme, 360px by 270px. This is recommended.
* an `elements` folder - this holds smaller, repeatedly used pieces of code such as header and footer files
* folders such as `css`, `images` and `js` - such folders are used to hold resources for your theme, such as
stylesheets, graphics and custom javascript files

## Next step
Next, open the `page_theme.php` file and review its comments.

 
