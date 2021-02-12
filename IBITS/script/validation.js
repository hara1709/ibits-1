function validate() {
    var studID = document.getElementById('stud_ID');
    var email = document.getElementById('email');
    var lastName = document.getElementById('last_name');
    var firstName = document.getElementById('first_name');
    var middleName = document.getElementById('middle_name');
    var birthday = document.getElementById('birthday');
    var course = document.getElementById('course');

    if (studID.value == "" || email.value == "" || lastName.value == "" || firstName.value == "" || middleName.value == "" 
         || birthday.value == "" || course.value == "COURSE"){
        
        swal ( "Oops" ,  "Please Complete Fields!" ,  "error" );
        return false;
    }
    else{
        swal("submitted!", "thankyouu!", "success");
        return true;
    }

}

