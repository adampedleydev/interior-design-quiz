<?php
session_start();

$_SESSION['childrensbedroom_colouravoid'] = $_GET["val"]

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
                <h3 class="quiz-headers" style="width: 100%; text-align: center; padding-top: -50px;">Pick your style</h3>
                <h6 class="" style="width: 100%; text-align: center; padding-top: 10px; color: black;">You can select multiple styles here, so don't worry about checking too many!</h6>
              </div>
          </div>
      </div>

        <div class="center-grid">
          <div class="styles-grid">
            <div>
              <img class="styles-image" src="../img/styles/eclectic.png">
            </div>
            <div>
              <img class="styles-image" src="../img/styles/bohemian.png">
            </div>
            <div>
              <img class="styles-image" src="../img/styles/contemporary.png">
            </div>
            <div>
              <img class="styles-image" src="../img/styles/costal.png">
            </div>
            <img class="styles-image" src="../img/styles/dramatic_bold.png">
            <div>
              <img class="styles-image" src="../img/styles/glam.png">
            </div>
            <div>
              <img class="styles-image" src="../img/styles/industrial.png">
            </div>
            <div>
              <img class="styles-image" src="../img/styles/rustic.png">
            </div>
            <div>
              <img class="styles-image" src="../img/styles/scandi.png">
            </div>
            <div>
              <img class="styles-image" src="../img/styles/traditional.png">
            </div>
            
            <div>
              <img class="styles-image2" src="../img/styles/transitional.png" id="transitional">
            </div>
            
            <div>
                <button class="quiz-next-button" style="margin-bottom: -1000px; padding-bottom: -500px;" onclick="nextPage()">
                  <span>NEXT</span>
                </button>
            </div>
          </div>

        </div>

<!-- Eclectic -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Eclectic</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        This style encompasses a variety of periods and movements, brought together through the use of</br> texture, shape and finish. Eclectic interior
        allows freedom which creates playful yet personal spaces
      </h6>
    </div>
    <div class="styles-grid">
      <div>
        <input type="checkbox" name="eclectic" id="1" />
        <label for="1">
          <img class="style_image" src="../img/styles/Eclectic/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="2" />
        <label for="2">
          <img class="style_image" src="../img/styles/Eclectic/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="3">
        <label for="3">
          <img class="style_image" src="../img/styles/Eclectic/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="4">
        <label for="4">
          <img class="style_image" src="../img/styles/Eclectic/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="5">
        <label for="5">
          <img class="style_image" src="../img/styles/Eclectic/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="6">
        <label for="6">
          <img class="style_image" src="../img/styles/Eclectic/Style8.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="7">
        <label for="7">
          <img class="style_image" src="../img/styles/Eclectic/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="8">
        <label for="8">
          <img class="style_image" src="../img/styles/Eclectic/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="9">
        <label for="9">
          <img class="style_image" src="../img/styles/Eclectic/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="10">
        <label for="10">
          <img class="style_image" src="../img/styles/Eclectic/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="11">
        <label for="11">
          <img class="style_image" src="../img/styles/Eclectic/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="12">
        <label for="12">
          <img class="style_image" src="../img/styles/Eclectic/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="13">
        <label for="13">
          <img class="style_image" src="../img/styles/Eclectic/Style15.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="14">
        <label for="14">
          <img class="style_image" src="../img/styles/Eclectic/Style16.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="eclectic" id="15">
        <label for="15">
          <img class="style_image" src="../img/styles/Eclectic/Style17.png">
        </label>
      </div>
    </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal0">
        <span>Proceed</span>
      </div>
    </div>
  </div>
</div>

