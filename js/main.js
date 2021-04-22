$('#loginButton').click(function() {
    $('#registerModal').modal('hide')
    $('#loginModal').modal('show')
});

$('#signupButton').click(function() {
    $('#registerModal').modal('show')
    $('#loginModal').modal('hide')
});


$('#forgotButton').click(function() {
    $('#forgotModal').modal('show')
    $('#loginModal').modal('hide')
});
