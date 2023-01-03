<?php
session_start();

$_SESSION['childrensbedroom_colourkeep'] = $_GET["val"]

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
            <img src="../img/icons/kids-room.svg" class="circle-icon"></br>
            <div class="circle-label">Childrens Bedroom</div>
          </span>
        </div>
      </div>
        <div class="center-grid">
            <img src="../img/reform.png" class="quiz-logo">
        </div>

        <div class="center-grid">
            <div style="padding-top: 65px;">
                <div style="padding-top: 15px;">
                  <h3 class="quiz-headers" style="width: 100%; text-align: center; padding-top: 25px;">Do you have any colours or design elements you would like to <b>avoid</b> in the space?</h3>
                </div>
            </div>
        </div>
        <div class="center-grid">
          <textarea id="colourtext" style="border: 2px solid #d63b58; width: 40%; resize: none; margin-top: 40px;"></textarea>
        </div>
        <div class="quiz-next">
          <a href="interior_quiz_7.php">

          </a>
          <button class="quiz-next-button" onclick="nextPage()">
              <span>NEXT</span>
            </button>
        </div>
    </body>
    <script>
      $(document).ready(function() {
        party.confetti('.quiz-circle-2');
      });
      $('.quiz-circle-2').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });

    function nextPage(){
      var text = document.getElementById("colourtext").value;
      var encode = btoa(text)

      window.location.href='./interior_quiz_9.php?val=' + encode + '';
    }

  </script>
</html>