function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#empp').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#uploadimage").change(function() {
  readURL(this);
});

function loginhandle() {
	var uname = document.getElementById('username');
	var pass = document.getElementById('password');

	if (uname.value == "admin") {
		window.location = "./Dashboard.php";
	}
	else if(uname.value == "emp"){
		window.location = "./EmployeeDashboard.php";
	}
}