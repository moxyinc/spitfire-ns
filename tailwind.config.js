 const plugin = require("tailwindcss/plugin");
const _ = require("lodash");
const tailpress = require("./tailpress.json");

module.exports = {
  mode: "jit",
  tailpress,
  purge: {
    content: [
        './template-parts/*.php',
        './template-parts/content-single_listing.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './includes/banner.php',
        './includes/search.php',
        './functions.php',
        './comments.php',
        './header.php',
        './footer.php',
        './single.php',
        './single-listing.php',
        './index.php',
        './page.php',
        './page-home.php',
        './page-*.php',
        './archive.php',
        './archive-listing.php',
        './archive-*.php',
        './404.php',
        './safelist.txt'
      ],
  },
  theme: {
    container: {
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "0rem",
      },
    },
    extend: {
      inset: {
         '-16': '-4rem',
         '-8': '-2rem',
         '-4': '-1rem',
         },
      animation: {
        fadeIn: "fadeIn 500ms ease-in-out forwards",
      },
      keyframes: {
        // fadeIn: {
        //   "0%": { opacity: 0 , transform: 'translateX(0)' },
        //  "100%": { opacity: 1, transform: 'translateX(1rem)' }
        // },
        fadeIn: {
          "0%": { opacity: 0 },
         "100%": { opacity: 1 }
        },
    
      animation: ["motion-safe"]
      },
      
      colors: tailpress.colors,
      fontFamily: {
        headline: ["Oswald", "sans-serif"],
      },
      fontFamily: {
        maple: ["maple-web", "sans-serif"],
      },
    },
    deliciousHamburgers: {
      size: '40px', // must be in px...
      color: '#262261',
      colorLight: '#fff8f4',
      padding: '0px', // must be in px.
      animationSpeed: 1,
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('tailwindcss-delicious-hamburgers'),
    plugin(function ({
      addUtilities,
      addComponents,
      e,
      prefix,
      config,
      theme,
    }) {
      const colors = theme("colors");
      const margin = theme("margin");
      const screens = theme("screens");
      const fontSize = theme("fontSize");

      const editorColorText = _.map(
        config("tailpress.colors", {}),
        (value, key) => {
          return {
            [`.has-${key}-text-color`]: {
              color: value,
            },
          };
        }
      );

      const editorColorBackground = _.map(
        config("tailpress.colors", {}),
        (value, key) => {
          return {
            [`.has-${key}-background-color`]: {
              backgroundColor: value,
            },
          };
        }
      );

      const editorFontSizes = _.map(
        config("tailpress.fontSizes", {}),
        (value, key) => {
          return {
            [`.has-${key}-font-size`]: {
              fontSize: value[0],
              fontWeight: `${value[1] || "normal"}`,
            },
          };
        }
      );

      const alignmentUtilities = {
        ".alignfull": {
          margin: `${margin[2] || "0.5rem"} calc(50% - 50vw)`,
          maxWidth: "100vw",
          "@apply w-screen": {},
        },
        ".alignwide": {
          "@apply -mx-16 my-2 max-w-screen-xl": {},
        },
        ".alignnone": {
          "@apply h-auto max-w-full mx-0": {},
        },
        ".aligncenter": {
          margin: `${margin[2] || "0.5rem"} auto`,
          "@apply block": {},
        },
        [`@media (min-width: ${screens.sm || "640px"})`]: {
          ".alignleft:not(.wp-block-button)": {
            marginRight: margin[2] || "0.5rem",
            "@apply float-left": {},
          },
          ".alignright:not(.wp-block-button)": {
            marginLeft: margin[2] || "0.5rem",
            "@apply float-right": {},
          },
          ".wp-block-button.alignleft a": {
            "@apply float-left mr-4": {},
          },
          ".wp-block-button.alignright a": {
            "@apply float-right ml-4": {},
          },
        },
      };

      const imageCaptions = {
        ".wp-caption": {
          "@apply inline-block": {},
          "& img": {
            marginBottom: margin[2] || "0.5rem",
            "@apply leading-none": {},
          },
        },
        ".wp-caption-text": {
          fontSize: (fontSize.sm && fontSize.sm[0]) || "0.9rem",
          color: (colors.gray && colors.gray[600]) || "#718096",
        },
      };

      addUtilities(
        [
          editorColorText,
          editorColorBackground,
          alignmentUtilities,
          editorFontSizes,
          imageCaptions,
        ],
        {
          respectPrefix: false,
          respectImportant: false,
        }
      );
    }),
  ],
};
