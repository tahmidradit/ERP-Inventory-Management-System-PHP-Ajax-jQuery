$("#add").click(function () {
    var Name = document.getElementById('Name').value;
    var Department = document.getElementById('Department').value;
    var Designation = document.getElementById('Designation').value;
    var Salary = document.getElementById('Salary').value;
    var Date = document.getElementById('Date').value;
    var PaymentStatus = document.getElementById('PaymentStatus').value;
    var formData = $("#form").serialize();
    var xmlHttpRequest = new XMLHttpRequest();
    xmlHttpRequest.open('POST', '../Controllers/addSalary.php', true);
    xmlHttpRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttpRequest.send(formData);
    if (Name == "" || Salary == "" || Date == "") {
        $("#statusMessage").append("You can't leave any fields empty !").css('color', 'red');
        setTimeout(function () {
            $("#statusMessage").html("");
        }, 3000);
    } else {
        xmlHttpRequest.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $("#statusMessage").append("New Salary Added !").css('color', '#14c41f');
                document.getElementById('Name').value = '';
                document.getElementById('Date').value = '';
                document.getElementById('Salary').value = '';
                setTimeout(function () {
                    $("#statusMessage").html("");
                }, 3000);
            }
        }
    }
});




