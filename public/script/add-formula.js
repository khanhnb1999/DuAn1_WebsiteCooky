function showMessage(key, message) {
        $("#" + key + "-error").html(message).css("color", "red");
}

function getInput(value) {
        return $("#" + value).val();
}

// validate type and size image
function validateTypeAndSize(loadFile) {
        var typeFile = $(loadFile).val().split('.').pop().toLowerCase();
        var arrTypeFile = ['jpeg', 'jpg', 'png'];

        if ($.inArray(typeFile, arrTypeFile) == -1) {
                $("#image-error").text("Kiểu file bạn tải lên phải là: jpeg-jpg-png").show().css("color", "red");
        } else {
                var size = parseFloat($("#filter-image")[0].files[0].size / 1024).toFixed(2);
                if (size > 40) {
                        $("#image-error").text("Kích thước file tối đa là 40kb").show().css("color", "red");
                }
        }
}


$(document).ready(function () {
        // Validate input
        $(":input").click(function () {
                $(this).removeClass("is-invalid border-danger");
                var tab = $(this).data("tab");
                $("#" + tab).hide();
        });

        // Add ingredient
        var index = $(".content_row").length;
        $("#btn-click").click(function () {
                var html = '<div class="add__fields content_row" id="current_' + index + '">';
                html += '<div class="ingredient"><input type="text" name="ingredient[' + index + '][name]" class="form-control p-3" placeholder="Tên nguyên liệu..."></div>';
                html += '<div class="quantity"><input type="text" name="ingredient[' + index + '][quantity]" class="form-control p-3" placeholder="Số lượng..."></div>';
                html += '<div class="unit"><input type="text" name="ingredient[' + index + '][unit]"  class="form-control p-3" placeholder="Đơn vị..."> </div>';
                html += '<div class="note"> <input type="text" name="ingredient[' + index + '][note]"    class="form-control p-3" placeholder="Ghi chú..."> </div>';
                html += `<div class="delete-input">
                        <button type="button" class="btn btn-danger" onclick="currentDish(${index})">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>`;
                html += `</div>`;
                index++;
                $(".add__contents").append(html);
        });

        // validate form input
        $("#form-1").submit(function (event) {
                $("#desc-error").remove();
                var formData = $(this).serialize();
                $.ajax({
                        type: "POST",
                        url: BaseUrl + "/addFormula/updateFormula",
                        data: formData,
                        dataType: "json",
                        encode: true,
                }).done(function (data) {
                        console.log(data);
                        if (!data.success) {
                                if (data.message.dish_intro) {
                                        $("#filter-intro").addClass("is-invalid border-danger");
                                        $("#intro-error").text(data.message.dish_intro).css("color", "red");
                                }

                                if (data.message.dish_name) {
                                        $("#filter-name").addClass("is-invalid border-danger");
                                        $("#name-error").text(data.message.dish_name).css("color", "red");
                                }

                                // if(data.message.fileToUpload) {
                                //     $("#filter-image").addClass("is-invalid border-danger");
                                //     $("#image-error").text(data.message.fileToUpload).css("color","red");
                                // }

                                if (data.message.name) {
                                        $("#igr-name").addClass("is-invalid border-danger");
                                        $("#igr-name-error").text(data.message.name).css("color", "red");
                                }

                                if (data.message.quantity) {
                                        $("#igr-quantity").addClass("is-invalid border-danger");
                                        $("#igr-quantity-error").text(data.message.quantity).css("color", "red");
                                }

                                if (data.message.unit) {
                                        $("#igr-unit").addClass("is-invalid border-danger");
                                        $("#igr-unit-error").text(data.message.unit).css("color", "red");
                                }

                                // if(data.message.dish_description) {
                                //         $("#desc-error").text(data.message.dish_description).css("color", "red");
                                // }
                                
                        } else {
                                $("#has-content").html(data.message);
                        }
                });
                event.preventDefault();
        })
});



function currentDish(val) {
        $("#current_" + val).remove();
}

function currentBox() {
        $("#current-content").slideUp(400);
}