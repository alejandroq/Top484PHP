// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

/**
 * Galereya v0.9.93
 * http://vodkabears.github.com/galereya/
 *
 * Licensed under the MIT license
 * Copyright (c) 2013, VodkaBears
 */
(function(c){c.fn.galereya=function(N){var e=this,O,G,x,j=c([]),h=c([]),g,y,n,r,B,H,s,C=c([]),m=c([]),p=[],t=[],f=[],u=[],P,Q,R,k=0,D=300,S,T,l,U,v=!1,w,ea=function(){V()},fa=function(a){0===c(a.target).closest(".galereya-cats").length&&h.removeClass("open")},ga=function(a){var b=c(a.target);"SPAN"===a.target.nodeName&&(b=b.parent());b.is(":first-child")||W(b.find("span").text());h.toggleClass("open")},X=function(a){e.options.disableSliderOnClick||I(parseInt(this.getAttribute("data-visibleIndex"), 10));e.options.onCellClick(a)},ha=function(){J("next")},ia=function(){J("prev")},ja=function(){K()},ka=function(){w?z():E()},la=function(a){v&&(37===a.which||39===a.which)&&a.preventDefault()},ma=function(a){if(v)switch(a.which){case 27:K();break;case 37:r.click();break;case 39:n.click()}},L=function(){var a=document.createElement("div").style;return"transition"in a||"WebkitTransition"in a||"MozTransition"in a||"msTransition"in a||"OTransition"in a},Y=function(a){a=a.css("transitionDuration")||a.css("webkitTransitionDuration")|| a.css("mozTransitionDuration")||a.css("oTransitionDuration")||a.css("msTransitionDuration")||0;return a=1E3*parseFloat(a)},Z=function(a){a=c(document.createElement("img")).attr("src",a);e.append(a);x=x.add(a);return a},M=function(a){a={lowsrc:a.lowsrc||"",fullsrc:a.fullsrc||"",title:a.title||"",description:a.description||"",category:a.category||""};a.category&&(a.category=a.category.toLowerCase(),-1===c.inArray(a.category,t)&&t.push(a.category));p.push(a);return a},A=function(a,b){a=a||0;if(!(a>= x.length))if(clearTimeout(T),b&&p[a].category!==b)setTimeout(function(){A(++a,b)},0);else{var d=x[a],q=function(){v?c(this).parent().show():c(this).parent().fadeIn(e.options.cellFadeInSpeed,"linear");T=setTimeout(function(){A(++a,b)},e.options.cellFadeInSpeed/2)};d.complete?q.call(d):c(d).attr("src",d.src).load(q);d=j[a];$(d,f.length);q=f.push(d)-1;c(d).addClass("visible").attr("data-visibleIndex",q)}},$=function(a,b){var d,c;d=b%k;d=d*D+e.options.spacing*d;b>=k?(c=f[b-k],c=c.offsetTop+c.offsetHeight+ e.options.spacing):c=0;a.style.top=c+"px";a.style.left=d+"px"},aa=function(a){a=a||0;a>=j.length&&(a=0);var b=c(j[a]);b.addClass("wave");setTimeout(function(){b.removeClass("wave");aa(++a)},e.options.waveTimeout)},W=function(a){U=a;h.empty().prepend('<li class="galereya-cats-item"><span>'+a+"</span></li>");f=[];j.stop(!0,!0).fadeOut(200).removeClass("visible");a===e.options.noCategoryName?A(0):(h.append('<li class="galereya-cats-item"><span>'+e.options.noCategoryName+"</span></li>"),A(0,a));for(var b= 0,c=t.length,q;b<c;b++)q=t[b],q!==a&&h.append('<li class="galereya-cats-item"><span>'+q+"</span></li>")},V=function(){D=j.width();k=Math.floor(e.width()/(D+e.options.spacing));1>k&&(k=1);R=k*D+(k-1)*e.options.spacing;0===m.length&&(m=C.find(".galereya-slide-img"));m.css("margin-top",(c(window).height()-m.height())/2);G.width(R);for(var a=0,b=f.length;a<b;a++)$(f[a],a)},I=function(a){if(v)setTimeout(function(){I(a)},50);else{z();y.empty();l=a;var b=Y(g),d=function(){P=c("html").css("overflow");Q=c("body").css("overflow"); S=c(window).scrollTop();c("html, body").css("overflow","hidden")};g.show(0,function(){g.addClass("opened");L()?setTimeout(d,b+50):d()});v=!0;J();ba()}},K=function(){if(v){c("html").css("overflow",P);c("body").css("overflow",Q);c(window).scrollTop(S);var a=Y(g),b=function(){z();u=[];y.empty();g.hide();v=!1};g.removeClass("opened");L()?setTimeout(b,a+50):b()}},ca=function(a){clearInterval(w);a=parseInt(f[a].getAttribute("data-index"),10);var b,d;b=c('<div class="galereya-slider-slide" />').html('<div class="galereya-slide-loader"></div>'); d=c('<img class="galereya-slide-img" src="'+p[a].fullsrc+'" alt="'+p[a].title+'" />').load(function(){b.html(d);d.css("margin-top",(c(window).height()-d.height())/2);w&&E()});return b},J=function(a){a=a||"next";w&&(z(),E());var b;a=a.toLowerCase();var d,e=f.length;if("next"===a){if(0===u.length)b=l,a="";else if(b=l+1,b>=e)return;d=u[b];d||(d=ca(b),d.addClass(a),y.append(d),u[b]=d);F(d,"current");F(C,"prev")}else if("prev"===a){0!==u.length&&(a="");b=l-1;if(0>b)return;d=u[b];d||(d=ca(b),d.addClass(a), y.prepend(d),u[b]=d);F(d,"current");F(C,"next")}l=b;C=d;b=f[l].getAttribute("data-index");B.empty().html('<div class="galereya-slider-desc-title">'+p[b].title+" </div>"+p[b].description);m=d.find(".galereya-slide-img");m.css("margin-top",(c(window).height()-m.height())/2);ba()},F=function(a,b){setTimeout(function(){a.removeClass("prev").removeClass("next").removeClass("current").addClass(b)},50)},ba=function(){l>=f.length-1?(z(),s.hide(),n.hide()):(s.show(),n.show());0>=l?r.hide():r.show()},E=function(){s.addClass("pause"); w=setInterval(function(){n.click()},e.options.slideShowSpeed)},z=function(){s.removeClass("pause");clearInterval(w);w=null};this.options=c.extend({},{spacing:0,wave:!0,waveTimeout:300,modifier:"",slideShowSpeed:1E4,cellFadeInSpeed:200,noCategoryName:"all",disableSliderOnClick:!1,load:function(a){a()},onCellClick:function(){}},N);this.openSlider=I;this.closeSlider=K;this.changeCategory=W;this.startSlideShow=E;this.stopSlideShow=z;this.nextSlide=function(){n.click()};this.prevSlide=function(){r.click()}; this.loadMore=function(a){if(a&&a.length){for(var b=0,c=j.length,e=c,h=a.length,f,g;b<h;b++,e++)f=M(a[b]),g=Z(f.lowsrc),g=g.addClass("galereya-cell-img").wrap('<div class="galereya-cell" data-index="'+j.length+'"></div>').parent().append('<div class="galereya-cell-desc"><div class="galereya-cell-desc-title">'+f.title+'</div><div class="galereya-cell-desc-text">'+f.description+"</div></div>").append('<div class="galereya-cell-overlay" />'),g.click(X),j=j.add(g),G.append(g);A(c,U)}};e.addClass("galereya").addClass(e.options.modifier); var da;x=e.find("img").each(function(a,b){da={lowsrc:b.getAttribute("src")||"",fullsrc:b.getAttribute("data-fullsrc")||"",title:b.getAttribute("title")||b.getAttribute("alt")||"",description:b.getAttribute("data-desc")||"",category:b.getAttribute("data-category")||""};M(da)});e.options.load(function(a){if(a&&a.length)for(var b=0,d=a.length,f;b<d;b++)f=M(a[b]),Z(f.lowsrc);if(0<t.length){h=c('<ul class="galereya-cats" />');O=c('<div class="galereya-top" />');e.prepend(O.html(h));h.append('<li class="galereya-cats-item"><span>'+ e.options.noCategoryName+"</span></li>");for(a=0;a<t.length;a++)h.append('<li class="galereya-cats-item"><span>'+t[a]+"</span></li>")}var k,l,m;x.wrapAll('<div class="galereya-grid" />').each(function(a,b){k=c(b);l=p[a].title;m=p[a].description;k.addClass("galereya-cell-img").wrap('<div class="galereya-cell" data-index="'+a+'"></div>').parent().append('<div class="galereya-cell-desc"><div class="galereya-cell-desc-title">'+l+'</div><div class="galereya-cell-desc-text">'+m+"</div></div>").append('<div class="galereya-cell-overlay" />')}); j=e.find(".galereya-cell");G=e.find(".galereya-grid");g=c('<div class="galereya-slider" />');y=c('<div class="galereya-slider-container" />');n=c('<div class="galereya-slider-nav right" />');r=c('<div class="galereya-slider-nav left" />');B=c('<div class="galereya-slider-desc" />');H=c('<div class="galereya-slider-close" />');s=c('<div class="galereya-slider-play" />');g.addClass(e.options.modifier).append(y).append(n).append(r).append(B).append(B).append(H).append(s);c(document.body).append(g);e.show(); V();A();e.options.wave&&L()&&aa();c(window).bind("resize",ea);c(document.body).click(fa).keydown(la).keyup(ma);h.click(ga);j.click(X);n.click(ha);r.click(ia);H.click(ja);s.click(ka)});1<this.length&&this.each(function(){c(this).galereya(N)});return this}})(jQuery);