WordPress theme.json isn't totally available as a tokenizer, but we can create design tokens based on WordPress Standards.

This will not be a core part of a theme, but will be broken off as a sass plugin.

##Use cases for theme.json as design tokens.
###Color:
(settings/color/palette) generates: --wp--preset--color--${slug}
    This creates useable CSS classes:
        .has-${slug}-color
.has-${slug}-background-color 
        .has-${slug}-border-color

###Font Size:
(settings/typography/fontFamily) generates: --wp--preset--typography--font-family-${slug}
    This creates useable CSS classes:
        .has-${slug}-font-family

    (settings/typography/fontSize) generates: --wp--preset--typography--font-size--${slug}
    This creates useable CSS class:
        .has-${slug}-font-size

##Cases to not use theme.json?
Cases arise where certain scoped variables - like .has-background changing
padding on paragraph and h1 tags, but not being overrideable means we need
a consistent way to easily and fluidly apply changes to the theme.

Additionally, not all variations of styles are available on theme.json yet.
For example, adding filter colors and the like without complex hsl() codes.

While there is a lot of movement behind using things liketype scaling type
functionality via calc() functions and --wp--custom or --wp--preset values,
there is a performance concern over time as theme.json gets larger and larger
and more props are added by default to the body{} scope.

The case for something like:
--wp--custom--base-size: 1rem;
--wp--custom--scale: 1.33;
--scale-1: calc(var(--wp--custom--base-size) _ var(--wp--custom--scale));
--scale-2: calc(var(--wp--custom--scale-1) _ var(--wp--custom--scale));

Is to make development and modification life easier - however, this isn't
something that should be suitable for production as it adds needless
calculation. Instead, we should make our calculations in a proper dev
environment and then port the value of that calculation into the custom prop.

##Future Proofing Accessibility
Currently margin and padding properties only generate margin-top, etc values
to populate within blocks and the like. To support rtl / ltr / vertical
layouts seamlessly, these values should use modern logic properties (97% browser support)
since the values are largely the same, but the syntax is different and far
more powerful.
