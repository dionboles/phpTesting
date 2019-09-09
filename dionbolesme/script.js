(function() {
    if ((new Date).getHours() >= 18) {
        $("body").removeClass("bg-light");
        $("#title").removeClass("text-dark");
        document.body.style.backgroundColor = "#222", 
        document.getElementById("subtitle").style.color = "white", 
        document.getElementById("title").style.color = "white", 
        document.getElementById("dateTime").style.color = "white";
        e = document.getElementsByClassName("navItem");
        for (i = 0; i < e.length; i++) e[i].style.color = "white", e[i].style.fontWeight = "500"
    } else {
        $("body").addClass("bg-light");
        document.getElementById("title").style.color = "#222";
        var e = document.getElementsByClassName("navItem");
        for (i = 0; i < e.length; i++) e[i].style.color = "#222", e[i].style.fontWeight = "500"
    }

    function update() {
        $("#dateTime").html(moment().format('h:mm a'));
    }
    
    setInterval(update, 1000);

})();

