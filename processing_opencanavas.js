
var buttons = document.getElementsByClassName("buttonProcessing");
for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function () {
        var buttonValue = this.getAttribute("data-value");
        $.ajax({
            type: "POST",
            url: "opencanavas.php",
            data: {oid: buttonValue},
            success: function (data) {
                $("#data").html(data);
            }
        });
    });
}

// });