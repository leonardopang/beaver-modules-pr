'use strict'

import { tns } from 'tiny-slider'

export default function () {
  const imagens = tns({
    container: '.about-products-container__slide',
    items: 1,
    gutter: 16,
    controls: false,
    nav: true,
    center: true,
    mouseDrag: true,
    touch: true,
    navPosition: 'bottom',
  })
}