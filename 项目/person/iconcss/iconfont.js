;(function(window) {

var svgSprite = '<svg>' +
  ''+
    '<symbol id="icon-gouwuchetianjia" viewBox="0 0 1024 1024">'+
      ''+
      '<path d="M803.2 896m-64 0a2 2 0 1 0 128 0 2 2 0 1 0-128 0Z"  ></path>'+
      ''+
      '<path d="M345.6 896m-64 0a2 2 0 1 0 128 0 2 2 0 1 0-128 0Z"  ></path>'+
      ''+
      '<path d="M774.4 118.4c-108.8 0-198.4 89.6-198.4 198.4 0 108.8 89.6 198.4 198.4 198.4 108.8 0 198.4-89.6 198.4-198.4C976 208 886.4 118.4 774.4 118.4zM774.4 464c-83.2 0-150.4-67.2-150.4-147.2 0-83.2 67.2-147.2 150.4-147.2 83.2 0 150.4 67.2 150.4 147.2C924.8 400 857.6 464 774.4 464z"  ></path>'+
      ''+
      '<path d="M368 649.6c0 12.8 12.8 22.4 25.6 22.4l492.8-41.6c12.8 0 22.4-12.8 22.4-25.6 0-12.8-12.8-22.4-25.6-22.4l-492.8 41.6C377.6 624 364.8 633.6 368 649.6z"  ></path>'+
      ''+
      '<path d="M844.8 291.2l-48 0 0-48c0-12.8-9.6-25.6-25.6-25.6s-25.6 9.6-25.6 25.6l0 48-48 0c-12.8 0-25.6 9.6-25.6 25.6 0 12.8 9.6 25.6 25.6 25.6l48 0 0 48c0 12.8 9.6 25.6 25.6 25.6s25.6-9.6 25.6-25.6l0-48 48 0c12.8 0 25.6-9.6 25.6-25.6C867.2 304 857.6 291.2 844.8 291.2z"  ></path>'+
      ''+
      '<path d="M329.6 192l188.8 0c12.8 0 25.6-9.6 25.6-25.6 0-12.8-9.6-25.6-25.6-25.6l-188.8 0c-12.8 0-25.6 9.6-25.6 25.6C304 182.4 316.8 192 329.6 192z"  ></path>'+
      ''+
      '<path d="M886.4 742.4l-524.8 0c-28.8 0-57.6-25.6-64-51.2l-92.8-547.2c-9.6-51.2-57.6-92.8-112-92.8l-22.4 0c-12.8 0-25.6 9.6-25.6 25.6 0 12.8 9.6 25.6 25.6 25.6l22.4 0c28.8 0 57.6 22.4 64 51.2l92.8 547.2c9.6 51.2 57.6 92.8 112 92.8l524.8 0c12.8 0 25.6-9.6 25.6-25.6C912 755.2 899.2 742.4 886.4 742.4z"  ></path>'+
      ''+
    '</symbol>'+
  ''+
'</svg>'
var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
var shouldInjectCss = script.getAttribute("data-injectcss")

/**
 * document ready
 */
var ready = function(fn){
  if(document.addEventListener){
      document.addEventListener("DOMContentLoaded",function(){
          document.removeEventListener("DOMContentLoaded",arguments.callee,false)
          fn()
      },false)
  }else if(document.attachEvent){
     IEContentLoaded (window, fn)
  }

  function IEContentLoaded (w, fn) {
      var d = w.document, done = false,
      // only fire once
      init = function () {
          if (!done) {
              done = true
              fn()
          }
      }
      // polling for no errors
      ;(function () {
          try {
              // throws errors until after ondocumentready
              d.documentElement.doScroll('left')
          } catch (e) {
              setTimeout(arguments.callee, 50)
              return
          }
          // no errors, fire

          init()
      })()
      // trying to always fire before onload
      d.onreadystatechange = function() {
          if (d.readyState == 'complete') {
              d.onreadystatechange = null
              init()
          }
      }
  }
}

/**
 * Insert el before target
 *
 * @param {Element} el
 * @param {Element} target
 */

var before = function (el, target) {
  target.parentNode.insertBefore(el, target)
}

/**
 * Prepend el to target
 *
 * @param {Element} el
 * @param {Element} target
 */

var prepend = function (el, target) {
  if (target.firstChild) {
    before(el, target.firstChild)
  } else {
    target.appendChild(el)
  }
}

function appendSvg(){
  var div,svg

  div = document.createElement('div')
  div.innerHTML = svgSprite
  svg = div.getElementsByTagName('svg')[0]
  if (svg) {
    svg.setAttribute('aria-hidden', 'true')
    svg.style.position = 'absolute'
    svg.style.width = 0
    svg.style.height = 0
    svg.style.overflow = 'hidden'
    prepend(svg,document.body)
  }
}

if(shouldInjectCss && !window.__iconfont__svg__cssinject__){
  window.__iconfont__svg__cssinject__ = true
  try{
    document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
  }catch(e){
    console && console.log(e)
  }
}

ready(appendSvg)


})(window)
