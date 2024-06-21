/** Import tailwind. */
import './lib/vendor/hamburger.css';
import './app.css';

/** Import components. */
import Car from './lib/components/Carousel.svelte';
import Nav from './lib/components/Navigation.svelte';

/** Declare init function. */
function init() {
    document.querySelectorAll('.svelte-carousel').forEach((element) => {
        if (!element.hasChildNodes()) {
            new Car({
                target: element,
            });
        }
    });
    document.querySelectorAll('.svelte-navigation').forEach((element) => {
        if (!element.hasChildNodes()) {
            new Nav({
                target: element,
            });
        }
    });
}

/** Run init function. */
init();

var targetNode = document.querySelector('body');
var config = { attributes: false, childList: true, subtree: true };

var callback = function (mutationsList, observer) {
    for (var mutation of mutationsList) {
        if (mutation.type == 'childList') {
            if (mutation.target.querySelector('.svelte-table')) {
                init();
            }
        }
    }
};

var observer = new MutationObserver(callback);

/** Start observing the target node for configured mutations  */
observer.observe(targetNode, config);
