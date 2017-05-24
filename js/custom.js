var mcFormListener = document.getElementById("mc-email-b");
mcFormListener.addEventListener("focus", mcShowOptions, true);
mcFormListener.addEventListener("blur", mcHideOptions, true);

function mcShowOptions(option) {
    document.getElementById("mc-choices-b-1").style.visibility = "visible";
}

function mcHideOptions(option) {
    document.getElementById("mc-choices-b-1").style.visibility = "hidden";
}
