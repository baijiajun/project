(function(){var h={},mt={},c={id:"4233e74dff0ae5bd0a3d81c6ccf756e6",dm:["lagou.com"],js:"tongji.baidu.com/hm-web/js/",etrk:[],icon:'',ctrk:false,align:-1,nv:-1,vdur:1800000,age:31536000000,rec:0,rp:[],trust:1,vcard:4899764,qiao:0,lxb:0,conv:0,med:0,cvcc:{q:/tencent:\/\/|qq\.(com|htm)|kefu|openkf|swt|zoos|53kf|doyoo|looyu|leyu|zixun|chat|talk|openQQ|open_ask|online/i},cvcf:['register','submit'],apps:''};var r=void 0,s=!0,t=null,w=!1;mt.h={};mt.h.xa=/msie (\d+\.\d+)/i.test(navigator.userAgent);mt.h.va=/msie (\d+\.\d+)/i.test(navigator.userAgent)?document.documentMode||+RegExp.$1:r;mt.h.cookieEnabled=navigator.cookieEnabled;mt.h.javaEnabled=navigator.javaEnabled();mt.h.language=navigator.language||navigator.browserLanguage||navigator.systemLanguage||navigator.userLanguage||"";mt.h.za=(window.screen.width||0)+"x"+(window.screen.height||0);mt.h.colorDepth=window.screen.colorDepth||0;mt.cookie={};
mt.cookie.set=function(a,b,d){var e;d.G&&(e=new Date,e.setTime(e.getTime()+d.G));document.cookie=a+"="+b+(d.domain?"; domain="+d.domain:"")+(d.path?"; path="+d.path:"")+(e?"; expires="+e.toGMTString():"")+(d.Sa?"; secure":"")};mt.cookie.get=function(a){return(a=RegExp("(^| )"+a+"=([^;]*)(;|$)").exec(document.cookie))?a[2]:t};mt.m={};mt.m.Q=function(a){return document.getElementById(a)};mt.m.La=function(a,b){for(b=b.toUpperCase();(a=a.parentNode)&&1==a.nodeType;)if(a.tagName==b)return a;return t};
(mt.m.M=function(){function a(){if(!a.B){a.B=s;for(var b=0,d=e.length;b<d;b++)e[b]()}}function b(){try{document.documentElement.doScroll("left")}catch(e){setTimeout(b,1);return}a()}var d=w,e=[],g;document.addEventListener?g=function(){document.removeEventListener("DOMContentLoaded",g,w);a()}:document.attachEvent&&(g=function(){"complete"===document.readyState&&(document.detachEvent("onreadystatechange",g),a())});(function(){if(!d)if(d=s,"complete"===document.readyState)a.B=s;else if(document.addEventListener)document.addEventListener("DOMContentLoaded",
g,w),window.addEventListener("load",a,w);else if(document.attachEvent){document.attachEvent("onreadystatechange",g);window.attachEvent("onload",a);var e=w;try{e=window.frameElement==t}catch(n){}document.documentElement.doScroll&&e&&b()}})();return function(b){a.B?b():e.push(b)}}()).B=w;mt.event={};mt.event.c=function(a,b,d){a.attachEvent?a.attachEvent("on"+b,function(b){d.call(a,b)}):a.addEventListener&&a.addEventListener(b,d,w)};
mt.event.preventDefault=function(a){a.preventDefault?a.preventDefault():a.returnValue=w};mt.j={};mt.j.parse=function(){return(new Function('return (" + source + ")'))()};
mt.j.stringify=function(){function a(a){/["\\\x00-\x1f]/.test(a)&&(a=a.replace(/["\\\x00-\x1f]/g,function(a){var b=d[a];if(b)return b;b=a.charCodeAt();return"\\u00"+Math.floor(b/16).toString(16)+(b%16).toString(16)}));return'"'+a+'"'}function b(a){return 10>a?"0"+a:a}var d={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};return function(e){switch(typeof e){case "undefined":return"undefined";case "number":return isFinite(e)?String(e):"null";case "string":return a(e);case "boolean":return String(e);
default:if(e===t)return"null";if(e instanceof Array){var d=["["],l=e.length,n,f,k;for(f=0;f<l;f++)switch(k=e[f],typeof k){case "undefined":case "function":case "unknown":break;default:n&&d.push(","),d.push(mt.j.stringify(k)),n=1}d.push("]");return d.join("")}if(e instanceof Date)return'"'+e.getFullYear()+"-"+b(e.getMonth()+1)+"-"+b(e.getDate())+"T"+b(e.getHours())+":"+b(e.getMinutes())+":"+b(e.getSeconds())+'"';n=["{"];f=mt.j.stringify;for(l in e)if(Object.prototype.hasOwnProperty.call(e,l))switch(k=
e[l],typeof k){case "undefined":case "unknown":case "function":break;default:d&&n.push(","),d=1,n.push(f(l)+":"+f(k))}n.push("}");return n.join("")}}}();mt.lang={};mt.lang.d=function(a,b){return"[object "+b+"]"==={}.toString.call(a)};mt.lang.Pa=function(a){return mt.lang.d(a,"Number")&&isFinite(a)};mt.lang.Ra=function(a){return mt.lang.d(a,"String")};mt.localStorage={};
mt.localStorage.D=function(){if(!mt.localStorage.f)try{mt.localStorage.f=document.createElement("input"),mt.localStorage.f.type="hidden",mt.localStorage.f.style.display="none",mt.localStorage.f.addBehavior("#default#userData"),document.getElementsByTagName("head")[0].appendChild(mt.localStorage.f)}catch(a){return w}return s};
mt.localStorage.set=function(a,b,d){var e=new Date;e.setTime(e.getTime()+d||31536E6);try{window.localStorage?(b=e.getTime()+"|"+b,window.localStorage.setItem(a,b)):mt.localStorage.D()&&(mt.localStorage.f.expires=e.toUTCString(),mt.localStorage.f.load(document.location.hostname),mt.localStorage.f.setAttribute(a,b),mt.localStorage.f.save(document.location.hostname))}catch(g){}};
mt.localStorage.get=function(a){if(window.localStorage){if(a=window.localStorage.getItem(a)){var b=a.indexOf("|"),d=a.substring(0,b)-0;if(d&&d>(new Date).getTime())return a.substring(b+1)}}else if(mt.localStorage.D())try{return mt.localStorage.f.load(document.location.hostname),mt.localStorage.f.getAttribute(a)}catch(e){}return t};
mt.localStorage.remove=function(a){if(window.localStorage)window.localStorage.removeItem(a);else if(mt.localStorage.D())try{mt.localStorage.f.load(document.location.hostname),mt.localStorage.f.removeAttribute(a),mt.localStorage.f.save(document.location.hostname)}catch(b){}};mt.sessionStorage={};mt.sessionStorage.set=function(a,b){if(window.sessionStorage)try{window.sessionStorage.setItem(a,b)}catch(d){}};
mt.sessionStorage.get=function(a){return window.sessionStorage?window.sessionStorage.getItem(a):t};mt.sessionStorage.remove=function(a){window.sessionStorage&&window.sessionStorage.removeItem(a)};mt.X={};mt.X.log=function(a,b){var d=new Image,e="mini_tangram_log_"+Math.floor(2147483648*Math.random()).toString(36);window[e]=d;d.onload=d.onerror=d.onabort=function(){d.onload=d.onerror=d.onabort=t;d=window[e]=t;b&&b(a)};d.src=a};mt.O={};
mt.O.oa=function(){var a="";if(navigator.plugins&&navigator.mimeTypes.length){var b=navigator.plugins["Shockwave Flash"];b&&b.description&&(a=b.description.replace(/^.*\s+(\S+)\s+\S+$/,"$1"))}else if(window.ActiveXObject)try{if(b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash"))(a=b.GetVariable("$version"))&&(a=a.replace(/^.*\s+(\d+),(\d+).*$/,"$1.$2"))}catch(d){}return a};
mt.O.Ka=function(a,b,d,e,g){return'<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="'+a+'" width="'+d+'" height="'+e+'"><param name="movie" value="'+b+'" /><param name="flashvars" value="'+(g||"")+'" /><param name="allowscriptaccess" value="always" /><embed type="application/x-shockwave-flash" name="'+a+'" width="'+d+'" height="'+e+'" src="'+b+'" flashvars="'+(g||"")+'" allowscriptaccess="always" /></object>'};mt.url={};
mt.url.i=function(a,b){var d=a.match(RegExp("(^|&|\\?|#)("+b+")=([^&#]*)(&|$|#)",""));return d?d[3]:t};mt.url.Na=function(a){return(a=a.match(/^(https?:)\/\//))?a[1]:t};mt.url.la=function(a){return(a=a.match(/^(https?:\/\/)?([^\/\?#]*)/))?a[2].replace(/.*@/,""):t};mt.url.S=function(a){return(a=mt.url.la(a))?a.replace(/:\d+$/,""):a};mt.url.Ma=function(a){return(a=a.match(/^(https?:\/\/)?[^\/]*(.*)/))?a[2].replace(/[\?#].*/,"").replace(/^$/,"/"):t};
(function(){function a(){for(var a=w,d=document.getElementsByTagName("script"),e=d.length,e=100<e?100:e,g=0;g<e;g++){var l=d[g].src;if(l&&0===l.indexOf("https://hm.baidu.com/h")){a=s;break}}return a}return h.ia=a})();var A=h.ia;
h.p={Oa:"http://tongji.baidu.com/hm-web/welcome/ico",W:"hm.baidu.com/hm.gif",aa:"baidu.com",sa:"hmmd",ta:"hmpl",ra:"hmkw",pa:"hmci",ua:"hmsr",qa:"hmcu",o:0,k:Math.round(+new Date/1E3),protocol:"https:"===document.location.protocol?"https:":"http:",K:A()||"https:"===document.location.protocol?"https:":"http:",Qa:0,Ha:6E5,Ia:10,Ja:1024,Ga:1,w:2147483647,Y:"cc cf ci ck cl cm cp cu cw ds ep et fl ja ln lo lt nv rnd si st su v cv lv api u tt".split(" ")};
(function(){var a={l:{},c:function(a,d){this.l[a]=this.l[a]||[];this.l[a].push(d)},z:function(a,d){this.l[a]=this.l[a]||[];for(var e=this.l[a].length,g=0;g<e;g++)this.l[a][g](d)}};return h.r=a})();
(function(){function a(a,e){var g=document.createElement("script");g.charset="utf-8";b.d(e,"Function")&&(g.readyState?g.onreadystatechange=function(){if("loaded"===g.readyState||"complete"===g.readyState)g.onreadystatechange=t,e()}:g.onload=function(){e()});g.src=a;var l=document.getElementsByTagName("script")[0];l.parentNode.insertBefore(g,l)}var b=mt.lang;return h.load=a})();
(function(){function a(){var a="";h.b.a.nv?(a=encodeURIComponent(document.referrer),window.sessionStorage?d.set("Hm_from_"+c.id,a):b.set("Hm_from_"+c.id,a,864E5)):a=(window.sessionStorage?d.get("Hm_from_"+c.id):b.get("Hm_from_"+c.id))||"";return a}var b=mt.localStorage,d=mt.sessionStorage;return h.P=a})();
(function(){var a=mt.m,b=h.p,d=h.load,e=h.P;h.r.c("pv-b",function(){c.rec&&a.M(function(){for(var g=0,l=c.rp.length;g<l;g++){var n=c.rp[g][0],f=c.rp[g][1],k=a.Q("hm_t_"+n);if(f&&!(2==f&&!k||k&&""!==k.innerHTML))k="",k=Math.round(Math.random()*b.w),k=4==f?"http://crs.baidu.com/hl.js?"+["siteId="+c.id,"planId="+n,"rnd="+k].join("&"):"http://crs.baidu.com/t.js?"+["siteId="+c.id,"planId="+n,"from="+e(),"referer="+encodeURIComponent(document.referrer),"title="+encodeURIComponent(document.title),"rnd="+
k].join("&"),d(k)}})})})();(function(){var a=h.p,b=h.load,d=h.P;h.r.c("pv-b",function(){if(c.trust&&c.vcard){var e=a.protocol+"//trust.baidu.com/vcard/v.js?"+["siteid="+c.vcard,"url="+encodeURIComponent(document.location.href),"source="+d(),"rnd="+Math.round(Math.random()*a.w),"hm=1"].join("&");b(e)}})})();
(function(){function a(){return function(){h.b.a.nv=0;h.b.a.st=4;h.b.a.et=3;h.b.a.ep=h.F.ma()+","+h.F.ka();h.b.g()}}function b(){clearTimeout(y);var a;x&&(a="visible"==document[x]);z&&(a=!document[z]);f="undefined"==typeof a?s:a;if((!n||!k)&&f&&m)u=s,p=+new Date;else if(n&&k&&(!f||!m))u=w,q+=+new Date-p;n=f;k=m;y=setTimeout(b,100)}function d(a){var k=document,p="";if(a in k)p=a;else for(var b=["webkit","ms","moz","o"],q=0;q<b.length;q++){var d=b[q]+a.charAt(0).toUpperCase()+a.slice(1);if(d in k){p=
d;break}}return p}function e(a){if(!("focus"==a.type||"blur"==a.type)||!(a.target&&a.target!=window))m="focus"==a.type||"focusin"==a.type?s:w,b()}var g=mt.event,l=h.r,n=s,f=s,k=s,m=s,v=+new Date,p=v,q=0,u=s,x=d("visibilityState"),z=d("hidden"),y;b();(function(){var a=x.replace(/[vV]isibilityState/,"visibilitychange");g.c(document,a,b);g.c(window,"pageshow",b);g.c(window,"pagehide",b);"object"==typeof document.onfocusin?(g.c(document,"focusin",e),g.c(document,"focusout",e)):(g.c(window,"focus",e),
g.c(window,"blur",e))})();h.F={ma:function(){return+new Date-v},ka:function(){return u?+new Date-p+q:q}};l.c("pv-b",function(){g.c(window,"unload",a())});return h.F})();
(function(){var a=mt.lang,b=h.p,d=h.load,e={wa:function(e){if((window._dxt===r||a.d(window._dxt,"Array"))&&"undefined"!==typeof h.b){var l=h.b.H();d([b.protocol,"//datax.baidu.com/x.js?si=",c.id,"&dm=",encodeURIComponent(l)].join(""),e)}},Fa:function(b){if(a.d(b,"String")||a.d(b,"Number"))window._dxt=window._dxt||[],window._dxt.push(["_setUserId",b])}};return h.da=e})();
(function(){function a(k){for(var b in k)if({}.hasOwnProperty.call(k,b)){var e=k[b];d.d(e,"Object")||d.d(e,"Array")?a(e):k[b]=String(e)}}function b(a){return a.replace?a.replace(/'/g,"'0").replace(/\*/g,"'1").replace(/!/g,"'2"):a}var d=mt.lang,e=mt.j,g=h.p,l=h.r,n=h.da,f={s:[],C:0,U:w,init:function(){f.e=0;l.c("pv-b",function(){f.ea();f.ga()});l.c("pv-d",f.ha);l.c("stag-b",function(){h.b.a.api=f.e||f.C?f.e+"_"+f.C:""});l.c("stag-d",function(){h.b.a.api=0;f.e=0;f.C=0})},ea:function(){var a=window._hmt||
[];if(!a||d.d(a,"Array"))window._hmt={id:c.id,cmd:{},push:function(){for(var a=window._hmt,k=0;k<arguments.length;k++){var p=arguments[k];d.d(p,"Array")&&(a.cmd[a.id].push(p),"_setAccount"===p[0]&&(1<p.length&&/^[0-9a-f]{32}$/.test(p[1]))&&(p=p[1],a.id=p,a.cmd[p]=a.cmd[p]||[]))}}},window._hmt.cmd[c.id]=[],window._hmt.push.apply(window._hmt,a)},ga:function(){var a=window._hmt;if(a&&a.cmd&&a.cmd[c.id])for(var b=a.cmd[c.id],e=/^_track(Event|MobConv|Order|RTEvent)$/,p=0,q=b.length;p<q;p++){var d=b[p];
e.test(d[0])?f.s.push(d):f.L(d)}a.cmd[c.id]={push:f.L}},ha:function(){if(0<f.s.length)for(var a=0,b=f.s.length;a<b;a++)f.L(f.s[a]);f.s=t},L:function(a){var b=a[0];if(f.hasOwnProperty(b)&&d.d(f[b],"Function"))f[b](a)},_setAccount:function(a){1<a.length&&/^[0-9a-f]{32}$/.test(a[1])&&(f.e|=1)},_setAutoPageview:function(a){if(1<a.length&&(a=a[1],w===a||s===a))f.e|=2,h.b.T=a},_trackPageview:function(a){if(1<a.length&&a[1].charAt&&"/"===a[1].charAt(0)){f.e|=4;h.b.a.et=0;h.b.a.ep="";h.b.I?(h.b.a.nv=0,h.b.a.st=
4):h.b.I=s;var b=h.b.a.u,d=h.b.a.su;h.b.a.u=g.protocol+"//"+document.location.host+a[1];f.U||(h.b.a.su=document.location.href);h.b.g();h.b.a.u=b;h.b.a.su=d}},_trackEvent:function(a){2<a.length&&(f.e|=8,h.b.a.nv=0,h.b.a.st=4,h.b.a.et=4,h.b.a.ep=b(a[1])+"*"+b(a[2])+(a[3]?"*"+b(a[3]):"")+(a[4]?"*"+b(a[4]):""),h.b.g())},_setCustomVar:function(a){if(!(4>a.length)){var d=a[1],e=a[4]||3;if(0<d&&6>d&&0<e&&4>e){f.C++;for(var p=(h.b.a.cv||"*").split("!"),q=p.length;q<d-1;q++)p.push("*");p[d-1]=e+"*"+b(a[2])+
"*"+b(a[3]);h.b.a.cv=p.join("!");a=h.b.a.cv.replace(/[^1](\*[^!]*){2}/g,"*").replace(/((^|!)\*)+$/g,"");""!==a?h.b.setData("Hm_cv_"+c.id,encodeURIComponent(a),c.age):h.b.ya("Hm_cv_"+c.id)}}},_setReferrerOverride:function(a){1<a.length&&(h.b.a.su=a[1].charAt&&"/"===a[1].charAt(0)?g.protocol+"//"+window.location.host+a[1]:a[1],f.U=s)},_trackOrder:function(b){b=b[1];d.d(b,"Object")&&(a(b),f.e|=16,h.b.a.nv=0,h.b.a.st=4,h.b.a.et=94,h.b.a.ep=e.stringify(b),h.b.g())},_trackMobConv:function(a){if(a={webim:1,
tel:2,map:3,sms:4,callback:5,share:6}[a[1]])f.e|=32,h.b.a.et=93,h.b.a.ep=a,h.b.g()},_trackRTPageview:function(b){b=b[1];d.d(b,"Object")&&(a(b),b=e.stringify(b),512>=encodeURIComponent(b).length&&(f.e|=64,h.b.a.rt=b))},_trackRTEvent:function(b){b=b[1];if(d.d(b,"Object")){a(b);b=encodeURIComponent(e.stringify(b));var m=function(a){var b=h.b.a.rt;f.e|=128;h.b.a.et=90;h.b.a.rt=a;h.b.g();h.b.a.rt=b},l=b.length;if(900>=l)m.call(this,b);else for(var l=Math.ceil(l/900),p="block|"+Math.round(Math.random()*
g.w).toString(16)+"|"+l+"|",q=[],u=0;u<l;u++)q.push(u),q.push(b.substring(900*u,900*u+900)),m.call(this,p+q.join("|")),q=[]}},_setUserId:function(a){a=a[1];n.wa();n.Fa(a)}};f.init();h.ba=f;return h.ba})();
(function(){function a(){"undefined"===typeof window["_bdhm_loaded_"+c.id]&&(window["_bdhm_loaded_"+c.id]=s,this.a={},this.T=s,this.I=w,this.init())}var b=mt.url,d=mt.X,e=mt.O,g=mt.lang,l=mt.cookie,n=mt.h,f=mt.localStorage,k=mt.sessionStorage,m=h.p,v=h.r;a.prototype={J:function(a,b){a="."+a.replace(/:\d+/,"");b="."+b.replace(/:\d+/,"");var d=a.indexOf(b);return-1<d&&d+b.length===a.length},V:function(a,b){a=a.replace(/^https?:\/\//,"");return 0===a.indexOf(b)},A:function(a){for(var d=0;d<c.dm.length;d++)if(-1<
c.dm[d].indexOf("/")){if(this.V(a,c.dm[d]))return s}else{var e=b.S(a);if(e&&this.J(e,c.dm[d]))return s}return w},H:function(){for(var a=document.location.hostname,b=0,d=c.dm.length;b<d;b++)if(this.J(a,c.dm[b]))return c.dm[b].replace(/(:\d+)?[\/\?#].*/,"");return a},R:function(){for(var a=0,b=c.dm.length;a<b;a++){var d=c.dm[a];if(-1<d.indexOf("/")&&this.V(document.location.href,d))return d.replace(/^[^\/]+(\/.*)/,"$1")+"/"}return"/"},na:function(){if(!document.referrer)return m.k-m.o>c.vdur?1:4;var a=
w;this.A(document.referrer)&&this.A(document.location.href)?a=s:(a=b.S(document.referrer),a=this.J(a||"",document.location.hostname));return a?m.k-m.o>c.vdur?1:4:3},getData:function(a){try{return l.get(a)||k.get(a)||f.get(a)}catch(b){}},setData:function(a,b,d){try{l.set(a,b,{domain:this.H(),path:this.R(),G:d}),d?f.set(a,b,d):k.set(a,b)}catch(e){}},ya:function(a){try{l.set(a,"",{domain:this.H(),path:this.R(),G:-1}),k.remove(a),f.remove(a)}catch(b){}},Da:function(){var a,b,d,e,f;m.o=this.getData("Hm_lpvt_"+
c.id)||0;13===m.o.length&&(m.o=Math.round(m.o/1E3));b=this.na();a=4!==b?1:0;if(d=this.getData("Hm_lvt_"+c.id)){e=d.split(",");for(f=e.length-1;0<=f;f--)13===e[f].length&&(e[f]=""+Math.round(e[f]/1E3));for(;2592E3<m.k-e[0];)e.shift();f=4>e.length?2:3;for(1===a&&e.push(m.k);4<e.length;)e.shift();d=e.join(",");e=e[e.length-1]}else d=m.k,e="",f=1;this.setData("Hm_lvt_"+c.id,d,c.age);this.setData("Hm_lpvt_"+c.id,m.k);d=m.k===this.getData("Hm_lpvt_"+c.id)?"1":"0";if(0===c.nv&&this.A(document.location.href)&&
(""===document.referrer||this.A(document.referrer)))a=0,b=4;this.a.nv=a;this.a.st=b;this.a.cc=d;this.a.lt=e;this.a.lv=f},Ca:function(){for(var a=[],b=this.a.et,d=0,e=m.Y.length;d<e;d++){var f=m.Y[d],g=this.a[f];"undefined"!==typeof g&&""!==g&&("tt"!==f||"tt"===f&&0===b)&&a.push(f+"="+encodeURIComponent(g))}this.a.rt&&(0===b?a.push("rt="+encodeURIComponent(this.a.rt)):90===b&&a.push("rt="+this.a.rt));return a.join("&")},Ea:function(){this.Da();this.a.si=c.id;this.a.su=document.referrer;this.a.ds=n.za;
this.a.cl=n.colorDepth+"-bit";this.a.ln=n.language;this.a.ja=n.javaEnabled?1:0;this.a.ck=n.cookieEnabled?1:0;this.a.lo="number"===typeof _bdhm_top?1:0;this.a.fl=e.oa();this.a.v="1.1.31";this.a.cv=decodeURIComponent(this.getData("Hm_cv_"+c.id)||"");this.a.tt=document.title||"";var a=document.location.href;this.a.cm=b.i(a,m.sa)||"";this.a.cp=b.i(a,m.ta)||"";this.a.cw=b.i(a,m.ra)||"";this.a.ci=b.i(a,m.pa)||"";this.a.cf=b.i(a,m.ua)||"";this.a.cu=b.i(a,m.qa)||""},init:function(){try{this.Ea(),0===this.a.nv?
this.Ba():this.N(".*"),h.b=this,this.ca(),v.z("pv-b"),this.Aa()}catch(a){var b=[];b.push("si="+c.id);b.push("n="+encodeURIComponent(a.name));b.push("m="+encodeURIComponent(a.message));b.push("r="+encodeURIComponent(document.referrer));d.log(m.K+"//"+m.W+"?"+b.join("&"))}},Aa:function(){function a(){v.z("pv-d")}this.T?(this.I=s,this.a.et=0,this.a.ep="",this.g(a)):a()},g:function(a){var b=this;b.a.rnd=Math.round(Math.random()*m.w);v.z("stag-b");var e=m.K+"//"+m.W+"?"+b.Ca();v.z("stag-d");b.$(e);d.log(e,
function(d){b.N(d);g.d(a,"Function")&&a.call(b)})},ca:function(){var a=document.location.hash.substring(1),d=RegExp(c.id),e=-1<document.referrer.indexOf(m.aa),f=b.i(a,"jn"),g=/^heatlink$|^select$/.test(f);a&&(d.test(a)&&e&&g)&&(this.a.rnd=Math.round(Math.random()*m.w),a=document.createElement("script"),a.setAttribute("type","text/javascript"),a.setAttribute("charset","utf-8"),a.setAttribute("src",m.protocol+"//"+c.js+f+".js?"+this.a.rnd),f=document.getElementsByTagName("script")[0],f.parentNode.insertBefore(a,
f))},$:function(a){var b=k.get("Hm_unsent_"+c.id)||"",d=this.a.u?"":"&u="+encodeURIComponent(document.location.href),b=encodeURIComponent(a.replace(/^https?:\/\//,"")+d)+(b?","+b:"");k.set("Hm_unsent_"+c.id,b)},N:function(a){var b=k.get("Hm_unsent_"+c.id)||"";b&&(a=encodeURIComponent(a.replace(/^https?:\/\//,"")),a=RegExp(a.replace(/([\*\(\)])/g,"\\$1")+"(%26u%3D[^,]*)?,?","g"),(b=b.replace(a,"").replace(/,$/,""))?k.set("Hm_unsent_"+c.id,b):k.remove("Hm_unsent_"+c.id))},Ba:function(){var a=this,b=
k.get("Hm_unsent_"+c.id);if(b)for(var b=b.split(","),e=function(b){d.log(m.K+"//"+decodeURIComponent(b),function(b){a.N(b)})},f=0,g=b.length;f<g;f++)e(b[f])}};return new a})();
(function(){var a=mt.m,b=mt.event,d=mt.url,e=mt.j;try{if(window.performance&&performance.timing&&"undefined"!==typeof h.b){var g=+new Date,l=function(a){var b=performance.timing,d=b[a+"Start"]?b[a+"Start"]:0;a=b[a+"End"]?b[a+"End"]:0;return{start:d,end:a,value:0<a-d?a-d:0}},n=t;a.M(function(){n=+new Date});var f=function(){var a,b,f;f=l("navigation");b=l("request");f={netAll:b.start-f.start,netDns:l("domainLookup").value,netTcp:l("connect").value,srv:l("response").start-b.start,dom:performance.timing.domInteractive-
performance.timing.fetchStart,loadEvent:l("loadEvent").end-f.start};a=document.referrer;var k=a.match(/^(http[s]?:\/\/)?([^\/]+)(.*)/)||[],u=t;b=t;if("www.baidu.com"===k[2]||"m.baidu.com"===k[2])u=d.i(a,"qid"),b=d.i(a,"click_t");a=u;f.qid=a!=t?a:"";b!=t?(f.bdDom=n?n-b:0,f.bdRun=g-b,f.bdDef=l("navigation").start-b):(f.bdDom=0,f.bdRun=0,f.bdDef=0);h.b.a.et=87;h.b.a.ep=e.stringify(f);h.b.g()};b.c(window,"load",function(){setTimeout(f,500)})}}catch(k){}})();
(function(){var a=mt.h,b=mt.lang,d=mt.event,e=mt.j;if("undefined"!==typeof h.b&&(c.med||(!a.xa||7<a.va)&&c.cvcc)){var g,l,n,f,k=function(a){if(a.item){for(var b=a.length,d=Array(b);b--;)d[b]=a[b];return d}return[].slice.call(a)},m=function(a,b){for(var d in a)if(a.hasOwnProperty(d)&&b.call(a,d,a[d])===w)return w},v=function(a,d){var f={};f.n=g;f.t="clk";f.v=a;if(d){var l=d.getAttribute("href"),k=d.getAttribute("onclick")?""+d.getAttribute("onclick"):t,m=d.getAttribute("id")||"";n.test(l)?(f.sn="mediate",
f.snv=l):b.d(k,"String")&&n.test(k)&&(f.sn="wrap",f.snv=k);f.id=m}h.b.a.et=86;h.b.a.ep=e.stringify(f);h.b.g();for(f=+new Date;400>=+new Date-f;);};if(c.med)l="/zoosnet",g="swt",n=/swt|zixun|call|chat|zoos|business|talk|kefu|openkf|online|\/LR\/Chatpre\.aspx/i,f={click:function(){for(var a=[],b=k(document.getElementsByTagName("a")),b=[].concat.apply(b,k(document.getElementsByTagName("area"))),b=[].concat.apply(b,k(document.getElementsByTagName("img"))),d,e,f=0,g=b.length;f<g;f++)d=b[f],e=d.getAttribute("onclick"),
d=d.getAttribute("href"),(n.test(e)||n.test(d))&&a.push(b[f]);return a}};else if(c.cvcc){l="/other-comm";g="other";n=c.cvcc.q||r;var p=c.cvcc.id||r;f={click:function(){for(var a=[],b=k(document.getElementsByTagName("a")),b=[].concat.apply(b,k(document.getElementsByTagName("area"))),b=[].concat.apply(b,k(document.getElementsByTagName("img"))),d,e,f,g=0,l=b.length;g<l;g++)d=b[g],n!==r?(e=d.getAttribute("onclick"),f=d.getAttribute("href"),p?(d=d.getAttribute("id"),(n.test(e)||n.test(f)||p.test(d))&&
a.push(b[g])):(n.test(e)||n.test(f))&&a.push(b[g])):p!==r&&(d=d.getAttribute("id"),p.test(d)&&a.push(b[g]));return a}}}if("undefined"!==typeof f&&"undefined"!==typeof n){var q;l+=/\/$/.test(l)?"":"/";var u=function(a,d){if(q===d)return v(l+a,d),w;if(b.d(d,"Array")||b.d(d,"NodeList"))for(var e=0,f=d.length;e<f;e++)if(q===d[e])return v(l+a+"/"+(e+1),d[e]),w};d.c(document,"mousedown",function(a){a=a||window.event;q=a.target||a.srcElement;var d={};for(m(f,function(a,e){d[a]=b.d(e,"Function")?e():document.getElementById(e)});q&&
q!==document&&m(d,u)!==w;)q=q.parentNode})}}})();(function(){var a=mt.m,b=mt.lang,d=mt.event,e=mt.j;if("undefined"!==typeof h.b&&b.d(c.cvcf,"Array")&&0<c.cvcf.length){var g={Z:function(){for(var b=c.cvcf.length,e,f=0;f<b;f++)(e=a.Q(decodeURIComponent(c.cvcf[f])))&&d.c(e,"click",g.fa())},fa:function(){return function(){h.b.a.et=86;var a={n:"form",t:"clk"};a.id=this.id;h.b.a.ep=e.stringify(a);h.b.g()}}};a.M(function(){g.Z()})}})();
(function(){var a=mt.event,b=mt.j;if(c.med&&"undefined"!==typeof h.b){var d=+new Date,e={n:"anti",sb:0,kb:0,clk:0},g=function(){h.b.a.et=86;h.b.a.ep=b.stringify(e);h.b.g()};a.c(document,"click",function(){e.clk++});a.c(document,"keyup",function(){e.kb=1});a.c(window,"scroll",function(){e.sb++});a.c(window,"unload",function(){e.t=+new Date-d;g()});a.c(window,"load",function(){setTimeout(g,5E3)})}})();})();
