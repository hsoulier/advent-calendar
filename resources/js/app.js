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

if (document.querySelector(".dashboard")) {
    [...document.querySelectorAll("[data-tab-selector]")].forEach(($el, i) => {
        $el.addEventListener("click", (e) => {
            [
                ...document.querySelectorAll(
                    `[data-tab]:not([data-tab="${i + 1}"])`
                ),
            ].forEach((el) => {
                el.classList.remove("active");
                el.classList.add("not-active");
            });
            const $currentTab = document.querySelector(`[data-tab="${i + 1}"]`);
            $currentTab.classList.add("active");
            $currentTab.classList.remove("not-active");

            // $tab.click();
        });
    });
}
