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

$(document).ready(function () {
    var index = $(".content_row").length + 1;
    $("#btn-click").click(function () {
        var html = '<div class="add__fields content_row" id="current_'+ index + '">';
            html += '<div class="ingredient"> <input type="text" name="ingredient[' + index +'][name]" class="form-control p-3" placeholder="Tên nguyên liệu..."></div>';
            html += '<div class="quantity"><input type="text" name="ingredient[' + index +'][quantity]" class="form-control p-3" placeholder="Số lượng..."></div>';
            html += '<div class="unit"><input type="text" name="ingredient[' + index +'][unit]" class="form-control p-3" placeholder="Đơn vị..."></div>';
            html += '<div class="note"><input type="text" name="ingredient[' + index +'][note]" class="form-control p-3" placeholder="Ghi chú..."></div>';
            html += `<div class="delete-input">
                        <button type="button" class="btn btn-danger" onclick="deleteNl(${index})">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>`;                        
            html +=`</div>`;
            index++;
        $(".add__content").append(html);    
    });

    // message
});

function deleteNl(index) {
    $("#current_" + index).remove();
}