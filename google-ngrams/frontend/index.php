<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>google ngrams (chinese simplified)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">
    <script src="js/jquery-2.0.3.min.js"></script>

<SCRIPT Language="JavaScript">
<!--//
function showAndClearField(frm){
  if (frm.firstName.value == "")
      alert("Hey! Please enter something")
  else {
      var finalURL = "search.php?word="+ frm.firstName.value
      $("#loadingcontainer").show();
      $.ajax({
        type: "GET",
        url: finalURL ,
        dataType: "html",
        success: function(response){
            $("#responsecontainer").show();
            $("#responsecontainer").html(response);
            $("#loadingcontainer").hide();
        }
      });
  }

}
//-->
</SCRIPT>
   
  </head>
  <body>
    <div class="container">
      <div class="demo-headline">
        
      </div> <!-- /demo-headline -->

      <div class="row">
          <FORM NAME="test">
          <div class="col-md-1"></div>
          <div class="col-md-8">
          <input type="text" name="firstName" placeholder="enter a word to get its ngram" class="form-control" />
          </div>
          <div class="col-md-2">
          <INPUT TYPE="Button" class="btn btn-block btn-lg btn-primary fui-search" Value="Search" onClick="showAndClearField(this.form)">
          </div>
          </FORM>

      </div> <!-- /row -->
      <div class="row" id="gap"></div>

      <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
          <div id="responsecontainer"></div>
          <div id="loadingcontainer"><img src="images/loading_anim.gif"></div>
          </div>
 
      </div> <!-- /row -->

      

    </div> <!-- /container -->

    <script>
        $( document ).ready(function() {
            $("#responsecontainer").hide();
            $('#loadingcontainer').hide()
        });

    </script>

  </body>
</html>


