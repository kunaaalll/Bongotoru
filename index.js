function SendMail() {
    var params = {
        from_name: document.getElementById("fullName").value,
        email_id: document.getElementById("email_id").value,
        ph_number: document.getElementById("phone_Number").value,
        Subject: document.getElementById("subject").value,
        Message: document.getElementById("message").value
    }
  //  console.log("hello");
    emailjs.send("service_lwpbsw8", "template_rkngd1w", params).then(function(response) {
        alert('SUCCESS!');
        document.getElementById("fullName").value="";
        document.getElementById("email_id").value="";
        document.getElementById("phone_Number").value="";
        document.getElementById("subject").value="";
        document.getElementById("message").value="";

      }, function(error) {
        alert('FAILED...!');
      });
}