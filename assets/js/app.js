(()=>{var e,t={480:()=>{function e(e,t){e.tooltip("hide").attr("data-original-title",t).tooltip("show")}function t(e){setTimeout((function(){e.tooltip("hide")}),1e3)}window.addEventListener("DOMContentLoaded",(function(o){"use strict";var r,i;if(r=window.location.href,(i=r.split("config_trigger="))[1]&&document.querySelectorAll("[data-config-trigger]").forEach((function(e){e.dataset.configTrigger===i[1]&&(e.style.border="10px outset red")})),$(window).on("load",(function(){$("#preloader").fadeOut(250,(function(){$(this).remove()}))})),document.querySelector(".glide")){var n=new Glide(".glide",{type:"carousel",startAt:0,perView:1,peek:{before:0,after:0},gap:0,autoplay:1e4,animationDuration:1500,hoverpause:!1,breakpoints:{992:{peek:{before:30,after:30}}}});1===document.querySelectorAll(".glide__slide").length?(n.pause(),n.disable(),n.mount()):(n.play(),n.enable(),n.mount())}AOS.init({offset:-100});var a=new ClipboardJS("#server-ip-copy");a.on("success",(function(o){var r=$(o.trigger);r.tooltip({trigger:"click",placement:"bottom"}),e(r,"Copié !"),t(r)})),a.on("error",(function(o){e("Erreur!"),t()}))}))},225:()=>{},824:()=>{},563:()=>{}},o={};function r(e){var i=o[e];if(void 0!==i)return i.exports;var n=o[e]={exports:{}};return t[e](n,n.exports,r),n.exports}r.m=t,e=[],r.O=(t,o,i,n)=>{if(!o){var a=1/0;for(f=0;f<e.length;f++){for(var[o,i,n]=e[f],l=!0,u=0;u<o.length;u++)(!1&n||a>=n)&&Object.keys(r.O).every((e=>r.O[e](o[u])))?o.splice(u--,1):(l=!1,n<a&&(a=n));if(l){e.splice(f--,1);var d=i();void 0!==d&&(t=d)}}return t}n=n||0;for(var f=e.length;f>0&&e[f-1][2]>n;f--)e[f]=e[f-1];e[f]=[o,i,n]},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={773:0,33:0,673:0,703:0};r.O.j=t=>0===e[t];var t=(t,o)=>{var i,n,[a,l,u]=o,d=0;if(a.some((t=>0!==e[t]))){for(i in l)r.o(l,i)&&(r.m[i]=l[i]);if(u)var f=u(r)}for(t&&t(o);d<a.length;d++)n=a[d],r.o(e,n)&&e[n]&&e[n][0](),e[a[d]]=0;return r.O(f)},o=self.webpackChunktemplate_default=self.webpackChunktemplate_default||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})(),r.O(void 0,[33,673,703],(()=>r(480))),r.O(void 0,[33,673,703],(()=>r(225))),r.O(void 0,[33,673,703],(()=>r(824)));var i=r.O(void 0,[33,673,703],(()=>r(563)));i=r.O(i)})();
//# sourceMappingURL=app.js.map