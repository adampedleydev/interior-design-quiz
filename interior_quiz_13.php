
<?php error_reporting(0);
session_start();

$_SESSION['chrome'] = $_GET["chrome"];
$_SESSION['gold'] = $_GET["gold"];
$_SESSION['copper'] = $_GET["copper"];
$_SESSION['black'] = $_GET["black"];

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <link href="https://releases.transloadit.com/uppy/v2.12.3/uppy.min.css" rel="stylesheet">
        <script src="https://releases.transloadit.com/uppy/v2.12.3/uppy.min.js"></script>
      </head>
    <body>
        <div class="center-grid">
            <img src="./img/reform.png" class="quiz-logo">
        </div>

        <div class="center-grid">
            <div style="padding-top: 65px;">
                <div style="padding-top: 15px;">
                  <h3 class="quiz-headers" style="width: 100%; text-align: center; padding-top: 25px;">Please share any images you are inspired by for your design. </h3>
                  <h5 style="color: rgb(63, 63, 63); text-align: center; line-height: 1.2 !important; padding-top: 10px;">This can include anything from a piece of furniture you like, a whole room, a particular colour or even a certain cushion.</br>Whatever is important to you for your design. Attach as many pictures as
                    you want. The alternative is a link to a pintrest board if you have one.</h5>

                    <h6 style="text-align: center; color:black; padding-top: 25px;" >Please note: you must click 'upload' after selecting your file. You may continue once you are happy with the files selected.</h6 style="text-align: center; color:black; padding-top: 25px;" >
                </div>
            </div>
        </div>

        <div class="center-grid">
          <div id="drag-drop-area" style="padding-top: 100px" ></div>
        </div>

          <button class="quiz-next-button-2" type="submit" name="buttonNext" onclick="nextButton()">
            <span>NEXT</span>
          </button>
    </body>
    <script>
      var fileArray = []
      const { XHRUpload } = Uppy
      var uppy = new Uppy.Core({
        onBeforeFileAdded: (currentFile, files) => {
          const name = Date.now() + '.' + currentFile.extension
          const modifiedFile = {
            ...currentFile,
            meta: {
                ...currentFile.meta,
                name
            },
            name
          };
          uppy.log(modifiedFile.name)
          return modifiedFile
        }})
        .use(Uppy.Dashboard, {
          inline: true,
          target: '#drag-drop-area',
        })
        .use(XHRUpload, {
          endpoint: './upload.php',
          fieldName: 'my_file',
        })
      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      })
      uppy.on('upload-progress', (file, progress) => {
        fileArray.push(file.name)
      })

      function nextButton() {
        window.location.href='./interior_quiz_14.php?&filename=' + btoa(fileArray) + '';
      }
    </script>
</html>
