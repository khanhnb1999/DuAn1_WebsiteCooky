$(document).ready(function () {
    var index = $(".content_row").length + 1;
    $("#btn-click").click(function () {
        var html = '<div class="add__fields content_row" id="current_'+ index + '">';
            html += '<div class="ingredient"> <input type="text" name="ingredient[' + index +'][name]" class="form-control p-3" placeholder="Tên nguyên liệu..."></div>';
            html += '<div class="quantity"><input type="text" name="ingredient[' + index +'][quantity]" class="form-control p-3" placeholder="Số lượng..."></div>';
            html += '<div class="unit"><input type="text" name="ingredient[' + index +'][unit]" class="form-control p-3" placeholder="Đơn vị..."></div>';
            html += '<div class="note"><input type="text" name="ingredient[' + index +'][note]" class="form-control p-3" placeholder="Ghi chú..."></div>';
            html += `<div class="delete-input">
                        <button type="button" class="btn btn-danger" onclick="currentDish(${index})">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>`;                        
            html +=`</div>`;
            index++;
        $(".add__contents").append(html);    
    });
    
});

function currentDish(val) {
    $("#current_" + val).remove();
}