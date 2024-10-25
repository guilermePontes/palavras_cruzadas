<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Crossword puzzle</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<!-- partial:index.partial.html -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>cross word puzzle</title>
  <link rel="stylesheet" href="transfer.css">
</head>

<body>
  <table class="tabela">
    
    <!-- LINHA 1 -->
    <tr>  
      <td>1
        <input type="text" maxlength="1" id="myId01" disabled>
      </td>
      <td>2
        <input type="text" maxlength="1" id="myId02" disabled>
      </td>
      <td>3
        <input type="text" maxlength="1" id="myId03">
      </td>
      <td>4
        <input type="text" maxlength="1" id="myId04" disabled>
      </td>
      <td>5
        <input type="text" maxlength="1" id="myId05" disabled>
      </td>
    </tr>
    
    <!-- LINHA 2 -->
    <tr>
      <td>6
        <input type="text" maxlength="1" id="myId11" disabled>
      </td>
      <td>7
        <input type="text" maxlength="1" id="myId12">
      </td>
      <td>8
        <input type="text" maxlength="1" id="myId13">
      </td>
      <td>9
        <input type="text" maxlength="1" id="myId14">
      </td>
      <td>10
        <input type="text" maxlength="1" id="myId15">
      </td>
    </tr>
    
    <!-- LINHA 3 -->
    <tr>
      <td>11
        <input type="text" maxlength="1" id="myId21" disabled>
      </td>
      <td>12
        <input type="text" maxlength="1" id="myId22" disabled>
      </td>
      <td>13
        <input type="text" maxlength="1" id="myId23">
      </td>
      <td>14
        <input type="text" maxlength="1" id="myId24" disabled>
      </td>
      <td>15
        <input type="text" maxlength="1" id="myId25">
      </td>
    </tr>
    
    <!-- LINHA 4 -->
    <tr>
      <td>16
        <input type="text" maxlength="1" id="myId31">
      </td>
      <td>17
        <input type="text" maxlength="1" id="myId32">
      </td>
      <td>18
        <input type="text" maxlength="1" id="myId33">
      </td>
      <td>19
        <input type="text" maxlength="1" id="myId34" disabled>
      </td>
      <td>20
        <input type="text" maxlength="1" id="myId35">
      </td>
    </tr>
    
    <!-- LINHA 5 -->
    <tr>
      <td>21
        <input type="text" maxlength="1" id="myId41">
      </td>
      <td>22
        <input type="text" maxlength="1" id="myId42" disabled>
      </td>
      <td>23
        <input type="text" maxlength="1" id="myId43" disabled>
      </td>
      <td>24
        <input type="text" maxlength="1" id="myId44" disabled>
      </td>
      <td>25
        <input type="text" maxlength="1" id="myId45" disabled>
      </td>
    </tr>

  </table>
  <p><span id="timer">0</span> seconds</p>
  
  
  <div id="hint-box">
    <h3>Across</h3>
    <p class="hint">7: The default language for android
      <button>Reveal</button><span>java</span></p>
    <p class="hint">16: The natural state of a metal e.g Iron-
      <button>Reveal</button><span>ore</span></p>
    <h3>Down</h3>
    <p class="hint">3: natural chamber in the ground or inside of a hill where you can enter
      <button>Reveal</button><span>cave</span></p>
    <p class="hint">10: To do, the take part in a movie
      <button>Reveal</button><span>act</span></p>
    <p class="hint">16: |, ||, this is used in programming, opposite of "and"
      <button>Reveal</button><span>or</span></p>
  </div>
  
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</body>

</html>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
