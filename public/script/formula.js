$(document).ready(function(){
    $(".tab-links").click(function(){
        var getData = $(this).data('tab');
        console.log(getData);
        $(".tab-content").removeClass("active");
        $("#" + getData + " .tab-content").addClass("active");
        
    });
});