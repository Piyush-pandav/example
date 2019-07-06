
<!DOCTYPE html>

<html>
<head>
    <title>EMI Calculator - Calculate EMI on Home, Car and Personal Loans</title>
    <!-- HTTP 1.1 -->
<meta http-equiv="Cache-Control" content="no-store"/>
<!-- HTTP 1.0 -->
<meta http-equiv="Pragma" content="no-cache"/>
<!-- Prevents caching at the Proxy Server -->
<meta http-equiv="Expires" content="0"/>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="theme-color" content="#116a9e" />
<link href="/manifest.json" rel="manifest"/>
<link href="/images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>

<input type="hidden" name="experimentInSession" value="ex0t1" id="experimentInSession" class="experimentInSession"/><style id="ajax-content"></style>

<script type="text/javascript">
    var ajaxCallCompleted=false;var ctx="/";function getNewImage(){return(window.Image?new Image():document.createElement("img"))}function getParameterByName(a){a=a.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var c=new RegExp("[\\?&]"+a+"=([^&#]*)"),b=c.exec(location.search);return b===null?"":decodeURIComponent(b[1].replace(/\+/g," "))}function getCookieValue(d){var b=d+"=";var a=document.cookie.split(";");for(var e=0;e<a.length;e++){var f=a[e];while(f.charAt(0)==" "){f=f.substring(1)}if(f.indexOf(b)!=-1){return f.substring(b.length,f.length)}}return null}function executeAjaxCall(){var a=document.getElementById("ajaxCallCompleted");if(a!=null){var b=document.getElementById("ajaxCallCompleted").value==="true";return b}else{return false}}function executeTrackerImmediately(){function h(n){return"; expires="+n.toUTCString()}function l(s,o,n,r,q){var p=s+"="+o;if(n!=null){p+=n}if(r!=null){p+="; path="+r}if(q===true){p+="; secure"}document.cookie=p}function f(o,n){if(o==null||o==undefined){return""}if(o.getElementsByClassName(n)==null||o.getElementsByClassName(n)==undefined||o.getElementsByClassName(n).length<1){return""}else{return o.getElementsByClassName(n)[0].value}}function g(y){var s=document.createElement("html");s.innerHTML=y;var z=f(s,"channelKey");var u=f(s,"productTypeKey");var o=f(s,"websiteKey");var r=f(s,"deviceTypeKey");var v=f(s,"returningUserKey");var w=f(s,"isInternalAccessKey");var A=f(s,"isMonitoringAgentKey");var q=f(s,"partnerFromRequestKey");var n=f(s,"experimentString");if(z!=""&&u!=""&&o!=""&&r!=""){var B="VISIT";var p=new Date().getTime();var t=ctx+"images/pagehit.gif?channel="+z+"&logType="+B+"&deviceType="+r+"&productType="+u+"&website="+o+"&returningUser="+v+"&internalAccess="+w+"&isMonitoringAgent="+A+"&partnerName="+q+"&t="+p;if(n!=null){t=t+"&xt="+n}getNewImage().src=t}var x=document.getElementById("returningUser");if(x!=null&&x!=undefined){x.value=v}}function i(r){function o(w,u){var v=new XMLHttpRequest();v.timeout=5000;if("withCredentials" in v){v.open(w,u,true)}else{if(typeof XDomainRequest!="undefined"){v=new XDomainRequest();v.open(w,u)}else{v=null}}return v}var q=false;var s=getParameterByName("ubid");if(getCookieValue("ubid_linked")===null&&!s){var n="https://www.bankbazaar.com";var p=n+"/getBrowserId.html";var t=o("GET",p);if(t){t.onreadystatechange=function(){if(t.readyState==4){if(t.status==200){var x=JSON.parse(t.responseText);var v=x.browserId;if(v!=null){var u=new Date();u.setTime(u.getTime()+3600*24*365*20*1000);var w=h(u);l("ubid",v,w,"/",true);l("ubid_linked",true,w,"/",true)}}g(r)}};t.ontimeout=function(){g(r)};t.withCredentials=true;t.send();q=true}}if(!q){g(r)}}function d(q,n){var o=document.getElementById(q);if(o!=null){o.value=n}else{var p=document.createElement("INPUT");p.value=n;p.setAttribute("id",q);p.setAttribute("type","hidden");document.body.appendChild(p)}}var m="";var j="eligPage";var a=m+"/ajax-content.html?ajax=true&pageNameForAjax="+j+"&origin_path="+document.location.pathname;var c=getParameterByName("variant");var b=false;if((c!=null&&c.indexOf("slide")==-1)&&(window.location.pathname=="/home-loan.html"||window.location.pathname=="/personal-loan.html"||window.location.pathname=="/car-loan.html")){b=true}if(b==true){a=a+"&eligSentenceForm=true"}if(window.location.search.indexOf("?")!=-1){a=a+"&"+window.location.search.split("?")[1]}var e=new XMLHttpRequest();var k=window.location.protocol+"//"+window.location.host+"/"+a;e.open("POST",k);e.setRequestHeader("BB_Referer",document.referrer);e.onreadystatechange=function(n){if(e.readyState==4){if(e.status==200){document.getElementById("ajax-content").innerHTML=e.responseText;ajaxCallCompleted=true;g(e.responseText);if(typeof(reportSameWindowLoginResult)===typeof(Function)){reportSameWindowLoginResult()}}else{d("ajaxCallCompleted","true");ajaxCallCompleted=true}}};e.send()}function executeTrackerOnWindowLoad(){function b(e,f){if(typeof newrelic!=="undefined"){newrelic.setCustomAttribute(e,f)}}function c(){var e=function(){setTimeout(function(){var f=new XMLHttpRequest();f.open("GET",url);f.setRequestHeader("BB_Referer",document.referrer);f.setRequestHeader("Framed_Page",self.location.href);f.onreadystatechange=function(j){if(f.readyState==4&&f.status==200){var g="PAGE_FRAMED";var h=new Date().getTime();var i=ctx+"images/pageframed.gif?&logType="+g+"&t="+h+"&BB_Referer="+document.referrer+"&Framed_page="+self.location.href;getNewImage().src=i}};f.send()},1000)};if(self!=top){e();$("body").html($("#errorPage").html())}}function d(){var e=document.getElementById("experimentInSession");if(e!=undefined){return e.value}return""}if(typeof copyAjaxContentResponseToBody!="undefined"){copyAjaxContentResponseToBody()}c();if(getParameterByName("variant")=="slide"){b("variant","slide")}var a=d();b("xt",a)}setTimeout(executeTrackerImmediately,0);window.onload=executeTrackerOnWindowLoad;</script>
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_N1763917732/bundles/BBbootstrap.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_N170009996/bundles/baseMainBS.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_N1089671801/bundles/mainBS.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_N526304172/bundles/emi-calculator.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_N2045585005/bundles/new-loan-landing.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_N1701455947/bundles/new-product-landing.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_1279033249/bundles/pendingApplicationReminder.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/gzip_1008787029/bundles/newFooter.css" />
<meta name="keywords"
          content="online loan emi calculator, emi calculator india, emi calculator, loan calculator, loan emi calculator, EMI
"/>
    <meta name="description"
          content="EMI Calculator - Calculate Loan EMI in 3 Easy Steps &#10003; Check your Car Loan, Personal Loan & Home Loan EMI with Flexible Loan Calculator &#10003; Online EMI Calculator helps you calculate Accurate Loan EMI &#10003; Yearly &amp; Monthly EMI’s with EASY Graphs @ Bankbazaar "/>

    <meta name="ROBOTS" content="NOODP"/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content='@BankBazaar' />
    <meta name="twitter:title" content="Smart Loan Decisions With BankBazaar's Easy EMI Calculator" />
    <meta name="twitter:description" content="Instantly calculate EMIs for home, car and personal loans using interactive charts with clear breakup, tenure, interest due and other details" />
    <meta name="twitter:image" content="/images/social-share/bb-social-share.jpg" />
    <meta property="og:title" content="EMI Calculator - Calculate EMI on Home, Car and Personal Loans"/>

<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"XQEHUVFQGwAFV1dWBwkH"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script><!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="/gzip_1938818735/bundles/html5shiv.js" ></script>
<script type="text/javascript" src="/gzip_N522412095/bundles/respond.js" ></script>
<![endif]-->

    <link rel="canonical" href="https://www.bankbazaar.com/finance-tools/emi-calculator.html"/>
    <meta property="og:type" content="website"/>
<!-- Facebook start -->
<meta property="og:description" content="Smart Loan Decisions With BankBazaar&amp;#39;s Easy EMI Calculator.Instantly calculate EMIs for home, car and personal loans using interactive charts with clear breakup, tenure, interest due and other details"/>
<meta property="og:image" content="https://cdn1-bb-image.bankbazaar.com/mp/social-share/bb-social-share-v1.jpg"/>
<meta property="og:url" content=""/>
<!-- Facebook end -->
<link rel="apple-touch-icon" href="/images/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/images/touch-icon-ipad.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="/images/touch-icon-iphone-retina.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="/images/touch-icon-ipad-retina.png"/>
    <link rel="apple-touch-startup-image" href="/images/splash.png"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-title" content='BankBazaar'/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content='@BankBazaar' />

    <meta name='twitter:title' content="Loans – Apply for personal loan, home loan, car loan at BankBazaar.com
" />
    <meta name='twitter:description' content="Online loans – Get your home loan, personal loan and car loan approved in 2 minutes from ICICI bank, HDFC, Axis bank and Fullerton at BankBazaar." />
    <meta name="twitter:image" content="https://cdn1-bb-image.bankbazaar.com/mp/social-share/bb-social-share-v1.jpg"/>
    <style type="text/css">
        .preLoad-Image{height:0; overflow: hidden; font-size: 0; line-height: 0;}
        .mobile .offers-page .zopim{display:none !important;}


.bb-home-page .bb-product-search, .bb-home-page .welcome-greet{display:none;}
.bb-home-page-mobile.modal-open #webklipper-publisher-widget-container{ display:none;}

.bb-banner{background-image: url("/images/gateway/gateway-banner-cs-animated-new-bg-desktop-v1.gif"); background-position: center center !important;}

@media (min-width:1400px) {
	.bb-banner{background-image: url("/images/gateway/gateway-banner-cs-animated-new-bg-desktop-lg-v1.gif");}
}
 @media (max-width: 1024px){
        .bb-banner {background-position: -208px 0px !important;height: 350px !important;}        
        .credit-score-gateway-widget{right: 48px;}

    }
@media (max-width: 1023px){
.bb-banner {background-image: url("/images/gateway/gateway-banner-cs-animated-new-bg-desktop-tab.gif");
background-position: right top !important;
}

}

.credit-score-gateway-widget .btn, .credit-score-gateway-widget .btn:hover {background-color:#1abc9c; position:relative;overflow:hidden}
.credit-score-gateway-widget a:after{content:"";width:35px;height:100px;position:absolute;left:-45px;top:-10px;transform: rotate(-20deg);
background: -moz-linear-gradient(right, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 1%, rgba(255,255,255,0.5) 50%, rgba(255,255,255,0) 100%);
background: -webkit-linear-gradient(right, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,0.5) 50%,rgba(255,255,255,0) 100%);
background: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,0.5) 50%,rgba(255,255,255,0) 100%); -webkit-animation: btn-ct-banner 2 4s linear;animation: btn-ct-banner 2 4s linear;}

@keyframes btn-ct-banner {from{margin-left:-20px;}to{margin-left:1000px;}}


@media screen and (max-width:767px){
 .bb-products a.bbicons-cs { background-image: url("/images/common/ct-icon-animation-mobile.gif"); background-position: center 6px; }
}
.bb-products a.bbicons-cs {
   background-image: url(/images/gateway/ct-icon-animation-desktop-v1.gif);
    background-position: center 8px;
}

