import React from 'react';

import image from './image/blog-post-image.twig';

import imageData from './image/blog-post-image.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/paragraphs/image' };

export const images = () => (
  <div dangerouslySetInnerHTML={{ __html: image(imageData) }} />
);
