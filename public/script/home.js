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
