var cssFx=cssFx||{};(function(P){function E(c,a){var b=function(d){for(d=0;d<4;d++){try{return d?new ActiveXObject([,"Msxml2","Msxml3","Microsoft"][d]+".XMLHTTP"):new XMLHttpRequest}catch(e){}}};if(r=b()){r.onreadystatechange=function(){r.readyState==4&&a(r.responseText)};r.open("GET",c,true);r.send(null)}}function H(i){var n=window,k="addEventListener",b="complete",g="readystatechange",l=!1,m=l,p=!0,c=n.document,j=c.documentElement,h=c[k]?k:"attachEvent",d=c[k]?"removeEventListener":"detachEvent",e=c[k]?"":"on",o=function(q){if(q.type==g&&c.readyState!=b){return}(q.type=="load"?n:c)[d](e+q.type,o,l),!m&&(m=!0)&&i.call(n,q.type||q)},f=function(){try{j.doScroll("left")}catch(q){setTimeout(f,50);return}o("poll")};if(c.readyState==b){i.call(n,"lazy")}else{if(c.createEventObject&&j.doScroll){try{p=!n.frameElement}catch(a){}p&&f()}c[h](e+"DOMContentLoaded",o,l),c[h](e+g,o,l),n[h](e+"load",o,l)}}function F(a,b){return a.replace(b!=null?/\/\*([\s\S]*?)\*\//gim:"","").replace(/\n/gm,"").replace(/^\s*|\s*$/g,"").replace(/\s{2,}|\t/gm," ")}function S(b,c,a){return((256+b<<8|c)<<8|a).toString(16).slice(1)}function x(c,b){for(var a=0,d=b.length;a<d;a++){if(b[a]==c){return !0}}return !1}function y(b,d){for(var a=b.length,c=0;c<a;c++){d.call(this,b[c])}}function Q(){var d="animation",f="border",b="background",h="box",a="column",c="transition",g="transform",e={moz_and_webkit:[b+"-origin",b+"-size",f+"-image",f+"-image-outset",f+"-image-repeat",f+"-image-source",f+"-image-width",f+"-radius",h+"-shadow",a+"-count",a+"-gap",a+"-rule",a+"-rule-color",a+"-rule-style",a+"-rule-width",a+"-width"],moz_and_webkit_and_ms:[h+"-flex",h+"-orient",h+"-align",h+"-ordinal-group",h+"-flex-group",h+"-pack",h+"-direction",h+"-lines",h+"-sizing",d+"-duration",d+"-name",d+"-delay",d+"-direction",d+"-iteration-count",d+"-play-state",d+"-timing-function",d+"-fill-mode"],moz_and_webkit_and_ms_and_opera:[g,g+"-origin",c,c+"-property",c+"-duration",c+"-timing-function",c+"-delay","user-select"],misc:[b+"-clip",f+"-bottom-left-radius",f+"-bottom-right-radius",f+"-top-left-radius",f+"-top-right-radius"]};return e}var A=["-moz-","-webkit-","-o-","-ms-"];var L=Q();var D=A[0],I=A[1],K=A[2],O=A[3];var J=L.moz_and_webkit;var N=L.moz_and_webkit_and_ms;var R=L.moz_and_webkit_and_ms_and_opera;var G=L.misc;var C=G.concat(R,J,N);var B=["display","opacity","text-overflow","background-image","background"].concat(C);var z="filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='{1}', endColorstr='{2}',GradientType=0)";P.processCSS=function(e,c){var l=[];var a=/([\s\S]*?)\{([\s\S]*?)\}/gim;var d=/\@import\s+(?:url\([\'\"]?(.*)[\'\"]?\))\s*\;?/gim;var v=/@keyframes\s*([^\{]*)\{([^@]*)\}/g;for(var af=0;af<e.length;af++){var ab=F(e[af],1);var ag=[];var f=d.test(ab)&&ab.match(d);var aa=v.test(ab)&&ab.match(v);d.lastIndex=0;v.lastIndex=0;for(var q=0;q<f.length;q++){ab=ab.replace(f[q],"");var b=d.exec(f[q])[1];var g=b[0]=="/"?b:c.replace(/[^\/]*?$/,"")+b;P.fetchCSS(g,function(T){P.insertCSS(P.processCSS([T],c))});d.lastIndex=0}for(var q=0,h=aa.length;q<h;q++){ab=ab.replace(aa[q],"");var t=v.exec(aa[q]);if(t){var ac=t[2].match(a),j=[];for(var k=0;k<ac.length;k++){var s=a.exec(ac[k]);if(s){j.push(F(s[1])+"{"+P.processDec(s[2],true)+"}")}a.lastIndex=0}y([0,1,3],function(T){ag.push("@"+A[T]+"keyframes "+F(t[1])+"{"+j.join("\n")+"}")})}v.lastIndex=0}var i=a.test(ab)&&ab.match(a);a.lastIndex=0;for(var m=0,w=i.length;m<w;m++){var ae=a.exec(i[m]);if(ae!==null){var p=F(ae[1],1);var u=F(ae[2],1);for(var n=0,ad=B.length;n<ad;n++){if(u.indexOf(B[n])>=0){var o=P.processDec(u);if(o){ag.push(p+"{"+o+"}")}break}}}a.lastIndex=0}if(ag.length){l.push(ag.join("\n"))}}return l};P.insertCSS=function(a){for(var b=0;b<a.length;b++){var c=document.createElement("style");c.setAttribute("type","text/css");if(c.styleSheet){c.styleSheet.cssText=a[b]}else{c.textContent=a[b]}document.getElementsByTagName("head")[0].appendChild(c)}};P.processDec=function(b,n){var l=b.split(";"),o=[],j="background";for(var d=0;d<l.length;d++){if(l[d].indexOf(":")<0){continue}var s=l[d].split(":");if(s.length!=2){continue}var t=F(s[0]);var c=F(s[1]);var g=[t,c].join(":");var i=[];if(x(t,J)){i.push(D+g,I+g)}else{if(x(t,N)){i.push(D+g,I+g,(t=="box-align"?O+t+":middle":O+g))}else{if(x(t,R)){y([0,1,2,3],function(v){var w=A[v];if(t=="transition"){var W=c.split(" ")[0];if(x(W,C)){i.push(w+g.replace(W,w+W))}else{i.push(w+g)}}else{if(t=="transition-property"){if(w==D){var V=c.split(",");var u=[];y(V,function(U){var T=F(U);if(x(T,C)){u.push(w+T)}});i.push(w+t+":"+u.join(","))}}else{i.push(w+g)}}})}else{if(x(t,G)){if(t==j+"-clip"){if(c==="padding-box"){i.push(I+g,D+t+":padding")}}else{var m=t.split("-");i.push(D+"border-radius-"+m[1]+m[2]+":"+c,I+g)}}else{switch(t){case"display":if(c=="box"){y([0,1,3],function(u){i.push("display:"+A[u]+c)})}else{if(c=="inline-block"){i.push("display:"+D+"inline-stack","zoom:1;*display:inline")}}break;case"text-overflow":if(c=="ellipsis"){i.push(K+g)}break;case"opacity":var k=Math.round(c*100);i.push(O+"filter:progid:DXImageTransform.Microsoft.Alpha(Opacity="+k+")","filter: alpha(opacity="+k+")",D+g,I+g);break;case j+"-image":case j+"-color":case j:var e="linear-gradient";if(c.indexOf(e)>=0){var p=new RegExp(e+"\\s?\\((.*)\\)","ig").exec(c);if(p[1]!=null){p=p[1];var h=e+"("+p+")";y([0,1,2,3],function(u){i.push(t+":"+A[u]+h)});var a=p.match(/\#([a-z0-9]{3,})/g);if(a&&a.length>1&&a[a.length-1]!=null){i.push(z.replace("{1}",a[0]).replace("{2}",a[a.length-1]))}}}else{if(c.indexOf("rgba")>=0){var f=c.match(/rgba\((.*?)\)/)[1].split(",");var q=Math.floor(+(F(f[3]))*255).toString(16)+S(+F(f[0]),+F(f[1]),+F(f[2]));i.push(z.replace("{1}","#"+q).replace("{2}","#"+q)+";zoom:1")}}break;default:if(!!n){i.push(g)}break}}}}}if(i.length){o.push(i.join(";"))}}return o.length&&o.join(";")};P.fetchCSS=function(b,a){E(b,(a==null?function(c){P.insertCSS(P.processCSS([c],b))}:a))};var M=function(){var c=document.getElementsByTagName("style");var b=document.getElementsByTagName("link");for(var a in b){if(typeof(b[a])==="object"&&b[a].className==="cssfx"){P.fetchCSS(b[a].href)}}var d=[];for(var a in c){if(typeof(c[a])==="object"){d.push(c[a].innerHTML)}}if(d.length){P.insertCSS(P.processCSS(d))}};H(M)})(cssFx);