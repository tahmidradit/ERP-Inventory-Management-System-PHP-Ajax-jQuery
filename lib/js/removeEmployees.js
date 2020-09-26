$("#remove").click(function () {        
    var Id = document.getElementById('Id').value;
    var formData = $("#form").serialize();
    var xmlHttpRequest = new XMLHttpRequest();
    xmlHttpRequest.open('POST', '../Controllers/removeEmployees.php', true);
    xmlHttpRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttpRequest.send(formData);
    if (Id == "") {
        $("#statusMessage").append("You can't leave id empty !").css('color', 'red');
        setTimeout(function () {
            $("#statusMessage").html("");
        }, 3000);
    } else {
        xmlHttpRequest.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $("#statusMessage").append("Removed employee !").css('color', '#14c41f');
                document.getElementById('Id').value = '';
                //$("#removePageEmployeeTable").load(" #removePageEmployeeTable");
                setTimeout(function () {
                    $("#statusMessage").html("");
                }, 3000);
                $("#redirect").load("../Controllers/employeeList.php");
                $("#employeesTableCalled").remove();
                
            }
        }
    }
});