export class CircleText extends HTMLElement {
    constructor() {
        super();
        let shadowRoot = this.attachShadow({ mode: "open" });
        console.log(this.getAttribute("extra"));
        this.shadowRoot.innerHTML = /*html*/ `
  <style>
:host {
  --circle-ajuster: ${5};
  --circle-size: ${this.getAttribute("size") || "10rem"};
  font-weight: 600;
  color: black;
  position: fixed;
  bottom: 0;
}

.circle-svg {
  fill: inherit;
  width: var(--circle-size);
  height: var(--circle-size);
}
.background-flower {
  position: absolute;
  top: 0;
  left: 0;
  width: var(--circle-size);
  height: var(--circle-size);
  background-image: url(/images/flower.svg);
  background-size: calc(var(--circle-size) / 2.5);
  background-position: center;
  background-repeat: no-repeat;
  animation: rotate 40s reverse infinite running linear;
}
.circle-svg circle {
  transform-origin: center;
}
.circle-svg text {
  transform-origin: center;
  animation: rotate 12s infinite running linear;
  font-size: calc(var(--circle-size) / var(--circle-ajuster));
  letter-spacing: ${this.getAttribute("letter-spacing") || 0};
}

.circle-text textPath {
  font-family: inherit;
}

@keyframes rotate {
  0% {
    transform: rotate(0);
  }
  100% {
    transform: rotate(1turn);
  }
}
</style>
  <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="circle-svg">
    <path id="circle" fill="none" stroke="none" d="M 100, 100 m -75, 0 a 75,75 0 1,0 150,0 a 75,75 0 1,0 -150,0" />
    <text>
      <textPath href="#circle">
      ${this.innerHTML}
      </textPath>
    </text>
  </svg>
  <div class="background-flower"></div>
`;
    }
}
