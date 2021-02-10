# Themes - CrispCMS

![](https://raw.githubusercontent.com/tosdr/CrispCMS/master/themes/crisp/img/tosdr-icon-180.png)

> *Willkommen zu Crisp, der Standard Theme für das CrispCMS!*

Welcome to the Crisp Theme, the area for the existing content on [tosdr.org](https://tosdr.org/).
Here you will get an explanation for whot to expect and/or what to do here.

<!---TODO: Make TOC Once info is complete enough.
# Table of Contents
-->

## CSS

All css files can be found in the `css` folder, including imported
files from Bootstrap, Fontawesome; aswell as more custom stylesheets.
Regarding custom files, each will be named accordingly to their
functionality and purpose.

### Minifying CSS Files

Each `.css` file will have a minified version of it. ***DO NOT EDIT THOSE***,
but rather edit their original files.

Once you're done editing a CSS stylesheet, make sure to minify it with the `minify`
command. To install it, simply run:

```bash
$ npm install -g minify
```

Once it is installed, you must minify each css style you've edited.
For example:

```bash
$ minify example.css > example.min.css
```

**Make sure to preserve the location for each stylesheet, minified or not!**

## Presskit

The `presskit` folder contains the zip file that can be downloaded at
https://tosdr.org/presskit. **DO NOT MODIFY IT UNLESS YOU'VE BEEN GIVEN**
**EXPLICIT PERMISSIONS AND/OR INSTRUCTIONS!**

## JS

<!---TODO: Complete the information.-->

### Minifying JS Files

**The same principle from [_Minifying CSS Files_](#minifying-css-files) applies with**
**`.js` files, just with their appropriate file extensions.**