<!-- Bohemian -->
<div id="myModal2" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Bohemian</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        Defined by a lack of structure bohemiam reflects a carefree, laidback unconventional style, consisiting of layers of pattern, texture and colour.
      </h6>
    </div>
      <div class="styles-grid">
      <div>
        <input type="checkbox" name="bohemian" id="16" />
        <label for="16">
          <img class="style_image" src="../img/styles/Bohemian/Style1.png  ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="17" />
        <label for="17">
          <img class="style_image" src="../img/styles/Bohemian/Style2.png  ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="18">
        <label for="18">
          <img class="style_image" src="../img/styles/Bohemian/Style3.png  ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="19">
        <label for="19">
          <img class="style_image" src="../img/styles/Bohemian/Style6.png  ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="20">
        <label for="20">
          <img class="style_image" src="../img/styles/Bohemian/Style7.png  ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="21">
        <label for="21">
          <img class="style_image" src="../img/styles/Bohemian/Style8.png  ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="22">
        <label for="22">
          <img class="style_image" src="../img/styles/Bohemian/Style9.png  ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="23">
        <label for="23">
          <img class="style_image" src="../img/styles/Bohemian/Style10.png ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="24">
        <label for="24">
          <img class="style_image" src="../img/styles/Bohemian/Style11.png ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="25">
        <label for="25">
          <img class="style_image" src="../img/styles/Bohemian/Style12.png ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="26">
        <label for="26">
          <img class="style_image" src="../img/styles/Bohemian/Style13.png ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="27">
        <label for="27">
          <img class="style_image" src="../img/styles/Bohemian/Style14.png ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="28">
        <label for="28">
          <img class="style_image" src="../img/styles/Bohemian/Style15.png ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="29">
        <label for="29">
          <img class="style_image" src="../img/styles/Bohemian/Style16.png ">
        </label>
      </div>
      <div>
        <input type="checkbox" name="bohemian" id="30">
        <label for="30">
          <img class="style_image" src="../img/styles/Bohemian/Style17.png ">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal1">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

<!-- Contemporary -->
<div id="myModal3" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Contemporary</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        A style that is minimalist and current, charaterised by simplicity, clean lines, natural light and open space accomained by a palette of large solid
        expanses of colour or neutrals. The design tends to showcase space rather than things.
      </h6>
    </div>
        <div class="styles-grid">
      <div>
        <input type="checkbox" name="contemporary" id="31" />
        <label for="31">
          <img class="style_image" src="../img/styles/Contemporary/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="32" />
        <label for="32">
          <img class="style_image" src="../img/styles/Contemporary/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="33">
        <label for="33">
          <img class="style_image" src="../img/styles/Contemporary/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="34">
        <label for="34">
          <img class="style_image" src="../img/styles/Contemporary/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="35">
        <label for="35">
          <img class="style_image" src="../img/styles/Contemporary/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="36">
        <label for="36">
          <img class="style_image" src="../img/styles/Contemporary/Style8.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="37">
        <label for="37">
          <img class="style_image" src="../img/styles/Contemporary/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="38">
        <label for="38">
          <img class="style_image" src="../img/styles/Contemporary/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="39">
        <label for="39">
          <img class="style_image" src="../img/styles/Contemporary/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="40">
        <label for="40">
          <img class="style_image" src="../img/styles/Contemporary/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="41">
        <label for="41">
          <img class="style_image" src="../img/styles/Contemporary/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="42">
        <label for="42">
          <img class="style_image" src="../img/styles/Contemporary/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="43">
        <label for="43">
          <img class="style_image" src="../img/styles/Contemporary/Style15.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="44">
        <label for="44">
          <img class="style_image" src="../img/styles/Contemporary/Style16.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="contemporary" id="45">
        <label for="45">
          <img class="style_image" src="../img/styles/Contemporary/Style4.png">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal2">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

