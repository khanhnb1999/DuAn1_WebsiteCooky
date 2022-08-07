
function getInput(value) {
    return $("#" + value).val();
}

function showMessage(key,message) {
    $("#" + key + "-error").html(message).css("color","red");
}

// validate type and size image
function validateTypeAndSize(loadFile) {
    var typeFile = $(loadFile).val().split('.').pop().toLowerCase();
    var arrTypeFile = ['jpeg','jpg','png'];

    if($.inArray(typeFile, arrTypeFile) == -1) {
        $("#image-error").text("Xin lỗi! Kiểu file bạn tải lên phải là: jpeg-jpg-png").show().css("color","red");
    } else {
        var size = parseFloat($("#filter-image")[0].files[0].size / 1024).toFixed(2);
        if(size > 40) {
            $("#image-error").text("Kích thước file tối đa là 40kb").show().css("color","red");
        }
    }
}

$(document).ready(function () {
    // Validate input
    $(":input").click(function() {
        $(this).removeClass("is-invalid border-danger");
        var tab = $(this).data("tab");
        $("#" + tab).hide();
    });

    $("#add-ingredient").click(function () {
        // check dish intro
        var dishIntro = getInput("filter-intro");
        if(dishIntro == "") {
            showMessage("intro","Bạn phải giới thiệu món ăn");
            $("#filter-intro").addClass("is-invalid border-danger");
        }

        // check dish name
        var dishName = getInput("filter-name");
        if(dishName == "") {
            showMessage("name","Bạn phải nhập tên món ăn");
            $("#filter-name").addClass("is-invalid border-danger");
        }

        // check dish image
        var dishImage = getInput("filter-image");
        if(dishImage == "") {
            showMessage("image","Bạn phải chọn ảnh");
            $("#filter-image").addClass("is-invalid border-danger");
        }

        // check ingredient name
        var igrName = getInput("igr-name");
        if(igrName == "") {
            showMessage("igr-name","Bạn phải chọn nguyên liệu");
            $("#igr-name").addClass("is-invalid border-danger");
        }

        // check quantity
        var igrQuantity = getInput("igr-quantity");
        if(igrQuantity == "") {
            showMessage("igr-quantity","Bạn phải chọn số lượng ");
            $("#igr-quantity").addClass("is-invalid border-danger");
        }

        // check unit
        var igrUnit = getInput("igr-unit");
        if(igrUnit == "") {
            showMessage("igr-unit","Bạn phải chọn đơn vị");
            $("#igr-unit").addClass("is-invalid border-danger");
        }
    });

    // Add ingredient
    var index = $(".content_row").length + 1;
    $("#btn-click").click(function () {
        var html = '<div class="add__fields content_row" id="current_'+ index + '">';
            html += `<div class="ingredient">
                        <input type="text" name="ingredient[' + ${index} +'][name]" 
                        class="form-control p-3" placeholder="Tên nguyên liệu...">
                    </div>`;
            html += `<div class="quantity">
                        <input type="text" name="ingredient[' + ${index} +'][quantity]" 
                        class="form-control p-3" placeholder="Số lượng...">
                    </div>`;
            html += `<div class="unit">
                        <input type="text" name="ingredient[' + ${index} +'][unit]" 
                        class="form-control p-3" placeholder="Đơn vị...">
                    </div>`;
            html += `<div class="note">
                        <input type="text" name="ingredient[' + ${index} +'][note]" 
                        class="form-control p-3" placeholder="Ghi chú...">
                    </div>`;
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