'use strict'

import { tns } from '../../../node_modules/tiny-slider/src/tiny-slider'

export default function () {
  const tamanho = document.body.clientWidth

  if (tamanho <= 480) {
    const slider = tns({
      container: '.certificacoes-slider',
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