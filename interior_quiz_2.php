<?php error_reporting(0);
session_start();

$_SESSION['livingroom'] = $_GET["livingroom"];
$_SESSION['diningroom'] = $_GET["diningroom"];
$_SESSION['bedroom'] = $_GET["bedroom"];
$_SESSION['hallway'] = $_GET["hallway"];
$_SESSION['childrensbedroom'] = $_GET["childrensbedroom"];
$_SESSION['nursery'] = $_GET["nursery"];
$_SESSION['office'] = $_GET["office"];
$_SESSION['bathroom'] = $_GET["bathroom"];
$_SESSION['kitchen'] = $_GET["kitchen"];
$_SESSION['other'] = $_GET["other"];

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

        <div class="grid-quiz" style="margin-top: -50px;">
            <div style="padding-left: 65px; padding-top: 65px;">
                <h3 class="quiz-headers">Next up, who lives in your house?</h3>
                <div style="padding-top: 15px;">
                  <img class="side-banner" src="./img/home-sketch.svg" style="width: 40%; padding-top: 100px; margin-left: -30px;">
                </div>
            </div> 
            <div class="chooser-house" style="padding-top: 65px;">
              <div style="margin-left: -50px;"></br>
                <img src="./img/icons/couple.svg" style="width: 30%"></br>
                <img class="counter-arrow" src="./img/arrow.svg">
                <span class="counter">
                  0
                </span>
                <img class="counter-arrow-invert" src="./img/arrow.svg"></br>
                <span style="color: black;">Adults</span>
              </div>
              <div style="padding-left: -50px;"></br>
                <img src="./img/icons/children.svg" style="width: 30%"></br>
                <img class="counter-arrow-2" src="./img/arrow.svg">
                <span class="counter-2">
                  0
                </span>
                <img class="counter-arrow-invert-2" src="./img/arrow.svg"></br>
                <span style="color: black;">Children</span>
              </div>
              <div style="padding-left: -50px;"></br>
                <img src="./img/icons/pets.svg" style="width: 30%;"></br>
                <img class="counter-arrow-3" src="./img/arrow.svg">
                <span class="counter-3">
                  0
                </span>
                <img class="counter-arrow-invert-3" src="./img/arrow.svg"></br>
                <span style="color: black;">Pets</span>
              </div>
            </div>
            
            </div>
        </div>


        <div class="quiz-next">
          <a href="./interior_quiz_1.html">

          </a>
          <a id="next">
            <button class="quiz-next-button">
              <span>NEXT</span>
            </button>
          </a
        </div>
    </body>
    <script>


      $('.quiz-circle-1').click(function() {
        $('.selectedCircle').removeClass('selectedCircle');
        $(this).addClass('selectedCircle').find('input').prop('checked', true)
    });

    let counterDisplayElem = document.querySelector('.counter');
    let counterMinusElem = document.querySelector('.counter-arrow');
    let counterPlusElem = document.querySelector('.counter-arrow-invert');
    
    let counterDisplayElem2 = document.querySelector('.counter-2');
    let counterMinusElem2 = document.querySelector('.counter-arrow-2');
    let counterPlusElem2 = document.querySelector('.counter-arrow-invert-2');
    

    let counterDisplayElem3 = document.querySelector('.counter-3');
    let counterMinusElem3 = document.querySelector('.counter-arrow-3');
    let counterPlusElem3 = document.querySelector('.counter-arrow-invert-3');
    
    let count = 0;
    let count2 = 0;
    let count3 = 0;

    updateDisplay();
    
    counterPlusElem.addEventListener("click",()=>{
        count++;
        updateDisplay();
    }) ;
    
    counterMinusElem.addEventListener("click",()=>{
      if (count > 0) {
        count--;
        updateDisplay();
      };
    });
    
    function updateDisplay(){
        counterDisplayElem.innerHTML = count;
    };

  // 
    counterPlusElem2.addEventListener("click",()=>{
        count2++;
        updateDisplay2();
    });
    
    counterMinusElem2.addEventListener("click",()=>{
      if (count2 > 0) {
        count2--;
        updateDisplay2();
      };
    });
    
    function updateDisplay2(){
        counterDisplayElem2.innerHTML = count2;
    };

    //
    counterPlusElem3.addEventListener("click",()=>{
        count3++;
        updateDisplay3();
    });
    
    counterMinusElem3.addEventListener("click",()=>{
      if (count3 > 0) {
        count3--;
        updateDisplay3();
      };
    });
    
    function updateDisplay3(){
        counterDisplayElem3.innerHTML = count3;
    };

    document.getElementById('next').addEventListener("click", function() {
      location.href = './interior_quiz_3.php?adults=' + count + '&children=' + count2 + '&pets=' + count3 + '';
    });
    
  </script>
</html>