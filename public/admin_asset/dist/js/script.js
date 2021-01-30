$(document).ready(function() {
    $('#dataTables-example').DataTable({
            responsive: true
    });
    $("#cart").change(function(){
        var selectedProduct = $(this).val().split("_");  
        var qty = $("#qty").val();
        $("#total").attr("value",selectedProduct[2] * qty);
    });
});