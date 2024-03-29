# Anatomy of a Concrete CMS theme - Overview

This Concrete CMS package has been developed to be a clear and highly commented example of how to create a basic Concrete CMS package, as well as a Concrete CMS _theme_, using up-to-date practices.

The package could be used as the starting point for a new theme add-on, or simply referred to for learning purposes.

The theme outlined is intentionally very simple, and does not utilise more advanced theming features such as editable theme settings/colors. Is is a complete example however, and requires no more than basic CSS and HTML skills to extend and use for custom purposes.

## Location within Concrete CMS's directory and installation

Packages such as this one are placed within the top level `packages` directory and are installed via the 'Extend Functionality' dashboard page.
A newly installed theme is not automatically applied to a site, it can be applied via the 'Activate' button witin the Pages & Themes section of the dashboard

If you have downloaded this package from github, the package folder may have been labelled `anatomy_theme-master` - ensure that you rename the folder to just `anatomy_theme` before attempting to install it.

## Package structure

Within this package you'll find:
* this `README.md` file - this isn't required in a package, but can be safely included to include additional notes
* a `controller.php` file - this file defines the package details and what it installs
* a `themes` folder - this is where the theme folder is stored
* an `icon.png` file - a 97px by 97px png graphic, which is displayed against the package within the dashboard

## Next step
For now, note the name of the package folder itself, `anatomy_theme`, which is two lowercase words seperated by an underscore.

Next, open the `controller.php` file and review its comments.

 
