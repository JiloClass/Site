const ARIA_ATTRIBUTE_PATTERN = /^aria-[\w-]*$/i
const DefaultAllowlist = {
  // Global attributes allowed on any supplied element below.
  '*': ['class', 'dir', 'id', 'lang', 'role', ARIA_ATTRIBUTE_PATTERN],
  a: ['target', 'href', 'title', 'rel'],
  area: [],
  b: [],
  br: [],
  col: [],
  code: [],
  div: [],
  em: [],
  hr: [],
  h1: [],
  h2: [],
  h3: [],
  h4: [],
  h5: [],
  h6: [],
  i: [],
  img: ['src', 'srcset', 'alt', 'title', 'width', 'height'],
  li: [],
  ol: [],
  p: [],
  pre: [],
  s: [],
  small: [],
  span: [],
  sub: [],
  sup: [],
  strong: [],
  u: [],
  ul: []
}

const myDefaultAllowList = bootstrap.Tooltip.Default.allowList

// To allow table elements
myDefaultAllowList.table = []

// To allow td elements and data-bs-option attributes on td elements
myDefaultAllowList.td = ['data-bs-option']

// You can push your custom regex to validate your attributes.
// Be careful about your regular expressions being too lax
const myCustomRegex = /^data-my-app-[\w-]+/
myDefaultAllowList['*'].push(myCustomRegex)

const yourTooltipEl = document.querySelector('#certified-tooltip')
const tooltip = new bootstrap.Tooltip(yourTooltipEl, {
  sanitizeFn(content) {
    return DOMPurify.sanitize(content)
  }
})

$('[data-bs-toggle="tooltip"]').tooltip() // to enable tooltips, with default configuration

$('[data-bs-toggle="tooltip"]').tooltip({ boundary: 'clippingParents', customClass: 'tooltip' }) // to initialize tooltips with given configuration

$('#certified-tooltip').tooltip('show') // to trigger `show` method