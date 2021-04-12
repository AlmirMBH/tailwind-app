module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
      theme: {
        extend: {},
      },
      variants: {
          backgroundColor: ['responsive', 'hover', 'focus', 'active'],
          fontSize: ['responsive', 'hover'],
          extend: {},
      },
    plugins: [],
}

// variants that are enabled in this class are e.g.
// responsive (sm, md, lg), hover, focus and active (this order is important)
// all (special) variants for specific elements need to be enabled here e.g. font, background
// after enabling variants, execute the following command npm run build
