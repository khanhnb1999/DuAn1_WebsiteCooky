// Cách 1:(Sử dụng object XMLHttpRequest() trong trình duyệt)
// function viewDish(id) {
//     if(id !== "") {
//         var http = new XMLHttpRequest();
//         http.onload = function() {
//             document.getElementById("show-dish").innerHTML = this.responseText;
//         }
//         http.open("POST",BaseUrl + "/TableTray/show/"+id);
//         http.send();
//     }
// }

// Cách:2(Dùng jquery) 
function viewDish(id) {
    $.ajax({
        type: "GET",
        url: BaseUrl + "/TableTray/show/"+id,
        data: {},
        success: function(result) {
            $("#show-dish").html(result);
        }

    });
}

// delete dish require customer
function removeDish(index){
    $.ajax({
        type: "GET",
        url: BaseUrl + "/TableTray/remove/"+index,
        data: {},
        success: function(data){
            console.log(data);
        },      
        dataType: "application/json"
    });
    $("#current_" + index).remove(); 
}