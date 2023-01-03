<?php
session_start();
 
if (isset($_GET['bath_add'])) {
  $_SESSION['bath_add'] = $_GET["bathadd"];
} else if (isset($_GET['bedroomadd'])){
  $_SESSION['bedroom_add'] = $_GET["bedroomadd"];
} else if (isset($_GET['bedroom2_add'])){
  $_SESSION['bedroom2_add'] = $_GET["bedroom2_add"];
} else if (isset($_GET['bedroom3_add'])){
  $_SESSION['bedroom3_add'] = $_GET["bedroom3_add"];
} else if (isset($_GET['bedroom4_add'])){
  $_SESSION['bedroom4_add'] = $_GET["bedroom4_add"];
} else if (isset($_GET['childrensbedroom_add'])){
  $_SESSION['childrensbedroom_add'] = $_GET["childrensbedroom_add"];
} else if (isset($_GET['childrensbedroom2_add'])){
  $_SESSION['childrensbedroom2_add'] = $_GET["childrensbedroom2_add"];
} else if (isset($_GET['childrensbedroom3_add'])){
  $_SESSION['childrensbedroom3_add'] = $_GET["childrensbedroom3_add"];
} else if (isset($_GET['childrensbedroom4_add'])){
  $_SESSION['childrensbedroom4_add'] = $_GET["childrensbedroom4_add"];
} else if (isset($_GET['diningroom_add'])){
  $_SESSION['diningroom_add'] = $_GET["diningroom_add"];
} else if (isset($_GET['hallway_add'])){
  $_SESSION['hallway_add'] = $_GET["hallway_add"];
} else if (isset($_GET['kitchen_add'])){
  $_SESSION['kitchen_add'] = $_GET["kitchen_add"];
} else if (isset($_GET['livingroom_add'])){
  $_SESSION['livingroom_add'] = $_GET["livingroom_add"];
} else if (isset($_GET['nursery_add'])){
  $_SESSION['nursery_add'] = $_GET["nursery_add"];
} else if (isset($_GET['office_add'])){
  $_SESSION['office_add'] = $_GET["office_add"];
} else if (isset($_GET['other_add'])){
  $_SESSION['other_add'] = $_GET["other_add"];
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.extensionplansuk.co.uk/wp-content/themes/extensionplan/css/main.css">
        <link rel="stylesheet" href="https://www.extensionplansuk.co.uk/wp-content/themes/extensionplan/css/stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="center-grid">
            <img src="./img/reform.png" class="quiz-logo">
        </div>

        <div class="grid-quiz">
            <div style="padding-left: 65px; padding-top: 65px;">
                <h3 class="quiz-headers">What is your preference on accessorising your home?</h3>
                <div style="padding-top: 15px;">
                  <img src="./img/icons/living-room-2.svg" style="width: 400px; margin-left: 130px;">
                </div>
            </div>
            <div class="quiz-container" style="padding-top: 150px;">
              <input type="radio" name="radiogroup2" class="hiddenCheck" id="opt1"> 
              <div class="quiz-circle-1 hvr-grow">
                <span>
                  <div class="circle-label-2" style="margin-top: 30px;">Less is more, </br> keep it simple!</div>
                  <input type="radio" id="less" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              <div class="quiz-circle-1">
                <span>
                  <div class="circle-label-2" style="margin-top: 30px;">Somewhere in between</div>
                  <input type="radio" id="inbetween" class="hiddenCheck" name="opt"> 
                </span>
              </div>
              <div class="quiz-circle-1">
                <span>
                  <div class="circle-label-2" style="margin-top: 40px;">More is more!</div>
                  <input type="radio" id="more" class="hiddenCheck" name="opt"> 
                </span>
              </div>              
            </div>
        </div>
        <div class="quiz-next">
          <a href="./interior_quiz_10.php">

          </a>
          <button class="quiz-next-button" onclick="nextPage()">
              <span>NEXT</span>
            </button>
          </a>
    </body>
    <script>
      $('.quiz-circle-1').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });

    function nextPage(){
      if($('#less').is(':checked')) {
        var less = 1;
      } else {
        var less = 0;
      }

      if($('#inbetween').is(':checked')) {
        var middle = 1;
      } else {
        var middle = 0;
      }

      if($('#more').is(':checked')) {
        var more = 1;
      } else {
        var more = 0;
      }
      window.location.href='interior_quiz_12.php?less=' + less + '&middle=' + middle + '&more=' + more + '';
    }
  </script>
</html>