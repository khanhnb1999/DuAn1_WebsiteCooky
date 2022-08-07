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
