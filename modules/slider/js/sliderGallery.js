'use strict'

import { tns } from '../../../node_modules/tiny-slider/src/tiny-slider'

export default function () {
  const slider = tns({
    container: '.slider-module-content',
    items: 1,
    gutter: 16,
    controls: true,
    controlsText: ['', ''],
    nav: true,
    center: true,
    mouseDrag: true,
    touch: true,
    navPosition: 'bottom',
  })
}