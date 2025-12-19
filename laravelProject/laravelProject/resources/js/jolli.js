const openModalDevice = document.querySelector(".open-modal-device");
const closeModalDevice = document.querySelector(".close-modal-device");
const navDeviceBody = document.querySelector(".nav-device-body");
const sidePanel = navDeviceBody.querySelector(".bg-white");

openModalDevice.addEventListener("click", (e) => {
    navDeviceBody.classList.remove("hidden");
    navDeviceBody.classList.add("flex");
    setTimeout(() => {
        navDeviceBody.classList.add("opacity-100");
        sidePanel.classList.remove("-translate-x-full");
        sidePanel.classList.add("translate-x-0");
    }, 50);
});

closeModalDevice.addEventListener("click", () => {
    outside();
});

navDeviceBody.addEventListener("click", () => {
    outside();
});
function outside() {
    // fade out overlay
    navDeviceBody.classList.remove("opacity-100");
    navDeviceBody.classList.add("opacity-0");

    //  -translate-x-full
    // slide menu out
    sidePanel.classList.remove("translate-x-0");
    sidePanel.classList.add("-translate-x-full");

    // after animation, hide overlay
    setTimeout(() => {
        navDeviceBody.classList.add("hidden");
        navDeviceBody.classList.remove("flex");
    }, 300); // match duration-300
}
