function sendMail() {
    
    $.ajax({url: "sendMail.php", success: function(result){
        alert(result);
    }});
}