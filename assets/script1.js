$(document).ready(function() {
    $("#adm-form").hide();
    $("#adm-link").click(function() {
        $("#add-form").fadeOut(150, function() {
            $("#adm-form").fadeIn(150);
        });
    });
    $("#dod-link").click(function() {
        $("#adm-form").fadeOut(150, function() {
            $("#add-form").fadeIn(150);
        });
    });
});