<!-- Coastal -->
<div id="myModal4" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Coastal</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        This beachy style is defined by seaside elements and colours. A muted pallette will be seen, followed by flowy textures creating a soothing sense
        of ‘holiday feel’ in this relaxing space.
      </h6>
    </div>
        <div class="styles-grid">
      <div>
        <input type="checkbox" name="coastal" id="46" />
        <label for="46">
          <img class="style_image" src="../img/styles/Coastal/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="47" />
        <label for="47">
          <img class="style_image" src="../img/styles/Coastal/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="48">
        <label for="48">
          <img class="style_image" src="../img/styles/Coastal/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="49">
        <label for="49">
          <img class="style_image" src="../img/styles/Coastal/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="50">
        <label for="50">
          <img class="style_image" src="../img/styles/Coastal/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="51">
        <label for="51">
          <img class="style_image" src="../img/styles/Coastal/Style8.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="52">
        <label for="52">
          <img class="style_image" src="../img/styles/Coastal/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="53">
        <label for="53">
          <img class="style_image" src="../img/styles/Coastal/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="54">
        <label for="54">
          <img class="style_image" src="../img/styles/Coastal/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="55">
        <label for="55">
          <img class="style_image" src="../img/styles/Coastal/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="56">
        <label for="56">
          <img class="style_image" src="../img/styles/Coastal/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="57">
        <label for="57">
          <img class="style_image" src="../img/styles/Coastal/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="58">
        <label for="58">
          <img class="style_image" src="../img/styles/Coastal/Style15.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="59">
        <label for="59">
          <img class="style_image" src="../img/styles/Coastal/Style16.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="coastal" id="60">
        <label for="60">
          <img class="style_image" src="../img/styles/Coastal/Style4.png">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal3">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

<!-- Dramatic & Bold -->
<div id="myModal5" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Dramatic & Bold</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        A space which features a vibrant contrast between colours, materials and textures. Typically consisitng of strong patterns and deep colours.
        This style will bring a lovely statement to your home.
      </h6>
    </div>
        <div class="styles-grid">
      <div>
        <input type="checkbox" name="dramatic_bold" id="61" />
        <label for="61">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="62" />
        <label for="62">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="63">
        <label for="63">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="64">
        <label for="64">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style4.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="65">
        <label for="65">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style5.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="66">
        <label for="66">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="67">
        <label for="67">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="68">
        <label for="68">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style8.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="69">
        <label for="69">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="70">
        <label for="70">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="71">
        <label for="71">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="72">
        <label for="72">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="73">
        <label for="73">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="74">
        <label for="74">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="dramatic_bold" id="75">
        <label for="75">
          <img class="style_image" src="../img/styles/Dramatic and Bold/Style15.png">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal4">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

<!-- Glam -->
<div id="myModal6" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Glam</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        An extravagant style which strikes a balance of opulence and functionality. Shiny elements such as brass, silver and gold are used, alongside
        luxurious fabrics such as fuax fur, silk and velvet all of which encourage a feminine flair.
      </h6>
    </div>
        <div class="styles-grid">
      <div>
        <input type="checkbox" name="glam" id="76" />
        <label for="76">
          <img class="style_image" src="../img/styles/Glam/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="77" />
        <label for="77">
          <img class="style_image" src="../img/styles/Glam/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="78">
        <label for="78">
          <img class="style_image" src="../img/styles/Glam/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="79">
        <label for="79">
          <img class="style_image" src="../img/styles/Glam/Style4.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="80">
        <label for="80">
          <img class="style_image" src="../img/styles/Glam/Style5.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="81">
        <label for="81">
          <img class="style_image" src="../img/styles/Glam/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="82">
        <label for="82">
          <img class="style_image" src="../img/styles/Glam/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="83">
        <label for="83">
          <img class="style_image" src="../img/styles/Glam/Style8.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="84">
        <label for="84">
          <img class="style_image" src="../img/styles/Glam/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="85">
        <label for="85">
          <img class="style_image" src="../img/styles/Glam/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="86">
        <label for="86">
          <img class="style_image" src="../img/styles/Glam/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="87">
        <label for="87">
          <img class="style_image" src="../img/styles/Glam/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="88">
        <label for="88">
          <img class="style_image" src="../img/styles/Glam/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="89">
        <label for="89">
          <img class="style_image" src="../img/styles/Glam/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="glam" id="90">
        <label for="90">
          <img class="style_image" src="../img/styles/Glam/Style15.png">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal5">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