.primary-txt .link-cta-btn.link-cta-btn-1,.product-section .primary-txt .link-cta-btn.link-cta-btn-1{border:2px solid #34495E;font-weight:normal;margin:0;}
.link-cta-btn .left-box, .link-cta-btn .right-box{display:table-cell;vertical-align:middle;}
.link-cta-btn .left-box{text-align:right;color:#fff;}
.link-cta-btn .right-box{min-width:160px;}
.link-cta-btn strong{color:#fff;}
.primary-txt .link-cta-btn-1.bg-pickled-blue{background-color:#34495E;}
.primary-txt .txt-buttercup{color:#F1C40F;}
.primary-txt .link-cta-btn.link-cta-btn-1 a{position:relative;overflow:hidden;display:block;}
.link-cta-btn-1{display:table;}
.link-cta-btn-1 .btn-animation-type-1 a:after{content:"";width:45px;height:100px;position:absolute;left:0;top:-10px;transform: rotate(-20deg);
background: -moz-linear-gradient(right, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 1%, rgba(255,255,255,0.5) 50%, rgba(255,255,255,0) 100%);
background: -webkit-linear-gradient(right, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,0.5) 50%,rgba(255,255,255,0) 100%);
background: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,0.5) 50%,rgba(255,255,255,0) 100%); -webkit-animation: btn-slide infinite 2s linear;animation: btn-slide infinite 2s linear;}
@keyframes btn-slide {from{margin-left:-20px;}to{margin-left:250px;}}
@media only screen and (max-width:767px) {
.cta-section.cta-section-1{display:block;width:100%;}
.link-cta-btn .left-box{width:100%;}
.primary-txt .link-cta-btn.link-cta-btn-1 a{margin: 0 0 0 10px;font-size:14px;}
}
@media only screen and (max-width:320px) {
.link-cta-btn .right-box{min-width:148px;}
.primary-txt .link-cta-btn.link-cta-btn-1 a{margin: 0 0 0 6px;padding: 7px 2px;}
.product-section .primary-txt .link-cta-btn.link-cta-btn-1, .primary-txt .link-cta-btn.link-cta-btn-1 {padding: 6px 4px;}
}

</style>
</head>
<body  onunload="">

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TRB8XL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRB8XL');</script>
<!-- End Google Tag Manager -->

<!-- Google Analytics Social Button Tracking -->
<script type="text/javascript">
    function BB_trackGoogleEventWithLabel(b,c,a,d){if(d==""||d==undefined){d=false}dataLayer.push({event:"sendEvent",eventCategory:b,eventAction:c,eventLabel:a,nonInteraction:d})}function BB_trackGoogleEvent(a,b){dataLayer.push({event:"sendEvent",eventCategory:a,eventAction:b})}function BB_trackGoogleSocialEvent(a,b,c){dataLayer.push({event:"sendSocial",socialNetwork:a,socialAction:b,socialTarget:c})}function BB_trackGoogleSocialEventWithPath(a,b,d,c){dataLayer.push({event:"sendSocial",socialNetwork:a,socialAction:b,socialTarget:d,pagePath:c})}function BB_trackGoogleVirtualPageView(a){dataLayer.push({event:"sendVirtualPage",pagePath:a})};</script>
<div class="screen-block-grey dontshow" id="slide-grey"></div>

<header class="js-scroll-top">
    <div class="logo">
        <a href="/" data-actionLoc="eligPage:home" data-action="click:click" title='BankBazaar'>
            <img src="/images/bankbazaar-logo.png" alt="BankBazaar" title="Low Interest home loan, personal loans &amp; car loans from all banks in India" class="lazy"/></a>
    </div>
    <span class="logo-border"></span><nav class="menu-nav">
        <ul class="menu-left">
            <li class="loans-menu">
                <a href="/loan.html" data-target="#loans" title="Apply Loan Online">LOANS</a>
                        <ul class="child-main-menu" data-actionloc=":header">
                            <li>
                                    <a data-product="personal-loan" data-target="Apply Personal Loan Online" title="Apply Personal Loan Online" href="/personal-loan.html" data-action="click:menuClick:inclData">Personal Loan</a>
                                    </li>
                            <li>
                                    <a data-product="short-term-loan" data-target="Apply Short Term Loan Online" title="Apply Short Term Loan Online" href="/personal-loan/short-term-loans.html" data-action="click:menuClick:inclData">Short Term Loan</a>
                                    </li>
                            <li>
                                    <a data-product="home-loan" data-target="Apply Home Loan Online" title="Apply Home Loan Online" href="/home-loan.html" data-action="click:menuClick:inclData">Home Loan</a>
                                    </li>
                            <li>
                                    <a data-product="car-loan" data-target="Apply Car Loan Online" title="Apply Car Loan Online" href="/car-loan.html" data-action="click:menuClick:inclData">Car Loan</a>
                                    </li>
                            <li>
                                    <a data-product="two-wheeler-loan" data-target="Apply Two Wheeler Loan Online" title="Apply Two Wheeler Loan Online" href="/two-wheeler-loan.html" data-action="click:menuClick:inclData">Two Wheeler Loan</a>
                                    </li>
                            <li>
                                    <a data-product="used-car-loan" data-target="Apply Used Car Loan Online" title="Apply Used Car Loan Online" href="/used-car-loan.html" data-action="click:menuClick:inclData">Used Car Loan</a>
                                    </li>
                            <li>
                                    <a data-product="education-loan" data-target="Apply Education Loan Online" title="Apply Education Loan Online" href="/education-loan.html" data-action="click:menuClick:inclData">Education Loan</a>
                                    </li>
                            </ul>
                    </li>
            <li class="credit-cards-menu">
                <a data-target="#credit-cards" title="Compare Cards Offers &amp; Apply Online">CARDS</a>
                        <ul class="child-main-menu" data-actionloc=":header">
                            <li>
                                    <a data-product="credit-cards" data-target="Compare &amp; Apply Credit Card Online" title="Compare &amp; Apply Credit Card Online" href="/credit-card.html" data-action="click:menuClick:inclData">Credit Cards</a>
                                    </li>
                            <li>
                                    <a data-product="debit-account" data-target="Compare &amp; Apply Debit Card Online" title="Compare &amp; Apply Debit Card Online" href="/debit-card.html" data-action="click:menuClick:inclData">Debit Cards</a>
                                    </li>
                            </ul>
                    </li>
            <li class="insurance-menu">
                <a href="/insurance.html" data-target="#insurance" title="Compare Insurance Plans Online">INSURANCE</a>
                        <ul class="child-main-menu" data-actionloc=":header">
                            <li>
                                    <a data-product="life-insurance" data-target="Learn more about Term Life Insurance Plans Online" title="Learn more about Term Life Insurance Plans Online" href="/insurance/life-insurance.html" data-action="click:menuClick:inclData">Term Life Insurance</a>
                                    </li>
                            <li>
                                    <a data-product="car-insurance" data-target="Learn more about Car Insurance Plans Online" title="Learn more about Car Insurance Plans Online" href="/insurance/car-insurance.html" data-action="click:menuClick:inclData">Car Insurance</a>
                                    </li>
                            <li>
                                    <a data-product="health-insurance" data-target="Learn more about Health Insurance Plans Online" title="Learn more about Health Insurance Plans Online" href="/insurance/health-insurance.html" data-action="click:menuClick:inclData">Health Insurance</a>
                                    </li>
                            <li>
                                    <a data-product="two-wheeler-insurance" data-target="Learn more about Two Wheeler Insurance Plans Online" title="Learn more about Two Wheeler Insurance Plans Online" href="/insurance/two-wheeler-insurance.html" data-action="click:menuClick:inclData">Two Wheeler Insurance</a>
                                    </li>
                            <li>
                                    <a data-product="travel-insurance" data-target="Learn more about Travel Insurance Plans Online" title="Learn more about Travel Insurance Plans Online" href="/insurance/travel-insurance.html" data-action="click:menuClick:inclData">Travel Insurance</a>
                                    </li>
                            <li>
                                    <a data-product="home-insurance" data-target="Learn more about Home Insurance Plans Online" title="Learn more about Home Insurance Plans Online" href="/insurance/home-insurance.html" data-action="click:menuClick:inclData">Home Insurance</a>
                                    </li>
                            </ul>
                    </li>
            <li class="investments-menu">
                <a href="/investment.html" data-target="#investments" title="Investments">INVESTMENTS</a>
                        <ul class="child-main-menu" data-actionloc=":header">
                            <li>
                                    <a data-product="mutual-fund" data-target="Mutual Funds" title="Mutual Funds" href="/mutual-fund.html" data-action="click:menuClick:inclData">Mutual Funds</a>
                                    </li>
                            <li>
                                    <a data-product="fixed-deposit" data-target="Fixed Deposit" title="Fixed Deposit" href="/fixed-deposit-rate.html" data-action="click:menuClick:inclData">Fixed Deposit</a>
                                    </li>
                            <li>
                                    <a data-product="savings-account" data-target="Savings Account" title="Savings Account" href="/savings-account.html" data-action="click:menuClick:inclData">Savings Account</a>
                                    </li>
                            <li>
                                    <a data-product="gold-rate" data-target="Gold Rate" title="Gold Rate" href="/gold-rate-india.html" data-action="click:menuClick:inclData">Gold Rate</a>
                                    </li>
                            <li>
                                    <a data-product="silver-rate" data-target="Silver Rate" title="Silver Rate" href="/silver-rate-india.html" data-action="click:menuClick:inclData">Silver Rate</a>
                                    </li>
                            <li>
                                    <a data-product="recurring-deposit" data-target="Recurring Deposit Interest Rates" title="Recurring Deposit Interest Rates" href="/recurring-deposit-rates.html" data-action="click:menuClick:inclData">Best RD Interest Rates</a>
                                    </li>
                            </ul>
                    </li>
            <li class="creditscore-menu">
                <a href="/credit-score.html?utm_source=bb&utm_medium=display&utm_campaign=HEADER" data-target="#credit-score" title="Free Credit Score">FREE CREDIT SCORE</a>
                        <ul class="child-main-menu" data-actionloc=":header">
                            <li>
                                    <a data-product="credit-score" data-target="FREE CREDIT SCORE" title="FREE CREDIT SCORE" href="http://bbzr.co/2wlyPo5" data-action="click:menuClick:inclData">FREE CREDIT SCORE</a>
                                    </li>
                            </ul>
                    </li>
            </ul>
        <ul class="menu-right">
            <li><a href="javascript:void(0);" class="bb-menu-login" id="sidemenu" title="Menu"><span class="sprite-menu bbicons-humbug-white"></span></a></li>
            </ul>
        <ul id="login-status" class="menu-right  short-menu-right ">
                <li class="menu-track-app">
                <a href="/verifyOwnershipForm.html" class="sprite-menu bbicons-menu-track" rel="nofollow" title="Track Application">
                    Track Application
                </a>
            </li>
            <li id="notification-icon" class="menu-track-app hide" data-action="click:open">
                <a href="javascript:void(0)" class="sprite-menu bbicons-notify" rel="nofollow" title="notification"></a>
                <span id="notification-bubble" class=""></span>
            </li>
        <li>
    <a href="javascript:void(0)" class="dropdown-toggle menu-login social-sign-in js-sign-in" executeAfter="SocialLogin.init();" rel="nofollow" onclick="showLoginAndFireEvent(LoginSource.NAV_BAR)" title="Login">
                Login
            </a>
            <input type="hidden" name="logged-in-status" value="false" id="logged-in-status"/></li>
    <input type="hidden" name="" value="0" id="recentSearchesSize"/></ul>
        </nav>
    <div id="bb-notification-widget" class="hide">
    </div>
    <div id="hiwModal" class="modal fade video-modal-offer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-body">
                    
<iframe id="hiwIframe" src="https://www.youtube.com/embed/sUFn2o4ZWmo" allowfullscreen="" style="width:100%;height:315px;border:0;"></iframe></div>
            </div>
        </div>
    </div>

    <!-- Hamburger menu-->
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li>
                            <a data-target="#loans" title="Apply Loan Online" class="sprite-menu bbicons-menu-loans">LOANS</a>
                            <ul class="child-main-menu" data-actionloc=":hamBurgerMenu">
                                <li><a href="/personal-loan.html" data-product="personal-loan" data-target="#personal-loan-tab" title="Apply Personal Loan Online" data-action="click:menuClick:inclData" data-name="productType">Personal Loan</a></li>
                                        <li><a href="/personal-loan/short-term-loans.html" data-product="short-term-loan" data-target="#short-term-loan-tab" title="Apply Short Term Loan Online" data-action="click:menuClick:inclData" data-name="productType">Short Term Loan</a></li>
                                        <li><a href="/home-loan.html" data-product="home-loan" data-target="#home-loan-tab" title="Apply Home Loan Online" data-action="click:menuClick:inclData" data-name="productType">Home Loan</a></li>
                                        <li><a href="/car-loan.html" data-product="car-loan" data-target="#car-loan-tab" title="Apply Car Loan Online" data-action="click:menuClick:inclData" data-name="productType">Car Loan</a></li>
                                        <li><a href="/two-wheeler-loan.html" data-product="two-wheeler-loan" data-target="#two-wheeler-loan-tab" title="Apply Two Wheeler Loan Online" data-action="click:menuClick:inclData" data-name="productType">Two Wheeler Loan</a></li>
                                        <li><a href="/used-car-loan.html" data-product="used-car-loan" data-target="#used-car-loan-tab" title="Apply Used Car Loan Online" data-action="click:menuClick:inclData" data-name="productType">Used Car Loan</a></li>
                                        <li><a href="/education-loan.html" data-product="education-loan" data-target="#education-loan-tab" title="Apply Education Loan Online" data-action="click:menuClick:inclData" data-name="productType">Education Loan</a></li>
                                        </ul>
                        </li>
                    <li>
                            <a data-target="#cards" title="Compare Cards Offers &amp; Apply Online" class="sprite-menu bbicons-menu-cards">CARDS</a>
                            <ul class="child-main-menu" data-actionloc=":hamBurgerMenu">
                                <li><a href="/credit-card.html" data-product="credit-cards" data-target="#credit-card-tab" title="Compare &amp; Apply Credit Card Online" data-action="click:menuClick:inclData" data-name="productType">Credit Cards</a></li>
                                        <li><a href="/debit-card.html" data-product="debit-account" data-target="#debit-card-tab" title="Compare &amp; Apply Debit Card Online" data-action="click:menuClick:inclData" data-name="productType">Debit Cards</a></li>
                                        </ul>
                        </li>
                    <li>
                            <a data-target="#insurance" title="Compare Insurance Plans Online" class="sprite-menu bbicons-menu-insurance">INSURANCE</a>
                            <ul class="child-main-menu" data-actionloc=":hamBurgerMenu">
                                <li><a href="/insurance/life-insurance.html" data-product="life-insurance" data-target="#term-insurance-tab" title="Learn more about Term Life Insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Term Life Insurance</a></li>
                                        <li><a href="/insurance/car-insurance.html" data-product="car-insurance" data-target="#car-insurance-tab" title="Learn more about Car Insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Car Insurance</a></li>
                                        <li><a href="/insurance/health-insurance.html" data-product="health-insurance" data-target="#health-insurance-tab" title="Learn more about Health Insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Health Insurance</a></li>
                                        <li><a href="/insurance/two-wheeler-insurance.html" data-product="two-wheeler-insurance" data-target="#two-wheeler-insurance-tab" title="Learn more about Two Wheeler Insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Two Wheeler Insurance</a></li>
                                        <li><a href="/insurance/travel-insurance.html" data-product="travel-insurance" data-target="#travel-insurance-tab" title="Learn more about Travel Insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Travel Insurance</a></li>
                                        <li><a href="/insurance/home-insurance.html" data-product="home-insurance" data-target="#travel-insurance-tab" title="Learn more about Home Insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Home Insurance</a></li>
                                        </ul>
                        </li>
                    <li>
                            <a data-target="#investments" title="Investments" class="sprite-menu bbicons-menu-investments">INVESTMENTS</a>
                            <ul class="child-main-menu" data-actionloc=":hamBurgerMenu">
                                <li><a href="/mutual-fund.html" data-product="mutual-fund" data-target="#mutual-fund-tab" title="Mutual Funds" data-action="click:menuClick:inclData" data-name="productType">Mutual Funds</a></li>
                                        <li><a href="/fixed-deposit-rate.html" data-product="fixed-deposit" data-target="#best-deposit-tab" title="Fixed Deposit" data-action="click:menuClick:inclData" data-name="productType">Fixed Deposit</a></li>
                                        <li><a href="/savings-account.html" data-product="savings-account" data-target="#savings-account-tab" title="Savings Account" data-action="click:menuClick:inclData" data-name="productType">Savings Account</a></li>
                                        <li><a href="/gold-rate-india.html" data-product="gold-rate" data-target="#gold-rate-tab" title="Gold Rate" data-action="click:menuClick:inclData" data-name="productType">Gold Rate</a></li>
                                        <li><a href="/silver-rate-india.html" data-product="silver-rate" data-target="#silver-rate-tab" title="Silver Rate" data-action="click:menuClick:inclData" data-name="productType">Silver Rate</a></li>
                                        <li><a href="/recurring-deposit-rates.html" data-product="recurring-deposit" data-target="#recurring-deposit-tab" title="Recurring Deposit Interest Rates" data-action="click:menuClick:inclData" data-name="productType">Best RD Interest Rates</a></li>
                                        <li><a href="/saving-schemes.html" data-product="saving-schemes" data-target="#saving-schemes-tab" title="Saving Schemes" data-action="click:menuClick:inclData" data-name="productType">Saving Schemes</a></li>
                                        </ul>
                        </li>
                    <li>
                            <a data-target="#finance-tools" title="Finance Calculators Online" class="sprite-menu bbicons-menu-financeTools">FINANCE TOOLS</a>
                            <ul class="child-main-menu" data-actionloc=":hamBurgerMenu">
                                <li><a href="/finance-tools/emi-calculator.html" data-product="emi-calculator" data-target="#emi-calculator-tab" title="EMI Calculator" data-action="click:menuClick:inclData" data-name="productType">EMI Calculator</a></li>
                                        <li><a href="/fixed-deposit/fd-calculator.html" data-product="fd-calculator" data-target="#fd-calculator-tab" title="Fixed Deposit Interest Calculator" data-action="click:menuClick:inclData" data-name="productType">FD Calculator</a></li>
                                        <li><a href="/finance-tools/index.html" data-product="finance-calculator" data-target="#finance-calculator-tab" title="Finance Calculator" data-action="click:menuClick:inclData" data-name="productType">Finance Calculator</a></li>
                                        </ul>
                        </li>
                    <li class="no-arrow">
                            <a href="/credit-score.html" data-target="#creditscore" data-actionloc=":hamBurgerMenu" data-action="click:menuClick:inclData" title="Credit Score" class="sprite-menu bbicons-menu-creditscore">Credit Score<span class='free-badge'>Free</span></a>
                            </li>
                    <li>
                            <a data-target="#utility-documents" title="Utility Documents Online" class="sprite-menu bbicons-menu-utilityDocuments">UTILITY DOCUMENTS</a>
                            <ul class="child-main-menu" data-actionloc=":hamBurgerMenu">
                                <li><a href="/pan-card.html" data-product="pan-card" data-target="#pan-card-tab" title="Pan Card" data-action="click:menuClick:inclData" data-name="productType">Pan Card</a></li>
                                        <li><a href="/aadhar-card.html" data-product="aadhar-card" data-target="#aadhar-card-tab" title="Aadhar Card" data-action="click:menuClick:inclData" data-name="productType">Aadhar Card</a></li>
                                        <li><a href="/voter-id.html" data-product="voter-id" data-target="#voter-id-tab" title="Voter ID Card" data-action="click:menuClick:inclData" data-name="productType">Voter ID</a></li>
                                        <li><a href="/driving-licence.html" data-product="driving-licence" data-target="#driving-licence-tab" title="Driving Licence" data-action="click:menuClick:inclData" data-name="productType">Driving Licence</a></li>
                                        <li><a href="/passport.html" data-product="passport" data-target="#passport-tab" title="Indian Passport" data-action="click:menuClick:inclData" data-name="productType">Passport</a></li>
                                        <li><a href="/visa.html" data-product="visa" data-target="#visa-tab" title="Visa" data-action="click:menuClick:inclData" data-name="productType">Visa</a></li>
                                        <li><a href="/gas-connection.html" data-product="gas-connection" data-target="#gas-connection-tab" title="Gas Connection" data-action="click:menuClick:inclData" data-name="productType">Gas Connection</a></li>
                                        </ul>
                        </li>
                    <li class="no-arrow">
                            <a href="/getapp.html" data-target="#downloadApp" data-actionloc=":hamBurgerMenu" data-action="click:menuClick:inclData" title="Download Mobile App" class="sprite-menu bbicons-menu-downloadApp">DOWNLOAD MOBILE APP
<span class='sprite-menu android-star-badge'></span>
</a>
                            </li>
                    <li>
                            <a data-target="#bb-insurance" title="Compare Insurance Plans Online" class="sprite-menu bbicons-menu-bbinsurance">BANKBAZAAR INSURANCE</a>
                            <ul class="child-main-menu" data-actionloc=":hamBurgerMenu">
                                <li><a href="https://www.bankbazaarinsurance.com/insurance/life-insurance.html" data-product="TermLifeInsurance" data-target="#TermLifeInsurance-tab" title="Learn more about Term Life Insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Term Life Insurance</a></li>
                                        <li><a href="https://www.bankbazaarinsurance.com/insurance/car-insurance.html" data-product="CarInsurance" data-target="#CarInsurance-tab" title="Learn more about Car Insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Car Insurance</a></li>
                                        <li><a href="https://www.bankbazaarinsurance.com/insurance/health-insurance.html" data-product="HealthInsurance" data-target="#HealthInsurance-tab" title="Learn more about Health Insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Health Insurance</a></li>
                                        <li><a href="https://www.bankbazaarinsurance.com/insurance/two-wheeler-insurance.html" data-product="Two wheeler insurance" data-target="#Two wheeler insurance" title="Learn more about Two wheeler insurance Plans Online" data-action="click:menuClick:inclData" data-name="productType">Two wheeler insurance</a></li>
                                        </ul>
                        </li>
                    <li>
                            <a data-target="#more" title="More" class="sprite-menu bbicons-menu-more">MORE</a>
                            <ul class="child-main-menu" data-actionloc=":hamBurgerMenu">
                                <li><h3>Resources</h3></li>
                                            <li><a href="/reviews.html" data-product="reviews" data-target="#rating-review-tab" title="Ratings & Reviews" data-action="click:menuClick:inclData" data-name="productType">Ratings & Reviews</a></li>
                                        <li><a href="/health-insurance/network-hospitals-list.html" data-product="network-hospitals" data-target="#network-hospitals-tab" title="Network Hospitals" data-action="click:menuClick:inclData" data-name="productType">Network Hospitals</a></li>
                                        <li><a href="/car-insurance/cashless-garages-network.html" data-product="cashless-garages" data-target="#cashless-garages-tab" title="Cashless Garages" data-action="click:menuClick:inclData" data-name="productType">Cashless Garages</a></li>
                                        <li><a href="/ifsc-code.html" data-product="ifsc-code" data-target="#bank-ifsc-tab" title="Bank IFSC Codes" data-action="click:menuClick:inclData" data-name="productType">Bank IFSC Codes</a></li>
                                        <li><a href="/tax.html" data-product="tax" data-target="#tax-tab" title="Taxation in India" data-action="click:menuClick:inclData" data-name="productType">Tax</a></li>
                                        <li><a href="/cibil.html" data-product="cibil" data-target="#cibil-tab" title="Check CIBIL, Credit Score" data-action="click:menuClick:inclData" data-name="productType">CIBIL</a></li>
                                        <li><a href="/experian.html" data-product="experian" data-target="#experian-tab" title="Experian" data-action="click:menuClick:inclData" data-name="productType">Experian India</a></li>
                                        <li><a href="/equifax.html" data-product="equifax" data-target="#equifax-tab" title="Equifax" data-action="click:menuClick:inclData" data-name="productType">Equifax India</a></li>
                                        <li><a href="/fuel/petrol-price-india.html" data-product="Petrol Price" data-target="#Petrol Price-tab" title="Petrol Price" data-action="click:menuClick:inclData" data-name="productType">Petrol Price</a></li>
                                        <li><a href="/fuel/diesel-price-india.html" data-product="Diesel Price" data-target="#Diesel Price-tab" title="Diesel Price" data-action="click:menuClick:inclData" data-name="productType">Diesel Price</a></li>
                                        <li><a href="https://www.bankbazaarinsurance.com" data-product="BankBazaarInsurance" data-target="#BankBazaarInsurance-tab" title="BankBazaarInsurance" data-action="click:menuClick:inclData" data-name="productType">BankBazaarInsurance</a></li>
                                        <li><a href="https://blog.bankbazaar.com/" data-product="blog" data-target="#blog-tab" title="Blog" data-action="click:menuClick:inclData" data-name="productType">Blog</a></li>
                                        <li><a href="https://forums.bankbazaar.com/" data-product="forum" data-target="#forum-tab" title="Forum" data-action="click:menuClick:inclData" data-name="productType">Forum</a></li>
                                        <li><h3>BANKBAZAAR</h3></li>
                                            <li>
                                                <a href="/aboutus.html"  data-product="about-us" data-target="#about-us-tab" title="About us" data-action="click:menuClick:inclData" data-name="productType">About us</a>
                                                </li>
                                        <li><a href="/hello.html" data-product="it-works" data-target="#it-works-tab" title="This is how we do it" data-action="click:menuClick:inclData" data-name="productType">How It Works</a></li>
                                        <li>
                                                <a href="/careers.html" data-product="Join-our-team" data-target="#Join-our-team-tab" title="Join our team" data-action="click:menuClick:inclData" data-name="productType">Join our team</a>
                                                </li>
                                        <li><a href="/aboutus.html#contactus" data-product="contact-us" data-target="#Contact-Us" title="Contact us" data-action="click:menuClick:inclData" data-name="productType">Contact us</a></li>
                                        <li><a href="/hello.html" data-product="help" data-target="#help-tab" title="Help" data-action="click:menuClick:inclData" data-name="productType">Help</a></li>
                                        <li><a href="/conditionsofuse.html" data-product="terms" data-target="#terms-tab" title="Terms" data-action="click:menuClick:inclData" data-name="productType">Terms</a></li>
                                        </ul>
                        </li>
                    </ul>
    </nav>
    <div class="alert alert-success-mc" style="display: none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <span class="success-img"></span>
        <strong>AWESOME SAUCE!</strong>
        <p>Request received - loud & clear!<br/>Returning you to where you were...</p>
    </div>
</header>

<div id="stickyCTAText" class="dontshow">
    <!-- Additional Condition is added for dontshow for product for which we dont have ELig slides for Singapore website-->
    <div class="sticky-top" id="sticky-top">
            <div class="sticky-section" id="getitnow" style="opacity: 1; position: relative; top: 0px; display: block;">
                <div class="row container">
                    <div class="col-md-3 sticky-logo">
                        <img src="/images/bankbazaar-logo.png" alt="BankBazaar" title="Low Interest home loan, personal loans &amp; car loans from all banks in India" class="lazy"/></div>
                    <div class="col-xs-4 col-sm-4 col-md-3 content">
                    Whoever said wishes don’t come true hasn’t explored our offers!
                </div>

 <div class="col-xs-8 col-sm-8 col-md-6  text-right desktop_sticky_img ">
            <span class="desktop_sticky_app_img desktop_sticky_app_phone" style="background-position:-23px 2px;width:160px;"> </span>
            <a class="desktop_sticky_app_img desktop_sticky_app_ios" style="background-position:-209px -8px;" target="_blank" href="/loan.html" data-action="click:appleStoreDownload" data-actionloc=":stickySection" >
</a>
            <a class="desktop_sticky_app_img desktop_sticky_app_android" style="background-position:-358px -8px;" target="_blank" href="/credit-card.html" data-actionloc=":stickySection"> </a>
        </div></div>
            </div>
        </div>
    </div>
<div class='screen-block-hamburger dontshow'></div>
<div class="modal fade bb-login" id="js-sign-in-box" tabindex="-1" role="dialog" aria-labelledby="continueLabel1" aria-hidden="true"
        
        >

    <div class="ajax-hidden-variable"></div>
    <li class="dontshow">

<input type="hidden" name="fbEndpoint" value="https://www.facebook.com/v2.8/dialog/oauth?response_type=code&amp;client_id=473486006089780&amp;redirect_uri=https%3A%2F%2Fwww.bankbazaar.com%2Fsignin_social.html%3FcustomerType%3DFACEBOOK%26_spring_security_remember_me%3Dtrue&amp;scope=public_profile%2Cuser_about_me%2Cemail%2Cuser_birthday%2Cuser_education_history%2Cuser_friends%2Cuser_location%2Cuser_relationships%2Cuser_work_history" id="fbEndpoint"/>
</li><li class="dontshow">

<input type="hidden" name="googleEndpoint" value="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;client_id=292169499198-0lfk82r2deoft25lth746btka7g5gslr.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fwww.bankbazaar.com%2Fsignin_social.html%3FcustomerType%3DGOOGLE&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.login%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.profile.emails.read" id="googleEndpoint"/>
</li><div class="modal-dialog sign-in-box">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close js-close" data-action="close:close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>
                <div class="section-title modal-title" id="continueLabel1">Log in to BankBazaar</div>
                <p>(You can save searches, track your apps & save plenty of time!)</p>
            </div>
            <div class="modal-body">
                <div class="social-login">
                        <a class="btn btn-block btn-social btn-facebook sign-in-fb" data-action="click:fbLogin" href="javascript:void(0)" data-actionLoc="headerMenu:FB" title="Log in with Facebook">
                            <span class="facebook login-sprite"></span>Facebook
                        </a>
                        <a class="btn btn-googleplus sign-in-google" data-action="click:googleLogin" title="Log in with Google" data-actionLoc="headerMenu:GPlus">
                            <span class="google-plus login-sprite"></span>Google +
                        </a>
                    </div>
                <div id="nativeLogin"></div>
            </div>
        </div>
    </div>
</div>
<!-- Load JS here for greater good =============================-->
<div class="emi-calculator-section">
    <div class="breadcrumb-section clearfix">
        <div class="container">
            <ul class="breadcrumb">
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Home</span></a></li>
                <li><a href="/finance-tools/index.html">Finance Tool</a></li>
                        <li><span>Loan EMI Calculator</span></li>
                    </ul>
        </div>
    </div>
<div id="mobileAppStickyFooter">
            </div>
    <div class="row">
            <div class="fulid-container ct-banner-bg">
                <div class="container">
                    <div class="ct-banner-img-container"><img data-original="/images/common/ct-meter-icon.png" src="" class="lazy" alt="CT" title="CT"/>
</div><span class="ct-banner-txt">
 Credit Score of 750 = Easy approval of Loans/Credit Card! Check your score in less than 3 mins!</span><div class="ct-banner-btn-container"><a href="https://www.bankbazaar.com/credit-score.html?WT.mc_id=CT_EMI_CAL_TOP&utm_source=bb&utm_medium=display&utm_campaign=CT_EMI_CAL_TOP" class="ct-banner-btn">Check for FREE</a></div>
                </div>
            </div>
        </div>
    <div class="emi-head">
        <div class="container">
            <div class="section-title"><h1> EMI Calculator</h1></div>
            <p class="sub-title">Calculate your Loan EMI & Total Interest Due</p>
            <div class="row emi-related-tools">
                <div class="col-md-4 col-xs-4 col-sm-4">
                    <a href="home-loan-emi-calculator.html" title="Home Loan EMI Calculator">
                        <div class="tile">
                            <div class="sprite-emi-icons home-loan-emi-icon"></div>
                            <p><span>home loan</span> EMI Calculator</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4">
                    <a href="car-loan-emi-calculator.html" title="Car Loan EMI Calculator">
                        <div class="tile">
                            <div class="sprite-emi-icons car-loan-emi-icon"></div>
                            <p><span>car loan</span> EMI Calculator</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4">
                    <a href="personal-loan-emi-calculator.html" title="Personal Loan EMI Calculator">
                        <div class="tile">
                            <div class="sprite-emi-icons personal-loan-emi-icon"></div>
                            <p><span>personal loan</span> EMI Calculator</p>
                        </div>
                    </a>
                </div>
                </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <input type="hidden" value="Loan" id="productType"/>
    <div class="emi-loan-details loan-slider">
    <div class="container">
        <form id="emiForm" name="emiForm" action="/finance-tools/#.html" method="post"><div class="desktop-one">
            <div class="emi-loan-amount-slider">

                    <div class="loan-amt-lable"> <span id="popoverData" data-content="This is the principal amount that you wish to borrow." rel="popover" data-placement="top" data-trigger="hover"> <span id="holder"><span class="dot"></span><span class="pulse"></span></span> Loan Amount</span></div>
                    <div class="emi-tagger">
                        <input type="text" class="loan-amount dontshow"/>
                    </div>
                    <span class="dontshow curLmt_val" id="curLmt_val">25000</span>
                    <span class="err-msg dontshow" id="loan-amount-error">
                        <label class="control-label error-msg"><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Please select no more than 8 characters</label>
                    </span>
                    <div class="loan-amt-price">
                        <div class="dropdown">
                            <a data-toggle="dropdown" href="#" class="emi-loan-price-popup"><img src="/images/landing/rupee-icon-white-lg-v1.png" alt="Sprite" title="Sprite"/>
</a>
                                <input data-toggle="dropdown" class="emi-loan-max-amt el-input number dontvalidate" id="loanAmountSlider" name="loanAmountSlider" value="25000" readonly="true"/>

                            <div class="dropdown-arrow"></div>
                            <ul class="dropdown-menu loan-emiamt">
                                <li>
                                    <div class="input-group">
                                        <input type="tel" maxlength="10" class="form-control amounts-loan keep-open number dontvalidate" id="loan-amount-dropdown-input" placeholder="25000"/>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default amounts-loan-btn" id="loan-amount-btn">Ok</button>
                                            </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="emi-loan-tenure-slider">
                <div class="loan-tenure-lable">
                    <span id="popoverData1" data-content="This is the time period over which the loan will be paid off." rel="popover" data-placement="top" data-trigger="hover"> <span id="holder1"> <span class="dot"></span> <span class="pulse"></span> </span> Tenure</span>
                </div>
                <div class="emi-tenure-tagger">
                    <input type="tel" value="500" class="emi-tenure-slider-bg"/>
                </div>
                <span class="dontshow curTenure_val" id="curTenure_val">6</span>
                <div class="loan-tenure-month">
                    <div>
                        <div class="dropdown" >
                            <input data-toggle="dropdown" class="emi-loan-max-amt el-input number" id="tenureYrSlider" placeholder="0 "/>
                            <a data-toggle="dropdown" href="#" class="loan-tenure-year-popup">Years</a>
                            <input data-toggle="dropdown" class="emi-loan-max-amt el-input number" id="tenureMonSlider" />
                            <a data-toggle="dropdown"  href="#" class="loan-tenure-month-popup">Months</a>
                            <div class="dropdown-arrow"></div>
                            <ul class="dropdown-menu tenu-month">
                                <li>
                                    <div class="input-group">
                                        <input type="tel" class="form-control keep-open number year-tenu" id="year-tenure-value-dropdown-input" placeholder="0  Yrs" maxlength="3">
                                        <input type="tel" class="form-control keep-open number month-tenu " id="month-tenure-value-dropdown-input" placeholder="6 Months" maxlength="2">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default month-tenu-btn">Ok</button>
                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="loan-tenure-month dontshow">
                    <div class="dropdown">
                    <input data-toggle="dropdown" class="emi-loan-max-amt el-input number" id="tenureSlider" name="tenureSlider" value="6" readonly="true"/>
                    <a data-toggle="dropdown" href="#" class="loan-tenure-month-popup">months</a>
                    <div class="dropdown-arrow"></div>
                    <ul class="dropdown-menu tenu-month">
                        <li>
                            <div class="input-group">
                                <input type="tel" class="form-control keep-open number month-tenu" id="tenure-value-dropdown-input" placeholder="6  months" maxlength="3">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default month-tenu-btn">Ok</button>
                    </span> </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="show-on-mobile-input">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="interest-rate"> <span class="interest-rate-lable">Loan Amount: <span id="holder4"><span class="dot"></span><span class="pulse"></span></span></span>
                <input type="tel" value="25000" placeholder="Rs. 25,000" class="form-control number dontvalidate" id="curLmt_val_mobile" name="loanAmount" maxlength="10">
            </div>
            <span class="err-msg dontshow" id="loan-amt-mobile-error">
                <label class="control-label error-msg"><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Required Field</label>
            </span>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="interest-rate"> <span class="interest-rate-lable">Tenure: <span id="holder5"><span class="dot"></span><span class="pulse"></span></span></span>
                <input type="tel" value="6" placeholder="12 Months" class="form-control" name="tenure" id="curTenure_val_mobile" allowedCharSet="0-9" maxlength="3">
            </div>
            <span class="err-msg dontshow" id="tenure-mobile-error">
                <label class="control-label error-msg"><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Required Field</label>
            </span>
        </div>
    </div>
    <div class="interest-rate-process-fee">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="interest-rate"> <span class="interest-rate-lable"> <span id="popoverData2" data-content="This is the interest rate that is charged on the money borrowed. This rate is a reducing balance rate with monthly rest(i.e compounding happens monthly)." rel="popover" data-placement="top" data-trigger="hover">Interest Rate in %: <span id="holder2"><span class="dot"></span><span class="pulse"></span></span></span></span>
                <input type="tel" class="form-control interest-rate-value" name="interestRate" placeholder="10.25%" id="interest-rate" allowedCharSet="0-9." maxlength="5" onfocus="this.placeholder = ''" onblur="this.placeholder = '10.25%'">
            </div>
            <span class="err-msg dontshow" id="interest-rate-error">
                <label class="control-label error-msg"><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Please select range between 1 to 50</label>
            </span>
            <span class="err-msg dontshow" id="interest-rate-format-error">
                <label class="control-label error-msg"><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Please enter valid interest rate</label>
            </span>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="processing-fee"> <span class="processing-fee-lable"> <span id="popoverData3" data-content="Many banks charge a processing fee at the time of a disbursing a loan. Processing Fees typically vary between 0% to 3% of the loan amount." rel="popover" data-placement="top" data-trigger="hover">Processing Fee: <span>(% of loan amount)</span> <span id="holder3"><span class="dot"></span><span class="pulse"></span></span></span></span>
                <input type="tel" id="processing-fee"  class="form-control processing-fee-value" placeholder="2%" allowedCharSet="0-9." name="processingFee" maxlength="5" onfocus="this.placeholder = ''" onblur="this.placeholder = '2%'">
            </div>
            <span class="err-msg dontshow" id="process-fee-error">
                <label class="control-label error-msg"><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Please enter range between 1 to 10</label>
            </span>
            <span class="err-msg dontshow" id="process-fee-format-error">
                <label class="control-label error-msg"><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Please enter valid processing fee</label>
            </span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="pre_payment">
        <div class="pre_payment-inner">
            <div class="bs-example"> Would you like to make Pre-payments?
                <div data-toggle="buttons" class="btn-group1">
                    <label class="btn radio">
                        <input type="radio" name="radioName" value="show" data-toggle="radio" class="show-hide-select">
                        <span>Yes</span> </label>
                    <label class="btn radio">
                        <input type="radio" name="radioName" value="hide" data-toggle="radio" class="show-hide-select">
                        <span>No </span></label>
                </div>
            </div>
            <div class="payment-dec dontshow" id="prepay-section">
                <div class="arrow-up"></div>
                <div class="payment-dec_inner">
                    <div class="payment_opt">
                            <span class="payment_opt-lable">
                                <span data-trigger="hover" data-placement="top" rel="popover" data-content="How often will you make pre-payments" id="popoverData5" data-original-title="" title="">Pre-payment Frequency <span id="holder12"><span class="dot"></span><span class="pulse"></span></span>
                                </span>
                            </span>
                        <div class="dropdown">
                            <select id="prepay-frequency" class="dontvalidate" name="prePayFreq">
                                <option value="">Select</option>
                                <option value="EVERY_MONTH">Every Month</option>
                                <option value="ONCE_THREE_MONTH">Once in 3 months</option>
                                <option value="ONCE_SIX_MONTH">Once in 6 months</option>
                                <option value="ONCE_YEAR">Once in a Year</option>
                                <option value="ONLY_ONCE">Just Once</option>
                                <option value="PAY_COMPLETELY">Will Pay off Loan completely</option>
                            </select>
                            <span class="err-msg"><label class="error-msg input-error dontshow" ><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Hi! Please provide an input</label></span>
                        </div>

                    </div>
                    <div class="payment_opt dontshow" id="prepay-start-month">
                            <span class="payment_opt-lable">
                                <span data-trigger="hover" data-placement="top" rel="popover" data-content="Enter &#34;5&#34; if you plan to make Pre-payments from the 5th month onwards" id="popoverData6" data-original-title="" title="">Pre-payment starts in <span id="holder13"><span class="dot"></span><span class="pulse"></span></span>
                                </span>
                            </span>
                        <input type="tel" placeholder="36 Months" class="form-control number dontvalidate" id="prepay-start-value" maxlength="3" name="prePayStartMonth" disabled>
                        <span class="err-msg"><label class="error-msg input-error dontshow" ><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Hi! Please provide an input</label></span>
                    </div>
                    <div class="payment_opt" id="prepay-amount-section">
                            <span class="payment_opt-lable">
                                <span data-trigger="hover" data-placement="top" rel="popover" data-content="Loan repayment amount paid in advance" id="popoverData4" data-original-title="" title="">Pre-payment amount <span id="holder11"><span class="dot"></span><span class="pulse"></span></span>
                                </span>
                            </span>
                        <input type="tel" placeholder="50,000" class="form-control number rupee-icon dontvalidate" id="pre-payment-amount" maxlength="10" name="prePayAmount" disabled>
                        <span class="err-msg"><label class="error-msg input-error dontshow" ><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Hi! Please provide an input</label></span>
                    </div>
                    <div class="payment_opt dontshow" id="loan-complete-month">
                            <span class="payment_opt-lable">
                                <span data-trigger="hover" data-placement="top" rel="popover" data-content="Enter &#34;5&#34; if paid off in 5th month" id="popoverData9" data-original-title="" title="">Loan Completion Month <span id="holder13"><span class="dot"></span><span class="pulse"></span></span>
                                </span>
                            </span>
                        <input type="tel" value="" placeholder="36 Month" class="form-control number dontvalidate" id="loan-completion-month" maxlength="3" name="prePayEndMonth" disabled>
                        <span class="err-msg"><label class="error-msg input-error dontshow" ><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Hi! Please provide an input</label></span>
                    </div>
                    <div class="payment_opt">
                        <span class="payment_opt-lable">
                            <span data-trigger="hover" data-placement="top" rel="popover" data-content="Many banks will charge a Pre-payment fee if you wish to pay off your loan sooner than the scheduled term on your loan. Pre-payment Fees typically vary between 0% and 3%" id="popoverData7" data-original-title="" title="">Pre-payment Fee <span id="holder14"><span class="dot"></span><span class="pulse"></span></span>
                            </span>
                        </span>
                        <span class="pre-fee-amt"><input type="tel" value="" placeholder="0" class="form-control number dontvalidate" id="prepay-fee" maxlength="1" name="prePayPenaltyPercent" disabled><span>%</span></span>
                    </div>
                    <div class="payment_opt" id="prepay-applies-month">
                        <span class="payment_opt-lable">
                            <span data-trigger="hover" data-placement="top" rel="popover" data-content="This is the interest rate that is charged on the money borrowed. This rate is a reducing balance rate with monthly rest(i.e compounding happens monthly)." id="popoverData8" data-original-title="" title="">Pre-payment Applies to <span id="holder15"><span class="dot"></span><span class="pulse"></span></span>
                            </span>
                        </span>
                        <div class="dropdown">
                            <select id="prepay-applies" class="dontvalidate" name="prePayPenaltyMonth">
                                <option value="">Select</option>
                                <option value="FINAL_PREPAYMENT">Final Prepayment made</option>
                                <option value="SUM_OF_ALL">Sum of all prepayments</option>
                                <option value="SUM_OF_LAST_YEAR">Sum of prepayments made in last year of loan</option>
                            </select>
                            <span class="err-msg"><label class="error-msg input-error dontshow" ><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Hi! Please provide an input</label></span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <input type="submit" class="btn btn-load-more-comments" value="Calculate" id="calculate">
    </div>
    </form>


</div>
</div>
<div class="arrow-link"><a href="javascript:void(0)" id="loan-details-down-arrow"><div class="arrow-down"></div></a></div><div class="your-emi">
    <div class="your-emi-wrap">
    <div class="container">
        <h2 class="section-title">Your Monthly Loan EMI: <img src="/images/landing/rupee-icon.png" alt="Sprite" title="Sprite"/>
<span id="emiVal" class="emi-amount">4,292</span></h2>
        <p class="sub-title">Monthly amount paid to your Loan provider</p>
        <div class="expant-btn">
            <a id="imageDivLink" href="javascript:void(0)" title="Expand"><img src="/images/landing/plus1.png" alt="Sprite" title="Sprite"/>
</a>
        </div>
        <div class="your-emi-inner" id="your-emi-inner" style="display: block;">
            <div class="col-md-5 col-sm-6 pie-chart-outer">
                <div class="pie-chart-wrap">
                    <div class="pie-chart">
                        <div class="pie-chart-inner">
                            <div>Break-up of all total amount payable</div>
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="pie-chart-details">
                            <div class="detail-table-piechart" id="break-down-section">
                                <div class="rows-left">
                                    <div class="colmn1"> <span class="arange-squre"></span>Loan Amount</div>
                                    <div class="colmn2"><span id="pieLoanAmount">25000</span><span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"/>
</span></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="rows-left">
                                    <div class="colmn1"> <span class="green-squre"></span>Total Interest Due</div>
                                    <div class="colmn2"><span id="pieInterestPay">756</span><span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"/>
</span></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="rows-left">
                                    <div class="colmn1"> <span class="red-squre"></span>Processing Fee</div>
                                    <div class="colmn2"><span id="pieProcessFee">500</span><span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"/>
</span></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="detail-table-piechart dontshow" id="break-down-section-prepay">
                                <div class="rows-left">
                                    <div class="colmn1"> <span class="arange-squre"></span>Loan Amount Via EMI</div>
                                    <div class="colmn2"><span id="pieLoanAmountEMIWithPrepay">500</span><span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"/>
</span></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="rows-left">
                                    <div class="colmn1"> <span class="blue-squre"></span>Loan Amount Prepaid</div>
                                    <div class="colmn2"><span id="piePrepaidLoanWithPrepay">500</span><span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"/>
</span></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="rows-left">
                                    <div class="colmn1"> <span class="green-squre"></span>Total Interest</div>
                                    <div class="colmn2"><span id="pieInterestPayWithPrepay">500</span><span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"/>
</span></div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="rows-left">
                                    <div class="colmn1"> <span class="red-squre"></span>Processing Fee</div>
                                    <div class="colmn2"><span id="pieProcessFeeWithPrepay">500</span><span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"/>
</span></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="rows-left">
                                    <div class="colmn1"> <span class="purple-squre"></span>Pre-payment Fee</div>
                                    <div class="colmn2"><span id="piePrePayFeeWithPrepay">500</span><span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"/>
</span></div>
                                    <div class="clearfix"></div>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="rows-left border-left-total">
                        <div class="rows-left border-left-total-inner">
                            <div class="colmn1"> Total Amount Payable</div>
                            <div class="colmn2"><span id="pieTotalAmount">26252</span><span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"/>
</span></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-md-offset-1">
                <div class="pie-chart-right">
                    <div class="text-center">Your loan details as specified by you</div>
                    <div class="detail-table-piechart-right">
                        <div class="rows-right">
                            <div class="colmn1">Loan Amount</div>
                            <div class="colmn2"><span id="loanAmountDetails">25000</span><span><img src="/images/landing/rupee-icon.png" alt="Sprite" title="Sprite"/>
</span></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="rows-right">
                            <div class="colmn1">Tenure</div>
                            <div class="colmn2"><span id="tenureFee">6 Months</span></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="rows-right">
                            <div class="colmn1">Interest Rate</div>
                            <div class="colmn2"><span id="interestRate">10%</span></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="rows-right">
                            <div class="colmn1">Processing Fee</div>
                            <div class="colmn2"><span id="processingFee">2%</span></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="rows-right dontshow" id="prepay-breakdown-section">
                            <div class="colmn1">Pre-payment</div>
                            <div class="colmn2"><span id="prePayFee">25000</span><span><img data-original="/images/landing/rupee-icon.png" src="" class="lazy" alt="Sprite" title="Sprite"/>
</span></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="share-your-report">
                        <div class="share-report-title">Share Our EMI Wizardry</div>
                        <div class="navbar navbar-default" role="navigation">
                            <div class="share-your-report-social-icons">
                                <ul class="nav navbar-nav share-report-icons">
                                    <li><a title="BankBazaar Facebook" href="javascript:void(0)" id="ascyn_fb_share"><span class="fb share-report"></span></a></li>
                                    <li><a title="BankBazaar Twitter" href="javascript:void(0)" onclick="twitterShareMessage('EMI Calculator-Calculate EMI Online for your loans')" id="async_twitter_share"><span class="twitter share-report"></span></a></li>
                                    <li><div id="gplus-one"></div></li>
                                </ul>
                            </div>
                            <!-- /.nav-collapse -->
                        </div>
                        <!-- /.navbar -->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div><div class="row">
        <div class="fulid-container ct-banner-bg">
            <div class="container">
                <div class="ct-banner-img-container"><img data-original="/images/common/ct-meter-icon.png" src="" class="lazy" alt="CT" title="CT"/>
</div><span class="ct-banner-txt">Is your Credit Score good enough for getting a loan or card?</span><div class="ct-banner-btn-container"><a href="https://www.bankbazaar.com/credit-score.html?WT.mc_id=CT_EMI_CAL_MID&utm_source=bb&utm_medium=display&utm_campaign=CT_EMI_CAL_MID" class="ct-banner-btn">Check for FREE</a></div>
            </div>
        </div>
    </div>
<div class="amortization-table">
    <div class="amortization-table-wrap">

<div class="container">
<h2 class="section-title" id="amortization-section-header">Your Amortization Details (Yearly/Monthly)</h2>
<p class="sub-title">Your debt repayment schedule in regular instalments over a period of time.</p>
<div class="expant-btn">
    <a id="imageDivLink1" href="javascript:void(0);" title="Expand"><img src="/images/landing/plus2.png" alt="Sprite" title="Sprite"/>
</a>
</div>
<div class="amortization-table-inner" id="amortization-table-inner" style="display:block;">
<div class="amort-chart-tab-port-view"><img data-original="/images/landing/tab-amortization-image.png" src="" class="lazy" alt="Tab amortization" title="Tab amortization"/>
</div>
<div class="amortization-chart">
    <div class="amortization-color-info"> <span class="outer-span"> <span class="arange-squre"></span>Principal Paid</span> <span class="outer-span"> <span class="green-squre"></span>Interest Paid</span> <span class="outer-span" id="osbalance-without-prepay"> <span class="red-squre"></span>Outstanding Loan Balance</span><span class="outer-span dontshow" id="osbalance-in-prepay"><span class="red-squre"></span>O/S Balance(Without Pre-payment)</span> <span class="outer-span dontshow" id="osbalance-with-prepay"> <span class="purple-squre"></span>O/S Balance(With Pre-payment)</span></div>
    <div id="amort_chart_holder" style="width: 1010px; height: 600px; margin: 0 auto">
    </div>

</div>
<table class="table table-responsive table-hover" id="amortTable">
<thead>
<tr>
    <th class="year">Year</th>
    <th class="principal">Principal Paid(A)</th>
    <th class="interest">Interest Paid(B)</th>
    <th class="total-payment">Total Payment (A+B)</th>
    <th class="balance">Outstanding Loan Balance</th>
    <th class="pre-pay dontshow">Pre-payment</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="arrow-link"><a href="javascript:void(0)" id="amort-section-down-arrow"><div class="arrow-down"></div></a></div><!--  Prepayment Analysis Section start -->
<div class="you-save-section dontshow">
<div class="pmt-analysis">
    <div class="container">
        <div class="section-title">Pre-payment Analysis</div>
        <p class="sub-title">(We've broken it down for you!)</p>

        <div class="pmt-analysis-inner">
            <div class="pmt-table">
                <table class="table table-responsive">
                    <thead>
                    <tr class="dot-line"><th class="sumry-txt">Summary</th><th>Total Amount</th><th>Tenure  <a href="javascript:void(0)" id="ascyn_fb_share_custom" title="Bankbazaar Facebook" data-custom-text="Woo-hoo! Thanks to BankBazaar's Prepayment Calculator, I'm going to save Rs 2, 57, 689 on my loan and reduce my loan tenure by 1 year and 8 months!"><span class="pmt-fb-icon"></span></a> <a href="javascript:void(0)" id="async_twitter_share" onclick='updateTwitterShareContent()' data-customtext="" title="Bankbazaar Twitter"><span class="pmt-twit-icon"></span></a></th></tr>
                    </thead>
                    <tbody>
                    <tr><td>Without Pre-payment </td><td><b><img data-original="/images/landing/rupee-icon-lg.png" src="" class="lazy" alt="Rupee" title="Rupee"/>
<span id="final-amt-without-prepay" class="number">47,87,426</span></b></td><td><b><span id="final-tenure-without-prepay">10 yrs</span></b></td></tr>
                    <tr><td>With Pre-payment </td><td><b><img data-original="/images/landing/rupee-icon-lg.png" src="" class="lazy" alt="Rupee" title="Rupee"/>
<span id="final-amt-with-prepay" class="number"> 45,33,723</span></b></td><td><b><span id="final-tenure-with-prepay">8years 4months</span></b></td></tr>
                    <tr class="pmt-table-btm">
                        <td class="pmt-save-img"><span></span></td>
                        <td><span>YOU SAVE</span>
                            <span class="big-font"><img data-original="/images/landing/rupee-icon-white-lg-v1.png" src="" class="lazy" alt="Sprite" title="Sprite"/>
<span id="saved-amount">0</span></span>
                        </td>
                        <td class="two-colm">
                            <span>YOUR TENURE REDUCED BY</span>
                            <span class="big-font" id="saved-tenure">1 years 8 months</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--  Prepayment Analysis Section end -->
<div class="previous-section-indicator"><img data-original="/images/landing/cl-prev-indic-arw.png" src="" class="lazy" alt="Landing Previous Arrow" title="Landing Previous Arrow"/>
</div>
</div>
<input type="hidden" id="fromEmi" name="fromEmi" value="fromEMI"/>
    <!-- How to Use BB Section Start  -->

    <div class="how-to-use" id="how-to-use">
                <div class="section-title"></div>
<div class="container">  
<div class="how-to-use-inner">
<style scoped="">
.full-width-banner{width:100%;background:#34495E;border-radius:6px}
.link-cta-btn-1.bg-pickled-blue.ct-web-banner{padding: 4px 14px;margin: 0 auto;text-align: center;}
.ct-web-banner span{color:#fff;    font-size: 20px;}
.cta-section .ct-web-banner span a{background: #ff5a5f; border: none; font-size: 20px; line-height: 1.3; padding: 6px 20px;position: relative;overflow: hidden;display: block;color:#fff;text-align:center;border-radius:4px}
.cta-section .ct-web-banner img{display: inline-block; bottom: -4px; position: relative;width:55px}
.cta-section .ct-web-banner .text-section{max-width: 580px;padding: 0 15px;display: inline-block; vertical-align: middle;text-align:left}
.cta-section .ct-web-banner .highlight-text{line-height:normal;color: #ffec4e; font-size: 31px; font-weight: bold;}
.bg-pickled-blue.ct-web-banner .show-mobile{display:none}
.bg-pickled-blue.ct-web-banner .show-desktop{display:inline-block}
@media only screen and (max-width: 1024px){
.cta-section .ct-web-banner .highlight-text{font-size:28px}
.ct-web-banner span{font-size:12px}
}
@media only screen and (max-width: 767px){
.bg-pickled-blue.ct-web-banner{width:100%}
.cta-section .ct-web-banner img {width:75px;}
.cta-section .ct-web-banner .text-section {width:185px;line-height: normal;text-align:center;padding:0}
.ct-web-banner span{line-height:normal;font-size:12px}
.cta-section .ct-web-banner .highlight-text{font-size:16px}
.bg-pickled-blue.ct-web-banner .show-mobile{display:inline-block}
.bg-pickled-blue.ct-web-banner .show-desktop{display:none}
.cta-section .ct-web-banner span a{margin: 0 auto !important; padding: 5px 5px; width: 120px; font-size: 12px !important;}
}
</style>
<div class="cta-section cta-section-1 full-width-banner">
	<div class="link-cta-btn link-cta-btn-1 bg-pickled-blue ct-web-banner">
		<img src="/images/india/infographic/ct-banner-mobile-v1.gif" alt="Credit Score" title="Credit Score">
			<div class="text-section">
				<span class="highlight-text"> A good Credit Score </span><br>
				<span>An essential financial tool!</span><br class="show-mobile"><br>
				<span class="right-box btn-animation-type-1 show-mobile"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
			</div>
			<span class="right-box btn-animation-type-1 show-desktop"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
	</div>
</div>



<div class="primary-key-details">

<h2>What is an EMI?</h2>
<p>EMI stands for Equated Monthly Instalment which is a fixed amount of payment a borrower has to make to the lender at a specified date on monthly basis. EMIs consists of your principal loan amount and interest amount, payable every month.</p>
<p>Although the EMI remains fixed for every month, the amount paid towards principal and interest changes. The interest component constitutes a major portion of the EMI payment in the initial stages. However, as the loan period progresses and the principal outstanding reduces, the portion of interest repayment decreases. This happens until the end of the loan period when the entire loan amount has been paid off.</p>
</div>
<h2>How EMI Calculators Work?</h2> 
<p>To put it quite simply, an EMI calculator is a tool that will require you to enter the amount you want to borrow, the duration of the loan, the interest rates and the processing fee and it will do the rest. The basic formula that works behind an EMI calculator is:</p>
<p>E = P x r x (1+r)^n/((1+r)^n &ndash; 1)</p>  
<div class="col-xs-12 col-md-6">  
  
<p><em><strong>Here</strong></em>:</p>
<ul>
<li>E is the amount that you will have to pay every month; basically the EMI.</li>
<li>P is the amount that you want to borrow.</li>
<li>r is the rate of interest that is applicable but calculated on a monthly basis instead of the annual rate of interest. It is obtained by using the formula r = (annual interest/12) x 100.</li>
<li>n is the duration of the loan in terms of months. So if you select a term of 5 years, n will be 60.</li>
</ul>
<p>This is the most basic formula that will be used by the calculator but there are some that may even include things like the processing fee for the loan, into the calculation of the monthly instalment. The processing fee will generally be a certain percentage of the amount being borrowed and can range from 1% to 3% but since it is decided by the bank it can be different for each bank.</p>

</div>

<div class="col-xs-12 col-md-6">      
<div class="how-to-use-video">       
 <iframe width="560" height="315" src="https://www.youtube.com/embed/A5swpknN6xY?rel=0&amp;controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
<figcaption align="center"><strong>How to Use EMI Calculator? </strong></figcaption>
     
</div>    
</div>    
<div class="clearfix"></div>  
</div>    
</div>    

<div class="container">  
<div class="how-to-use-inner">

<p>Whether you obtain a secured loan (home loan or car loan) or an unsecured loan (personal loan), you have to repay the loan through Equated Monthly Installments (EMIs) over a specified period of time called the loan tenure. The cost of your loan is calculated in terms of monthly payments. Loan EMI calculation can help you find out the monthly cost of your loan. Accordingly, you can create a monthly budget to balance your income and expense.</p>
<p>To ensure your loan EMI payments are within your repayment capacity, you can either adjust the loan tenure or the loan amount, or both. You can’t adjust the loan interest rate and processing fee levied by a bank. However, you can compare various loan offers and choose one with a low interest rate and zero processing fee to lower the cost of your loan. Here are some important reasons why it is advisable to calculate your loan EMI beforehand:</p>
<ul>
<li>
<strong>Loan amount:</strong> Borrow only as much as you can repay. Depending on the loan EMI calculation, you can choose an appropriate loan amount to meet your financial needs. Maintain a low debt-to-income ratio so as to avoid defaulting on your loan.</li>
<li>
<strong>Loan tenure:</strong> A short loan tenure means higher EMI payments and lower interest payment whereas a long loan tenure means lower EMI payments but higher interest payment. Calculate EMIs for different loan tenures using the online EMI calculator. Choose a suitable loan tenure so as to avoid a higher interest payment.</li>
<li>
<strong>Loan EMI:</strong> A borrower with a high debt-to-income ratio has higher chances of defaulting on the loan. If you default on a secured loan like a car loan, the bank will repossess your car and put it up for auction in order to compensate for the outstanding dues. Which is why, your loan EMI payments must not exceed more than 50% of your income.</li>
<p>Manual loan EMI calculation can be cumbersome and prone to human error. With the advent of technology, it has become easier to calculate loan EMI online with just a few clicks of your mouse. Use the free online EMI calculator available on a reliable third-party website or a bank website to get instant and accurate results. Online EMI calculators can be used to calculate the cost of any type of loan scheme that you choose.</p>
</ul>


<div class="col-xs-12 col-md-7">  
<h2>EMI Calculator provides following information</h2> 
<p>There are three parts to the information that the calculator provides. The first is the EMI itself, the second a breakup of the payments due and the third the amortisation table.</p>

<h3 class="how-to-use-title">The EMI</h3>
<p>The EMI or the Equated Monthly Instalments are the amount that you can expect to pay if you go in for a loan. It includes payments of the principal and the interest that is applicable on the loan. It is the most important information that the calculator provides since the EMI is at the basis of the decision about the affordability of the loan.</p>

<h3 class="how-to-use-title">The breakup</h3>
<p>The breakup is a breakup of the entire amount that you will pay to the bank or the financial institution. It will tell you the amount that will be paid back as the principal and the amount that will be paid as the processing fee for the loan. It will also tell you how much of the repayment will be the interest on the loan.</p>

</div>  

<div class="col-xs-12 col-md-5"> 

<style scoped>
.infographics .pull-right{margin: 0 3px;}
.infographics p strong{ display:inline; }
.infographics h3{font-weight:bold;font-size:18px;}
</style>


<a href="" data-toggle="modal" data-target=".bs-example-modal-lg" class="js-infographic">
<img data-original="/images/india/infographic/online-emi-calculator-thumbnail.png" src="" class="img-responsive lazy" title="Online EMI Calculator " alt="How to use Online EMI Calculator" />
</a>

<figcaption align="center"><strong>How to use Online EMI Calculator?</strong></figcaption>

</div>

<div class="modal fade bs-example-modal-lg infographic-modal js-infographic-content" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
<div class="container">
<div class="close">
<button type="button" class="btn js-infographic-close" data-dismiss="modal" aria-hidden="true">Close</button>
</div>
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-body">
<img data-original="/images/india/infographic/online-emi-calculator.png" src="" class="img-responsive lazy" title="Online EMI Calculator " alt="How to use Online EMI Calculator" />

</div>
</div>
</div>
</div>
</div>
<h3 class="how-to-use-title">Amortisation tables</h3>
<p>The amortisation table is a snapshot of the progression of the loan and tells you how much you will have paid back at the end of each year, as the loan progresses. It also helps you understand how the interest on the loan will be paid back. It also shows you how much of the initial EMIs will be the interest and how much will be the principal.</p>
<style scoped="">
.full-width-banner{width:100%;background:#34495E;border-radius:6px}
.link-cta-btn-1.bg-pickled-blue.ct-web-banner{padding: 4px 14px;margin: 0 auto;text-align: center;}
.ct-web-banner span{color:#fff;    font-size: 20px;}
.cta-section .ct-web-banner span a{background: #ff5a5f; border: none; font-size: 20px; line-height: 1.3; padding: 6px 20px;position: relative;overflow: hidden;display: block;color:#fff;text-align:center;border-radius:4px}
.cta-section .ct-web-banner img{display: inline-block; bottom: -4px; position: relative;width:55px}
.cta-section .ct-web-banner .text-section{max-width: 580px;padding: 0 15px;display: inline-block; vertical-align: middle;text-align:left}
.cta-section .ct-web-banner .highlight-text{line-height:normal;color: #ffec4e; font-size: 31px; font-weight: bold;}
.bg-pickled-blue.ct-web-banner .show-mobile{display:none}
.bg-pickled-blue.ct-web-banner .show-desktop{display:inline-block}
@media only screen and (max-width: 1024px){
.cta-section .ct-web-banner .highlight-text{font-size:28px}
.ct-web-banner span{font-size:12px}
}
@media only screen and (max-width: 767px){
.bg-pickled-blue.ct-web-banner{width:100%}
.cta-section .ct-web-banner img {width:75px;}
.cta-section .ct-web-banner .text-section {width:185px;line-height: normal;text-align:center;padding:0}
.ct-web-banner span{line-height:normal;font-size:12px}
.cta-section .ct-web-banner .highlight-text{font-size:16px}
.bg-pickled-blue.ct-web-banner .show-mobile{display:inline-block}
.bg-pickled-blue.ct-web-banner .show-desktop{display:none}
.cta-section .ct-web-banner span a{margin: 0 auto !important; padding: 5px 5px; width: 120px; font-size: 12px !important;}
}
</style>
<div class="cta-section cta-section-1 full-width-banner">
	<div class="link-cta-btn link-cta-btn-1 bg-pickled-blue ct-web-banner">
		<img src="/images/india/infographic/ct-banner-mobile-v1.gif" alt="Credit Score" title="Credit Score">
			<div class="text-section">
				<span class="highlight-text"> Banks love a 750+ Credit Score! </span><br>
				<span>What's yours?</span><br class="show-mobile"><br>
				<span class="right-box btn-animation-type-1 show-mobile"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
			</div>
			<span class="right-box btn-animation-type-1 show-desktop"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
	</div>
</div>

<h2>Loan Amortization Table</h2>


<div class="col-xs-12 col-md-8">

<p>Most banks offer car loans up to 85% of the on-road price or ex-showroom price of the car. Tip to borrowers - make a higher down payment to lower the cost of your car loan. Let&rsquo;s say the total price of your dream car is Rs.15 lakh and you have Rs.5 lakh to put as down payment, then a car loan of Rs.10 lakh can be used to pay the remainder of the cost.</p>
<p>To calculate the monthly cost of your car loan, use the free online EMI calculator. Enter the principal loan amount, loan tenure, interest rate and processing fee into the tool and click on the &lsquo;calculate&rsquo; button. You will get instant and accurate results in the form an amortisation table, a pie-chart, and a colorful bar graph.</p>
<p>The amortisation table represents the periodic repayment schedule of your car loan. It consists of the monthly EMIs, interest payments, and the outstanding dues after each EMI payments.</p> 
</div>
<div class="col-xs-12 col-md-4">  <div class="list-group-item list-group-meroon text-center">
<h3>Top Pages of EMI Calculator</h3>
														<ul>
<li><a title="EMI in Advance vs EMI in Arrears" href="/finance-tools/emi-calculator/emi-in-advance-vs-emi-in-arrears.html">EMI in Advance vs EMI in Arrears</a></li>
<li><a title="Impact of RBI Rate Cut on Loan EMI" href="/finance-tools/emi-calculator/impact-of-rbi-rate-cut-on-loan-emi.html">Impact of RBI Rate Cut on Loan EMI</a></li>
<li><a title="Who Benefits when the RBI cuts rates" href="/finance-tools/emi-calculator/who-benefits-when-rbi-cuts-rates.html">Who Benefits when the RBI cuts rates</a></li>
<li><a title="Repo Rate vs Bank Rate" href="/finance-tools/emi-calculator/repo-rate-vs-bank-rate.html">Repo Rate vs Bank Rate</a></li>
<li><a title="5 Things know about New Loan Rate" href="/finance-tools/emi-calculator/top-5-things-to-know-about-new-loan-rate.html">5 Things know about New Loan Rate</a></li>
</ul>
<div class="clearfix"></div>  
																		</div></div>	
<p>Here is an example to better understand the amortisation table:</p>
<p><strong>Car Loan Amount</strong> - Rs.10 lakh</p>
<p><strong>Car Loan Tenure</strong> - 7 years</p>
<p><strong>Car Loan Interest Rate</strong> - 12%</p>
<p><strong>Processing Fee</strong> - 2%</p>
<p>Based in the EMI formula, E = P x r x (1+r)^n/((1+r)^n &ndash; 1), the overall breakup of the total amount payable is as follows:</p>
<p><strong>Monthly Car Loan EMI</strong> - Rs.17,653</p>
<p><strong>Total Interest Due</strong> - Rs.4,82,830</p>
<p><strong>Processing Fee</strong> - Rs.20,000</p>
<p><strong>Total Amount Payable</strong> - Rs.15,02,830</p>
<p>Your car loan repayment schedule in regular instalments over 7 years (2018 to 2024) is represented in the below-listed amortisation table:</p>

<div class="hungry-table nb-table">
<table class="table table-bordered table-striped col-md-12">
<thead>
<tr> 
<th>Year</th>
<th>Principal Paid</th>
<th>Interest Paid</th>
<th>Total Payment (Principal + Interest)</th>
<th>Outstanding Loan Balance</th>
</tr>
</thead> 
<tbody><tr>
<tr>
<td>2018</td>
<td>Rs.97,057</td>
<td>Rs.1,14,776</td>
<td>Rs.2,11,833</td>
<td>Rs.9,02,944</td>
</tr>
<tr>
<td>2019</td>
<td>Rs.1,09,365</td>
<td>Rs.1,02,467</td>
<td>Rs.2,11,832</td>
<td>Rs.7,93,579</td>
</tr>
<tr>
<td>2020</td>
<td>Rs.1,23,235</td>
<td>Rs.88,597</td>
<td>Rs.2,11,832</td>
<td>Rs.6,70,344</td>
</tr>
<tr>
<td>2021</td>
<td>Rs.1,38,865</td>
<td>Rs.72,969</td>
<td>Rs.2,11,834</td>
<td>Rs.5,31,480</td>
</tr>
<tr>
<td>2022</td>
<td>Rs.1,56,476</td>
<td>Rs.55,358</td>
<td>Rs.2,11,834</td>
<td>Rs.3,75,004</td>
</tr>
<tr>
<td>2023</td>
<td>Rs.1,76,322</td>
<td>Rs.35,514</td>
<td>Rs.2,11,836</td>
<td>Rs.1,98,683</td>
</tr>
<tr>
<td>2024</td>
<td>Rs.1,98,685</td>
<td>Rs.13,151</td>
<td>Rs.2,11,836</td>
<td>Rs.0</td>

</tr>
</tbody>
</table>
</div>

<h2>How to Use Bank Bazaar's EMI Calculator?</h2> 
<p>Using this calculator is very easy. All you need are the following loan details:</p>
<ul>
<li>Loan amount - this is the amount you need to borrow<br />Interest rate - the interest rate for the chosen loan scheme</li>
<li>Tenure - the loan period</li>
<li>Processing Fee (if any) - the amount charged by the lender to process the loan</li>
</ul>
<p><em>(If you don&rsquo;t have this information at hand, you can obtain it navigating to your chosen bank&rsquo;s loan page under the section &lsquo;Select a product to begin&rsquo;, featured under the calculator)</em>.Once, you have these details, use the sliders to set the required parameters for the loan amount and tenure. Then, input the interest rate and processing fee in the relevant boxes.....and Voila!</p>
<p>The loan EMI calculator will instantly reveal your monthly EMI amount payable on the loan!</p>
<p>It will also provide a clear, graphic and tabular break-up of your loan repayments, using the EMI so calculated. In addition an amortization table is created which gives you a detailed overview of your repayment schedule. A cut above the rest, BankBazaar&rsquo;s EMI Calculator delivers more than you expect.</p>
<style scoped="">
.full-width-banner{width:100%;background:#34495E;border-radius:6px}
.link-cta-btn-1.bg-pickled-blue.ct-web-banner{padding: 4px 14px;margin: 0 auto;text-align: center;}
.ct-web-banner span{color:#fff;    font-size: 20px;}
.cta-section .ct-web-banner span a{background: #ff5a5f; border: none; font-size: 20px; line-height: 1.3; padding: 6px 20px;position: relative;overflow: hidden;display: block;color:#fff;text-align:center;border-radius:4px}
.cta-section .ct-web-banner img{display: inline-block; bottom: -4px; position: relative;width:55px}
.cta-section .ct-web-banner .text-section{max-width: 580px;padding: 0 15px;display: inline-block; vertical-align: middle;text-align:left}
.cta-section .ct-web-banner .highlight-text{line-height:normal;color: #ffec4e; font-size: 31px; font-weight: bold;}
.bg-pickled-blue.ct-web-banner .show-mobile{display:none}
.bg-pickled-blue.ct-web-banner .show-desktop{display:inline-block}
@media only screen and (max-width: 1024px){
.cta-section .ct-web-banner .highlight-text{font-size:28px}
.ct-web-banner span{font-size:12px}
}
@media only screen and (max-width: 767px){
.bg-pickled-blue.ct-web-banner{width:100%}
.cta-section .ct-web-banner img {width:75px;}
.cta-section .ct-web-banner .text-section {width:185px;line-height: normal;text-align:center;padding:0}
.ct-web-banner span{line-height:normal;font-size:12px}
.cta-section .ct-web-banner .highlight-text{font-size:16px}
.bg-pickled-blue.ct-web-banner .show-mobile{display:inline-block}
.bg-pickled-blue.ct-web-banner .show-desktop{display:none}
.cta-section .ct-web-banner span a{margin: 0 auto !important; padding: 5px 5px; width: 120px; font-size: 12px !important;}
}
</style>


<div class="cta-section cta-section-1 full-width-banner">
	<div class="link-cta-btn link-cta-btn-1 bg-pickled-blue ct-web-banner">
		<img src="/images/india/infographic/ct-banner-mobile-v1.gif" alt="Credit Score" title="Credit Score">
			<div class="text-section">
				<span class="highlight-text"> A Credit Score that is more than 750 </span><br>
				<span>Keep it in your financial toolkit</span><br class="show-mobile"><br>
				<span class="right-box btn-animation-type-1 show-mobile"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
			</div>
			<span class="right-box btn-animation-type-1 show-desktop"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
	</div>
</div>
<h2>EMI Calculator To Suit Your Loan</h2>  
<p>BankBazaar has customised its EMI Calculator to suit different loan schemes. To calculate your EMIs on your personal loan, navigate to the Personal Loan EMI Calculator provided under the sites &lsquo;Financial Tools&rsquo; section. Similarly, you can calculate EMIs on your auto and home loans using BankBazaar&rsquo;s Car Loan EMI Calculator and BankBazaar&rsquo;s Home Loan EMI Calculator, respectively.</p>
<h2>Effect of loan prepayment on your EMI payments</h2>

<p>Should you find yourself flush with cash, you may decide to prepay your loan (i.e. pay an extra amount towards principal). If so, you can calculate your new EMIs by adjusting for the amount you wish to prepay. This will let you know how much interest you save by reducing the principal outstanding. (interest is calculated on the principal outstanding)</p>
<h2>Factors that can impact your EMI amount</h2>
<p>When you are planning to take a loan for your financial needs, you need to calculate the amount that you will have to pay through equated monthly installments (EMIs) in order to match with your repayment capability. For this, you will need to factor in the loan amount and rate of interest (ROI) along with the term of your loan. However, your equated monthly installments (EMIs) can be impacted for a number of reasons. Mentioned below are the scenarios when a loan EMI can change:</p>

<ul>
<li>
<strong>When the interest rate on the loan changes</strong> When you are checking your monthly amount, the EMI calculator usually calculates the EMI that you have to pay using a fixed interest rate. If your loan contains a fixed interest rate then your EMI will not be affected throughout the entire loan tenure. However, in case you have opted for a scheme with floating rate of interest, your applicable ROI is subject to change depending on the ongoing repo rate announced by the Reserve Bank of India (RBI). In such a scenario, the EMI for your loan can also get impacted - negatively or positively. If you don’t want a change in your EMI amount, you can ask the lender to adjust the term of the loan instead of the EMI.</li>
<li>
<strong>When the loan is partially repaid</strong> Most of the banks and non-banking financing companies offer the customers the benefit of making a lump sum prepayment towards their loans. Once you make a prepayment for a loan, the principal amount goes down. This, in turn, can reduce the outstanding debt that you will have to repay. Therefore, the EMI of your loan can see a decline. While you might need to pay additional charges in order to avail this facility or can be eligible to make a prepayment only after a certain amount of time, depending on the lender, many financing organisations also offer their customers the benefit of zero prepayment fee. Make sure to check the terms and conditions that your lender has regarding the prepayment facility.</li>
<li>
<strong>When you choose a flexible EMI scheme</strong> If you avail a loan with a flexible EMI scheme, you will have the benefit of paying a monthly installment amount that suits your income. In a step-up EMI plan, the EMI amounts gradually increase as the term of the loan progresses to stay in pace with your increasing salary. This scheme better suits individuals who are at the beginning of their careers. On the other hand, in case a person chooses a step-down EMI plan, the amount of the EMI that he or she has to pay will decrease with time. This scheme is helpful for people who are close to their retirements.</li>
<li>
<strong>When the term of the loan changes</strong> If a person manages to get his or her loan tenure extended or reduced, the EMI payable towards the loan will also increase or decrease accordingly in order to adjust to the new loan tenure. If you opt for a long tenure, you will have to pay more money towards interest in the long run. However, a shorter term of the loan will translate to less amount to be paid as interest. Therefore, a change in loan tenure should be done only with a thorough understanding of the aftereffects.</li>
</ul>


<h2>Pick a suitable loan tenure to save up on interest payments </h2> 

<p>Pick the most affordable loan by comparing EMIs for different loan tenures. This can be done by altering the loan period in the calculator; keeping the loan amount and interest rate the same. By lengthening the loan period for a chosen loan scheme, the EMI amount can be reduced. Using the calculator, you can quickly compare EMIs for different tenures and choose the one that most suits your budget.</p>

<style scoped="">
.full-width-banner{width:100%;background:#34495E;border-radius:6px}
.link-cta-btn-1.bg-pickled-blue.ct-web-banner{padding: 4px 14px;margin: 0 auto;text-align: center;}
.ct-web-banner span{color:#fff;    font-size: 20px;}
.cta-section .ct-web-banner span a{background: #ff5a5f; border: none; font-size: 20px; line-height: 1.3; padding: 6px 20px;position: relative;overflow: hidden;display: block;color:#fff;text-align:center;border-radius:4px}
.cta-section .ct-web-banner img{display: inline-block; bottom: -4px; position: relative;width:55px}
.cta-section .ct-web-banner .text-section{max-width: 580px;padding: 0 15px;display: inline-block; vertical-align: middle;text-align:left}
.cta-section .ct-web-banner .highlight-text{line-height:normal;color: #ffec4e; font-size: 31px; font-weight: bold;}
.bg-pickled-blue.ct-web-banner .show-mobile{display:none}
.bg-pickled-blue.ct-web-banner .show-desktop{display:inline-block}
@media only screen and (max-width: 1024px){
.cta-section .ct-web-banner .highlight-text{font-size:28px}
.ct-web-banner span{font-size:12px}
}
@media only screen and (max-width: 767px){
.bg-pickled-blue.ct-web-banner{width:100%}
.cta-section .ct-web-banner img {width:75px;}
.cta-section .ct-web-banner .text-section {width:185px;line-height: normal;text-align:center;padding:0}
.ct-web-banner span{line-height:normal;font-size:12px}
.cta-section .ct-web-banner .highlight-text{font-size:16px}
.bg-pickled-blue.ct-web-banner .show-mobile{display:inline-block}
.bg-pickled-blue.ct-web-banner .show-desktop{display:none}
.cta-section .ct-web-banner span a{margin: 0 auto !important; padding: 5px 5px; width: 120px; font-size: 12px !important;}
}
</style>
<div class="cta-section cta-section-1 full-width-banner">
	<div class="link-cta-btn link-cta-btn-1 bg-pickled-blue ct-web-banner">
		<img src="/images/india/infographic/ct-banner-mobile-v1.gif" alt="Credit Score" title="Credit Score">
			<div class="text-section">
				<span class="highlight-text"> Banks love a 750+ Credit Score! </span><br>
				<span>What's yours?</span><br class="show-mobile"><br>
				<span class="right-box btn-animation-type-1 show-mobile"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
			</div>
			<span class="right-box btn-animation-type-1 show-desktop"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
	</div>
</div>

<h2>Calculate loan EMIs for fixed and floating interest rates </h2>
<p>Understand loan repayment schedules by altering the interest rate, keeping loan amount and tenure the same. In case of fixed rate loans, interest rates remain constant over the loan tenure. In this case, EMIs also remain constant. This is usually the case with car loans and personal loans.However, in case of floating rate loans, interest rates can vary with movements in market rates. In this case, EMIs will change. This is particularly beneficial for home loans.Input the new interest rate in BankBazaar&rsquo;s EMI Loan Calculator to compare EMIs before interest rate changes and after. A new amortization schedule is also generated to reflect changes in EMIs.</p>
<h3>EMI Calculator for Flat Rate of Interest</h3>
<p>A fixed rate of interest is one where the interest rate on a loan remains fixed throughout the loan repayment period (loan tenure). This type of interest rate is comparatively higher than a floating rate of interest. Fixed rate of interest is better for those who don't prefer the risk of fluctuation that is an integral part of a variable interest rate. In the case of a fixed rate of interest, the loan EMI remains the same throughout the loan tenure.</p>
<p>The online loan EMI calculator can be used to calculate loan EMIs with a fixed rate of interest. Depending on the results, the borrower can carefully plan his or her monthly budget in order to maintain a low debt-to-income ratio. All one has to do is enter the loan amount, loan tenure, and fixed rate of interest rate into the tool and click on the &lsquo;calculate&rsquo; button to get instant and accurate results. If there is a processing fee charged by the bank, enter the processing fee into the too. If you want to prepay your loan before the end of its loan tenure, you can enter the prepayment amount into the tool to get a revised amortization schedule. Banks charge a prepayment penalty for loans with a fixed rate of interest.</p>
<h3>EMI Calculator for Floating Interest Rate</h3>
<p>Floating rate of interest changes depending on the market-lending rate. It is also known as variable rate of interest. If the lending rate increases, the floating interest rate will also increase. Due to the risk of fluctuation, the floating rate of interest is usually lower than the fixed rate of interest. With a floating rate of interest for a specified loan tenure, you can either expect your EMI to reduce or increase depending on the rise in the interest rate.</p>
<p>When there is an increase in the floating rate of interest on your home loan, the bank will give you the option to either increase your EMI and keep the same loan tenure or to keep your EMI the same and increase the loan tenure. If your loan tenure reaches the upper limit, then the bank will give you the option to prepay a part of your loan. Using a home loan EMI calculator for various combinations of loan tenure and interest rates can help you make a smart decision with regards to loan repayment. Some banks may waive off the prepayment penalty fee for loans with a floating rate of interest.</p>
<h2>Types of EMI calculator</h2>

<h3 class="how-to-use-title"><a href="/home-loan-emi-calculator.html">Home loan EMI calculator</a></h3>

<p>The home loan EMI calculator comes packed with features that can range from the obvious to the not so obvious. It, obviously, shows the exact EMI that will be payable every month for a specific amount borrowed and a specific tenure. The feature that are not so obvious is the fact that this calculator can also provide the facility to include planned pre-payments towards the home loan. This means that when the calculator shows you the instalments payable, it has already accounted for prepayments and has also included them when showing the breakup of the expenses. The detailed break up will include the amount borrowed, the interest payable, the amount you will pay through prepayment, the processing fee and the fee for prepayment.</p>

<h3 class="how-to-use-title"><a href="/car-loan-emi-calculator.html"> Car loan EMI Calculator </a></h3>

<p>The car loan calculator is a tool that can be used to calculate the exact amount that you will have to pay on a monthly basis when you decide to take a car loan. This calculator too will collect information related to the amount you wish to borrow, the interest rates, the processing fee and the tenure of the loan and provide you with the amount that you will pay every month. Down payments for the vehicle don&rsquo;t have to be considered when using this calculator and it too comes with the breakup of the expenses and the amortisation table.</p>

<h3 class="how-to-use-title"><a href="/finance-tools/personal-loan-emi-calculator.html"> Personal loan EMI calculator </a></h3>
<p>The personal loan EMI calculator is the ideal tool for deciding how much you can afford to pay back since it is specific to personal loans. It too collects details of how much you wish to borrow, the duration, interest rates and the processing fee for the loan. It can also be customised to take into account any prepayments that you intend to make before telling you the EMI that you will have to pay.</p>
<h3 class="how-to-use-title">Business Loan EMI Calculator</h3>
<p>Business loans like any other type of loans are repaid through equated monthly installments over a specified period of time. Here again, carrying out manual EMI calculation can be time-consuming and prone to human errors. Therefore, it is advisable to use an online business loan EMI calculator that is available on the bank website or a reliable third-party website. The tool can be used any number of times for free. It is not only simple and easy to use but also instant and accurate in terms of results. One major advantage of using a business loan EMI calculator is the flexibility to try out different combinations of loan tenure, loan amount, and interest rate in order to save money on interest payments. Business Loan EMI is calculated using the below formula:</p>
<p>E = P*r* (1+r)^n/([(1+r)^n]-1), where E is the equated monthly installment, P is the principal loan amount, r is the interest rate, and n is the loan tenure.</p>
<p>Enter the business loan amount, interest rate, and loan tenure into the tool and click on the &lsquo;Calculate&rsquo; button. You will get an amortization table which represents your periodic loan repayment schedule. The table will consist of the EMIs, outstanding dues after each EMI payment, and interest payment. Using the business loan EMI calculator, you can pick a suitable loan tenure and a loan amount within your repayment capacity. Sometimes, borrowers choose to prepay a part of the loan amount before the end of the tenure in order to reduce the repayment period or the interest payment. The EMI calculator can also be used to get a revised loan repayment schedule that includes business loan prepayment.</p>
<h3 class="how-to-use-title">Simple Interest Loan EMI Calculator</h3>
<p>A simple interest loan EMI calculator can help you calculate the simple interest on a given loan amount for a specified loan tenure at the applied rate of interest. The tool is simple and easy to use. All you have to do is input the borrowed amount, the simple interest rate, and the loan tenure into the tool. Click on the &lsquo;calculate&rsquo; button to get instant and accurate results. For example, if you borrow a loan of Rs.3 lakh for 3 years at a simple interest rate of 3% p.a., you have to pay a simple interest of Rs.27,000 which is Rs.750 per month.</p>
 <h2>EMI Calculator in Excel</h2>

<p>Apart from the online calculators, EMI calculators can also be configured in an Excel sheet. To do this you will need to know the formula that makes an EMI calculator works and also how to use formulae in excel sheets. The one disadvantage of the excel sheet calculator is that you need to know how to configure it and also need to input the interest rate after calculating the monthly rates. It also does not take into account the processing fee. By contrast, the online EMI calculator can take the interest rates as annual rates and convert them to monthly rates on its own. It can also include the processing fee and other smaller features like prepayments.</p>
<div class="col-md-12 list-group-item list-group-marzipan text-center">

<h2>How to calculate your EMI using Excel</h2>
<p>Calculating the EMI for your loan is crucial to determine whether it matches your repayment capability or not. Applying for a loan that exceeds your ability to repay the debt can lead to the rejection of your application. If you apply for a loan wherein the EMI is equal to your maximum repayment ability, your chances of defaulting severely increases. In case you are not able to check your EMI using an online EMI calculator, you can also do the same using an Excel spreadsheet. All you need to do is use the PMT function to calculate your monthly installments. The syntax for the excel function is:</p>
<p>PMT (rate, nper, pv)</p>
<p>Here,</p>
<p><em><strong>pv = The principal amount or the present value</strong></em></p>
<p><em><strong>rate = The fixed rate of interest at which the loan is borrowed</strong></em></p>
<p><em><strong>nper = The number of payments to be made to repay the entire debt</strong></em></p></div>
<h2>How Are EMIs Calculated?</h2> 

<p>The mathematical formula for calculating EMI = [P x R x (1+R) ^n] / [(1+R)^ n-1]. (P is the principal loan amount, R rate of interest per month and N is the the number of monthly instalments). Manual calculations are too complicated to perform accurately, which is why many borrowers are left confused after availing a loan. Understanding this pain-point led BankBazaar to develop one of the easiest and most user-friendly online Loan EMI Calculators.</p>



</div></div>
<div class="container">  
<div class="accordion-one panel-group">    
<div class="panel panel-default">      
<div class="panel-heading">        
<h2 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent=".accordion-one" href="javascript:void(0)" data-target=".collapseOne"> <span class="glyphicon glyphicon-minus"></span>FAQ's About EMI Calculator</a> </h2>      
</div>      

<div class="collapseOne panel-collapse collapse in">        
<div class="panel-body">
<div class="how-to-use-inner">

<h3 class="how-to-use-title">Q. Are the calculators for home, car and personal loans the same?</h3>
<p>A. In most cases they can be the same since all three loans work off the same basic set of information like amount borrowed, prepayments, tenure, interest rates and processing fee however with some calculators there could be a restriction placed on the amount to borrow based on the type of loan.</p>

<h3 class="how-to-use-title">Q. Are calculators more accurate than excel sheets?</h3>
<p>A. The only difference between the two is that with a calculator, it is a ready to use tool whereas with an excel sheet, you may have to program the calculator before you start using it. Such programing can be a little tedious and complicated, especially if you are not very comfortable with the software which makes the calculator the preferred choice.</p>

<h3 class="how-to-use-title">Q. Will banks provide the calculator?</h3>
<p>A. Yes. These days most, if not all, banks have calculators, specific to various loans, available on their websites.</p>

<h3 class="how-to-use-title">Q. Why should I use an EMI calculator?</h3>
<p>A. The simplest answer is that it&rsquo;s fast and it&rsquo;s convenient. This means that you can do multiple calculations in minutes where such calculations many take longer were you to sit down with a pen and paper. These calculators are also super accurate so it eliminates the possibility of errors in calculations, provided you provide accurate data.</p>

<h3 class="how-to-use-title">Q. Is the EMI shown by the calculator the same as that which the bank will ask me to pay?</h3>
<p>A. When it comes to the EMI, assuming that the bank will approve the amount and tenure, the exact EMI that you will have to pay may differ slightly since there is a chance that things like the interest rates and the processing fee may be a bit different from what you used while calculating the EMI.</p>
<h3 class="how-to-use-title">Q. What happens if I fail to make an EMI payment?</h3>
<p>The bank will charge a penalty fee if a borrower misses an EMI payment. A missed or delayed EMI payment will reflect on your credit report. Not making loan EMI payments on time can have a negative effect on your credit score.</p>

<h3 class="how-to-use-title">Q. I have taken a personal loan of Rs.5 lakh for 5 years at 12.50% interest rate. What will be my monthly EMI?</h3>
<p>Enter the loan amount, loan tenure, and interest rate into the personal loan EMI calculator and click on &lsquo;Calculate&rsquo;. The result is as follows - your monthly loan EMI is Rs.11,249. The total cost of your personal loan is Rs.6,74,938 where Rs.5 lakh is the principal loan amount and the total interest payment is Rs.1,74,938.</p>

<h3 class="how-to-use-title">Q. Is my loan EMI fixed or can it change over the loan tenure?</h3>
<p>In the case of a business loan and home loan, banks offer floating rate of interest. Therefore, your loan EMI may change with the change in interest rate. Some banks allow you keep the EMI constant while increasing the loan tenure. Loan prepayment can also change your EMI. Banks will give you the option to either keep the EMI constant and decrease the loan tenure or reduce the EMI and keep the loan tenure the same.</p>

<h3 class="how-to-use-title">Q. Why is it important to carry out loan EMI calculations beforehand?</h3>
<p>Calculating the EMI before applying for a loan will help you choose a suitable loan amount and loan tenure. Based on the EMI calculation, you can adjust the loan amount and loan tenure to keep the total cost of your loan within your repayment capacity. You can also decide whether you want to prepay the loan without risking a higher interest payment.</p>

<h3 class="how-to-use-title">Q. Is it good to pre-close a loan before the end of its tenure?</h3>
<p>Pre-closing your loan before the end of its tenure can have a negative effect on your credit score. Making timely EMI payments can help you improve your credit score. Therefore, opt to prepay a part of your loan (not the whole loan) and reduce the loan tenure to save up on interest payments. Banks charge a penalty fee for prepayment.</p>
</div>

</div>      </div>    </div>  </div>
</div><style scoped="">
.full-width-banner{width:100%;background:#34495E;border-radius:6px}
.link-cta-btn-1.bg-pickled-blue.ct-web-banner{padding: 4px 14px;margin: 0 auto;text-align: center;}
.ct-web-banner span{color:#fff;    font-size: 20px;}
.cta-section .ct-web-banner span a{background: #ff5a5f; border: none; font-size: 20px; line-height: 1.3; padding: 6px 20px;position: relative;overflow: hidden;display: block;color:#fff;text-align:center;border-radius:4px}
.cta-section .ct-web-banner img{display: inline-block; bottom: -4px; position: relative;width:55px}
.cta-section .ct-web-banner .text-section{max-width: 580px;padding: 0 15px;display: inline-block; vertical-align: middle;text-align:left}
.cta-section .ct-web-banner .highlight-text{line-height:normal;color: #ffec4e; font-size: 31px; font-weight: bold;}
.bg-pickled-blue.ct-web-banner .show-mobile{display:none}
.bg-pickled-blue.ct-web-banner .show-desktop{display:inline-block}
@media only screen and (max-width: 1024px){
.cta-section .ct-web-banner .highlight-text{font-size:28px}
.ct-web-banner span{font-size:12px}
}
@media only screen and (max-width: 767px){
.bg-pickled-blue.ct-web-banner{width:100%}
.cta-section .ct-web-banner img {width:75px;}
.cta-section .ct-web-banner .text-section {width:185px;line-height: normal;text-align:center;padding:0}
.ct-web-banner span{line-height:normal;font-size:12px}
.cta-section .ct-web-banner .highlight-text{font-size:16px}
.bg-pickled-blue.ct-web-banner .show-mobile{display:inline-block}
.bg-pickled-blue.ct-web-banner .show-desktop{display:none}
.cta-section .ct-web-banner span a{margin: 0 auto !important; padding: 5px 5px; width: 120px; font-size: 12px !important;}
}
</style>

<div class="cta-section cta-section-1 full-width-banner">
	<div class="link-cta-btn link-cta-btn-1 bg-pickled-blue ct-web-banner">
		<img src="/images/india/infographic/ct-banner-mobile-v1.gif" alt="Credit Score" title="Credit Score">
			<div class="text-section">
				<span class="highlight-text"> Great news! FREE Experian Credit Score! </span><br>
				<span>Check it in less than 3 minutes!</span><br class="show-mobile"><br>
				<span class="right-box btn-animation-type-1 show-mobile"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
			</div>
			<span class="right-box btn-animation-type-1 show-desktop"><a href="http://bbzr.co/2udzt61">Get FREE<br>Credit Score</a></span>
	</div>
</div></div>

    <div class="previous-section-indicator" id="how-to-use-arrow-down"><img data-original="/images/tools/cl-prev-indic-arw.png" src="" class="lazy" alt="Down Arrow"/>
</div>

    <div class="further-reading">
            <div class="further-reading">
        <div class="container"> 
        <h2 class="section-title">Further Reading about EMI Calculator</h2> 
        <p class="sub-title">Top picks from our Financial Expert </p> 
        <div class="container2"> 
            <div id="demo"> 
                <div class="container1"> 
                    <div class="row"> 
                        <div class="span12"> 
                            <div id="owl-demo" class="owl-carousel"> 
                                <div class="item"> 
                                    <div class="blog"> <a href="javascript:void(0)" title="Calculate Loan Repayment" data-target="#modal1" data-toggle="modal"><img  data-original="/images/india/infographic/calculate-your-loan-repayment.png" src=""  alt="Calculate Loan Repayment" class="lazy"></a> 
                                        <div class="blog-text"> 
                                            <div class="blog-title"><a href="javascript:void(0)" title="blog" data-target="#modal1" data-toggle="modal">Calculate your loan Repayment with an Online EMI Calculator</a></div> 
                                            <p>The most common thing everyone asks when they avail a loan is “What are EMIs? How do I know how much...</p> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="item"> 
                                    <div class="blog"> <a href="javascript:void(0)" title="Formula to Calculate EMI" data-target="#modal2" data-toggle="modal"><img  data-original="/images/india/infographic/emi-calculation-formula.png" src="" alt="Formula to Calculate EMI" class="lazy"></a> 
                                        <div class="blog-text"> 
                                            <div class="blog-title"><a href="javascript:void(0)" title="blog" data-target="#modal2" data-toggle="modal">What is the formula to Calculate EMI for Loans?</a></div> 
                                            <p> Most of us do not know how loan EMIs are calculated. Yet, we make payments as per the repayment schedule...</p> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="item"> 
                                    <div class="blog"> <a href="javascript:void(0)" title="Pre EMI vs  Full EMI" data-target="#modal3" data-toggle="modal"><img  data-original="/images/india/infographic/pre-emi-vs-full-emi.png" src="" alt="Pre EMI vs  Full EMI" class="lazy"></a> 
                                        <div class="blog-text"> 
                                            <div class="blog-title"><a href="javascript:void(0)" title="blog" data-target="#modal3" data-toggle="modal">Pre-EMI or Full EMI? Which is a better option?</a></div> 
                                            <p> EMIs can be broadly classified as EMI during loan disbursal or EMI after you get the loan...</p> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="item"> 
                                    <div class="blog"><a href="javascript:void(0)"  title="Calculate EMI Using Excel" data-target="#modal4" data-toggle="modal"> <img  data-original="/images/india/infographic/emi-calculator-excel.png" src="" alt="Calculate EMI Using Excel" class="lazy"></a> 
                                        <div class="blog-text"> 
                                            <div class="blog-title"><a href="javascript:void(0)" title="blog link" data-target="#modal4" data-toggle="modal">How to calculate EMI for your Loans using an Excel?</a></div> 
                                            <p> Manoj Kumar, 29, a Bangalore-based MNC employee, fulfilled his dream of owning a new a car in 2010...</p> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="item"> 
                                    <div class="blog"> <a href="javascript:void(0)" title="Calculate HDFC Loan EMI Using Bankbazaar EMI Calculator" data-target="#modal5" data-toggle="modal"><img  data-original="/images/india/infographic/how-to-calculate-hdfc-loan-emi.png" src="" alt="Calculate HDFC Loan EMI Using Bankbazaar EMI Calculator" class="lazy"></a>
                                        <div class="blog-text"> 
                                            <div class="blog-title"><a href="javascript:void(0)" title="blog" data-target="#modal5" data-toggle="modal">How To Calculate Your HDFC Loan EMI Using BankBazaar.com's EMI Calculator</a></div> 
                                            <p> HDFC Bank offers various loan products meant for customers of different demographics...</p> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    <div id="modal1" class="bb-blog-modal modal fade"> 
                        <div class="modal-dialog"> 
                            <div class="modal-header clearfix"> 
                                <div class="popimg"><img data-original="/images/india/infographic/calculate-your-loan-repayment.png" src="" alt="Calculate Loan Repayment" title="Calculate Loan Repayment" class="lazy"></div> 
                                <div class="modeltit"><h3>Calculate your loan Repayment with an Online EMI Calculator</h3> </div> 
                                 
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                            </div> 
                            <div class="modal-body"> 
                             <p>The most common thing everyone asks when they avail a loan is “What are EMIs? How do I know how much I have to repay every month to clear my loan?”</p>
<p>Understanding EMIs and amortization tables is probably the most confusing part of the entire process of availing any kind of loan. The EMI, or Equated Monthly Instalment, is important because it signifies monthly outflows towards repayment of the loan.</p>
In order to calculate EMI for your loan, you should first understand its components:<br />
<h3>Components of an EMI</h3><br />
<u>Loan Amount:</u> This is the amount borrowed from the lender. As the loan amount increases, the EMIs to be paid also increases.<br />
<u>Loan period or tenure:</u> This is the duration within which the loan has to be repaid, inclusive of interest. EMIs can be adjusted by altering the loan period. By extending the loan period, the amount of EMIs payable can be reduced and vice-versa. While shortening the loan period results in higher monthly outflows, lengthening it results in a larger interest component. <br />
<u>Loan Interest Rates:</u> Interest rates can be either fixed or floating. Floating interest rates change according to fluctuations in market rates. Fixed rates remain unchanged for a considerable duration of the loan period or until maturity depending on the loan agreement.<br />
<h3>Calculating EMIs</h3>
<p>The formula consists of using the loan amount, interest rate and tenure of the loan (in months):  to find out your EMI (Equated Monthly Instalments)</p>
M = No of months to pay the loan<br />
I  = (loan interest rate per annum / 12) / 100 <br />
L  = Loan amount <br />
(Loan amount x Interest rate/12) x ((1+ interest rate/12) ^ loan tenure in number of months) / ([1+ interest rate/12) ^ loan tenure in number of months]-1)<br />
For example: A person has taken a loan of Rs. 5 lakhs from the lender with an interest rate of 12% for 10 years. <br />
In this case:<br />
M (Loan period in months) = No. of Years X 12 = 10 X 12 = 120<br />
I (Interest rate per year/ 12) = (12/100) / 12 = .01<br />
L (Loan amount) = Rs.5,00,000 <br />
<ul><li>EMI, to be paid is Rs. 7147</li>
<li>In the 10 years the total payment made by the person to the lender (EMI X Total tenure in months (7174 X 120) is Rs 8,60,880</li>
<li>The total interest rate will come around (Total payment – loan amount) Rs. 3,60,88</li></ul>

   
                            </div> 
                        </div> 
                    </div> 
                    <div id="modal2" class="bb-blog-modal modal fade"> 
                        <div class="modal-dialog"> 
                            <div class="modal-header clearfix"> 
                                <div class="popimg"><img data-original="/images/india/infographic/emi-calculation-formula.png" src="" alt="Formula to Calculate EMI" title="Formula to Calculate EMI" class="lazy"></div> 
                                <div class="modeltit"><h3>What is the formula to Calculate EMI for Loans?</h3></div> 

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                            </div> 
                            <div class="modal-body"> 
                              Most of us do not know how loan EMIs are calculated. Yet, we make payments as per the repayment schedule set out by our lenders, without checking its accuracy. <br />
Contrary to what most of us think, it is actually quite easy to calculate loan EMIs.  It is done using a simple formula.<br />
Data required to perform this calculation are the loan amount, monthly interest rates and the loan tenure in terms of months.<br />
<u>Example:</u><br />
Suresh takes a loan of Rs.1 lakh with an 11% p.a. He has to pay back the loan in 15 years. The formula to calculate loan EMIs is as follows:
(Loan amount x Interest/12) x [(1+ interest rate/12)^loan tenure in number of months] / ([(1+ interest rate/12) ^ loan tenure in number of months]-1}<br />
<u>Answer:</u><br />
EMI = (100000 x .00916) x ((1+.00916) ^180) / ([(1+.00916) ^180] – 1)<br />
EMI = Rs 1,136.<br />
Note: The rate of interest is 11 percent per year which is divided by 12 months to get the monthly interest which comes to = .00916

 
                            </div> 
                        </div> 
                    </div> 
                    <div id="modal3" class="bb-blog-modal modal fade"> 
                        <div class="modal-dialog"> 
                            <div class="modal-header clearfix"> 
                                <div class="popimg"><img data-original="/images/india/infographic/pre-emi-vs-full-emi.png" src="" alt="Pre EMI vs  Full EMI" title="Pre EMI vs  Full EMI" class="lazy"></div> 
                                <div class="modeltit"><h3>Pre-EMI or Full EMI? Which is a better option? </h3></div> 

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                            </div> 
                            <div class="modal-body"> 
 
EMIs can be broadly classified as EMI during loan disbursal or EMI after you get the loan.<br />
<h3>Pre-EMI</h3><br />
Pre-EMIs are payments made towards the interest component on a loan which is being disbursed in parts. 
<p>For example: You avail a home loan of Rs.5 lakhs and the bank disburses the loan in instalments of Rs.1 lakh each at each stage of completion of the house being funded. Once the first instalment is disbursed i.e.Rs.1 lakh, the borrower begins making interest payments. Pre-EMIs do not reduce the principal component of the loan amount.. </p>
<h3>Advantages of Pre-EMIs</h3>
<ul><li>The actual EMIs due will be less the entire loan amount has been disbursed.</li>
<li>This is an economical alternative to paying total EMIs i.e. interest + principal. Pre-EMI payments are lower comprising only interest payments.</li></ul>
<h3>Disadvantages of Pre-EMIs</h3>
<ul><li>Longer loan tenures as principal repayments begin only after the entire loan amount has been disbursed. This leads to higher interest charges.</li></ul>
<h3>Full EMI</h3>
<p>Here, EMIs i.e. interest + principal are repaid only once the entire loan amount is disbursed.</p>
<h3>Advantages of Full EMIs</h3>
<ul><li>No payments required until the entire loan is disbursed</li>
<li>Loan periods are shorter compared to Pre-EMI options.</li>
<li>Income tax rebates are higher, given higher EMI payments as compared to Pre-EMI options.</li>
<li>The total loan amount outstanding reduces from the first EMI since payments made go towards reducing the principal and thereby the interest due.</li></ul>
<h3>Disadvantages of Full EMIs</h3>
<ul><li>EMIs remain the same throughout the loan tenure</li>
<li>Higher EMIs as compared to Pre-EMI options which results in lower personal disposable income.</li></ul>
<h3>Pre EMI or Full EMI? The choice is yours.</h3>
<p>If you plan to sell the house, or are expecting large income inflows orare anticipating higher returns from the property funded by the loan, it is better to opt for Pre-EMIs. However, if you are not sure and do not want to take any undue  risks, Full EMIs are a better option. </p>




                         </div> 
                        </div> 
                    </div> 
                    <div id="modal4" class="bb-blog-modal modal fade"> 
                        <div class="modal-dialog"> 
                            <div class="modal-header clearfix"> 
                                <div class="popimg"><img data-original="/images/india/infographic/emi-calculator-excel.png" src="" alt="Calculate EMI Using Excel" title="Calculate EMI Using Excel" class="lazy"></div> 
                                <div class="modeltit"><h3>How to calculate EMI for your Loans using an Excel? </h3></div> 

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                            </div> 
                            <div class="modal-body"> 
                             <p>Manoj Kumar, 29, a Bangalore-based MNC employee, fulfilled his dream of owning a new a car in 2010. He bought a car for about Rs 5.95 lakh. He managed to do this by availing a car loan. The down payment he was required to pay was Rs 1.5 lakh and the remaining amount was funded by his auto financier. The car loan interest rate was 12% p.a. and the loan tenure was set at four years. As per the terms of the agreement, he currently pays a monthly EMI of Rs. 11,700. Manoj goes by the payment schedule as set out by the bank. But, how does he verify the amounts payable as per the schedule? Is there any way he can reduce or increase the EMI based on his financial situation?</p><br />

<p>Calculating EMIs can be confusing and tedious. There are many borrowers who find it hard to understand EMI calculations and Manoj is no exception. Most borrowers are unsure whether they are paying the right amount as EMIs; in many cases, the lenders themselves may have erred in their calculations. </p>
<p>The irony of it all it that EMIs are not that hard to understand. Using MS Excel, a very popular tool used the world over, anyone can easily calculate the amounts due as EMIs.</p>


<h3>MICROSOFT EXCEL FOR EMI CALCULATION</h3>
<p>An Excel spreadsheet is a software specifically designed for mathematical calculations and performs calculations using a number of preset formulae. This makes it one of the most convenient tools to calculate and understand EMIs or repayment schedules. </p>

<h3>STEPS TO CALCULATE LOAN EMIs USING EXCEL</h3>
<p>To<u> calculate loan EMIs </u>using Excel, you have to use the function ‘PMT’ . You will need to know the rate of interest (rate), the tenure of your loan (nper) and, the value of the loan or present value (PV).

Apply this to the formula:
=PMT(rate,nper,pv).</p>

<u>Example:</u><br />
Let us consider Manoj’s case and calculate the EMIs on his loan using an Excel sheet.<br /> 

Note that the rate of interest for calculating the EMI on your loan must be the monthly interest rate
In Manoj’s case it is 12%/12=1% or 0.01.<br />

The tenure of the loan has to  be considered in terms of the total number of months<br />
In Manoj’s case it is 4 yrs. and 12 months  = 48 months or 48 EMIs.<br />
Applying this data in the formula<br />
=PMT(0.12/12, 4*12, 445,000)= 11,718<br />

The result is displayed as a negative value.  This is the amount to be paid as EMI.<br />

<h3>ADJUSTING PAYMENT FREQUENCIES</h3>
<p>If you were to choose a different frequency, say a quarterly payment schedule as opposed to monthly payments, all you would have to do is factor this into the formula to get the desired results.</p>
<u>Example:</u> <br />
Consider quarterly installments for a loan of Rs 10 lakh at 10% interest p.a. for a loan period of 20 years. <br />
In this case, the interest rate and loan period will not be considered in terms of the total number of months but in the total number of quarters. <br />
Interest rate = 10%/4 <br />
Loan period = 20 years * 4 quarters per year = 80  equated instalments<br />
Apply this data to the formula as described above and the quarterly payments due over the loan period will be displayed.<br />

<p>Its really as simple as plugging in data and receiving results, completely eliminating confusion and anomalies. This not only helps you as a borrower in choosing the right loan plan but also helps you adjust your EMIs according to your financial situation.  </p>











   
                            </div> 
                        </div> 
                    </div> 
                    <div id="modal5" class="bb-blog-modal modal fade"> 
                        <div class="modal-dialog"> 
                            <div class="modal-header clearfix"> 
                                <div class="popimg"><img data-original="/images/india/infographic/how-to-calculate-hdfc-loan-emi.png" src="" alt="Calculate HDFC Loan EMI Using Bankbazaar EMI Calculator" title="Calculate HDFC Loan EMI Using Bankbazaar EMI Calculator" class="lazy"></div> 
                                <div class="modeltit"><h3>How To Calculate Your HDFC Loan EMI Using BankBazaar.com's EMI Calculator</h3></div> 
                                
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                            </div> 
                            <div class="modal-body"> 
                               <p>HDFC Bank offers various loan products meant for customers of different demographics and incomes. Calculating EMI on any of the loans can be done through a few simple clicks at BankBazaar which specializes in providing free financial services to customers and general visitors. </p><br />
<p>Availing loans can be a very tricky proposition if you don’t know the underlying details such as EMI amounts, interest rates, processing charges and amortization. You may be looking for a car loan, personal loan, or even a house loan, and the best place to begin your search starts from the Internet. </p><br />
<p>BankBazaar offers a dedicated EMI Calculator tool that will provide you with information regarding the loan break-up and amortization details. You can access this tool by following these steps:</p>
<ul>
<li>Open BankBazaar.com and scroll to the option titled ‘Financial Tools’ at the top right corner of the web page. </li>
<li>A drop-down menu will appear with two options – EMI Calculator and Finance Calculator. Scroll to the EMI Calculator tag. </li>
<li>Next, you will see three options under the EMI Calculator – Car Loan EMI Calculator, Home Loan EMI Calculator, and Personal Loan EMI Calculator. </li>
<li>Click on the option most relevant to your loan type. </li>
</ul>

<p>Once you select an option as detailed above, you will be taken to a new page with different dynamic fields. To use the HDFC Loan EMI Calculator, please follow the steps outlined below:</p>
<ul>
<li>Loan Amount: This field is represented by a scale. Move the pointer by dragging or clicking on the appropriate loan amount you are planning to borrow. </li>
<li>Tenure: This field is again denoted by a scale. Drag the pointer to relevant tenure value that you are planning to repay your loan in. </li>
<li>Interest Rate: Self-explanatory. The interest rate details for various loan products from HDFC Bank can be found at BankBazaar’s dedicated section on HDFC loans. You can also source the interest rate from the official website or by contacting the nearest HDFC Bank branch. This field will have a default value, so please change it before proceeding further. </li>
<li>Processing Fee: This fee varies from product-to-product. Once again, you can find these details at BankBazaar by navigating to HDFC loan pages. This field will also have a pre-defined value – you simply have to change it to the applicable values for your loan product. </li>
</ul>

<p>Once you are done with filling the details, click on ‘Calculate’. The results will appear just below the ‘Calculate’ button. The results are shown in terms of ‘Your Monthly Car/Home/Personal Loan EMI’, ‘Loan Break-up’ and ‘Amortization Details’. </p>
<p><strong>EMI Amount:</strong> The monthly amount you have to repay for your particular loan product, according to the details entered by you.</p><br />
<p><strong>Loan Break-up: </strong>  Loan Break-up section will show details such as the loan amount, total interest payable, processing fee, and the total repayable amount. The results are also shown aesthetically in graphical format.</p><br />
<p><strong>Amortization: </strong>  This result will show details of the amount to be paid at any point during the loan tenure such as principal paid, interest paid, outstanding balance, and total payment made.</p>

                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>


    </div> 


<div class="hungry-table nb-table">
<table class="table table-bordered table-striped col-md-12">
<thead>
<tr> 
<th colspan="5" class="table-header text-center"><strong>EMI Calculator Related Articles</strong></th>
</tr>
</thead> 
<tbody><tr>
<td><a title="Simple ways to Reduce your Loan EMI" href="/finance-tools/emi-calculator/simple-ways-to-reduce-your-loan-emi.html">Simple ways to Reduce your Loan EMI</a></td>
<td><a title="Tax Benefits on Pre-EMI" href="/finance-tools/emi-calculator/tax-benefits-on-pre-emi.html">Tax Benefits on Pre-EMI</a></td>
<td><a title="Fixed vs Floating Interest Rate" href="/finance-tools/emi-calculator/fixed-vs-floating-interest-rate.html">Fixed vs Floating Interest Rate</a></td>
<td><a title="Method of EMI Calculation on Excel" href="/finance-tools/emi-calculator/method-of-emi-calculation-on-excel.html">Method of EMI Calculation on Excel</a></td>
  <td><a title="Tips to Reduce your Interest Burden while Repaying Home Loan" href="/finance-tools/emi-calculator/tips-to-reduce-your-interest-burden-while-repaying-home-loan.html">Tips to Reduce your Interest Burden while Repaying Home Loan</a></td>
</tr> 
<tr>
<td><a title="EMI at Point of Sale Through Credit Card" href="/finance-tools/emi-calculator/emi-at-point-of-sale-through-credit-card.html">EMI at Point of Sale Through Credit Card</a></td>
<td><a title="Why has RBI Banned the 0% EMI Scheme" href="/finance-tools/emi-calculator/why-rbi-ban-zero-percent-emi-scheme.html">Why has RBI Banned the 0% EMI Scheme</a></td>
<td><a title="How to Convert Purchases Into EMIs" href="/finance-tools/emi-calculator/how-to-convert-purchases-into-emis.html">How to Convert Purchases Into EMIs</a></td>
<td><a title="Fixed vs Reducing Balance Loan EMIs" href="/finance-tools/emi-calculator/fixed-vs-reducing-balance-loan-emi.html">Fixed vs Reducing Balance Loan EMIs</a></td>
  <td><a title="Top Banks Providing EMI Calculators" href="/finance-tools/emi-calculator/top-bank-providing-emi-calculator.html">Top Banks Providing EMI Calculators</a></td>
</tr>
  <tr>
<td><a title="Reducing Balance Loan Calculator" href="/finance-tools/emi-calculator/reducing-balance-loan-calculator.html">Reducing Balance Loan Calculator</a></td>
<td><a title="How to use Balance Transfer to Trim Loan EMI" href="/finance-tools/emi-calculator/how-to-use-balance-transfer-to-trim-loan-emi.html">How to use Balance Transfer to Trim Loan EMI</a></td>
<td><a title="Current RBI Bank Interest rates 2018" href="/finance-tools/emi-calculator/current-rbi-bank-interest-rates.html">Current RBI Bank Interest rates 2018</a></td>
<td><a title="Monetary Policy" href="/finance-tools/emi-calculator/monetary-policy.html">Monetary Policy</a></td>
    <td><a title="How to Plan Monthly EMIs So As to Not Let It Become a Strain On Your Finances" href="/finance-tools/emi-calculator/how-to-plan-monthly-emi-and-manage-finances.html">How to Plan Monthly EMIs So As to Not Let It Become a Strain On Your Finances</a></td>
    <tr>
<td><a title="Repo Rate vs MSF" href="/finance-tools/emi-calculator/repo-rate-vs-msf.html">Repo Rate vs MSF</a></td>
<td><a title="Repo Rate vs Reverse Repo Rate" href="/finance-tools/emi-calculator/repo-rate-vs-reverse-repo-rate.html">Repo Rate vs Reverse Repo Rate</a></td>
<td><a title="Relationship between Repo Rate and EMI" href="/finance-tools/emi-calculator/relation-between-repo-rate-and-emi.html">Relationship between Repo Rate and EMI</a></td>
<td><a title="Factors to Consider Before Choosing the Pre-EMI Option" href="/finance-tools/emi-calculator/factors-to-consider-before-choosing-the-pre-emi-option.html">Factors to Consider Before Choosing the Pre-EMI Option</a></td>
      <td><a title="Difference Between Pre-EMI and Full EMI Repayment Schemes for Home Loan" href="/finance-tools/emi-calculator/difference-between-pre-emi-and-full-emi-repayment-schemes-for-home-loan.html">Difference Between Pre-EMI and Full EMI Repayment Schemes for Home Loan</a></td>

</tr>
</tbody>
</table>
</div>

<h2 class="tcenter">News About EMI Calculator</h2>

<div class="row news-widget">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="container">



<ul>
<li class="news-green"> <h3 class="news-head">Launch of overdraft facility for micro enterprises by Ujjivan Small Finance Bank</h3>
<p>Ujjivan Small Financial Services Ltd. has announced the launch of the overdraft facility for customers from the small and micro enterprises domain across all its branches in India. This will be an add-on product for the MSE term loan that is already offered by the bank.</p>
<p>The overdraft facility is provided to all micro and small enterprises that have a turnover of Rs.50 lakh or above. The rate of interest offered is also competitive. The interest rate is for a time period of 1 year and the credit limit is between Rs.11 lakh and Rs.50 lakh with the provision for annual renewals. The EMI payment is made only on the utilised amount and this amount may be repaid at any time during the tenure. This helps MSE customers manage their cash flows in a more efficient and smart manner.</p>

<p>Ujjivan SFB also provides composite loans in which the overdraft facility may be combined with existing MSE term loans. This is useful for customers as it helps in managing their short-term and long-term business needs.</p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 28 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>

<li class="news-green"> <h3 class="news-head">Bandhan bank enters race for PNB Housing</h3>
<p>Bandhan Bank, a private sector lender based in Kolkata is the latest to join looking to buy a controlling stake in Punjab National Bank Housing Finance Limited. According to some sources, it is expected that Bandhan will submit an Expression of Interest for PNB Housing Finance in the coming days. With the interest of forming a consortium, Bandhan has already reached out to some global financial institutions like the GIC of Singapore and some sovereign wealth funds. GIC, Singapore’s investment company is looking at a PE-led consortium. It may soon be choosing between a fund lend alliance or backing a strategic group. Bandhan will be making either a pure cash bid or a combination of cash and stock bid.</p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 24 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>

<li class="news-green"> <h3 class="news-head">Reserve Bank asks rating firms to review the bank details of companies</h3>
<p>The Reserve Bank of India (RBI) has asked rating firms to review the bank accounts of companies to capture the flow of funds. This is to assess the ability of a company to repay loans.</p>
<p>It is understood that several companies would not be willing to reveal these details under normal circumstances. However, when a rating agency tracks this data on money flow, it will be in a good position to highlight the movement of funds through subsidiaries or other stakeholders.</p>

<p>If there is any suspicious movement of funds, the company could come under the scanner and its cost of borrowing from banks would be high. Rating agencies say that the task of reviewing thousands of bank statements is overwhelming. They may use special software to ease the task of analysis.</p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 23 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>
<li class="news-green"> <h3 class="news-head">India Post Payments is finally here, official launch expected soon</h3>
<p>The launch of India Post Payments Bank is expected to happen sometime soon, according to some reports. This is following a pilot project that started in Ranchi and Raipur in January 2017. There are plans to open 650 branches which will India Post Payments Bank to cover most of the districts of the country. It is expected to provide employment to more than 3,500 people. India Post Payments Bank will possess the ability to cross sell insurance and banking products along with providing deposit services. The interests of India Post to enter banking does not come as a big surprise as it had shown its intentions back in 2013 when the Reserve Bank of India announced a new round of banking licenses. India Post Payments Bank will also be looking to get the regular Post Office Savings Bank and enable making digital transactions for these accounts. This will help the people who have deposited their money in a traditional post office savings to easily make transactions just like the rest of the banking world. Since 1 lakh is the maximum amount that can be held in a payments bank account, India Post Payments Bank gives an option to transfer the extra funds to a traditional postal savings account in cases where the 1 lakh threshold is exceeded.</p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 22 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>
<li class="news-green"> <h3 class="news-head">RBI official asks the banks to make the pre-sanction process more diligent</h3>
<p>A senior official of the Reserve Bank of India has asked the banks to work hard to improve their risk management systems so that they can review their credit risks management processes. Many of the banks are fighting a pile up of bad loans. The record pile up has crossed 11 as of March 2018.  The Reserve Bank of India has been emphasising the banks that they make sure that they identify the stress early. Getting an early warning and starting to take the necessary corrective actions early while adopting a transparent restructuring mechanism is the best way to move forward.</p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 21 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>

<li class="news-green"> <h3 class="news-head">Fixed deposit interest rates to be raised by ICICI Bank</h3>
<p>ICICI Bank has increased the interest rates on certain Fixed Deposit plans. The changes in the interest plan have been incorporated by the bank since August 14,2018. The interest rates were raised ranging between 15 basis points and 25 basis points on some term deposits. An additional 1 percent interest will be given to the ICICI Bank staff on domestic Fixed Deposits under Rs.1 crore. The updated rates are applicable for both general and senior citizens. The move from ICICI Bank comes after some of the leading banks in the country like State Bank of India, HDFC and Canara Bank decided to hike the interest rates on specific fixed deposits after the hike announced by the Reserve Bank of India earlier this month. The Reserve Bank of India in the third bi-monthly statement announced a hike in the repo rate by 25 basis points. The FD rates were raised by the Reserve Bank of India two days before the announcement of the hike by the Reserve Bank of India. The interest rates on domestic term deposits was increased by 5 - 10 basis points by the Reserve Bank of India. The deposit rates for up to one year has remained unchanged while the deposit for durations of more than 1 year but less than 2 years has been raised by 5 basis points to 6.70 percent.</p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 17 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>


<li class="news-green"> <h3 class="news-head">Vijaya Bank makes changes to the MCLR</h3>
<p>Vijaya Bank has made changes to their marginal cost of funds based lending rates. The changes in the marginal cost of funds based lending rates has started to be in effect from 10 August 2018. The overnight MCLR has increased from 7.90 to 8.00 percent. The one month MCLR has increased from 8.00% to 8.10%. The three month MCLR has increased from 8.25% to 8.30%. The six month MCLR has been changed from 8.50% to 8.55%. One year MCLR has increased from 8.55% to 8.65%. The two year and three MCLRs has remained the same at 9.00% and 9.25% respectively. </p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 14 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>

<li class="news-green"> <h3 class="news-head">Dhanlaxmi Bank, Bank of Maharashtra and Syndicate Bank to maintain the MCLR for one year</h3>
<p>Dhanlaxmi Bank, Bank of Maharashtra and Syndicate Bank have decided to not increase the Marginal Cost of fund-based Lending Rate for one year. The marginal cost of fund-based lending rate (MCLR) for one year was maintained by Bank of Maharashtra at 8.75% and the six months marginal cost of fund-based lending rate remained at 8.40%. Dhanlaxmi Bank set the six months to one year MCLR at 9.70% while the three to six months MCLR was set at 9.25%. Six month MCLR was maintained at 8.40% by Syndicate Bank while the one year MCLR was maintained at 8.65%. HDFC had previously increased lending rates by 20 bps. Lending rate changes come after the Reserve Bank India decided to hike the short term lending rate by 25 basis points, raising the rate to 6.50 percent. This change was done in the third bi-monthly monetary policy statement for 2018-19. </p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 10 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>
<li class="news-green"> <h3 class="news-head">Deposit rates on retail loans to increase faster than interest rates</h3>
<p>Many of the banks have increased the returns on fixed deposits and will continue to rise even more. This is because the fixed deposit growth at 5 percent in FY18 amounts to less than half the growth when it comes to loans. The State Bank of India recently raised the deposit rates last week. HDFC Bank, the second largest private lender in the country has now done the same by increasing by up to 60 basis points. It is expected that the banks will increase the interest rates further looking at the shrinking liquidity and the growth in credit demand. The hike from HDFC Bank comes days after the Reserve Bank of India increased the policy rates by 25 basis points during the policy review meeting held on August 1. Axis Bank, Dena Bank and Punjab National Bank have also increased the rates this month. In a rising rate regime, the growth of lending rates has been considerably higher than the interest rates on deposits. However, the transmission of deposit rates has been higher than the transmission of lending rates in the last two hikes. This is partly due to the change in interest regime that has happened in the recent months. The RBI governor has said that the liquidity might go out of the banking system due to the increase in the currency that is in circulation as the festive season comes closer and the number of withdrawals increases.</p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 9 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>
<li class="news-green"> <h3 class="news-head">RBI hikes repo rate, projects inflation at 4.8% for the second half of FY19
</h3>
<p>The monetary policy committee (MPC) recently increased the benchmark of the repo rate by 25 basis points. This is the second time the repo rate has been increased in two months. The repo rate currently stands at 6.5 percent. The hike in the repo rate is due to the inflation rate which has now increased to 5 percent. It is also because of an increase in the core inflation, which now stands at 6.35 percent. The inflation forecast made by the RBI has also increased marginally, raising from 4.8 percent to 5 percent. The Reserve Bank of India is expecting that the recent hikes will have a significant impact on the inflation even though food inflation has slowed down lately. Even though the prices of crude oil have moderated to some extent, they continue to remain at a high price. An increase in the household inflation expectations could be a major factor that could influence inflation outcomes in the next few months. Industrial output surveys taken up by the Reserve Bank of India have also suggested a change in the manufacturing activity. The GDP growth projection has been retained though, with the projection at 7.4 percent for 2018-19. The GDP growth is projected to be at 7.5 percent for the first quarter of FY20.</p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 7 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>

<li class="news-green"> <h3 class="news-head">Banks Increase Lending Rates Post Hike In RBI Rates
</h3>
<p>After Reserve Bank of India (RBI) increased the rates for the second time in two months, banks like Kotak Mahindra, HDFC Bank, Union Bank of India, and Karnataka Bank too have announced an increase in the lending rates. The RBI has increased the short-term lending rate by 25 basis points to 6.50 percent in its third bi-monthly monetary policy statement for 2018-19. Following the same, HDFC has increased its retail prime lending rate (RPLR) by 20 basis points. Kotak Mahindra Bank, Union Bank of India, and Karnataka bank also have announced an increase in marginal cost of lending rates (MCLR) by 5-10 basis points.</p>
<div class="pull-right"> <p><img src="/images/common/bb-logo-180-40.png" alt=""></p> 
<p><em> 6 August 2018 </em></p> </div> 
<div class="clearfix"></div> </li>



</ul>
</div>
</div></div>
</div></div>

    <!-- EMI Comments Start  -->
    <div class="previous-section-indicator" id="further-reading-arrow-down"><img data-original="/images/tools/cl-prev-indic-arw.png" src="" class="lazy" alt="Down Arrow"/>
</div>
        <div class="arrow-link1"><a href="javascript:void(0)" id="emi-comments"><div class="arrow-down2"></div></a></div>
    <div class="footer-email" id="footer-email">
    <div class="cl-title">Stay Connected</div>
    <div class="footer-email-inner email-notification">
        <div id="mc_embed_signup" data-actionloc=":stayConnected">
            <form name="mc-embedded-subscribe-form" method="post" class="validate js-newsletter-subscribe-form" novalidate>
                <input type="email" placeholder="Leave your email here" name="EMAIL" class="js-newsletter-email required email form-control input-hg input-text" id="mce-EMAIL" required
                       data-action="blur:emailAttempt" />
                <input type="hidden" name="mc_source_value" value="STAY_CONNECTED" id="mc_source_value"/><input type="button" value="Submit" id="mc-embedded-subscribe" name="mc-newsletter-embedded-subscribe" class="btn btn-hg btn-danger" data-action="click:enterEmail" />
                <div id="mc_done"></div>
                <div class="dontshow"><input type="text" name="b_4b4dec49870d3cdceb5f0c9db_548aff09ea" tabindex="-1" value=""></div>
            </form>
        </div>
        <div class="err-msg dontshow" id="newsletter-subscribe-err">
            <label class="control-label error-msg"><img data-original="/images/common/offerflow/icon-error.png" src="" class="lazy" alt="offer_icon_error" title="offer_icon_error"/>
Uh-oh! Are you sure this email ID is Correct?</label>
        </div>
    </div>
</div><!-- EMI submit Section End  -->

    </div>
    <input type="hidden" name="" value="true" id="lead_captured"/><input type="hidden" name="" value="" id="lead_product"/><input type="hidden" name="" value="" id="lead_eligibility"/><input type="hidden" name="" value="B4UGO_EL" id="lead_source"/>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"applicationID":"35364080","applicationTime":70,"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"755798193d","transactionName":"NldTZkBTVxJXWkALXg8dYkZAR00Sd1pAC14PHVRfWx9aAFpaQQ5QFV1D","agent":"","errorBeacon":"bam.nr-data.net"}</script><div id="ajax-hidden-variable" class="ajax-hidden-variable">
</div>
<input type="hidden" name="bank" value="allBank" id="bank"/><input type="hidden" name="city" value="allCity" id="city"/><input type="hidden" name="mode" value="landing" id="mode"/><input type="hidden" name="originalRequestURL" value="https%3A%2F%2Fwww.bankbazaar.com%2Ffinance-tools%2Femi-calculator.html" id="originalRequestURL"/><input type="hidden" name="bb-footer" value="true" id="bb-footer"/><input type="hidden" name="emailAvailable" value="NO" id="emailAvailable"/><input type="hidden" name="contactAvailable" value="NO" id="contactAvailable"/><!-- This change controls the email + contact number
-->
<div style="display:none;" id="scrollup">
        <a href="#top"><span><i class="sprite-symbols symbols-down-arrow"></i></span></a>
    </div>
<input type="hidden" id="showFbGplusLayover" value="false"/>
<input type="hidden" id="fBLayover_StartTime" value='0'/>
<input type="hidden" name="propertyCity" value="" id="propertyCity"/><input type="hidden" name="mcIdVal" value="SEOGoogleex0t1" id="mcIdVal"/><input type="hidden" name="isMobileReceived" value="false" id="isMobileReceived"/><input type="hidden" name="mcId" value="SEOGoogleex0t1" id="mcId"/><input type="hidden" name="pTypeId" value="97" id="pTypeId"/><script type="text/javascript">
    function g_track() {
        if ($("#lead_product").length > 0) {
            $('<iframe />', {id: "google_analytics_codes_pixel",src: '/common/tracking/' + $("#lead_product").val() + '.jsp',width: "1px", height: "1px" }).appendTo('body');
        }
    }

    function grt_ri(ele) {
        var $ele = $(ele);
        if ($ele.length > 0 && $.trim($ele.val()).length > 0 && $ele.valid() && !isInternalAccess() && $("#googleretargeting").size() == 0) {
            g_track();
        }
    }

    function grt_nri(ele) {
        var $ele = $(ele);
        if ($ele.length > 0 && $.trim($ele.val()).length > 0 && isValidmobile_nri($ele.val()) && !isInternalAccess() && $("#googleretargeting").size() == 0) {
            g_track();
        }
    }
</script><div id="iframeContainer" class="dontshow"></div>

<script type="text/javascript">
    var isMobileProvided = false;
    // to avoid resending of offer details in case of mobile provided in pop-up
    var isOffersAlreadySent = false;
    var google_custom_params={};

    function callGoogleSmartPixelCode() {
        var param_product = 'Loan';
        var param_mobile = param_product.toString()  + "_Mobile_provided";
        if(isOffersAlreadySent)
        {
            google_custom_params = {};
        }
        if(isMobileProvided){
            google_custom_params[param_mobile] = "YES";
        }
        var ifrm = document.createElement("IFRAME");
        ifrm.setAttribute("id","google_smart_pixel");
        ifrm.setAttribute("src", '/common/tracking/google_smartpixel.jsp');
        ifrm.style.width = 1+"px";
        ifrm.style.height = 1+"px";
        document.getElementById("iframeContainer").appendChild(ifrm);
        /*$('<iframe />', {id:"google_smart_pixel", src:'/common/tracking/google_smartpixel.jsp', width:"1px", height:"1px" }).appendTo('body');*/
    }
</script>

<script type="text/javascript">
        var google_custom_params = {};
        var param_elig, curproduct_elig = 'Loan';
        param_elig = curproduct_elig + "_Landed_on_Eligibility_Page"
        google_custom_params[param_elig] = "YES";
        callGoogleSmartPixelCode();
    </script>
<script id="_webengage_script_tag" type="text/javascript">
        
        window.addEventListener("load",function() {
            !function (e, t, n) {
                function o(e, t) {
                    e[t[t.length - 1]] = function () {
                        r.__queue.push([t.join("."), arguments])
                    }
                }
                var i, s, r = e[n], g = " ", l = "init options track onReady".split(g), a = "feedback survey notification".split(g), c = "options render clear abort".split(g), p = "Open Close Submit Complete View Click".split(g), u = "identify login logout setAttribute".split(g);
                if (!r || !r.__v) {
                    for (e[n] = r = {__queue: [], __v: "5.0", user: {}}, i = 0; i < l.length; i++)
                        o(r, [l[i]]);
                    for (i = 0; i < a.length; i++) {
                        for (r[a[i]] = {}, s = 0; s < c.length; s++)
                            o(r[a[i]], [a[i], c[s]]);
                        for (s = 0; s < p.length; s++)
                            o(r[a[i]], [a[i], "on" + p[s]])
                    }
                    for (i = 0; i < u.length; i++)
                        o(r.user, ["user", u[i]]);
                    var f = t.createElement("script"), d = t.getElementById("_webengage_script_tag");
                    f.type = "text/javascript",
                            f.async = !0,
                            f.src = ("https:" == t.location.protocol ? "https://ssl.widgets.webengage.com" : "http://cdn.widgets.webengage.com") + "/js/widget/webengage-min-v-5.0.js",
                            d.parentNode.insertBefore(f, d)
                }
            }(window, document, "webengage");
            webengage.init('~13410604b');
        });
        </script>
<div class="app-remind-wrap" id="pendingAppRemDiv"></div>
<div class="pixel dontshow">
  <div class="dontshow">
    </div>
</div><footer id="common-footer" class="bb-new-footer js-scroll-top">
    <div class="container">
        <div class="footer-block-one footer-list clearfix">
            <ul class="footer-links text-left other-list">
                    <li><a href="/aadhar-card.html" title="Aadhar">Aadhar</a></li>
                        <li><a href="/saving-schemes/atal-pension-yojana.html" title="Atal Pension Yojana">Atal Pension Yojana</a></li>
                        <li><a href="/insurance/auto-insurance.html" title="Auto Insurance">Auto Insurance</a></li>
                        <li><a href="/insurance/car-insurance.html" title="Car Insurance">Car Insurance</a></li>
                        <li><a href="/car-loan.html" title="Car Loan">Car Loan</a></li>
                        <li><a href="/car-loan/car-prices-in-india.html" title="Car Prices in India">Car Prices in India</a></li>
                        <li><a href="/credit-score.html" title="Check Credit Score For Free">Check Credit Score For Free</a></li>
                        <li><a href="/credit-card.html" title="Credit Card">Credit Card</a></li>
                        <li><a href="/debit-card.html" title="Debit Card">Debit Card</a></li>
                        <li><a href="/fuel/diesel-price-india.html" title="Diesel Price">Diesel Price</a></li>
                        <li><a href="/driving-licence.html" title="Driving Licence">Driving Licence</a></li>
                        <li><a href="/tax/efiling-income-tax.html" title="E Filing">E Filing</a></li>
                        <li><a href="/saving-schemes/epf.html" title="EPF">EPF</a></li>
                        <li><a href="/education-loan.html" title="Education Loan">Education Loan</a></li>
                        <li><a href="/equifax.html" title="Equifax">Equifax</a></li>
                        <li><a href="/fixed-deposit.html
" title="Fixed Deposit">Fixed Deposit</a></li>
                        <li><a href="/tax/gst.html" title="GST">GST</a></li>
                        <li><a href="/tax/gst-calculator.html" title="GST Calculator">GST Calculator</a></li>
                        <li><a href="/tax/gst-registration.html" title="GST Registration">GST Registration</a></li>
                        <li><a href="/gas-connection.html" title="Gas Connection">Gas Connection</a></li>
                        <li><a href="/gold-rate-india.html" title="Gold Rate Today">Gold Rate Today</a></li>
                        <li><a href="/insurance/health-insurance.html" title="Health Insurance">Health Insurance</a></li>
                        <li><a href="/insurance/home-insurance.html" title="Home Insurance">Home Insurance</a></li>
                        <li><a href="/home-loan.html" title="Home Loan">Home Loan</a></li>
                        <li><a href="/home-loan-emi-calculator.html" title="Home Loan EMI Calculator">Home Loan EMI Calculator</a></li>
                        <li><a href="/home-loan-interest-rate.html" title="Home Loan Rate of Interest">Home Loan Rate of Interest</a></li>
                        <li><a href="/ifsc-code/icici-bank.html" title="ICICI IFSC Code">ICICI IFSC Code</a></li>
                        <li><a href="/income-tax.html" title="Income Tax">Income Tax</a></li>
                        <li><a href="/tax/income-tax-slabs.html" title="Income Tax Slabs">Income Tax Slabs</a></li>
                        <li><a href="/insurance.html" title="Insurance">Insurance</a></li>
                        <li><a href="/saving-schemes/kisan-vikas-patra.html" title="Kisan Vikas Patra">Kisan Vikas Patra</a></li>
                        <li><a href="/insurance/life-insurance.html" title="Life Insurance">Life Insurance</a></li>
                        <li><a href="/indian-holiday-calendar.html" title="List of Holidays">List of Holidays</a></li>
                        <li><a href="/loan.html" title="Loan">Loan</a></li>
                        <li><a href="/home-loan/mclr.html" title="MCLR">MCLR</a></li>
                        <li><a href="/insurance/mediclaim-policy.html" title="Mediclaim Policy">Mediclaim Policy</a></li>
                        <li><a href="/mutual-funds.html" title="Mutual Funds">Mutual Funds</a></li>
                        <li><a href="/saving-schemes/nps.html" title="NPS">NPS</a></li>
                        <li><a href="/saving-schemes/nsc.html" title="NSC">NSC</a></li>
                        <li><a href="/share-market/nifty-100.html" title="Nifty 100">Nifty 100</a></li>
                        <li><a href="/share-market/nifty-50.html" title="Nifty 50">Nifty 50</a></li>
                        <li><a href="/gas-booking.html" title="Online Gas Booking">Online Gas Booking</a></li>
                        <li><a href="/pan-card.html" title="PAN">PAN</a></li>
                        <li><a href="/saving-schemes/ppf.html" title="PPF">PPF</a></li>
                        <li><a href="/passport.html" title="Passport">Passport</a></li>
                        <li><a href="/personal-loan.html" title="Personal Loan">Personal Loan</a></li>
                        <li><a href="/fuel/petrol-price-india.html" title="Petrol Price">Petrol Price</a></li>
                        <li><a href="/home-loan/pradhan-mantri-awas-yojana.html" title="Pradhan Mantri Awas Yojana">Pradhan Mantri Awas Yojana</a></li>
                        <li><a href="/tax/property-tax.html" title="Property Tax">Property Tax</a></li>
                        <li><a href="/recurring-deposit.html" title="Recurring Deposit">Recurring Deposit</a></li>
                        <li><a href="/savings-account.html" title="Savings Account">Savings Account</a></li>
                        <li><a href="/saving-schemes/senior-citizen-saving-scheme.html" title="Senior Citizen Saving Scheme">Senior Citizen Saving Scheme</a></li>
                        <li><a href="/silver-rate-india.html" title="Silver Price">Silver Price</a></li>
                        <li><a href="/saving-schemes/sukanya-samriddhi-yojana-account.html" title="Sukanya Samriddhi Yojana">Sukanya Samriddhi Yojana</a></li>
                        <li><a href="/tax/all-about-tds.html" title="TDS">TDS</a></li>
                        <li><a href="/tax/how-calculate-income-tax-on-salary-with-example.html" title="Tax Calculator">Tax Calculator</a></li>
                        <li><a href="/insurance/term-insurance.html" title="Term Insurance">Term Insurance</a></li>
                        <li><a href="/insurance/two-wheeler-insurance.html" title="Two Wheeler Insurance">Two Wheeler Insurance</a></li>
                        <li><a href="/two-wheeler-loan.html" title="Two Wheeler Loan">Two Wheeler Loan</a></li>
                        <li><a href="/used-car-loan.html" title="Used Car Loan">Used Car Loan</a></li>
                        <li><a href="/tax/value-added-tax.html" title="VAT">VAT</a></li>
                        <li><a href="/visa.html" title="VISA">VISA</a></li>
                        <li><a href="/saving-schemes/vpf.html" title="VPF">VPF</a></li>
                        <li><a href="/voter-id.html" title="Voter ID">Voter ID</a></li>
                        </ul>
            </div>
        <div class="footer-block-two footer-other-links clearfix">
            <div class="ft-finance-links-single text-left font-xs">
                    <div class="ft-other-links-title pull-left">Others :</div>
                    <div class="ft-other-links-list pull-left"><a href="/cibil.html" target="_blank" 
                           title="CIBIL">CIBIL</a> |<a href="/tax.html" target="_blank" 
                           title="Tax">Tax</a> |<a href="/ifsc-code.html" target="_blank" 
                           title="All Bank IFSC Codes">Bank IFSC Code</a> |<a href="/finance-tools/emi-calculator.html" target="_blank" 
                           title="EMI Calculator">EMI Calculator</a> |<a href="/saving-schemes.html" target="_blank" 
                           title="Saving Schemes">Saving Schemes</a> |<a href="https://www.bankbazaar.sg" target="_blank" 
                           title="Singapore">Singapore</a> |<a href="https://www.bbazaar.my" target="_blank" 
                           title="Malaysia">Malaysia</a> |<a href="https://www.bankbazaar.ph" target="_blank" 
                           title="Philippines">Philippines</a> |<a href="https://www.bankbazaarinsurance.com" target="_blank" 
                           title="Bankbazaar Insurance">Bankbazaar Insurance</a> </div>
                </div>
            </div>
        <div class="footer-block-three clearfix">
            <div class="ft-subscribe-form pull-left">
                    <h4 class="title">Subscribe to our newsletter</h4>
                    <form id="mc-embedded-subscribe-form-footer" method="post" name="mc-embedded-subscribe-form"
                          class="validate js-subscribe-form" novalidate="novalidate">
                        <input type="email" placeholder="Leave your email here" name="EMAIL" class="required email"
                               id="mce-EMAIL" data-action="blur:emailAttempt" data-actionloc=":footer">
                        <input type="button" value="Subscribe" name="Submit" id="mc-embedded-subscribe-footer"
                               class="btn btn-primary_2" data-action="click:enterEmail" data-actionLoc=":footer">
                        <input type="hidden" name="mc_source_value" value="FOOTER_SUBSCRIBE" id="mc_source_value">
                    <div class="dontshow"><input type="text" name="b_4b4dec49870d3cdceb5f0c9db_548aff09ea" tabindex="-1" value=""></div>
                </form>
            </div>
            <div class="footer-mobileapps pull-left">
                    <h4 class="title">Mobile Apps</h4>
                    <div class="get-your-app">
                        <a href="http://m.onelink.me/378f2d2d" title="Google play" data-name="MobileAppLink" target="_blank"><span
                                    class="footer-sprite bbicons-android"></span></a><a href="https://itunes.apple.com/in/app/bankbazaar-loans-credit-cards/id972595507?mt=8&ign-mpt=uo%3D4" title="Apple Store" target="_blank"><span
                                    class="footer-sprite bbicons-ios"></span></a></div>
                </div>
            <div class="footer-getintouch pull-left">
                    <p class="title">Contact Us</p>
                    <a href="tel:+91 44 66511800" title="Call Us"><span class="footer-sprite bbicons-mobile"></span>
                        +91 44 66511800</a><a title=""><span class="footer-sprite bbicons-email"></span>
                        support[at]bankbazaar[dot]com</a></div>
            <div class="footer-social-icons pull-left">
                <h4 class="title">Follow Us</h4>
                <a target="_blank" href="https://twitter.com/bankbazaar" title="Bankbazaar Twitter"><span class="footer-sprite bbicons-ft-tt"></span></a>
                <a target="_blank" href="https://www.linkedin.com/company/417362/" title="Bankbazaar Linkedin"><span class="footer-sprite bbicons-ft-in"></span></a>
                <a target="_blank" href="https://www.facebook.com/bankbazaar/" title="Bankbazaar Facebook"><span class="footer-sprite bbicons-ft-fb"></span></a>
                <a target="_blank" href="https://plus.google.com/+BankBazaar" title="Bankbazaar GooglePlus"><span class="footer-sprite bbicons-ft-gp"></span></a>
                <a target="_blank" href="https://instagram.com/bankbazaar/" title="Bankbazaar Instagram"><span class="footer-sprite bbicons-ft-instg"></span></a>
                </div>

        </div>
        <div class="footer-block-four">
            <div class="footer-common-link text-center">
                <a href="/aboutus.html" target="_blank" title="About">About</a>
                <a href="/careers.html" target="_blank" title="Careers">Careers</a>
                <a href="/aboutus.html#contactus" target="_blank" title="Contact Us">Contact Us</a>
                <a href="https://blog.bankbazaar.com/" target="_blank" title="Blog">Blog</a>
                <a href="/conditionsofuse.html" target="_blank" title="Terms">Terms</a>
                <a href="/notice-to-customer.html" target="_blank" title="Notice to customer">Notice to customer</a>
                </div>
            <div class="font-sm text-center copyrights">
                <p class="font-sm">Copyright&nbsp;&copy; 2018 &nbsp; BankBazaar.com.&nbsp;&nbsp;<a href="/privacy-policy.html">Privacy Policy</a></p></div>
        </div>
    </div>
</footer>
<!-- Loading Bootstrap -->
<input type="hidden" name="mobileReceivedCheck" value="false" id="mobileReceivedCheck"/><input type="hidden" name="mobileProductNameSpace" value="" id="mobileProductNameSpace"/><input type="hidden" name="productNameSpace" value="" id="productNameSpace"/><input type="hidden" name="productShortName" value="L" id="productShortName"/><input type="hidden" name="stage" value="prod" id="stageValue"/><input type="hidden" name="jawrDebug" value="false" id="jawrDebug"/><input type="hidden" name="mobilePropertyCity" value="" id="mobilePropertyCity"/><input type="hidden" name="website" value="MARKETPLACE" id="global_website"/><input type="hidden" name="variantOptions" value="mobileRequired,emailOptional" id="variantOptions"/><input type="hidden" name="cdnDomain" value="" id="cdnDomain"/><input type="hidden" name="isBootstrapPage" value="true" id="isBootstrapPage"/><input type="hidden" name="mobileSite" value="false" id="mobileSite"/><input type="hidden" name="tabletSite" value="false" id="tabletSite"/><input type="hidden" name="internalAccess" value="false" id="internalAccess"/><input type="hidden" name="offlineChannel" value="false" id="offlineChannel"/><input type="hidden" name="appEmailPresent" value="" id="appEmailPresent"/><input type="hidden" name="eligEmailPresent" value="false" id="eligEmailPresent"/><input type="hidden" name="pageGroup" value="" id="pageGroup"/><input type="hidden" name="sessionMobileNumber" value="" id="session-mobile-number"/><input type="hidden" name="pageName" value="eligPage" id="pageName"/><input type="hidden" name="variantName" value="EMI Calculator" id="variantName"/><input type="hidden" name="BankbazaarInsuranceRedirectLink" value="https://www.bankbazaar.com/forward" id="BankbazaarInsuranceRedirectLink"/><input type="hidden" name="BankbazaarInsuranceRedirectUrl" value="https://www.bankbazaarinsurance.com/insurance/.html" id="BankbazaarInsuranceRedirectUrl"/><input type="hidden" name="customerSignUp" value="" id="customerSignUp"/><input type="hidden" name="isCobrand" value="false" id="isCobrand"/><input type="hidden" name="isCRO" value="false" id="isCRO"/><input type="hidden" name="isTrackingEnabled" value="true" id="isTrackingEnabled"/><input type="hidden" name="reportWebEventsToGA" value="TRUE" id="reportWebEventsToGA"/><input type="hidden" name="fbAppId" value="473486006089780" id="fbAppId"/><input type="hidden" name="browserBackEnabled" value="true" id="browserBackEnabled"/><input type="hidden" name="headerAjaxificationEnabled" value="false" id="headerAjaxificationEnabled"/><input type="hidden" name="isBrowserBackNewFlow" value="true" id="isBrowserBackNewFlow"/><input type="hidden" name="insuranceGatewayLinkOnBack" value="https://www.bankbazaar.com" id="insuranceGatewayLinkOnBack"/><input type="hidden" name="gatewayLinkOnBack" value="https://www.bankbazaar.com" id="gatewayLinkOnBack"/><li class="dontshow">

<input type="hidden" name="" value="" id="referenceEligibilityId"/>
</li><input type="hidden" name="newFilterEnabled" value="false" id="newFilterEnabled"/><input type="hidden" name="fromRateAlert" value="false" id="fromRateAlert"/><input type="hidden" name="flowName" value="" id="flowName"/><input type="hidden" name="geolocatorApiKey" value="AIzaSyBThzFylSsWIb7VrW9nByrNUUuPhRKol00" id="geolocatorApiKey"/><input type="hidden" name="" value="true" id="creditTrackerIsAutoSignInToggleSet"/><script type="text/javascript" src="/1535565058192/jawr_loader.js"></script>
<script type="text/javascript">
    JAWR.loader.getURLs=function(h,f){var g=[];var b=f;if(f==null){b="js"}var e=[];if(b.toString().toLowerCase()=="css"){e=this.cssbundles}if(b.toString().toLowerCase()=="js"){e=this.jsbundles}var c=this.mapping;for(var d=0;d<e.length;d++){var i=e[d];if(i.belongsToBundle(h)&&!this.usedBundles[i.name]){this.usedBundles[i.name]=true;var a;if(isJawrDebug()&&isDevelopmentEnv()){a=i.itemPathList;g=g.concat(a)}else{a=i.alternateProductionURL?i.alternateProductionURL:this.normalizePath(c+"/"+i.prefix+i.name);if(typeof a!=undefined){a=a.replace(/http:\/\//gi,"//");a=a.replace(/https:\/\//gi,"//");g.push(a)}}}}return g};</script><script type="text/javascript" src="/gzip_N801095512/bundles/lwflatuiscripts.js" ></script>
<script type="text/javascript" src="/gzip_93876398/bundles/newHeaderFooter.js" ></script>
<script type="text/javascript" src="/gzip_N2012218195/bundles/jq-plot.js" ></script>
<script type="text/javascript" src="/gzip_N1062757010/bundles/emi-calculator.js" ></script>
<script type="text/javascript" src="/gzip_1306948697/bundles/browserBack.js" ></script>
<script type="text/javascript">
if ((/iphone|ipod|ipad.*os 5/gi).test(navigator.appVersion)) {
  window.onpageshow = function(evt) {
    // If persisted then it is in the page cache, force a reload of the page.
    if (evt.persisted) {
      document.body.style.display = "none";
      location.reload();
    }
  };
}
</script><noscript>
    <img src="/images/no-javascript.gif" alt="JS is not enabled in browser"/>
</noscript>


<script type="text/javascript">
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload()
        }
    };
</script>

<div class="dontshow">
        reTH65gcmBgCJ7k</div>
<div id="errorPage" class="dontshow">This Page is BLOCKED as it is using Iframes.</div>
<div class="dontshow">
</div><div class='lazyloadcss' rel='/bundles/new-loan-landing-lazy.css'></div>
<div class='lazyloadcss' rel='/bundles/landing-lazy-load.css'></div>
</body>
</html>
