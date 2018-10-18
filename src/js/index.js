import { addClass, removeClass, toggleClass, siblings } from "./modules/helpers.js";



var toggleTarget = function(toggleAttr, className) {
    var togglesArray = Array.from(document.querySelectorAll('[' + toggleAttr + ']')); 
    togglesArray.forEach(function(item) {
        item.addEventListener(
            'click',
            function(event) {
                var target = document.querySelectorAll(this.getAttribute(toggleAttr))[0];
                toggleClass(target, className);
                event.preventDefault();
            },
            false
        );
    });

}

toggleTarget('data-toggle-card', 'show');


var dropdowns = function(buttonname) {
    var dropdownsArray = Array.from(document.querySelectorAll(buttonname)); 

    dropdownsArray.forEach(function(item) {
    
        item.addEventListener(
            'click', 
            function() {
                let expanded = this.getAttribute('aria-expanded') === 'true' || false;
                this.setAttribute('aria-expanded', !expanded);
                let menu = this.nextElementSibling;
                menu.hidden = !menu.hidden;
                let mybutton = this;
                dropdownsArray.forEach(function(other) {
                    if (other != mybutton) {
                        other.setAttribute('aria-expanded', 'false');
                        other.nextElementSibling.hidden = true;
                    }
                });
            },
            false
        );
    
    });
}

dropdowns('.js-dropdown__button');



var collapsible = function(collapsiblename, collapsibletarget) {
    var collapsiblesArray = Array.from(document.querySelectorAll(collapsiblename)); 

    collapsiblesArray.forEach(function(item) {
    
        item.addEventListener(
            'click', 
            function() {
                let expanded = this.getAttribute('aria-expanded') === 'true' || false;
                this.setAttribute('aria-expanded', !expanded);
                let target = document.querySelector(this.getAttribute('data-target'));
                target.hidden = !target.hidden;
                let mybutton = this;
                collapsiblesArray.forEach(function(other) {
                    if (other != mybutton) {
                        other.setAttribute('aria-expanded', 'false');
                        Array.from(document.querySelectorAll(collapsibletarget)).forEach(function(targetitem){
                            if (targetitem != target) {
                                targetitem.hidden = true;
                            }
                        });
                    }
                });
            },
            false
        );
    
    });
}

collapsible('.js-collapsible__button', '.js-collapsible__panel');

Array.from(document.querySelectorAll('.js-collapsible')).forEach(function(item) {
    item.querySelector('.js-collapsible__button').addEventListener(
        'click',
        function() {
            if (item.querySelector('js-collapsible__panel').hidden != true) {
                addClass(item, 'is-open');
            }
            else {
                removeClass(item, 'is-open');
            }
        },
        false
    );
});

document.querySelector('.c-resp-menu__button').addEventListener(
    'click',
    function() {
        toggleClass(document.querySelector('.c-resp-menu__list'), 'visible');
        
    },
    false
);