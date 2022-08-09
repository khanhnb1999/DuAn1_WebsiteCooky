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
                        }
                });
        });
});

