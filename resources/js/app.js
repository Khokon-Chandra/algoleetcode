import './bootstrap';

import jQuery from 'jquery';

import 'flowbite';

import.meta.glob([
    '../images/**'
])


window.$ = jQuery;



/**
 * Navigation bar 
 */

$('#hamBarButton').click(function(){
    $('#mobileMenu').removeClass('-z-20 opacity-0').addClass('z-20 opacity-1')
})

$('#closeMobileNav').click(function(){
    $('#mobileMenu').removeClass('z-20 opacity-1').addClass('-z-20 opacity-0')
})