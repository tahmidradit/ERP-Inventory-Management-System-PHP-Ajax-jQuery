$("#record").click(function () {
    var Name = document.getElementById('Name').value;
    var Partner = document.getElementById('Partner').value;
    var Project = document.getElementById('Project').value;
    var Date = document.getElementById('Date').value;
    var formData = $("#form").serialize();
    var xmlHttpRequest = new XMLHttpRequest();
    xmlHttpRequest.open('POST', '../Controllers/registerDeals.php', true);
    xmlHttpRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttpRequest.send(formData);
    if (Name == "" || Partner == "" || Project == "" || Date == "") {
        $("#statusMessage").append("You can't leave any fields empty !").css('color', 'red');
        setTimeout(function () {
            $("#statusMessage").html("");
        }, 3000);
    } else {
        xmlHttpRequest.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $("#statusMessage").append("New Deal Recorded !").css('color', '#14c41f');
                document.getElementById('Name').value = '';
                document.getElementById('Partner').value = '';
                document.getElementById('Project').value = '';
                document.getElementById('Date').value = '';
                setTimeout(function () {
                    $("#statusMessage").html("");
                }, 3000);
            }
        }
    }
});




