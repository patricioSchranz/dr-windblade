# FREE VANILLA WEBSITE TEMPLATE

This is a free to use website template with vanilla PHP and JavaScript and SASS for the stylings. The theme is a doctors website, but you can modify it however you want.

## Setup

- download the repo
- install composer
- run composer install (installs the md converter)
- change the content

## Markdown Content

The dynamic content of the website is based on markdowns, which are converted into HTML by the MD converter.

Each markdown file can contain some metadata to display in certain places, such as on the blog archive page. To mark a section as metadate, special CSS classes must be used.

The possible meta informations are :

- author (necessary) => {.author}
- creation date (necessary) => {.creation-date}
- category => {.category}
- subcategory => {.sub-category}
- hashtags => {.hashtags}
- thumbnail => {.image}
- text snippet from the first paragraph => {.first-paragraph}

## Animation Library

If you want to animate an element when it comes into the viewport, you can control this using CSS classes. The options available are :

- animation-element (necessary)
- animation--style_animation-name => default setting is 'opacity-in'
- animation--duration_xxx (e.g 500) => default 300
- animation--delay_xxx (e.g. 200) => default 0
- animation--timing_timing-declaration => default 'ease-in-out'
- animation--trigger-point_xx (e.g 95) => 75 

The animation trigger point indicates at what height, measured in percent of the viewport, the animation for the element should be triggered.

You can find all available animations in the 'viewport-animations.scss' file.

## Custom SASS/CSS

If you modify the Sass style declarations, use the pre-built Sass statements to convert the SCSS script to CSS. You can find them in the package.json file.

E.g => npm run build:blog

## Credits

The Markdown converter :
- [CommonMark](https://commonmark.thephpleague.com/2.4/)

All images used are from :
- [Pixabay](https://pixabay.com/)
- [Pexels](https://www.pexels.com/)

All icons used are from :
- [The Noun Project](https://thenounproject.com/)

## Hashtags

- \# dynamic content based on markdowns
- \# expendable 'in viewport animations' library
- \# mega menu
- \# dynamic blog
- \# dynamic news