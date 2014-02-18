var Kicksend={mailcheck:{threshold:3,defaultDomains:["yahoo.com","google.com","hotmail.com","gmail.com","me.com","aol.com","mac.com","live.com","googlemail.com","msn.com","hotmail.co.uk","yahoo.co.uk","facebook.com","walla.co.il","walla.com","bezeqint.net","zahav.net.il","netvision,net.il","nana10.co.il","mail.ru","inbox.ru","list.ru","bk.ru","rambler.ru","lenta.ru","myrambler.ru","autorambler.ru","ro.ru","r0.ru","yandex.ru","ya.ru","яндекс.рф","habrahabr.ru","ua.com","ui.com"],defaultTopLevelDomains:["org.il","co.il","net","org","info","edu","gov","mil","ca","com"],run:function(e){e.domains=e.domains||Kicksend.mailcheck.defaultDomains;e.topLevelDomains=e.topLevelDomains||Kicksend.mailcheck.defaultTopLevelDomains;e.distanceFunction=e.distanceFunction||Kicksend.sift3Distance;var t=function(e){return e};var n=e.suggested||t;var r=e.empty||t;var i=Kicksend.mailcheck.suggest(encodeURI(e.email),e.domains,e.topLevelDomains,e.distanceFunction);return i?n(i):r()},suggest:function(e,t,n,r){e=e.toLowerCase();var i=this.splitEmail(e);var s=this.findClosestDomain(i.domain,t,r);if(s){if(s!=i.domain){return{address:i.address,domain:s,full:i.address+"@"+s}}}else{var o=this.findClosestDomain(i.topLevelDomain,n);if(i.domain&&o&&o!=i.topLevelDomain){var u=i.domain;s=u.substring(0,u.lastIndexOf(i.topLevelDomain))+o;return{address:i.address,domain:s,full:i.address+"@"+s}}}return false},findClosestDomain:function(e,t,n){var r;var i=99;var s=null;if(!e||!t){return false}if(!n){n=this.sift3Distance}for(var o=0;o<t.length;o++){if(e===t[o]){return e}r=n(e,t[o]);if(r<i){i=r;s=t[o]}}if(i<=this.threshold&&s!==null){return s}else{return false}},sift3Distance:function(e,t){if(e==null||e.length===0){if(t==null||t.length===0){return 0}else{return t.length}}if(t==null||t.length===0){return e.length}var n=0;var r=0;var i=0;var s=0;var o=5;while(n+r<e.length&&n+i<t.length){if(e.charAt(n+r)==t.charAt(n+i)){s++}else{r=0;i=0;for(var u=0;u<o;u++){if(n+u<e.length&&e.charAt(n+u)==t.charAt(n)){r=u;break}if(n+u<t.length&&e.charAt(n)==t.charAt(n+u)){i=u;break}}}n++}return(e.length+t.length)/2-s},splitEmail:function(e){var t=e.split("@");if(t.length<2){return false}for(var n=0;n<t.length;n++){if(t[n]===""){return false}}var r=t.pop();var i=r.split(".");var s="";if(i.length==0){return false}else if(i.length==1){s=i[0]}else{for(var n=1;n<i.length;n++){s+=i[n]+"."}if(i.length>=2){s=s.substring(0,s.length-1)}}return{topLevelDomain:s,domain:r,address:t.join("@")}}}};if(typeof module!=="undefined"&&module.exports){module.exports=Kicksend.mailcheck}if(typeof window!=="undefined"&&window.jQuery){(function(e){e.fn.mailcheck=function(e){var t=this;if(e.suggested){var n=e.suggested;e.suggested=function(e){n(t,e)}}if(e.empty){var r=e.empty;e.empty=function(){r.call(null,t)}}e.email=this.val();Kicksend.mailcheck.run(e)}})(jQuery)}