var today = new Date();
var datePicker = $("#date").datepicker({
  maxDate: today
});
$( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "1900:2023",
      dateFormat: "yy-mm-dd"
    });
  });
  
