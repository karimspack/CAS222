/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: week7.js
Date: 03/15/19
Programmer: Karim Mazza
*/

// The line below will test the link to the week7.js file. Comment it out when it works.
//alert("the link to the .js file is correct!");

// The line below will test the link to jquery.min.js . Comment it out when it works.
//if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

// Enter your jQuery code below this line (put a blank line in first).

$(document).ready(function() {
    
//alert("The program is working!");
    
    $("h1").text("ACE IN THE HOLE");
   
   $("h2").text("Frequently Asked Questions (FAQ)");
	
    $("h1").css("color", "#ff0000");
    
    $("h1").addClass("headings");
    
    $(".headings").css("font-family", "Arial, Helvetica, sans-serif");
    
    $(".headings").css("text-align", "center");
    
    $("dd").hide();
    
    $("dt").on("click", function(){
    
        //alert("You clicked a question!");
        
        //$(this).next().show();
        
        //$(this).next().toggle();
        
        //$(this).next().slideToggle();
        
        //$(this).addClass("open");
        
        //$(this).toggleClass("open");
        
        $(this).toggleClass("open").next().slideToggle();
    
    });
    
    
});