<!-- Industrial -->
<div id="myModal7" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Industrial</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        A style that embraces elements from the skeleton of the building. A raw look, which favours metal features and exposes imperfections.
      </h6>
    </div>
        <div class="styles-grid">
      <div>
        <input type="checkbox" name="industrial" id="91" />
        <label for="91">
          <img class="style_image" src="../img/styles/Industrial/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="92" />
        <label for="92">
          <img class="style_image" src="../img/styles/Industrial/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="93">
        <label for="93">
          <img class="style_image" src="../img/styles/Industrial/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="94">
        <label for="94">
          <img class="style_image" src="../img/styles/Industrial/Style4.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="95">
        <label for="95">
          <img class="style_image" src="../img/styles/Industrial/Style5.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="96">
        <label for="96">
          <img class="style_image" src="../img/styles/Industrial/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="97">
        <label for="97">
          <img class="style_image" src="../img/styles/Industrial/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="98">
        <label for="98">
          <img class="style_image" src="../img/styles/Industrial/Style8.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="99">
        <label for="99">
          <img class="style_image" src="../img/styles/Industrial/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="100">
        <label for="100">
          <img class="style_image" src="../img/styles/Industrial/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="101">
        <label for="101">
          <img class="style_image" src="../img/styles/Industrial/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="102">
        <label for="102">
          <img class="style_image" src="../img/styles/Industrial/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="103">
        <label for="103">
          <img class="style_image" src="../img/styles/Industrial/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="104">
        <label for="104">
          <img class="style_image" src="../img/styles/Industrial/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="industrial" id="105">
        <label for="105">
          <img class="style_image" src="../img/styles/Industrial/Style15.png">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal6">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

<!-- Rustic -->
<div id="myModal8" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Rustic</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        A natural, rough, aged and casual design. Often featured with elements from nature, rustic uses simplier textures and fabric prints, creating a
        more tranquil environment.
      </h6>
    </div>
        <div class="styles-grid">
      <div>
        <input type="checkbox" name="rustic" id="106" />
        <label for="106">
          <img class="style_image" src="../img/styles/Rustic/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="107" />
        <label for="107">
          <img class="style_image" src="../img/styles/Rustic/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="108">
        <label for="108">
          <img class="style_image" src="../img/styles/Rustic/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="109">
        <label for="109">
          <img class="style_image" src="../img/styles/Rustic/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="110">
        <label for="110">
          <img class="style_image" src="../img/styles/Rustic/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="111">
        <label for="111">
          <img class="style_image" src="../img/styles/Rustic/Style8.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="112">
        <label for="112">
          <img class="style_image" src="../img/styles/Rustic/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="113">
        <label for="113">
          <img class="style_image" src="../img/styles/Rustic/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="114">
        <label for="114">
          <img class="style_image" src="../img/styles/Rustic/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="115">
        <label for="115">
          <img class="style_image" src="../img/styles/Rustic/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="116">
        <label for="116">
          <img class="style_image" src="../img/styles/Rustic/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="117">
        <label for="117">
          <img class="style_image" src="../img/styles/Rustic/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="118">
        <label for="118">
          <img class="style_image" src="../img/styles/Rustic/Style15.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="119">
        <label for="119">
          <img class="style_image" src="../img/styles/Rustic/Style16.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="rustic" id="120">
        <label for="120">
          <img class="style_image" src="../img/styles/Rustic/Style17.png">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal7">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

<!-- Scandi -->
<div id="myModal9" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Scandi</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        A minimualistic style which emphasies clean lines, utility and simple furnishings that are functional, beautiful and cosy. A blend of textures and
        soft hues to create sleek modern decor feel inviting and warm.
      </h6>
    </div>
        <div class="styles-grid">
      <div>
        <input type="checkbox" name="scandi" id="121" />
        <label for="121">
          <img class="style_image" src="../img/styles/Scandi/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="122" />
        <label for="122">
          <img class="style_image" src="../img/styles/Scandi/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="123">
        <label for="123">
          <img class="style_image" src="../img/styles/Scandi/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="124">
        <label for="124">
          <img class="style_image" src="../img/styles/Scandi/Style4.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="125">
        <label for="125">
          <img class="style_image" src="../img/styles/Scandi/Style5.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="126">
        <label for="126">
          <img class="style_image" src="../img/styles/Scandi/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="127">
        <label for="127">
          <img class="style_image" src="../img/styles/Scandi/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="128">
        <label for="128">
          <img class="style_image" src="../img/styles/Scandi/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="129">
        <label for="129">
          <img class="style_image" src="../img/styles/Scandi/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="130">
        <label for="130">
          <img class="style_image" src="../img/styles/Scandi/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="131">
        <label for="131">
          <img class="style_image" src="../img/styles/Scandi/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="132">
        <label for="132">
          <img class="style_image" src="../img/styles/Scandi/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="133">
        <label for="133">
          <img class="style_image" src="../img/styles/Scandi/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="134">
        <label for="134">
          <img class="style_image" src="../img/styles/Scandi/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="scandi" id="135">
        <label for="135">
          <img class="style_image" src="../img/styles/Scandi/Style15.png">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal8">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

