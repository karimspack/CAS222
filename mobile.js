/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: week8.js
Date: 02/13/19
Programmer: Karim Mazza
*/

$( document ).ready(function() {

    //alert("The program is working!");

    $(".cross").hide();
    
    $(".menu").hide();
    
    $(".hamburger").show();
	
	$(".hamburger").on("click", function() {
            
        $(".menu").slideToggle("slow");
            
        $(".hamburger").hide();
            
        $(".cross").show();
            
        });
    
        $(".cross").on("click", function() {
            
        $(".menu").slideToggle("slow");
            
        $(".cross").hide();
            
        $(".hamburger").show();
            
        });

});