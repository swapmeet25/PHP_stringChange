<!-- 
#2  Rotate the characters in a string by a given input 
and have the overflow appear at the beginning, 
e.g. “MyString” rotated by 2 is “ngMyStri”.
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP string change</title>
  </head>
  <body>
      <form method="POST" action="index.php">
      <div class="form-check">
          <label class="">User Input</label>
            <input type="text" name="userInput" class="form-control" />
            <label>Characters moved</label>
            <select name="selectNum" >
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br/>
            <input type="submit" name="userSubmit" />   
        </div>
      </form>
 
  </body>
</html>

<?php 
if (isset($_POST['userSubmit'])) {
    //get user input
    $userInput = $_POST['userInput'];
    $charMove = $_POST['selectNum'];
    //call string function
    processInput($userInput, $charMove);
}

function processInput($userInput, $charMove){
    //get num of characters of given string by $charMove and print result
    $ripInput = substr($userInput, -$charMove );
    $newInput = substr($userInput, 0, -strlen($ripInput));
    echo "<br/>Original input: " . $userInput . "<br/>";
    echo "<br/>New input: " . $ripInput . $newInput;
}

?>