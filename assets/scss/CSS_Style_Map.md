# Theme CSS Style Map
Because we're still at an early stage of theme.json where it cannot competently handle all the global
needs we have, we're going to map out where each top level cascade begins for easy lookup.

## 1. Compositional Flow & Rhythm
_Note_ margin, padding, etc applied to all sides maintains logic / a11y because it's the same value on all sides.  

### Spacing

----

#### Settings

> Base Scale: 1rem | Size Scale based on 1.25, rounded up to synchronize with 8px grid scale.

Setting Location: theme.json : settings, custom.

> ```:focus``` selector set to ```outline: 2px dotted; outline-offset: 0.25rem;``` for global consistency of focusable elements.


####_Body_

> **initial-margin**: ```0``` applied via theme.json ```styles, spacing, margin, trbl```
> 
> **padding-block-end**: ```var(--wp--custom--size-scale--60)``` // 1.5rem. in _flow-rhythm.scss
Setting Location: theme.json

####_Article_ 
```css
article > * + * { margin-block-start: 1em; }
```
Owl Selector behavior:

* article container
   * first child (no margin)
      * second child (margin)
      * third child (group)(margin)
          * first child of child (no margin)
          * second child of child (no margin)

Setting Location: 02-composition/_flow-rhythm.scss

###_Table_

```border-collapse: collapse``` and ``` th { text-align: left }```

Set globally in _flow-rhythm.scss.

### Type Scaling

----

####_Body_
> **line-height**: ``` var(--wp--custom--line-height--default) ``` // 1.5 _Set via theme.json_ ``` styles, typography, lineHeight``` 
> for ```h1, h2, h3``` line-height is: ```var(--wp--custom--line-height--heading)``` // 1.2
> 
> **font-weight** ```var(--wp--custom--weight--medium)``` // 500 _Set via theme.json_
> 
> **font-size** h1: '80', h2: '70', 'h3': 60, p: 50, h4: 50 // 3, 2, 1.5, 1.25rem _Set via theme.json_

Setting Location: theme.json