<!-- Transitional -->
<div id="transitionalModal" class="modal2">
  <div class="modal-content2">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Transitional</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        A design which combines the use of traditional and contemporary styles. Blending together these two interior catorgeries to create a classi.
        blanced, flexible and elegant look.
      </h6>
    </div>
        <div class="styles-grid">
      <div>
        <input type="checkbox" name="transitional" id="136" />
        <label for="136">
          <img class="style_image" src="../img/styles/Transitional/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="137" />
        <label for="137">
          <img class="style_image" src="../img/styles/Transitional/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="138">
        <label for="138">
          <img class="style_image" src="../img/styles/Transitional/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="139">
        <label for="139">
          <img class="style_image" src="../img/styles/Transitional/Style4.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="140">
        <label for="140">
          <img class="style_image" src="../img/styles/Transitional/Style5.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="141">
        <label for="141">
          <img class="style_image" src="../img/styles/Transitional/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="142">
        <label for="142">
          <img class="style_image" src="../img/styles/Transitional/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="143">
        <label for="143">
          <img class="style_image" src="../img/styles/Transitional/Style8.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="144">
        <label for="144">
          <img class="style_image" src="../img/styles/Transitional/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="145">
        <label for="145">
          <img class="style_image" src="../img/styles/Transitional/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="146">
        <label for="146">
          <img class="style_image" src="../img/styles/Transitional/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="147">
        <label for="147">
          <img class="style_image" src="../img/styles/Transitional/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="148">
        <label for="148">
          <img class="style_image" src="../img/styles/Transitional/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="149">
        <label for="149">
          <img class="style_image" src="../img/styles/Transitional/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="transitional" id="150">
        <label for="150">
          <img class="style_image" src="../img/styles/Transitional/Style15.png">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal11">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

<!-- Traditional -->
<div id="myModal10" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="center-grid">
      <h2>Traditional</h2></br>
    </div>
    <div class="center-grid" style="padding-bottom: 20px;">
      <h6 style="text-align: center;">
        A timeless and comfortable style originating from the 18th and 19th century. The scheme is typically a more decorated style layered with
        intricaies, pattern and detail whilst incorpating classic art, antiques, and all pieces with history.
      </h6>
    </div>
        <div class="styles-grid">
      <div>
        <input type="checkbox" name="traditional" id="151" />
        <label for="151">
          <img class="style_image" src="../img/styles/Traditional/Style1.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="152" />
        <label for="152">
          <img class="style_image" src="../img/styles/Traditional/Style2.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="153">
        <label for="153">
          <img class="style_image" src="../img/styles/Traditional/Style3.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="154">
        <label for="154">
          <img class="style_image" src="../img/styles/Traditional/Style4.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="155">
        <label for="155">
          <img class="style_image" src="../img/styles/Traditional/Style5.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="156">
        <label for="156">
          <img class="style_image" src="../img/styles/Traditional/Style6.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="157">
        <label for="157">
          <img class="style_image" src="../img/styles/Traditional/Style7.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="158">
        <label for="158">
          <img class="style_image" src="../img/styles/Traditional/Style8.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="159">
        <label for="159">
          <img class="style_image" src="../img/styles/Traditional/Style9.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="160">
        <label for="160">
          <img class="style_image" src="../img/styles/Traditional/Style10.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="161">
        <label for="161">
          <img class="style_image" src="../img/styles/Traditional/Style11.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="162">
        <label for="162">
          <img class="style_image" src="../img/styles/Traditional/Style12.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="163">
        <label for="163">
          <img class="style_image" src="../img/styles/Traditional/Style13.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="164">
        <label for="164">
          <img class="style_image" src="../img/styles/Traditional/Style14.png">
        </label>
      </div>
      <div>
        <input type="checkbox" name="traditional" id="165">
        <label for="165">
          <img class="style_image" src="../img/styles/Traditional/Style15.png">
        </label>
      </div>
  </div>
    <div class="center-grid">
      <div class="proceed-style" style="text-align: center;" id="closeModal9">
        <span>Proceed</span>
      </div>
    </div>
