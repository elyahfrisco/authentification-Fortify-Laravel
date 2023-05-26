/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/globalFn.js ***!
  \**********************************/
window.addEventListener("load", function () {
  var loader = document.querySelector(".loader");
  setTimeout(function () {
    loader.classList.add("loader--hidden");
    loader.addEventListener("transitionend", function () {
      document.body.removeChild(loader);
    });
  }, 1000);
});
/******/ })()
;