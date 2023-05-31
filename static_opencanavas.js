$(document).ready(function(){
    $("#btn_offcanavas").click(function(e){
        e.preventDefault();
        var input1 = $("#id_q").val();
        var input2 = $("#id_pr").val();
        $.ajax({
            type: "POST",
            url: "static_opencanavas.php",
            data: {pr_quantity: input1, prodname: input2},
            success: function(data){
                $("#data").html(data);
            }
        });
    });
});
