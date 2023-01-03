<?php
session_start();

$_SESSION['bedroom4_eclectic'] = $_GET["eclectic"];
$_SESSION['bedroom4_bohemian'] = $_GET["bohemian"];
$_SESSION['bedroom4_contemporary'] = $_GET["contemporary"];
$_SESSION['bedroom4_coastal'] = $_GET["coastal"];
$_SESSION['bedroom4_dramatic_bold'] = $_GET["dramatic_bold"];
$_SESSION['bedroom4_glam'] = $_GET["glam"];
$_SESSION['bedroom4_industrial'] = $_GET["industrial"];
$_SESSION['bedroom4_rustic'] = $_GET["rustic"];
$_SESSION['bedroom4_scandi'] = $_GET["scandi"];
$_SESSION['bedroom4_traditional'] = $_GET["traditional"];
$_SESSION['bedroom4_transitional'] = $_GET["transitional"];

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
            <img src="../img/icons/bedroom.svg" class="circle-icon"></br>
            <div class="circle-label">Bedroom #4</div>
          </span>
        </div>
      </div>
        <div class="center-grid">
            <img src="../img/reform.png" class="quiz-logo">
        </div>

        <div class="center-grid">
            <div style="padding-top: 65px;">
                <div style="padding-top: 15px;">
                  <h3 class="quiz-headers" style="width: 100%; text-align: center; padding-top: 25px;">Are there any other styles or design ideas you wish to add?</h3>
                </div>
            </div>
        </div>
        <div class="center-grid">
          <textarea id="bedroom4add" style="border: 2px solid #f6936e; width: 40%; resize: none; margin-top: 40px;"></textarea>
        </div>
        <div class="quiz-next">
          <a href="interior_quiz_9.php">

          </a>
          <button onclick="nextPage()" class="quiz-next-button">
            <span>NEXT</span>
          </button>
        </div>
    </body>
    <script>
       var array = sessionStorage.getItem("array");
       var pageID = "bedroom4"
       var parsedArray = JSON.parse(array)
       var arr = parsedArray.filter(item => item !== pageID)
       var updateArray = JSON.stringify(arr)
       var nextSection = arr[0]
       sessionStorage.setItem("array", updateArray);

      function nextPage(){
        var text = document.getElementById("bedroom4add").value;
        var encode = btoa(text)
        if (arr.length > 0) {
          window.location.href="../"+nextSection+"/interior_quiz_intro.php?bedroom4_add=" + encode + "";
        } else {
          window.location.href="../interior_quiz_11.php?bedroom4_add=" + encode + "";
        }
      }
  
      $('.quiz-circle-2').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });
  </script>
</html>