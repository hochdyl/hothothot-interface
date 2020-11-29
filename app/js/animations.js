function fadeOut(popup) {
    popup.style.opacity = 1;
    (function fade() {
        if ((popup.style.opacity -= .1) < 0) {
            popup.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
};

function fadeIn(popup, display) {
    popup.style.opacity = 0;
    popup.style.display = display || "block";
    (function fade() {
        var val = parseFloat(popup.style.opacity);
        if (!((val += .1) > 1)) {
            popup.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
};