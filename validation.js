function loginvalidatation() {
    var lblMsg = document.getElementById("login_validation");


    if (document.getElementById("username").value == "") {
        lblMsg.innerHTML = "Username is Required...";
        document.getElementById("username").focus();
        return false;
    }
    var numbers = /^[0-9]+$/;
    if (!(document.getElementById("username").value.match(numbers))) {
        lblMsg.innerHTML = "Please Username numeric characters only";
        document.getElementById("username").focus();
        return false;
    }
    var len = document.getElementById("username").value.length; //alert("0--"+document.getElementById("username").value.length);
    if (len < 10) {
        lblMsg.innerHTML = "Please Required Username Minimum 10  Digits only";
        document.getElementById("username").focus();
        return false;
    }
    if (len > 13) {
        lblMsg.innerHTML = "Please Required username Maxmimum 13  Digits only";
        document.getElementById("username").focus();
        return false;
    }


    if (document.getElementById("password").value == "") {
        lblMsg.innerHTML = "Password is Required...";
        document.getElementById("password").focus();
        return false;
    }
    var lens = document.getElementById("password").value.length; //alert("0--"+document.getElementById("username").value.length);
    if (lens > 15) {
        lblMsg.innerHTML = "Please Required Password 15  Digits only";
        document.getElementById("password").focus();
        return false;
    }
    //lblMsg = "";

    $.ajax({
        url: "ajax.php",
        type: "post",
        //async: false,
        data: {
            loginprocess: "1",
            username: $("#username").val(),
            password: $("#password").val()
        },
        success: function(response) {

            if ($.trim(response) == '1') {
                window.location.href = "userhome.php";
            } else {
                lblMsg.innerHTML = "This Mobile Number & Password don't have!"; //Invalid Credentials";
                document.getElementById("username").focus();
                return false;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
    return false;
}

function registrationvalidation() {
    var lblMsg = document.getElementById("registration_validation");

    //NAME
    if (document.getElementById("names").value == "") {
        lblMsg.innerHTML = "Name is Required...";
        document.getElementById("names").focus();
        return false;
    }
    var letters = /^[A-Za-z]+$/;
    if (!(document.getElementById("names").value.match(letters))) {
        lblMsg.innerHTML = "Please Username  characters only";
        document.getElementById("names").focus();
        return false;
    }
    var lens = document.getElementById("names").value.length; //alert("0--"+document.getElementById("username").value.length);
    if (lens < 5) {
        lblMsg.innerHTML = "Please Required name Minimum 5  Digits only";
        document.getElementById("names").focus();
        return false;
    }
    if (lens > 33) {
        lblMsg.innerHTML = "Please Required name Maxmimum 33  Digits only";
        document.getElementById("names").focus();
        return false;
    }

    //MOBILENO
    if (document.getElementById("mobileno").value == "") {
        lblMsg.innerHTML = "Mobileno is Required...";
        document.getElementById("mobileno").focus();
        return false;
    }
    var numbers = /^[0-9]+$/;
    if (!(document.getElementById("mobileno").value.match(numbers))) {
        lblMsg.innerHTML = "Please mobileno numeric characters only";
        document.getElementById("mobileno").focus();
        return false;
    }

    var len = document.getElementById("mobileno").value.length; //alert("0--"+document.getElementById("username").value.length);
    if (len < 10) {
        lblMsg.innerHTML = "Please Required mobileno Minimum 10  Digits only";
        document.getElementById("mobileno").focus();
        return false;
    }
    if (len > 13) {
        lblMsg.innerHTML = "Please Required mobileno Maxmimum 13  Digits only";
        document.getElementById("mobileno").focus();
        return false;
    }
    $.ajax({
        url: "ajax.php",
        type: "post",
        data: {
            type_diff: "already_field_exit",
            field_nam:"mobilenumber",
            
            field_val: $("#mobileno").val()
        },
        success: function(response) {
//alert("testing!!!"+response);
             var field_dis="Mobileno";
             var field_id="mobileno";
            if ($.trim(response) == '1') { 
              return true;             
            } else {
              lblMsg.innerHTML = "This "+field_dis+" already exit!";//Invalid Credentials";
              document.getElementById(field_id).focus();
              return false;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
       }); 

    //PASSWORD
    if (document.getElementById("passwords").value == "") {
        lblMsg.innerHTML = "Password is Required...";
        document.getElementById("passwords").focus();
        return false;
    }
    var lenss = document.getElementById("passwords").value.length;
    if (lenss < 5 || lenss > 15) {
        lblMsg.innerHTML = "Please Required password Maxmimum 5-15  Digits only";
        document.getElementById("passwords").focus();
        return false;
    }

    //EMAIL
    if (document.getElementById("email").value == "") {
        lblMsg.innerHTML = "Email is Required...";
        document.getElementById("email").focus();
        return false;
    }
    var x = document.getElementById("email").value;
    var atposition = x.indexOf("@");
    var dotposition = x.lastIndexOf(".");
    if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        lblMsg.innerHTML = "Valid Email address  is Required...";
        return false;
    }

    $.ajax({
        url: "ajax.php",
        type: "post",
        data: {
            type_diff: "already_field_exit",
            field_nam:"emailid",
            
            field_val: $("#email").val()
        },
        success: function(response) {//alert("testing!!!"+response);
             var field_dis="Email Id";
             var field_id="email";
            if ($.trim(response) == '1') { 
              return true;             
            } else {
              lblMsg.innerHTML = "This "+field_dis+" already exit!";//Invalid Credentials";
              document.getElementById(field_id).focus();
              return false;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
       });
    //FB
    if (document.getElementById("fbid").value == "") {
        lblMsg.innerHTML = "Facebook  is Required...";
        document.getElementById("fbid").focus();
        return false;
    }

    $.ajax({
        url: "ajax.php",
        type: "post",
        data: {
            type_diff: "already_field_exit",
            field_nam:"facebookid",            
            field_val: $("fbid").val()
        },
        success: function(response) {//alert("testing!!!"+response);
             var field_dis="Facebook Id";
             var field_id="fbid";
            if ($.trim(response) == '1') { 
              return true;             
            } else {
              lblMsg.innerHTML = "This "+field_dis+" already exit!";//Invalid Credentials";
              document.getElementById(field_id).focus();
              return false;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
       });

    //PIN    
    if (document.getElementById("pin").value == "") {
        lblMsg.innerHTML = "Pin Number is Required...";
        document.getElementById("pin").focus();
        return false;
    }
    if (!(document.getElementById("pin").value.match(numbers))) {
        lblMsg.innerHTML = "Please Pin numeric characters only";
        document.getElementById("pin").focus();
        return false;
    }
    var len = document.getElementById("pin").value.length; //alert("0--"+document.getElementById("username").value.length);
    if (len > 6) {
        lblMsg.innerHTML = "Please Required Pin Minimum 6  Digits only";
        document.getElementById("pin").focus();
        return false;
    }
    $.ajax({
       type: "POST",
       url: "ajax.php",
       data: $("#form-area1").serialize(),
       success: function(response)
       {
        //alert("--->"+response);
            if (response.trim() == "1") {
                $('#messageModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            } else {
                alert("Error");
                return false;
            }
       }
    });
    return false;
}

function verifyotp() {
    var lblMsg = document.getElementById("otp_verify");
    if (document.getElementById("otp").value == 0) {
        lblMsg.innerHTML = "Enter OTP...";
        document.getElementById("otp").focus();
        return false;
    }
    var numbers = /^[0-9]+$/;
    if (!(document.getElementById("otp").value.match(numbers))) {
        lblMsg.innerHTML = "Please otp numeric characters only";
        document.getElementById("otp").focus();
        return false;
    }
    var len = document.getElementById("otp").value.length;
    if (len > 5) {
        lblMsg.innerHTML = "Please Required otp Minimum 5 Digits only";
        document.getElementById("otp").focus();
        return false;
    }

    $.ajax({
        url: "ajax.php",
        type: "post",
        data: {
            otp: $("#otp").val(),
            type_diff: "otp_verify"
        },
        success: function(response) {
            if (response.trim() == "1") {
                //alert("OTP is incorrect");
                lblMsg.innerHTML = "OTP is incorrect";
                return false;
            } else if (response.trim() == "2") {
               // alert("OTP Time exited ");
               lblMsg.innerHTML = "OTP Time exited!.Click Resend OTP";
                return false;
            } else if (response.trim() == "4") {
                //alert("OTP is correct");
                lblMsg.innerHTML = "OTP is correct";
                window.location.href = "profile.php";
            } else {
                //alert("OTP is incorrect");
                lblMsg.innerHTML = "OTP is incorrect....";
                return false;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
    return false;
}

function otp_resend() {
    $.ajax({
        url: "ajax.php",
        type: "post",
        data: {
            type_diff: "otp_resend"
        },
        success: function(response) {
            if (response.trim() == "1") {
                alert("OTP is Resend");
                return true;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}

function profile_validation() {
    var lblMsg = document.getElementById("profile_validation");


    if (document.getElementById("gender").value == "") {
        lblMsg.innerHTML = "Gender is Required...";
        document.getElementById("gender").focus();
        return false;
    }
    if (document.getElementById("address").value == "") {
        lblMsg.innerHTML = "Address is Required...";
        document.getElementById("address").focus();
        return false;
    }
    if (document.getElementById("city").value == "") {
        lblMsg.innerHTML = "City is Required...";
        document.getElementById("city").focus();
        return false;
    }
    if (document.getElementById("pincode").value == "") {
        lblMsg.innerHTML = "Pincode is Required...";
        document.getElementById("pincode").focus();
        return false;
    }
    if (document.getElementById("gender").value == "") {
        lblMsg.innerHTML = "Gender is Required...";
        document.getElementById("gender").focus();
        return false;
    }
    if (document.getElementById("bankname").value == "") {
        lblMsg.innerHTML = "Bankname is Required...";
        document.getElementById("bankname").focus();
        return false;
    }
    if (document.getElementById("acc_no").value == "") {
        lblMsg.innerHTML = "Account Number is Required...";
        document.getElementById("acc_no").focus();
        return false;
    }
    if (document.getElementById("ifsc_code").value == "") {
        lblMsg.innerHTML = "IFSC Code is Required...";
        document.getElementById("ifsc_code").focus();
        return false;
    }
    if (document.getElementById("branch_name").value == "") {
        lblMsg.innerHTML = "Branch Name is Required...";
        document.getElementById("branch_name").focus();
        return false;
    }
    return true;
}

function changepassword_validation() {
    var lblMsg = document.getElementById("changepassword_validation");
//cp
    if (document.getElementById("current_password").value == "") {
        lblMsg.innerHTML = "Current Password is Required...";
        document.getElementById("current_password").focus();
        return false;
    }
    var lenss=document.getElementById("current_password").value.length;
    if(lenss < 5 || lenss > 15 ){
    lblMsg.innerHTML = "Please Required Current Password Maxmimum 5-15  Digits only";
    document.getElementById("current_password").focus();  
    return false;  
    }  

    $.ajax({
        url: "ajax.php",
        type: "post",
        data: {
            type_diff: "password_check",
            current_password: $("#current_password").val()
        },
        success: function(response) {

            if ($.trim(response) == '1') { //alert("testing!");
              //document.getElementById("new_password").focus(); 
              //window.location.href="userhome.php";
              return true;             
            } else {
              lblMsg.innerHTML = "This Current Password is Wrong!";//Invalid Credentials";
              document.getElementById("current_password").focus();
              return false;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
       });   

//np
    if (document.getElementById("new_password").value == "") {
        lblMsg.innerHTML = "New Password is Required...";
        document.getElementById("new_password").focus();
        return false;
    }
     var lens=document.getElementById("new_password").value.length;
    if(lens < 5 || lens > 15 ){
    lblMsg.innerHTML = "Please Required New Password Maxmimum 5-15  Digits only";
    document.getElementById("new_password").focus();  
    return false;  
    }     

//cp   
    if (document.getElementById("confirm_password").value == "") {
        lblMsg.innerHTML = "Confirm Password is Required...";
        document.getElementById("confirm_password").focus();
        return false;
    }
     var lens1=document.getElementById("confirm_password").value.length;
    if(lens1 < 5 || lens1 > 15 ){
    lblMsg.innerHTML = "Please Required Confirm Password Maxmimum 5-15  Digits only";
    document.getElementById("confirm_password").focus();  
    return false;  
    }     
    var np=document.getElementById("new_password").value;
    var cp=document.getElementById("confirm_password").value;
    if(np != cp) {
    lblMsg.innerHTML = "Confirm Password & New Password is mismatched...";
    document.getElementById("confirm_password").focus();  
    return false;  
    }     

     
    return true;
  }
