document.querySelector('[data-action="click"]').addEventListener('click', function() {
    var element = document.getElementById("info");
    element.classList.remove("hidden");
})

document.querySelector('[data-action="click-display"]').addEventListener('click', function() {
    var element = document.getElementById("info");
    element.classList.add("hidden");
})