<?php
session_start();
        
        include("connection.php");
        include("functions.php");
        
        $user_data = check_login($con);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Module</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="asset/logo.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap');
            body{
                background-image: url(asset/bg.png);
                background-repeat: no-repeat;
                background-size: auto;
               
            }
            .container1 {
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-direction: row; /* Updated to align items vertically */
      height: 50vh;
    }

    .code-block {
      border: 2px solid #333;
      border-radius: 15px;
      padding: 10px;
      margin: 10px;
      cursor: pointer;
      background-color: blueviolet;
    }

    .code-area {
      border: 2px solid #333;
      border-radius: 10px;
      padding: 10px;
      min-height: 200px;
      width: 200px;
      flex-grow: 1;
      background-color: aliceblue;
      
    }

    .message {
      border-radius: 10px;
      margin-top: 10px;
      margin: 20px;
      padding: 8px 16px;
      font-size: 16px;
      cursor: pointer;
      background-color: blueviolet;
      display: none; /* Initially hide expected and actual */
    }
    .message1 { /* Added styles for expected and actual */
      background-color: blueviolet;
      border-radius: 10px;
      margin-top: 10px;
      margin: 20px;
      padding: 8px 16px;
      font-size: 16px;
      cursor: pointer;
      color:aliceblue;
      display: none; /* Initially hide expected and actual */
    }

    .expected, .actual{
        color: aliceblue;
    }


    #checkCodeButton, #resetBlock{ /* style for checkbutton*/
      border-radius: 1px;
      margin-top: 10px;
      margin: 20px;
      padding: 8px 16px;
      font-size: 16px;
      cursor: pointer;
      background-color: blueviolet;
    }
    

    #tryAgainButton,
    .expected,
    .actual { /* Added styles for expected and actual */
      background-color: blueviolet;
      border-radius: 10px;
      margin-top: 10px;
      margin: 20px;
      padding: 8px 16px;
      font-size: 16px;
      cursor: pointer;
      display: none; /* Initially hide expected and actual */
    }

        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end" id="sidebar-wrapper" style="background: #022443; color: aliceblue;">
                <div class="sidebar-heading border-bottom bg-cyan" style="background: #022443;"><img src="asset/logo.png" alt="" style="height: 60px; width: 60px; margin-right: 10px;"><p class="h4" style="float: right; margin-top: 15px; margin-right: 45px; color: aliceblue;">IThink</p></div>
                <div class="list-group list-group-flush" style="background: #022443; color: aliceblue;">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="home.php" style="background: #022443; color: aliceblue;"><img src="asset/star.png" alt="" class="img-fluid" style="height: 60px; width: 60px;">Home</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#" style="background: #022443; color: aliceblue;"><img src="asset/star.png" alt="" class="img-fluid" style="height: 60px; width: 60px;">Leaderboards</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="module.php" style="background: #022443; color: aliceblue;"><img src="asset/star.png" alt="" class="img-fluid" style="height: 60px; width: 60px;">Modules</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#" style="background: #022443; color: aliceblue;"><img src="asset/star.png" alt="" class="img-fluid" style="height: 60px; width: 60px;">Progress</a>
                   
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light  border-bottom" style="background: #7590B8;">
                    <div class="container-fluid">
                        <div class="navbar-collapse" id="navbarSupportedContent">
                            <p class="h2" style="color:aliceblue; margin-left:20px;">Introduction</p>
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="asset/person.png" alt="" style="height: 60px; width: 60px;"></a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Profile</a>
                                        <a class="dropdown-item" href="#!">Settings</a>
                                        <a class="dropdown-item" href="logout.php">Log out</a>
    
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <div class="container">
                        <p class="h4 d-flex justify-content-center" style="color:aliceblue; margin-top: 20px; ">Simple Text Print</p>
                        <p class="h4 d-flex justify-content-center" style="color:aliceblue; margin-top: 20px; ">Drag and drop the code blocks to the code area.</p>
                        <p class="h4 d-flex justify-content-center" style="color:aliceblue; margin-top: 20px; ">Use the code blocks to print name "John".</p>
                    </div>
                    
                <div class="container1">
                        <div class="code-block" data-code="print" draggable="true" ondragstart="drag(event)"    style="color:aliceblue; font-family: 'Arial';">print</div>
                        <div class="code-block" data-code="('" draggable="true" ondragstart="drag(event)"  style="color:aliceblue; font-family: 'Arial';">('</div>
                        <div class="code-block" data-code="," draggable="true" ondragstart="drag(event)"        style="color:aliceblue; font-family: 'Arial';">,</div >
                        <div class="code-block" data-code="John!');" draggable="true" ondragstart="drag(event)"style="color:aliceblue; font-family: 'Arial';">John!');</div>

                        <div class="code-area" id="codeArea" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

                        <button id="checkCodeButton" onclick="checkCode()" style="color:aliceblue; font-family: 'Arial';">Check Code</button>
                        <button id="resetBlock" onclick="resetBlock()"style="color:aliceblue; font-family: 'Arial';">Reset Block</button>
                        <button id="tryAgainButton" onclick="tryAgain()"style="color:aliceblue; font-family: 'Arial';">Try Again</button>

                        
                        <div class="message" id="message" style="color:aliceblue;">Output: John</div>
                        <br>
                        <div class="expected" id="expected"></div>
                        <br>
                        <div class="actual" id="actual"></div>
                            </div>
                        <div class="expected" id="expected"></div>
                        <br>
                        <div class="actual" id="actual"></div>    
                        <a id="nextPageButton" href="introprob3.php" class="btn btn-primary" style="color:aliceblue; font-family: 'Arial'; display: none; width:80px;">Next Page</a>



                     
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
    function allowDrop(event) {
      event.preventDefault();
    }

    function drag(event) {
      event.dataTransfer.setData("text", event.target.dataset.code);
    }

    function drop(event) {
      event.preventDefault();
      const codeBlockData = event.dataTransfer.getData("text");
      const codeBlock = document.querySelector(`[data-code="${codeBlockData}"]`);

      if (codeBlock) {
        const codeArea = document.getElementById("codeArea");
        codeArea.innerHTML += codeBlockData + "\n";
        codeBlock.style.display = "none";
      }
    }
    document.getElementById("tryAgainButton").style.display = "none"; // Initially hide the button

    function checkCode() {
      const codeArea = document.getElementById("codeArea");
      const code = codeArea.innerText.trim(); // Remove leading and trailing white spaces
      // Edit here for the expected pattern
      const expectedPattern = "print (' John!');";

      console.log("Actual Code:", code);
      console.log("Expected Pattern:", expectedPattern);

      const isCorrect = isCodeCorrect(code, expectedPattern);

      
  if (isCorrect) {
    document.getElementById("message").style.display = "block";
    document.getElementById("tryAgainButton").style.display = "none";
    document.getElementById("actual").innerText = "Actual Code: " + code;
    document.getElementById("expected").innerText = "Expected Pattern: " + expectedPattern;
    document.getElementById("actual").style.display = "block";
    document.getElementById("expected").style.display = "block";

    // Show the Next Page button
    document.getElementById("nextPageButton").style.display = "block";
  } else {
    alert("Code is incorrect. Please check the console for details.");
    document.getElementById("actual").style.display = "none";
    document.getElementById("expected").style.display = "none";
  }

      // Show/hide buttons based on correctness
      if (isCorrect) {
        document.getElementById("tryAgainButton").style.display = "none";
      } else {
        document.getElementById("tryAgainButton").style.display = "block";
      }
    }

    function tryAgain() {
      // Reset the game state
      const codeArea = document.getElementById("codeArea");
      codeArea.innerHTML = '';
      document.getElementById("message").style.display = "none";
      document.getElementById("actual").style.display = "none";
      document.getElementById("expected").style.display = "none";
        // Show the Next Page button
    document.getElementById("nextPageButton").style.display = "none";
      // Show the code blocks again
      const codeBlocks = document.querySelectorAll(".code-block");
      codeBlocks.forEach(block => {
        block.style.display = "block";
      });
    }


    function tryAgain() {
  // Reset the game state
  const codeArea = document.getElementById("codeArea");
  codeArea.innerHTML = '';
  document.getElementById("message").style.display = "none";

  document.getElementById("actual").style.display = "none";
  document.getElementById("expected").style.display = "none";

  

  // Hide the Try Again button
  document.getElementById("tryAgainButton").style.display = "none";

  // Show the code blocks again
  const codeBlocks = document.querySelectorAll(".code-block");
  codeBlocks.forEach(block => {
    block.style.display = "block";
  });
}

function resetBlock() {
  // Reset the game state
  const codeArea = document.getElementById("codeArea");
  codeArea.innerHTML = '';
  document.getElementById("message").style.display = "none";

  document.getElementById("actual").style.display = "none";
  document.getElementById("expected").style.display = "none";
  // Show the Next Page button
  document.getElementById("nextPageButton").style.display = "none";

  const codeBlocks = document.querySelectorAll(".code-block");
  codeBlocks.forEach(block => {
    block.style.display = "block";
});
}

    function isCodeCorrect(text, pattern) {
      const normalizedCode = normalizeCode(text);
      const normalizedPattern = normalizeCode(pattern);

      console.log("Normalized Code:", normalizedCode);
      console.log("Normalized Pattern:", normalizedPattern);

      return kmpSearch(normalizedCode, normalizedPattern);
    }

    function normalizeCode(code) {
      return code.replace(/\r\n|\r/g, '\n').trim(); // Remove leading and trailing whitespaces
    }


    function kmpSearch(text, pattern) {
      const prefixArray = computePrefixArray(pattern);
      let i = 0; // index for text
      let j = 0; // index for pattern

      while (i < text.length) {
        if (pattern[j] === text[i]) {
          i++;
          j++;
        }

        if (j === pattern.length) {
          // Pattern found
          return true;
        } else if (i < text.length && pattern[j] !== text[i]) {
          if (j !== 0) {
            j = prefixArray[j - 1];
          } else {
            i++;
          }
        }
      }

      return false; // Pattern not found
    }

    function computePrefixArray(pattern) {
      const prefixArray = [0];
      let len = 0;
      let i = 1;

      while (i < pattern.length) {
        if (pattern[i] === pattern[len]) {
          len++;
          prefixArray[i] = len;
          i++;
        } else {
          if (len !== 0) {
            len = prefixArray[len - 1];
          } else {
            prefixArray[i] = 0;
            i++;
          }
        }
      }

      return prefixArray;
    }
  </script>
    </body>
</html>
