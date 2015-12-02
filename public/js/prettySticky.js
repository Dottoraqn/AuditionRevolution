/*!
 * prettySticky - v1 - 2014-10-26
 * https://github.com/moyamiller/prettySticky
 * Copyright (c) 2014 Moya Miller
 */

$(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop() + 90;
        var currentArea = $("section").filter(function() {
        	return scroll <= $(this).offset().top + $(this).height();
        });
        $(".nav a").removeClass("selected");
        $(".nav a[href=#" + currentArea.attr("id") + "]").addClass("selected");

        if ($(window).scrollTop() > 100) {
            $('nav').addClass("navScroll");
            $('ul').addClass("nav-things");
            $('img.logo').addClass("logoScroll");
            $('div.menu').addClass("menuScroll");
            $('ul').removeClass("navbar-nav");
            $('nav').position("relative");

        } else if ($(window).scrollTop() < 100 ) {
            $('nav').removeClass("navScroll");
            $('ul').removeClass("nav-things");
            $('img.logo').removeClass("logoScroll");
            $('div.menu').removeClass("menuScroll");
            $('ul').addClass("navbar-nav");
            $('nav').position("absolute");
        }
    });
});
