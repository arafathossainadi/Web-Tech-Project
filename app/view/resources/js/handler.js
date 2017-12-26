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
		window.location = "../../../../app/view/panel/admin/dashboard.php";
	}
	else if(uname.value == "emp"){
		window.location = "../../../../app/view/panel/employee/dashboard.php";
	}
	else if(uname.value == "cust"){
		window.location = "../../../../app/view/panel/customer/dashboard.php";
	}
}