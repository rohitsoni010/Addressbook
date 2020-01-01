
<?php
if($_SESSION["email"]) {
?>
<br>


<?php
}else {
header("Location:loginpage.php");
}
?>
<!DOCTYPE html>
<html>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    #search_container {text-align: left;float:left;}
    #results {align:left; text-align: left; border: solid 1px #777;  display: none; margin: 0 auto; width: 180px;}
    input[type=text] {
      width: 13px;
      margin-left: 10px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      background-image:url(searchicon.jpg);
      background-size: 35px;
      background-position: 2px 3px;
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
      width: 50%;
    }
  </style>
</head>
<body>

<div id="search_container">
   <input type="text" name="name" id="name" autocomplete="off">
   <div id="results"></div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#name").keyup(function(){
    	var query = $(this).val();
    	if (query != "") {
    		$.ajax({
                url: 'query.php',
                method: 'POST',
                data: {query:query},
                success: function(data)
                {
                	$('#results').html(data);
                	$('#results').css('display', 'block');

                    $("#name").focusout(function(){
                        $('#results').css('display', 'none');
                    });
                    $("#name").focusin(function(){
                        $('#results').css('display', 'block');
                    });

                }
    		});
    	} else {
             $('#results').css('display', 'none');
    	}
    });
  });
</script>

</body>
</html>
