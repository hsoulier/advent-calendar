require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

// TODO: Fix this
[...document.querySelectorAll("#scroll-to-next-screen")].forEach(($el) => {
    $el.addEventListener("click", () => document.body.scrollBy(0, window.innerHeight));
});