</div>
</div>

</body>
<script>

// Get the modal
var modal = document.getElementsByClassName('modal');

// Get the button that opens the modal
var btn = document.getElementsByClassName("styles-image");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
btn[0].onclick = function() {
    modal[0].style.display = "block";
}

btn[1].onclick = function() {
    modal[1].style.display = "block";
}

btn[2].onclick = function() {
    modal[2].style.display = "block";
}

btn[3].onclick = function() {
    modal[3].style.display = "block";
}

btn[4].onclick = function() {
    modal[4].style.display = "block";
}

btn[5].onclick = function() {
    modal[5].style.display = "block";
}

btn[6].onclick = function() {
    modal[6].style.display = "block";
}

btn[7].onclick = function() {
    modal[7].style.display = "block";
}

btn[8].onclick = function() {
    modal[8].style.display = "block";
}

btn[9].onclick = function() {
    modal[9].style.display = "block";
}

btn[10].onclick = function() {
    modal[10].style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span[0].onclick = function() {
    modal[0].style.display = "none";
}

span[1].onclick = function() {
    modal[1].style.display = "none";
}

span[2].onclick = function() {
    modal[2].style.display = "none";
}

span[3].onclick = function() {
    modal[3].style.display = "none";
}

span[4].onclick = function() {
    modal[4].style.display = "none";
}

span[5].onclick = function() {
    modal[5].style.display = "none";
}

span[6].onclick = function() {
    modal[6].style.display = "none";
}

span[7].onclick = function() {
    modal[7].style.display = "none";
}

span[8].onclick = function() {
    modal[8].style.display = "none";
}

span[9].onclick = function() {
    modal[9].style.display = "none";
}

span[10].onclick = function() {
    modal[10].style.display = "none";
}

  </script>

  <script>
$('#transitional').click(function() {
  document.getElementById("transitionalModal").style.display = "block";
});

$('#closeModal0').click(function() {
  modal[0].style.display = "none";
});

$('#closeModal1').click(function() {
  modal[1].style.display = "none";
});

$('#closeModal2').click(function() {
  modal[2].style.display = "none";
});

$('#closeModal3').click(function() {
  modal[3].style.display = "none";
});

$('#closeModal4').click(function() {
  modal[4].style.display = "none";
});

$('#closeModal5').click(function() {
  modal[5].style.display = "none";
});

$('#closeModal6').click(function() {
  modal[6].style.display = "none";
});

$('#closeModal7').click(function() {
  modal[7].style.display = "none";
});

$('#closeModal8').click(function() {
  modal[8].style.display = "none";
});

$('#closeModal9').click(function() {
  modal[9].style.display = "none";
});

$('#closeModal10').click(function() {
  modal[10].style.display = "none";
});

$('#closeModal11').click(function() {
  document.getElementById("transitionalModal").style.display = "none";
});



$(document).click(function(event) {
  //if you click on anything except the modal itself or the "open modal" link, close the modal
  if (!$(event.target).closest(".modal-content2,#transitional").length) {
    document.getElementById('transitionalModal').style.display = "none";
  }
});


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  for (let i = 0; i < modal.length; i++) {
    // When the user clicks the button, open the modal 
    btn[i].onclick = function() {
      modal[i].style.display = "block";
    };
    // When the user clicks on the backdrop or close span, close it
    modal[i].onclick = function(e) {
      if ([modal[i], span[i]].includes(e.target)) {
        modal[i].style.display = "none";
      }
    };
  }
}

