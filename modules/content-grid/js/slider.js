'use strict'

import { tns } from '../../../node_modules/tiny-slider/src/tiny-slider'

export default function () {
  let sliders = document.querySelectorAll('.content-grid__slider')

  for (var i = 0; i < sliders.length; i++) {
    let slider = tns({
      container: sliders[i],
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

}