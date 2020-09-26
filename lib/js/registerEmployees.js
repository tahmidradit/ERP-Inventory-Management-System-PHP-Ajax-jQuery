$("#register").click(function () {
    var UserName = document.getElementById('UserName').value;
    var Name = document.getElementById('Name').value;
    var Password = document.getElementById('Password').value;
    //var Department = document.getElementById('Department').value;
    //var Designation = document.getElementById('Designation').value;
    var formData = $("#form").serialize();
    var xmlHttpRequest = new XMLHttpRequest();
    xmlHttpRequest.open('POST', '../Controllers/registerEmployees.php', true);
    xmlHttpRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttpRequest.send(formData);
    if (UserName != "" && Name !="" && Password !="") {
        xmlHttpRequest.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $("#statusMessage").append("Registered new employee !").css('color', '#14c41f');
                document.getElementById('UserName').value = '';
                document.getElementById('Name').value = '';
                document.getElementById('Password').value = '';
                document.getElementById('Department').value = '';
                document.getElementById('Designation').value = '';
                setTimeout(function () {
                    $("#statusMessage").html("");
                }, 3000);
            }
        }
    }
    else {
        $("#statusMessage").append("You can't leave any fields empty !").css('color', 'red');
        setTimeout(function () {
            $("#statusMessage").html("");
        }, 3000);
    }
});




