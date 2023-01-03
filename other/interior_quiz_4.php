<?php error_reporting(0);

session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.extensionplansuk.co.uk/wp-content/themes/extensionplan/css/main.css">
        <link rel="stylesheet" href="https://www.extensionplansuk.co.uk/wp-content/themes/extensionplan/css/stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>
    </head>
    <body>
      <div class="type-sticker">
        <div class="quiz-circle-3 hvr-grow">
          <span>
            <img src="../img/icons/ellipsis.svg" class="circle-icon"></br>
            <div class="circle-label">Other</div>
          </span>
        </div>
      </div>
        <div class="center-grid">
            <img src="../img/reform.png" class="quiz-logo">
        </div>

        <div class="center-grid">
            <div style="padding-top: 65px;">
                <div style="padding-top: 15px;">
                  <h3 class="quiz-headers" style="width: 100%; text-align: center; padding-top: 25px;">How finished is your current area?</h3>
                </div>
            </div>
        </div>
        <div class="center-grid">
          <div class="quiz-circle-1" style="margin-left: 70px;">
            <span>
              <img src="../img/icons/hallway.svg" class="circle-icon"></br>
              <div class="circle-label">Starting from </br>scratch</div>
              <input type="radio" id="starting_scratch" class="hiddenCheck" name="opt"> 
            </span>
          </div>
          <div class="quiz-circle-1" style="margin-left: 70px;">
            <span>
              <img src="../img/icons/hallway.svg" class="circle-icon"></br>
              <div class="circle-label">Part way there</div>
              <input type="radio" id="part_way" class="hiddenCheck" name="opt"> 
            </span>
          </div>
          <div class="quiz-circle-1" style="margin-left: 70px;">
            <span>
              <img src="../img/icons/hallway.svg" class="circle-icon"></br>
              <div class="circle-label">Mostly </br>furnished</div>
              <input type="radio" id="mostly_furnished" class="hiddenCheck" name="opt"> 
            </span>
          </div>
        </div>
        <div class="quiz-next">
          <a href="../interior_quiz_3.php">

          </a>
         <button class="quiz-next-button" onclick="nextPage()">
            <span>NEXT</span>
          </button>
        </div>
    </body>
    <script>
       var array = sessionStorage.getItem("array");
       parsedArray = JSON.parse(array)
       var nextSection = parsedArray[0]

      $(document).ready(function() {
        party.confetti('.quiz-circle-2');
      });
      $('.quiz-circle-1').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });

    function nextPage(){
      if($('#starting_scratch').is(':checked')) {
        var starting_scratch = 1;
      } else {
        var starting_scratch = 0;
      }

      if($('#part_way').is(':checked')) {
        var part_way = 1;
      } else {
        var part_way = 0;
      }

      if($('#mostly_furnished').is(':checked')) {
        var mostly_furnished = 1;
      } else {
        var mostly_furnished = 0;
      }
      window.location.href='../'+nextSection+'/interior_quiz_5.php?starting_scratch=' + starting_scratch + '&part_way=' + part_way + '&mostly_furnished=' + mostly_furnished + '';
    }
  </script>
</html>