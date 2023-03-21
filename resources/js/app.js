import "./bootstrap";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
import "flowbite";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// const fuck = document.querySelector(".fuck");

// fuck.onclick = () => {
//     alert("fuck");
// };

// function cerrar() {
//     alert("cerrar");
// }
