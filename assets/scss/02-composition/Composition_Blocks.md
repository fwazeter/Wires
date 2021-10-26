# Blocks that serve as a basis for composition in a layout.

Compositional elements are meant to be high-level setting smart defaults and 
building _general_ rules for how a layout should flow and ask. The focus is on **extending CSS**
at a very high macro level view with these compositional layout ideas. That way we can leverage inheritance without worrying
about specificity-war nightmares as the project becomes more complex. 

_Rather than thinking of things from components first_ we want to think from the browser first and be flexible enough to allow it to 
move elements based on the device and browser, influenced by our direction. As Captain Jack Sparrow said, they're more like "guidelines"
anyway, and we want to have this same amount of flexibility at a macro level so we don't have to write huge amounts of code at the component level.

Blocks should be more like _skeletons_ with the majority of the work done already by composition and utilities. Because everything in
gutenberg is a block terminology can be confusing: by blocks in this we mean a component. Composition _blocks_ from the editor
should act in tandem with CSS classes to determine a basic layout framework.

Composition blocks should provide flexible, component-agnostic layouts that support as many variants of content as possible. _Block Patterns_ can
ultimately extend on this.

## Composition Layer / Blocks Responsibilities
1. Provide High-level, flexible layouts
2. Determine how elements interact with one another.
3. Establish and create a consistent flow and rhythm.

### **_Composition Layers DO NOT handle_**
* Visual styling, such as colors and font style.
* Decorative elements, like shadows or patterns.
* Force the browser to adhere to pixel-perfection - it's impossible with the volume of devices we have now.

## CSS Classes / Properties Created
In many cases, it may not make sense to create an infinite amount of block variations of
say, a group element, in order to account for basic patterns. We'll leverage Custom Props & CSS classes where appropriate.

### Classes List

Only group, row and template-part blocks can create and change ```<div>``` wrappers by default. This indicates it's
our best use of setting some smart overall globals that target ```<article>, <section>, etc```

```css
/* Natural flow & rhythm in articles by default */
article > * + * {
    margin-block-start: 1em;
}
```

# Compositional Block List

## core/Template-Part
Template Part block allows template parts (headers, footers, sidebars etc)
to be placed inside the block-editor on pages and in templates. Inherits
```<div>``` element change based on "area" setting in theme.json - e.g. header,
footer, etc as default semantic tag.

### Block CSS
```scss
    .wp-block-template-part {
        &.has-background {
            padding: $block-bg-padding--v $block-bg-padding--h;
            margin-top: 0;
            margin-bottom: 0;
        }
}
```
Located in themes.scss. Padding var matches paragraph.

### Attributes
```json
    "attributes": {
      "slug": {},
      "theme":{ "type": "string" },
      "tagName": {},
      "area": {}
}
```

### Supports
```align``` e.g. alignwide,full, color: gradients & link. spacing: padding.
__experimentalLayout.

Placeholder inherits from ```<Flex>``` component.

Header & Footer variants map to default areas of header/footer.

## Group
_Serves as a basic settable ```<div>``` wrapping container_.

### Auto Generated CSS classes

```html
    <div class="wp-container-## wp-block-group"></div>
```

### Row

## Column/s

## Cover

## Site Blocks
While not technically something we can manipulate too much, this does wrap the entire inner content area.

### Auto Generated CSS classes

```html
    <div class="wp-site-blocks">
        <div class="wp-container-## entry-content wp-block-post-content">
            
        </div>
    </div>
```

## Body Class
WordPress attaches classes to the body, so we have to consider them.

### Auto Generated CSS classes

```html
    <body class="page-template-default page page-id-53 wp-embed-responsive">

    </body>
```

```logged-in```, ```admin-bar``` and ```customize-support``` are also added, but these are likely
because we are logged in as admin. 