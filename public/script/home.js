$(document).ready(function () {
        $("#has-link").click(function() {
                $(".side__down").slideToggle(300);
        });
        
        $(".register").click(function () {
                $(".tab__current--login").slideToggle(300);
        });
});
function showDish(id) {
        $.ajax({
                type: "GET",
                url: BaseUrl + "/formula/showDish/"+id,
                data: {},
                success: function(result) {
                        $("#list-cate").html(result);
                }

        });
}

$(document).ready(function() {
        $(":input").click(function() {
                $(this).removeClass("is-invalid border-danger");
                var getId = $(this).data("filter");
                $("#" + getId).hide();
        });

        $("#logout").submit(function(event) {
                event.preventDefault();
                var dataLogout = $(this).serialize();
                console.log(dataLogout);
                $.ajax({
                        type: "POST",
                        url: BaseUrl + "/user/addUser",
                        data: dataLogout,
                        dataType: "json",
                        encode: true,
                }).done(function (data) {
                        console.log(data);
                        if(!data.status) {
                                if(data.success.username) {
                                        $("#filter-name").addClass("is-invalid border-danger");
                                        $("#error-name").text(data.success.username).css("color","red");
                                }

                                if(data.success.email) {
                                        $("#filter-email").addClass("is-invalid border-danger");
                                        $("#error-email").text(data.success.email).css("color","red");
                                }

                                if(data.success.password) {
                                        $("#filter-pass").addClass("is-invalid border-danger");
                                        $("#error-password").text(data.success.password).css("color","red");
                                }

                                if(data.success.rePassword) {
                                        $("#filter-repass").addClass("is-invalid border-danger");
                                        $("#error-repass").text(data.success.rePassword).css("color","red");
                                }

                                if(data.success.address) {
                                        $("#filter-address").addClass("is-invalid border-danger");
                                        $("#error-address").text(data.success.address).css("color","red");
                                }

                                if(data.success.phone) {
                                        $("#filter-phone").addClass("is-invalid border-danger");
                                        $("#error-phone").text(data.success.phone).css("color","red");
                                }
                        } else {
                                $(".box__overlay").css("display", "none");
                        }
                });
        });

        $("#login").submit(function(event) {
                // event.preventDefault();
                var dataLogin = $(this).serialize();
                console.log(dataLogin);
                $.ajax({
                        type: "POST",
                        url: BaseUrl + "/user/checkUser",
                        data: dataLogin,
                        dataType: "json",
                        encode: true,
                }).done(function(data) {
                        console.log(data);
                        if(data.status) {
                                $(".box__overlay").css("display", "none");
                        } else {
                                if(data.success.username) {
                                        $("#username1").addClass("is-invalid border-danger");
                                        $("#password1").addClass("is-invalid border-danger");
                                        $("#error-login").text(data.success.username).css("color","red");
                                }
                        }
                });
        });
});

