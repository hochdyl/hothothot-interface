(function() {
    let source = document.querySelector(".main .alerts ul")
    source.addEventListener("click", function(e) {
        e.preventDefault();
        if (e.target.nodeName == 'H2' || e.target.nodeName == 'H3') loadData(e);
        e.stopPropagation();
    }, false);
})();

function loadData(e) {
    appelAjax(e).then((result) => { updatePage(result); });
}

function appelAjax(e) {
    return new Promise((resolve, reject) => {
        const reqXhr = new XMLHttpRequest();
        reqXhr.open('POST', 'json/alerts.json', true);
        reqXhr.setRequestHeader('Content-Type', 'application/json');

        let alert = e.target;
        while (alert.nodeName != 'A') alert = alert.parentElement;
        alert = alert.dataset.alert;

        reqXhr.send(JSON.stringify({ alert: alert, }));

        reqXhr.onload = function () {
            if (this.readyState === XMLHttpRequest.DONE)
                this.status === 200 ? resolve(JSON.parse(reqXhr.responseText)[alert]) : reject(new Error("Unknown alert"));
        }
    });
}

function updatePage(result) {
    let popup = document.querySelector(".alerts-popup");
    let main = document.querySelector("main");
    document.querySelector("#alertTemperature").innerHTML = result.Temperature;
    document.querySelector("#alertSensor").innerHTML = result.Sensor;
    document.querySelector("#alertDate").innerHTML = result.Date;
    document.querySelector("#alertTime").innerHTML = result.Time;
    document.querySelector("#alertTitle").innerHTML = result.Title;
    main.classList.add("disable");
    fadeIn(popup,"block");
}

(function() {
    let popup = document.querySelector(".alerts-popup");
    let main = document.querySelector("main");
    window.addEventListener("click", function(e) {
        e.preventDefault();
        if( main.classList.contains("disable") ) {
            fadeOut(popup);
            main.classList.remove("disable")
        };
        e.stopPropagation();
    }, false);
})();


