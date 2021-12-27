!function(a,b){"use strict";"function"==typeof define&&define.amd?define([],b):"object"==typeof module&&module.exports?module.exports=b():(a.AnchorJS=b(),a.anchors=new a.AnchorJS)}(this,function(){"use strict";return function(c){function a(a){a.icon=Object.prototype.hasOwnProperty.call(a,"icon")?a.icon:"",a.visible=Object.prototype.hasOwnProperty.call(a,"visible")?a.visible:"hover",a.placement=Object.prototype.hasOwnProperty.call(a,"placement")?a.placement:"right",a.ariaLabel=Object.prototype.hasOwnProperty.call(a,"ariaLabel")?a.ariaLabel:"Anchor",a.class=Object.prototype.hasOwnProperty.call(a,"class")?a.class:"",a.base=Object.prototype.hasOwnProperty.call(a,"base")?a.base:"",a.truncate=Object.prototype.hasOwnProperty.call(a,"truncate")?Math.floor(a.truncate):64,a.titleText=Object.prototype.hasOwnProperty.call(a,"titleText")?a.titleText:""}function b(a){var b;if("string"==typeof a||a instanceof String)b=[].slice.call(document.querySelectorAll(a));else{if(!(Array.isArray(a)||a instanceof NodeList))throw new TypeError("The selector provided to AnchorJS was invalid.");b=[].slice.call(a)}return b}this.options=c||{},this.elements=[],a(this.options),this.isTouchDevice=function(){return Boolean("ontouchstart"in window||window.TouchEvent||window.DocumentTouch&&document instanceof DocumentTouch)},this.add=function(p){var d,o,m,h,c,l,j,n,f,e,k,g,i=[];if(a(this.options),"touch"===(k=this.options.visible)&&(k=this.isTouchDevice()?"always":"hover"),0===(d=b(p=p||"h2, h3, h4, h5, h6")).length)return this;for(!function(){if(null!==document.head.querySelector("style.anchorjs"))return;var b,a=document.createElement("style");a.className="anchorjs",a.appendChild(document.createTextNode("")),void 0===(b=document.head.querySelector('[rel="stylesheet"],style'))?document.head.appendChild(a):document.head.insertBefore(a,b),a.sheet.insertRule(".anchorjs-link{opacity:0;text-decoration:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}",a.sheet.cssRules.length),a.sheet.insertRule(":hover>.anchorjs-link,.anchorjs-link:focus{opacity:1}",a.sheet.cssRules.length),a.sheet.insertRule("[data-anchorjs-icon]::after{content:attr(data-anchorjs-icon)}",a.sheet.cssRules.length),a.sheet.insertRule('@font-face{font-family:anchorjs-icons;src:url(data:n/a;base64,AAEAAAALAIAAAwAwT1MvMg8yG2cAAAE4AAAAYGNtYXDp3gC3AAABpAAAAExnYXNwAAAAEAAAA9wAAAAIZ2x5ZlQCcfwAAAH4AAABCGhlYWQHFvHyAAAAvAAAADZoaGVhBnACFwAAAPQAAAAkaG10eASAADEAAAGYAAAADGxvY2EACACEAAAB8AAAAAhtYXhwAAYAVwAAARgAAAAgbmFtZQGOH9cAAAMAAAAAunBvc3QAAwAAAAADvAAAACAAAQAAAAEAAHzE2p9fDzz1AAkEAAAAAADRecUWAAAAANQA6R8AAAAAAoACwAAAAAgAAgAAAAAAAAABAAADwP/AAAACgAAA/9MCrQABAAAAAAAAAAAAAAAAAAAAAwABAAAAAwBVAAIAAAAAAAIAAAAAAAAAAAAAAAAAAAAAAAMCQAGQAAUAAAKZAswAAACPApkCzAAAAesAMwEJAAAAAAAAAAAAAAAAAAAAARAAAAAAAAAAAAAAAAAAAAAAQAAg//0DwP/AAEADwABAAAAAAQAAAAAAAAAAAAAAIAAAAAAAAAIAAAACgAAxAAAAAwAAAAMAAAAcAAEAAwAAABwAAwABAAAAHAAEADAAAAAIAAgAAgAAACDpy//9//8AAAAg6cv//f///+EWNwADAAEAAAAAAAAAAAAAAAAACACEAAEAAAAAAAAAAAAAAAAxAAACAAQARAKAAsAAKwBUAAABIiYnJjQ3NzY2MzIWFxYUBwcGIicmNDc3NjQnJiYjIgYHBwYUFxYUBwYGIwciJicmNDc3NjIXFhQHBwYUFxYWMzI2Nzc2NCcmNDc2MhcWFAcHBgYjARQGDAUtLXoWOR8fORYtLTgKGwoKCjgaGg0gEhIgDXoaGgkJBQwHdR85Fi0tOAobCgoKOBoaDSASEiANehoaCQkKGwotLXoWOR8BMwUFLYEuehYXFxYugC44CQkKGwo4GkoaDQ0NDXoaShoKGwoFBe8XFi6ALjgJCQobCjgaShoNDQ0NehpKGgobCgoKLYEuehYXAAAADACWAAEAAAAAAAEACAAAAAEAAAAAAAIAAwAIAAEAAAAAAAMACAAAAAEAAAAAAAQACAAAAAEAAAAAAAUAAQALAAEAAAAAAAYACAAAAAMAAQQJAAEAEAAMAAMAAQQJAAIABgAcAAMAAQQJAAMAEAAMAAMAAQQJAAQAEAAMAAMAAQQJAAUAAgAiAAMAAQQJAAYAEAAMYW5jaG9yanM0MDBAAGEAbgBjAGgAbwByAGoAcwA0ADAAMABAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAH//wAP) format("truetype")}',a.sheet.cssRules.length)}(),o=document.querySelectorAll("[id]"),m=[].map.call(o,function(a){return a.id}),c=0;c<d.length;c++)if(this.hasAnchorJSLink(d[c]))i.push(c);else{if(d[c].hasAttribute("id"))h=d[c].getAttribute("id");else if(d[c].hasAttribute("data-anchor-id"))h=d[c].getAttribute("data-anchor-id");else{for(f=n=this.urlify(d[c].textContent),j=0;void 0!==l&&(f=n+"-"+j),j+=1,-1!==(l=m.indexOf(f)););l=void 0,m.push(f),d[c].setAttribute("id",f),h=f}(e=document.createElement("a")).className="anchorjs-link "+this.options.class,e.setAttribute("aria-label",this.options.ariaLabel),e.setAttribute("data-anchorjs-icon",this.options.icon),this.options.titleText&&(e.title=this.options.titleText),g=document.querySelector("base")?window.location.pathname+window.location.search:"",g=this.options.base||g,e.href=g+"#"+h,"always"===k&&(e.style.opacity="1"),""===this.options.icon&&(e.style.font="1em/1 anchorjs-icons","left"===this.options.placement&&(e.style.lineHeight="inherit")),"left"===this.options.placement?(e.style.position="absolute",e.style.marginLeft="-1em",e.style.paddingRight=".5em",d[c].insertBefore(e,d[c].firstChild)):(e.style.paddingLeft=".375em",d[c].appendChild(e))}for(c=0;c<i.length;c++)d.splice(i[c]-c,1);return this.elements=this.elements.concat(d),this},this.remove=function(f){for(var d,e,c=b(f),a=0;a<c.length;a++)(e=c[a].querySelector(".anchorjs-link"))&&(-1!==(d=this.elements.indexOf(c[a]))&&this.elements.splice(d,1),c[a].removeChild(e));return this},this.removeAll=function(){this.remove(this.elements)},this.urlify=function(b){var c=document.createElement("textarea");return c.innerHTML=b,b=c.value,this.options.truncate||a(this.options),b.trim().replace(/'/gi,"").replace(/[& +$,:;=?@"#{}|^~[`%!'<>\]./()*\\\n\t\b\v\u00A0]/g,"-").replace(/-{2,}/g,"-").substring(0,this.options.truncate).replace(/^-+|-+$/gm,"").toLowerCase()},this.hasAnchorJSLink=function(a){var b=a.firstChild&&-1<(" "+a.firstChild.className+" ").indexOf(" anchorjs-link "),c=a.lastChild&&-1<(" "+a.lastChild.className+" ").indexOf(" anchorjs-link ");return b||c||!1}}}),!function(b,a){"object"==typeof exports&&"object"==typeof module?module.exports=a():"function"==typeof define&&define.amd?define([],a):"object"==typeof exports?exports.ClipboardJS=a():b.ClipboardJS=a()}(this,function(){return b={},a.m=c=[function(a,b){a.exports=function(a){var b,d,c,e;return"SELECT"===a.nodeName?(a.focus(),b=a.value):"INPUT"===a.nodeName||"TEXTAREA"===a.nodeName?(d=a.hasAttribute("readonly"),d||a.setAttribute("readonly",""),a.select(),a.setSelectionRange(0,a.value.length),d||a.removeAttribute("readonly"),b=a.value):(a.hasAttribute("contenteditable")&&a.focus(),c=window.getSelection(),e=document.createRange(),e.selectNodeContents(a),c.removeAllRanges(),c.addRange(e),b=c.toString()),b}},function(b,c){function a(){}a.prototype={on:function(a,c,d){var b=this.e||(this.e={});return(b[a]||(b[a]=[])).push({fn:c,ctx:d}),this},once:function(b,c,d){var e=this;function a(){e.off(b,a),c.apply(d,arguments)}return a._=c,this.on(b,a,d)},emit:function(c){for(var d=[].slice.call(arguments,1),b=((this.e||(this.e={}))[c]||[]).slice(),a=0,e=b.length;a<e;a++)b[a].fn.apply(b[a].ctx,d);return this},off:function(c,d){var e=this.e||(this.e={}),a=e[c],f=[],b,g;if(a&&d)for(b=0,g=a.length;b<g;b++)a[b].fn!==d&&a[b].fn._!==d&&f.push(a[b]);return f.length?e[c]=f:delete e[c],this}},b.exports=a,b.exports.TinyEmitter=a},function(c,e,b){var a=b(3),d=b(4);c.exports=function(b,c,e){if(!b&&!c&&!e)throw new Error("Missing required arguments");if(!a.string(c))throw new TypeError("Second argument must be a String");if(!a.fn(e))throw new TypeError("Third argument must be a Function");if(a.node(b))return f=c,g=e,(l=b).addEventListener(f,g),{destroy:function(){l.removeEventListener(f,g)}};if(a.nodeList(b))return h=b,i=c,j=e,Array.prototype.forEach.call(h,function(a){a.addEventListener(i,j)}),{destroy:function(){Array.prototype.forEach.call(h,function(a){a.removeEventListener(i,j)})}};if(a.string(b))return k=b,m=c,n=e,d(document.body,k,m,n);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList");var k,m,n,h,i,j,l,f,g}},function(b,a){a.node=function(a){return void 0!==a&&a instanceof HTMLElement&&1===a.nodeType},a.nodeList=function(b){var c=Object.prototype.toString.call(b);return void 0!==b&&("[object NodeList]"===c||"[object HTMLCollection]"===c)&&"length"in b&&(0===b.length||a.node(b[0]))},a.string=function(a){return"string"==typeof a||a instanceof String},a.fn=function(a){return"[object Function]"===Object.prototype.toString.call(a)}},function(b,e,c){var d=c(5);function a(a,f,b,g,c){var e=function(a,b,e,c){return function(e){e.delegateTarget=d(e.target,b),e.delegateTarget&&c.call(a,e)}}.apply(this,arguments);return a.addEventListener(b,e,c),{destroy:function(){a.removeEventListener(b,e,c)}}}b.exports=function(b,d,c,e,f){return"function"==typeof b.addEventListener?a.apply(null,arguments):"function"==typeof c?a.bind(null,document).apply(null,arguments):("string"==typeof b&&(b=document.querySelectorAll(b)),Array.prototype.map.call(b,function(b){return a(b,d,c,e,f)}))}},function(b,c){if("undefined"!=typeof Element&&!Element.prototype.matches){var a=Element.prototype;a.matches=a.matchesSelector||a.mozMatchesSelector||a.msMatchesSelector||a.oMatchesSelector||a.webkitMatchesSelector}b.exports=function(a,b){for(;a&&9!==a.nodeType;){if("function"==typeof a.matches&&a.matches(b))return a;a=a.parentNode}}},function(s,r,a){"use strict";var j,e,h,i,f,k,l,m,n,o,q;a.r(r),j=a(0),e=a.n(j),h="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(a){return typeof a}:function(a){return a&&"function"==typeof Symbol&&a.constructor===Symbol&&a!==Symbol.prototype?"symbol":typeof a};function g(d,c){for(var b=0,a;b<c.length;b++)a=c[b],a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(d,a.key,a)}function c(a){!function(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}(this,c),this.resolveOptions(a),this.initSelection()}i=(function(a,b,c){return b&&g(a.prototype,b),c&&g(a,c),a}(c,[{key:"resolveOptions",value:function(b){var a=0<arguments.length&&void 0!==b?b:{};this.action=a.action,this.container=a.container,this.emitter=a.emitter,this.target=a.target,this.text=a.text,this.trigger=a.trigger,this.selectedText=""}},{key:"initSelection",value:function(){this.text?this.selectFake():this.target&&this.selectTarget()}},{key:"selectFake",value:function(){var a=this,b="rtl"==document.documentElement.getAttribute("dir"),c;this.removeFake(),this.fakeHandlerCallback=function(){return a.removeFake()},this.fakeHandler=this.container.addEventListener("click",this.fakeHandlerCallback)||!0,this.fakeElem=document.createElement("textarea"),this.fakeElem.style.fontSize="12pt",this.fakeElem.style.border="0",this.fakeElem.style.padding="0",this.fakeElem.style.margin="0",this.fakeElem.style.position="absolute",this.fakeElem.style[b?"right":"left"]="-9999px",c=window.pageYOffset||document.documentElement.scrollTop,this.fakeElem.style.top=c+"px",this.fakeElem.setAttribute("readonly",""),this.fakeElem.value=this.text,this.container.appendChild(this.fakeElem),this.selectedText=e()(this.fakeElem),this.copyText()}},{key:"removeFake",value:function(){this.fakeHandler&&(this.container.removeEventListener("click",this.fakeHandlerCallback),this.fakeHandler=null,this.fakeHandlerCallback=null),this.fakeElem&&(this.container.removeChild(this.fakeElem),this.fakeElem=null)}},{key:"selectTarget",value:function(){this.selectedText=e()(this.target),this.copyText()}},{key:"copyText",value:function(){var a=void 0;try{a=document.execCommand(this.action)}catch(b){a=!1}this.handleResult(a)}},{key:"handleResult",value:function(a){this.emitter.emit(a?"success":"error",{action:this.action,text:this.selectedText,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)})}},{key:"clearSelection",value:function(){this.trigger&&this.trigger.focus(),document.activeElement.blur(),window.getSelection().removeAllRanges()}},{key:"destroy",value:function(){this.removeFake()}},{key:"action",set:function(a){var b=0<arguments.length&&void 0!==a?a:"copy";if(this._action=b,"copy"!==this._action&&"cut"!==this._action)throw new Error('Invalid "action" value, use either "copy" or "cut"')},get:function(){return this._action}},{key:"target",set:function(a){if(void 0!==a){if(!a||"object"!==(void 0===a?"undefined":h(a))||1!==a.nodeType)throw new Error('Invalid "target" value, use a valid Element');if("copy"===this.action&&a.hasAttribute("disabled"))throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');if("cut"===this.action&&(a.hasAttribute("readonly")||a.hasAttribute("disabled")))throw new Error('Invalid "target" attribute. You can\'t cut text from elements with "readonly" or "disabled" attributes');this._target=a}},get:function(){return this._target}}]),c),f=a(1),k=a.n(f),l=a(2),m=a.n(l),n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(a){return typeof a}:function(a){return a&&"function"==typeof Symbol&&a.constructor===Symbol&&a!==Symbol.prototype?"symbol":typeof a},o=function(a,b,c){return b&&p(a.prototype,b),c&&p(a,c),a};function p(d,c){for(var b=0,a;b<c.length;b++)a=c[b],a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(d,a.key,a)}q=(function(b,a){if("function"!=typeof a&&null!==a)throw new TypeError("Super expression must either be null or a function, not "+typeof a);b.prototype=Object.create(a&&a.prototype,{constructor:{value:b,enumerable:!1,writable:!0,configurable:!0}}),a&&(Object.setPrototypeOf?Object.setPrototypeOf(b,a):b.__proto__=a)}(b,k.a),o(b,[{key:"resolveOptions",value:function(b){var a=0<arguments.length&&void 0!==b?b:{};this.action="function"==typeof a.action?a.action:this.defaultAction,this.target="function"==typeof a.target?a.target:this.defaultTarget,this.text="function"==typeof a.text?a.text:this.defaultText,this.container="object"===n(a.container)?a.container:document.body}},{key:"listenClick",value:function(a){var b=this;this.listener=m()(a,"click",function(a){return b.onClick(a)})}},{key:"onClick",value:function(b){var a=b.delegateTarget||b.currentTarget;this.clipboardAction&&(this.clipboardAction=null),this.clipboardAction=new i({action:this.action(a),target:this.target(a),text:this.text(a),container:this.container,trigger:a,emitter:this})}},{key:"defaultAction",value:function(a){return d("action",a)}},{key:"defaultTarget",value:function(b){var a=d("target",b);if(a)return document.querySelector(a)}},{key:"defaultText",value:function(a){return d("text",a)}},{key:"destroy",value:function(){this.listener.destroy(),this.clipboardAction&&(this.clipboardAction.destroy(),this.clipboardAction=null)}}],[{key:"isSupported",value:function(c){var a=0<arguments.length&&void 0!==c?c:["copy","cut"],d="string"==typeof a?[a]:a,b=!!document.queryCommandSupported;return d.forEach(function(a){b=b&&!!document.queryCommandSupported(a)}),b}}]),b);function b(c,d){!function(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}(this,b);var a=function(b,a){if(!b)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!a||"object"!=typeof a&&"function"!=typeof a?b:a}(this,(b.__proto__||Object.getPrototypeOf(b)).call(this));return a.resolveOptions(d),a.listenClick(c),a}function d(c,a){var b="data-clipboard-"+c;if(a.hasAttribute(b))return a.getAttribute(b)}r.default=q}],a.c=b,a.d=function(b,c,d){a.o(b,c)||Object.defineProperty(b,c,{enumerable:!0,get:d})},a.r=function(a){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(a,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(a,"__esModule",{value:!0})},a.t=function(b,d){var c,e;if(1&d&&(b=a(b)),8&d)return b;if(4&d&&"object"==typeof b&&b&&b.__esModule)return b;if(c=Object.create(null),a.r(c),Object.defineProperty(c,"default",{enumerable:!0,value:b}),2&d&&"string"!=typeof b)for(e in b)a.d(c,e,function(a){return b[a]}.bind(null,e));return c},a.n=function(b){var c=b&&b.__esModule?function(){return b.default}:function(){return b};return a.d(c,"a",c),c},a.o=function(a,b){return Object.prototype.hasOwnProperty.call(a,b)},a.p="",a(a.s=6).default;function a(d){if(b[d])return b[d].exports;var e=b[d]={i:d,l:!1,exports:{}};return c[d].call(e.exports,e,e.exports,a),e.l=!0,e.exports}var c,b}),function(){'use strict';var a,d,f,b,c,g,e;document.querySelectorAll('.tooltip-demo').forEach(function(a){new bootstrap.Tooltip(a,{selector:'[data-bs-toggle="tooltip"]'})}),document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function(a){new bootstrap.Popover(a)}),a=document.getElementById('toastPlacement'),a&&document.getElementById('selectToastPlacement').addEventListener('change',function(){a.dataset.originalClass||(a.dataset.originalClass=a.className),a.className=a.dataset.originalClass+' '+this.value}),document.querySelectorAll('.bd-example .toast').forEach(function(a){var b=new bootstrap.Toast(a,{autohide:!1});b.show()}),d=document.getElementById('liveToastBtn'),f=document.getElementById('liveToast'),d&&d.addEventListener('click',function(){var a=new bootstrap.Toast(f);a.show()}),document.querySelectorAll('.tooltip-test').forEach(function(a){new bootstrap.Tooltip(a)}),document.querySelectorAll('.popover-test').forEach(function(a){new bootstrap.Popover(a)}),document.querySelectorAll('.bd-example-indeterminate [type="checkbox"]').forEach(function(a){a.indeterminate=!0}),document.querySelectorAll('.bd-content [href="#"]').forEach(function(a){a.addEventListener('click',function(a){a.preventDefault()})}),b=document.getElementById('exampleModal'),b&&b.addEventListener('show.bs.modal',function(c){var d=c.relatedTarget,a=d.getAttribute('data-bs-whatever'),e=b.querySelector('.modal-title'),f=b.querySelector('.modal-body input');e.textContent='New message to '+a,f.value=a}),c=document.getElementById('btnToggleAnimatedProgress'),c&&c.addEventListener('click',function(){c.parentNode.querySelector('.progress-bar-striped').classList.toggle('progress-bar-animated')}),g='<div class="bd-clipboard"><button type="button" class="btn-clipboard" title="Copy to clipboard">Copy</button></div>',document.querySelectorAll('div.highlight').forEach(function(a){a.insertAdjacentHTML('beforebegin',g)}),document.querySelectorAll('.btn-clipboard').forEach(function(a){var b=new bootstrap.Tooltip(a);a.addEventListener('mouseleave',function(){b.hide()})}),e=new ClipboardJS('.btn-clipboard',{target:function(a){return a.parentNode.nextElementSibling}}),e.on('success',function(a){var b=bootstrap.Tooltip.getInstance(a.trigger);a.trigger.setAttribute('data-bs-original-title','Copied!'),b.show(),a.trigger.setAttribute('data-bs-original-title','Copy to clipboard'),a.clearSelection()}),e.on('error',function(a){var b=/mac/i.test(navigator.userAgent)?'\u2318':'Ctrl-',c='Press '+b+'C to copy',d=bootstrap.Tooltip.getInstance(a.trigger);a.trigger.setAttribute('data-bs-original-title',c),d.show(),a.trigger.setAttribute('data-bs-original-title','Copy to clipboard')}),anchors.options={icon:'#'},anchors.add('.bd-content > h2, .bd-content > h3, .bd-content > h4, .bd-content > h5')}(),function(){'use strict';var a=document.getElementById('search-input'),b;if(!window.docsearch||!a)return;b=a.getAttribute('data-bd-docs-version'),document.addEventListener('keydown',function(b){b.ctrlKey&&b.key==='/'&&(b.preventDefault(),a.focus())}),window.docsearch({apiKey:'5990ad008512000bba2cf951ccf0332f',indexName:'bootstrap',inputSelector:'#search-input',algoliaOptions:{facetFilters:['version:'+b]},transformData:function(a){return a.map(function(a){var b='https://getbootstrap.com/';return a.url=window.location.origin.startsWith(b)?a.url:a.url.replace(b,'/'),a.anchor==='content'&&(a.url=a.url.replace(/#content$/,''),a.anchor=null),a})},debug:!1})}()