require("./bootstrap");
import { CircleText } from "./web-components/circle-text";

import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

// TODO: Fix this
[...document.querySelectorAll("#scroll-to-next-screen")].forEach(($el) => {
    $el.addEventListener("click", () =>
        window.scroll({ top: window.innerHeight, behavior: "smooth" })
    );
});

customElements.define("circle-text", CircleText);

if (document.querySelector("dashboard")) {
    [...document.querySelectorAll("[data-tab-selector]")].forEach(($el, i) => {
        $el.addEventListener("click", (e) => {
            console.log(e, i);
            // const $tab = document.querySelectorAll(`[]`);
            // $tab.click();
        });
    });
}
