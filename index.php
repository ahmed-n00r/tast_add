<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <script>
    function showHint(str) {
      var xhttp;
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "chLan.php?name="+str, true);
      xhttp.send();
    }
    </script>

  </head>
  <body>

    <h2>The XMLHttpRequest Object</h2>

    <h3>Start typing a name in the input field below:</h3>

    <form action="">
    First name: <input type="text" id="txt1" onkeyup="showHint(this.value)">
    </form>

    <p>Suggestions: <span id="txtHint">*</span></p>

  </body>
</html>
