function listCate(cate_id) {
        if(cate_id !== "") {
                var http = new XMLHttpRequest();
                http.onload = function() {
                document.getElementById("list-cate").innerHTML = this.responseText;
                }
                http.open("GET","formula/getCatalog/"+cate_id);
                http.send();
        }
}



$(document).ready(function() {
        $("#select-down").click(function(){
                $(".dropdown__dish").slideToggle(300);
        });

        $("#dish-new").click(function(){
                $.ajax({
                        type: "GET",
                        url: BaseUrl + "/formula/filterNewDish",
                        data: {},
                        success: function(result) {
                                $("#list-cate").html(result);
                        }
                });
                $(".dropdown__dish").hide();
                $(".foods__title").hide();
        });

        $("#dish-view").click(function(){
                $.ajax({
                        type: "GET",
                        url: BaseUrl + "/formula/filterViewDish",
                        data: {},
                        success: function(result) {
                                $("#list-cate").html(result);
                        }
                });
                $(".dropdown__dish").hide();
                $(".foods__title").hide();
        });

        $("#form-comment").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                console.log(formData);
                $.ajax({
                        type: "POST",
                        url: BaseUrl + "/formula/addComment",
                        data: formData,
                        dataType: "json",
                        encode: true,
                }).done(function(data) {
                        console.log(data);
                        if(!data.status) {
                                $("#myForm").css("display", "block");
                        } else {
                                if(data.content) {
                                        $("#alert-message").html(data.content);
                                }
                        }
                });
        });
});

