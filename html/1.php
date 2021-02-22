<link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
      var minDate=new Date();
    $( "#datepicker" ).datepicker({
        
       showAnim:'drop',
        numberofMonth:1,
        dateFormat:'dd/mm/yy',
        minDate:minDate
        
    });
  } );
  </script>
<p>Date: <input type="text" id="datepicker"></p>