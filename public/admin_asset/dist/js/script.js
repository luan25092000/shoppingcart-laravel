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
// google chart
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Product', 'Total']
    ]);

    var options = {
        title: 'Order'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}