function validateContactForm() {
    var valid = true;

    $(".info").html("");
    $(".input-field").css('border', '#e0dfdf 1px solid');
    var userPhone = $("#userPhone").val();
    var userEmail = $("#userEmail").val();
    var stock = $("#stock").val();
    var content = $("#content").val();

    if (userPhone == "") {
        $("#userPhone-info").html("Required.");
        $("#userPhone").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (userEmail == "") {
        $("#userEmail-info").html("Required.");
        $("#userEmail").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#userEmail-info").html("Invalid Email Address.");
        $("#userEmail").css('border', '#e66262 1px solid');
        valid = false;
    }

    if (stock == "") {
        $("#stock-info").html("Required.");
        $("#stock").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (content == "") {
        $("#userMessage-info").html("Required.");
        $("#content").css('border', '#e66262 1px solid');
        valid = false;
    }
    return valid;
}