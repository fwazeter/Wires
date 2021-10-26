# Block Component Roles

Design architecture flow moves like this: 
1. Macro-level "Compositional" elements (02-settings)
2. Utilities that _handle_ a single macro responsibility.
3. Blocks that form a _skeleton_ for content areas.
4. Fine-tune exceptions.

A block should act more like a skeleton, rather than an highly opinionated singular piece of the puzzle.
**most of the styling and spacing work** should already be completed by the time styling comes to the individual
block level with the cascade. Rather than style everything on the block, we want it to run contrary to
global CSS parameters, composition and utilities. 

That way we achieve much easier consistency and scalability of design without being as error-prone as an individual style-the-block primarily
approach leads to.

Because there are some design elements, such as margin properties that we'd rather optimize for LTR / RTL and Vertical formats ahead of the a11y requirements, 
we've dequeued and simplified the individual blocks from their base state.

In other words, if we can't modify it through Global CSS, theme.json or Global Styling, we probably shouldn't be modifying the block - and instead creating a new one 
to fit a new use case.

## Example CSS Architecture & Selectors

```angular2html
.wp-block-search {}

.wp-block-search .button {}

.wp-block-search .input {}

// Or by element

.wp-block-search a {}

.wp-block-search input {}
```
### VS

```angular2html
.wp-block-search__button {}
.wp-block-search__button.has-icon {}
.wp-block-search__inside-wrapper {}
.wp-block-search__label {}
```

# Blocky Block Blocks List.

## core/post-template

The post template block renders a post -> e.g. title, date, featured image. like such as on an archive or search page or recommended post
page. 

### Parent Block: __core/query__

Supports:
1. align

Disabled supports: reusable, html, __experimentalLayout: allowEditing.

### Default CSS classes
__Note__: Renamed from ```wp-block-query-loop```, in 5.9 this is going to be deleted, so while default CSS code has .wp-block-query-loop
added to classes, because it will soon be removed we won't add it.

**Inner Content** is rendered as 
```html
<li class=' $post_classes '> . $block_content . </li>
```

Default CSS

```scss

.wp-block-post-template {
   margin-top: 0;       // we want to modify this to block-start
   margin-bottom: 0;    // block-end.
   max-width: 100%;
   list-style: none;
   padding: 0;
   
   li { clear: both; } 
}

/* modifiers: is.flex-container, break-small mediaquery, columns-#
*/
```

### Context used:

queryID, query, queryContext, displayLayout, templateSlug.

## core/table

### Attributes

[Table attributes and supports](https://github.com/WordPress/gutenberg/blob/trunk/packages/block-library/src/table/block.json)

Default CSS

```scss

.wp-block-table {
    margin: 0 0 1em 0;
    $subtle-light-gray: #f3f4f5;
    $subtle-pale-green: #e9fbe5;
    $subtle-pale-blue: #e7f5fe;
    $subtle-pale-pink: #fcf0ef;
    
    overflow-x: auto;
    
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    // Fixed layout toggle
    .has-fixed-layout { }
    .alignleft {}
    .aligncenter {}
    .alignright {}
}

```

### Default Auto Generated CSS classes

```html
    <figure class="wp-block-table">
        <table>
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
        </table>
    </figure>
```
