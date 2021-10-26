# Miscellaneous Block Types

These are components that don't necessarily fit with a _styling_ purpose, and rather
have either a functional purpose or a potentially unneeded in current scope purpose.

## core/block

This is an empty functional container for creating a reusable block. 


## block-supports/layout.php

This isn't a block, but it adds the layout block attribute for block types
that support it. 

Tied to __experimentalLayout > Likely option for "flex."

e.g. row block variation:
```js
isActive: ( blockAttributes ) =>
			blockAttributes.layout?.type === 'flex'
```

The below function beginning on line 37 is what generates and adds the CSS
properties for layout supporting contentSize and wideSize.

```phpt

function gutenberg_get_layout_style() {
        ....--ARGS--
        if ( $content_size || $wide_size ) {
            $style = $selector > * {";
            $style .= 'max-width: ' . esc_html( $all_max_width_value ) . ';';
            $style .= 'margin-left: auto !important;';
            $style .= 'margin-right: auto !important;';
            $style .= '}';
            ...--ARGS--

        }
};
```

This also checks if layout type is flex, if it is, then it adds display: flex and justify_content
options 'left', 'right', 'center' and 'space-between' as CSS classes.

In essence, these functions are adding the wrapper for .wp-container-id around components that support
alignwide and alignfull. 

Margins are added algorithmically, as well as max-width and blockGap (--wp--style--block-gap)
from theme.json.


[layout.js](https://github.com/WordPress/gutenberg/blob/dd5fd6b2466d33177d46dcdc0733abd0217e044a/packages/block-editor/src/hooks/layout.js)
[layout.php](https://github.com/WordPress/gutenberg/blob/655f5f4046a56647041af97d0e5b06452f43fdb3/lib/block-supports/layout.php)