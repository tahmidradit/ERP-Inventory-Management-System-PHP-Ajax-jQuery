$("#delete").click(function () {
    var Id = document.getElementById('Id').value;
    var formData = $("#form").serialize();
    var xmlHttpRequest = new XMLHttpRequest();
    xmlHttpRequest.open('POST', '../Controllers/deleteSalary.php', true);
    xmlHttpRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttpRequest.send(formData);
    if (Id == "") {
        $("#statusMessage").append("You can't leave any fields empty !").css('color', 'red');
        setTimeout(function () {
            $("#statusMessage").html("");
        }, 3000);
    } else {
        xmlHttpRequest.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $("#statusMessage").append("Saved Changes !").css('color', '#14c41f');
                document.getElementById('Id').value = '';
                setTimeout(function () {
                    $("#statusMessage").html("");
                }, 3000);
                $("#redirect").load("../Controllers/salariesList.php");
                $("#salariesTableCalled").remove();
            }
        }
    }
});




