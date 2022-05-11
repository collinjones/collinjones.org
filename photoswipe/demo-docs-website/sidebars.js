/**
 * Creating a sidebar enables you to:
 - create an ordered group of docs
 - render a sidebar for each doc of that group
 - provide next/previous navigation

 The sidebars can be generated from the filesystem, or explicitly defined here.

 Create as many sidebars as you want.
 */

// @ts-check

/** @type {import('@docusaurus/plugin-content-docs').SidebarsConfig} */
const sidebars = {
  // By default, Docusaurus generates a sidebar from the docs folder structure
  // tutorialSidebar: [{type: 'autogenerated', dirName: '.'}],

  mainSidebar: [
    {
      type: 'doc',
      id: 'getting-started',
    },
    {
      type: 'category',
      label: 'Examples',
      items: [
        {
          type: 'doc',
          id: 'styling',
        },
        {
          type: 'doc',
          id: 'opening-or-closing-transition',
        },
        {
          type: 'doc',
          id: 'adding-ui-elements',
        },
        {
          type: 'doc',
          id: 'adjusting-zoom-level',
        },
        {
          type: 'doc',
          id: 'caption',
        },
        {
          type: 'doc',
          id: 'click-and-tap-actions',
        },
        {
          type: 'doc',
          id: 'custom-content',
        },
        {
          type: 'doc',
          id: 'data-sources',
        },
        {
          type: 'doc',
          id: 'native-fullscreen-on-open',
        },
      ],
    },

    {
      type: 'category',
      label: 'API',
      items: [
        {
          type: 'doc',
          id: 'options',
        },
        {
          type: 'doc',
          id: 'events',
        },
        {
          type: 'doc',
          id: 'filters',
        },
        {
          type: 'doc',
          id: 'methods',
        },
      ],
    },

    {
      type: 'category',
      label: 'Frameworks',
      items: [
        {
          type: 'doc',
          id: 'react-image-gallery',
        },
        {
          type: 'doc',
          id: 'vue-image-gallery',
        },
      ],
    },
  ]

  // But you can create a sidebar manually
  /*
  tutorialSidebar: [
    {
      type: 'category',
      label: 'Tutorial',
      items: ['hello'],
    },
  ],
   */
};

module.exports = sidebars;