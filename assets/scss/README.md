#CSS Breakdown:

Breakdown of locations of Block Editor / Gutenberg Related CSS files.

If the file is listed as ```@wordpress/file-name``` then likely can be npm installed
with that name, for example: 

```npm install @wordpress/block-editor --save```

## CSS File & Dequeue Key List
___
### "wp-block-editor"

Module for creating and using standalone block editors. Very interesting
potential for using the Block Editor elsewhere. Extensive README.md file in link.

**CSS Files** Include the entire /components/ directory and /hooks/ directory.

[@wordpress/block-editor](https://github.com/WordPress/gutenberg/tree/trunk/packages/block-editor)
### "wp-editor"
___

This uses components from @wordpress/block-editor (above). This associates blocks to
a post and content and provides ways to work with the post object within editor.

Supports any post type editing on any screen.

**CSS Files** Include many of hte /components/ directory.

[@wordpress/editor](https://github.com/WordPress/gutenberg/tree/trunk/packages/editor)

### "wp-edit-post"
___

Only for WordPress Core - weak documentation.

**CSS Files** Includes /components/ directory, & calls ```@include wordpress-admin-schemes();```
Also includes ```interface/src/style.scss``` Interface CSS pulls from components for skeletons, etc.

_Interface_ is an experimental package to start a new WordPress screen as Edit Post or Edit Site.
Stores common data required by a screen (like active areas). Plugins can extend them.
[@wordpress/interface](https://github.com/WordPress/gutenberg/tree/trunk/packages/interface)
[@wordpress/edit-post](https://github.com/WordPress/gutenberg/tree/trunk/packages/edit-post)

### "wp-components"
___

Large directory package, library of components intended for use on WordPress components
in the dashboard, but likely we could make custom blocks using these component pieces.
Many other editor-related packages call from this file.

***CSS Files*** 48 self-contained scss files that control component styling.

[@wordpress/components](https://github.com/WordPress/gutenberg/tree/trunk/packages/components)

### "wp-block-library"
___

This is the front end Block Library for the WordPress editor. Viewable with view.js files.

Where most code is for the actual blocks we use.
#### reset.scss - styles only output in editor. -handled via wp-reset-editor-styles
#### editor.scss - editor styles for rendering looks in block editor. - handled via wp-edit-blocks

### FRONT END REGISTERED
#### common.scss - compiles to style.css
```
.has-text-align-center/left/right {
    text-align: center | left | right;
}
// Block Alignments:
.aligncenter {
    clear: both; why?
}

// Justification
.items-justified-left / center / right / space-between {
    justify-content: flex-start; / center / flex-end / space-between
}

```

Also includes .screen-reader-text & :focus.
#### theme.scss & style.scss for front end renders here - pulls theme.scss files from blocks.


[@wordpress/block-library](https://github.com/WordPress/gutenberg/tree/trunk/packages/block-library)
### "wp-format-library"  
___

Powers formats of text (e.g. bold), editor side only. Toolbar formats for rich text
and editing other media for different (bold, italics, link, subscript, etc)

[Format-Library](https://github.com/WordPress/gutenberg/tree/trunk/packages/format-library/src)
**CSS Files** 

1. /image/style.scss 
2. /link/style.scss
3. /text-color/style.scss

### "wp-reset-editor-styles"
___

Inside block-library "reset.scss"

### "wp-editor-classic-layout-styles"
___

Inside ``` edit-post/src/classic.scss ``` this is actually referring to _classic themes_
not the classic "editor" tinymce. For themes pre- ```theme.json```. This could likely just be dequeued entirely.

```
// This may affect Block themes front end.
.editor-styles-wrapper .wp-block {
    margin-left: auto;
    margin-right: auto;
}
```


[Editor Classic Layout](https://github.com/WordPress/gutenberg/blob/trunk/packages/edit-post/src/classic.scss)

### "wp-edit-blocks"
___

This is contained within the @wordpress/block-library

Filename: editor.scss

[Edit Blocks](https://github.com/WordPress/gutenberg/blob/trunk/packages/block-library/src/editor.scss)

### "wp-nux"
___

Nux is evidently the "New User Experience" it exposes copmonents, wp.data methods
for onboarding new users to WordPress admin interface - it shows tips and guides.

Kinda cool idea here.

**CSS File** only contains references to /components/dot-tip/style.scss dir.

About 126 lines of CSS here - appears to all be back end related and component
specific.

[@wordpress/nux](https://github.com/WordPress/gutenberg/tree/trunk/packages/nux)

### "wp-block-library-theme"
___

This is specifically for handling the _theme.scss_ file taken from blocks, which
most recently was used to deprioritize .has-background on certain elements for lower
specificity.

[Block Library Theme](https://github.com/WordPress/gutenberg/blob/trunk/packages/block-library/src/theme.scss)

### "wp-list-reusable-blocks"
___

Handles add import/export links to listing page of reusable blocks.

**CSS File** pulls internal component and a single reference to ```@include wordpress-admin-schemes()```

[@wordpress/list-reusable-blocks](https://github.com/WordPress/gutenberg/tree/trunk/packages/list-reusable-blocks)
### "wp-edit-navigation"
___

Gutenberg-based UI for editing nav menus - meant for use inside WP Core primarily.

**CSS File** references only navigation-editor specific CSS & components 

[Edit Navigation](https://github.com/WordPress/gutenberg/tree/trunk/packages/edit-navigation)

### "wp-edit-site"
___

Meant for WordPress Core - for editing "Site Page" (likely Full Site Editor)

**CSS File** Appears mostly back-end admin area related.

_**Interesting**_ note is a component for ['global-styles'](https://github.com/WordPress/gutenberg/tree/trunk/packages/edit-site/src/components/global-styles)

Looking at CSS file seems it refers mostly to the _panel_ for Global Styles, but also
functionally provides context for the WP_THEME_JSON class likely.

[@wordpress/edit-site](https://github.com/WordPress/gutenberg/tree/trunk/packages/edit-site)

### "wp-edit-widgets"
___

Internal WordPress core package. plan to turn it into @wordpress/batch-processing

**CSS File** is for internal backend widget component styling.

[@wordpress/edit-widgets](https://github.com/WordPress/gutenberg/tree/trunk/packages/edit-widgets)
### "wp-block-directory"
___

For extending the editor with block directory features / search / install.

**CSS File** is back end.

[@wordperss/block-directory](https://github.com/WordPress/gutenberg/tree/trunk/packages/block-directory)
### "wp-customize-widgets"
___

Widget blocks for the Customizer.

**CSS File** specific to customer & a few control panels.

[@wordpress/customize-widgets](https://github.com/WordPress/gutenberg/tree/trunk/packages/customize-widgets)
### "wp-reusable-blocks"
___

Logic and components specific to reusable blocks. Likely back-end only.

**CSS File** only refrences /components/re-usable-blocks-menu-items, which has 2 classes:

```angular2html
.reusable-blocks-menu-items__convert-modal {
	z-index: z-index(".reusable-blocks-menu-items__convert-modal");
}

.reusable-blocks-menu-items__convert-modal-actions {
	padding-top: $grid-unit-15;
}
```

[@wordpress/reusable-blocks](https://github.com/WordPress/gutenberg/tree/trunk/packages/reusable-blocks)


### "wp-widgets"
___

**CSS File** pulls legacy widget & widget group editor files.

[@wordpress/widgets](https://github.com/WordPress/gutenberg/tree/trunk/packages/widgets)
### "global-styles"
___

Generated by WP_THEME_JSON class. no directory otherwise.
