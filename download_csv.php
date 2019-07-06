<script>
var data = [
   ['', '','','',''],
  
];
 
 
function download_csv() {
    var csv = 'Sr No,Name Of Speciality,Fees,current Date,Status';
    data.forEach(function(row) {
            csv += row.join(',');
            csv += "\n";
    });
 
    console.log(csv);
    var hiddenElement = document.createElement('a');
    hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
    hiddenElement.target = '_blank';
    hiddenElement.download = 'template_demo.csv';
    hiddenElement.click();
}
</script>
 
<button onclick="download_csv()">Download CSV</button>