function updateCheck() {
  let elems1 = document.getElementsByName("eclectic");
    let checked1 = false;
    for (let i = 0; i < elems1.length; i++) {
        if (elems1[i].checked) {
            checked1 = true;
        }
    }
    if (checked1) {
        eclectic = 1;
    } else {  
        eclectic = 0;
    }

    let elems2 = document.getElementsByName("conteporary");
    let checked2 = false;
    for (let i = 0; i < elems2.length; i++) {
        if (elems2[i].checked) {
            checked2 = true;
        }
    }
    if (checked2) {
        contemporary = 1;
    } else {  
        contemporary = 0;
    }

    let elems3 = document.getElementsByName("coastal");
    let checked3 = false;
    for (let i = 0; i < elems3.length; i++) {
        if (elems3[i].checked) {
            checked3 = true;
        }
    }
    if (checked3) {
        coastal = 1;
    } else {  
        coastal = 0;
    }

    let elems4 = document.getElementsByName("dramatic_bold");
    let checked4 = false;
    for (let i = 0; i < elems4.length; i++) {
        if (elems4[i].checked) {
            checked4 = true;
        }
    }
    if (checked4) {
        dramatic_bold = 1;
    } else {  
        dramatic_bold = 0;
    }

    let elems5 = document.getElementsByName("glam");
    let checked5 = false;
    for (let i = 0; i < elems5.length; i++) {
        if (elems5[i].checked) {
            checked5 = true;
        }
    }
    if (checked5) {
      glam = 1;
    } else {  
      glam = 0;
    }

    let elems6 = document.getElementsByName("industrial");
    let checked6 = false;
    for (let i = 0; i < elems6.length; i++) {
        if (elems6[i].checked) {
            checked6 = true;
        }
    }
    if (checked6) {
        industrial = 1;
    } else {  
        industrial = 0;
    }

    let elems7 = document.getElementsByName("rustic");
    let checked7 = false;
    for (let i = 0; i < elems7.length; i++) {
        if (elems7[i].checked) {
            checked7 = true;
        }
    }
    if (checked7) {
        rustic = 1;
    } else {  
        rustic = 0;
    }

    let elems8 = document.getElementsByName("scandi");
    let checked8 = false;
    for (let i = 0; i < elems8.length; i++) {
        if (elems8[i].checked) {
            checked8 = true;
        }
    }
    if (checked8) {
        scandi = 1;
    } else {  
        scandi = 0;
    }

    let elems9 = document.getElementsByName("traditional");
    let checked9 = false;
    for (let i = 0; i < elems9.length; i++) {
        if (elems9[i].checked) {
            checked9 = true;
        }
    }
    if (checked9) {
      traditional = 1;
    } else {  
      traditional = 0;
    }

    let elems10 = document.getElementsByName("transitional");
    let checked10 = false;
    for (let i = 0; i < elems10.length; i++) {
        if (elems10[i].checked) {
            checked10 = true;
        }
    }
    if (checked10) {
        transitional = 1;
    } else {  
        transitional = 0;
    }


    let elems11 = document.getElementsByName("bohemian");
    let checked11 = false;
    for (let i = 0; i < elems11.length; i++) {
        if (elems11[i].checked) {
            checked11 = true;
        }
    }
    if (checked11 == true) {
        bohemian = 1;
    } else {  
        bohemian = 0;
    }
}

function nextPage(){
  updateCheck()
    window.location.href='./interior_quiz_10.php?eclectic=' + eclectic + '&bohemian=' + bohemian + '&contemporary=' + contemporary + '&coastal=' + coastal + '&dramatic_bold=' + dramatic_bold + '&glam=' + glam + '&industrial=' + industrial + '&rustic=' + rustic + '&scandi=' + scandi + '&traditional=' + traditional+ '&transitional=' + transitional + '';
  } 
  </script>
</html>