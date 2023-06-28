'use strict'

import { tns } from '../../../node_modules/tiny-slider/src/tiny-slider'

export default function () {
  const slider = tns({
    container: '.feedback-slider',
    items: 1,
    gutter: 16,
    edgePadding: 16,
    controls: false,
    nav: true,
    mouseDrag: true,
    touch: true,
    navPosition: 'bottom',
    responsive: {
      992: {
        items: 2,
      },
    },
  })

  const prev = document.querySelector('.feedback-grid .arrows-left')
  if (prev) prev.addEventListener('click', () => { slider.goTo('prev') })
  const next = document.querySelector('.feedback-grid .arrows-right')
  if (next) next.addEventListener('click', () => { slider.goTo('next') })
}