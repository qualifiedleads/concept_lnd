var arr=[document.getElementById("names"),document.getElementById("tele"),document.getElementById('email')];for(var i=0;i<=1;i++){arr[i].onfocus=function(){this.value.length<5?this.value="":null};arr[i].onblur=function(){this.value.length<5?this.value=this.getAttribute("data-placeholder"):null}}(function(e){e.fn.mailcheck=function(e,t){var n=["yahoo.com","google.com","hotmail.com","gmail.com","me.com","aol.com","mac.com","live.com","googlemail.com","msn.com","hotmail.co.uk","yahoo.co.uk","facebook.com","walla.co.il","walla.com","bezeqint.net","zahav.net.il","netvision,net.il","nana10.co.il","mail.ru","inbox.ru","list.ru","bk.ru","rambler.ru","lenta.ru","myrambler.ru","autorambler.ru","ro.ru","r0.ru","yandex.ru","ya.ru","яндекс.рф","habrahabr.ru","ua.com","ui.com"];if(typeof e==="object"&&t===undefined){e.domains=e.domains||n}else{var r=e;e=t;e.domains=r||n}var i=Kicksend.mailcheck.suggest(encodeURI(this.val()),e.domains);if(i){if(e.suggested){e.suggested(this,i)}}else{if(e.empty){e.empty(this)}}}})(jQuery);$("input[name=email]").on("focusout",function(){var e=$(this);var t=$(".email-suggestion");$(this).mailcheck({suggested:function(e,n){t.find("span").text(n.address);t.find("b").text(n.domain);t.slideDown("fast")},empty:function(){t.slideUp("fast")}});t.find("a").on("click",function(){$(this).hasClass("apply")&&e.val($(this).text());t.slideUp("fast");return false})});