function validate() {
    var fname = document.getElementById('f_name');
    var email = document.getElementById('email');
    var subj = document.getElementById('sub_ject');
    var body = document.getElementById('body');
 


    if (fname.value == "" || email.value == "" || subj.value == "" || body.value == ""){
        
        swal ( "Oops" ,  "Please Complete Fields!" ,  "error" );
        return false;
    }
    else{
        swal("submitted!", "thankyouu!", "success");
        return true;
    }

}