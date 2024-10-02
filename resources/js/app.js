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

$('#hamBarButton').click(function () {
    $('#mobileMenu').removeClass('-z-20 opacity-0').addClass('z-20 opacity-1')
})

$('#closeMobileNav').click(function () {
    $('#mobileMenu').removeClass('z-20 opacity-1').addClass('-z-20 opacity-0')
})


/**
 * Problems page --> filter option difficulty
 */
// JavaScript to ensure only one checkbox is selected at a time
const checkboxes = document.querySelectorAll('.single-checkbox');

checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function () {
        if (this.checked) {
            checkboxes.forEach(other => {
                if (other !== this) {
                    other.checked = false;
                }
            });
        }
    });
});