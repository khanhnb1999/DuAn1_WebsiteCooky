
// hide/show tab user account
$(document).ready(function () {
    $(".nav__right").click(function () {
        // $(".dropdown__menu").toggle();
        $(".dropdown__menu").fadeToggle(300);
    });
});


// hide/show tab sidebar
$(document).ready(function () {
    $(".icon__bars").click(function () {
        $(".sidebar").fadeToggle(300);
    });

    // form update
    var index = $(".content_row").length + 1;
    $("#btn-click").click(function () {
        var html = '<div class="add__fields content_row" id="current_'+ index + '">';
            html += '<div class="ingredient"> <input type="text" name="ingredient[' + index +'][name]" class="form-control p-3" placeholder="Tên nguyên liệu..."></div>';
            html += '<div class="quantity"><input type="text" name="ingredient[' + index +'][quantity]" class="form-control p-3" placeholder="Số lượng..."></div>';
            html += '<div class="unit"><input type="text" name="ingredient[' + index +'][unit]" class="form-control p-3" placeholder="Đơn vị..."></div>';
            html += '<div class="note"><input type="text" name="ingredient[' + index +'][note]" class="form-control p-3" placeholder="Ghi chú..."></div>';
            html += `<div class="delete-input">
                        <button type="button" class="btn btn__danger" onclick="deleteNl(${index})">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>`;                        
            html +=`</div>`;
            index++;
        $(".add__content").append(html);    
    });
    
});
function deleteNl(index){
    var $nlId = $("#ingredient_"+ index).val();
    if($nlId !== ''){
        $.ajax({
            type: "POST",
            url: BaseUrl + "/product/removeNl/"+$nlId,
            data: {},
            success: function(data){
                console.log(data);
            },      
            dataType: "application/json"
          });
    }
    $("#current_" + index).remove();
}


var dropdown = document.getElementsByClassName("dropdown__btn");
var i;
for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}



var check1 = document.getElementById("btn1");
var check2 = document.getElementById("btn2");
check1.addEventListener("click", function () {
    var checkboxes = document.getElementsByName('ids[]');
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = true;
    }
});

check2.addEventListener("click", function () {
    var checkboxes = document.getElementsByName('ids[]');
    for (var i = 0; i < checkboxes.length; i++) {
        console.log(checkboxes[i]);
        checkboxes[i].checked = false;
    }
});

