$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
 
    $.ajax({
        type: "POST",
        URL: "../php/form.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                alert("Message sent");
            }
            if (text == "invalid"){
                alert("Message fail to sent");
            }
        }
    });
}
