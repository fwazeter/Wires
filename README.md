# Wires

Block Based Theme for WordPress leveraging theme.json as design tokens and creates smart macro-based CSS to simplify the theme building process.

## Design Tokens

Theme design tokens determined via theme.json and prefixed with --wp--preset or --wp--custom.

### Colors

Prefix: --wp--preset--color

```css
--primary:      #091353;
--secondary:    #9d84b7;
--tertiary:     #b2f9fc;

--background:   #f8f8f8;
--foreground:   #121111;

--white:        #fff;
--black:        #000;
```

### Typography

These are system stacks, simplified in docs but have more fallbacks in practice.

Prefix: --wp--preset--typography

```css
--base: -apple-system, BlinkMacSystemFont, 'Segoe UI', "Ubuntu", sans-serif;
--serif: Baskerville, 'Georgia Pro', 'DejaVu Serif', Georgia, serif;
--mono: ui-monospace, SFMono-Regular, Consolas, 'DejaVu Sans Mono', monospace;
```

### Font Scaling

Font scaling done via calc in theme.json based off of 1.25 scale by default. Numbers rounded below for easier reading.

Prefix: --wp--custom

```css
--font-0: 0.8rem;       /* 12.8px */
--font-1: 1rem;         /* 16px */
--font-2: 1.25rem;      /* 20px */
--font-3: 1.56rem;      /* 25px */
--font-4: 1.95rem;      /* 31.25px */
--font-5: 2.44rem;      /* 39px */
--font-6: 3.05rem;      /* 48.8px */
```

### Font Weight

Text default is --medium and header default is --bold.

Prefix: --wp--custom--weight
```css
--light:  300;
--normal: 400;
--medium: 500;
--bold:   700;
```

### Line Height

Text default is --text and header default is --normal.

Prefix: --wp--custom--line-height
```css
--normal: 1.2;
--text:   1.5;
--medium: 1.7;
```

### Space Scaling

Size space grid system for margin, padding and block gaps. Based off an 8 px grid increment. 
In theme.json these values are calculated using calc().

Prefix: --wp--custom

```css
--space-025: 0.25em;    /* 4px */
--space-05:  0.5em;     /* 8px */
--space-075: 0.75em;    /* 12px */
--space-1:   1em;       /* 16px */
--space-2:   1.5em;     /* 24px */
--space-3:   2em;       /* 32px */
--space-4:   2.5em;     /* 40px */
--space-5:   3em;       /* 48px */
```

### Breakpoints

```scss
@media (max-width: 782px);
```

## Block Changes

Some blocks in WordPress core have settings for either backwards compatibility or because of
having to cater to a wide range of design-situations that are not theme specific. Because we have more individualized
control over how the theme works - we can eliminate and reduce some of the unnecessary elements.

