import baguetteBox from 'baguettebox.js';

(function() {
    "use strict";

    // Make sure baguettebox is desired on this page
    if(document.querySelector('.gallery') == null) {
        return;
    }

    if (!window.gallery) {
        baguetteBox.run('.gallery', {
            caption: true,
        });
        console.log('here');
    }
})();
