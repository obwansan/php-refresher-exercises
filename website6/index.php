<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css">
  <script>
    function showSuggestion(str) {
      if(str.length == 0) {
        document.getElementById('output').innerHTML = '';
      } else {
        // AJAX request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          // xhttp.readystate == 4: request finished and response is ready
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("output").innerHTML = this.responseText;
          }
        };
        // Send a get request with 
        xhttp.open("GET", "./suggest.php?q="+str, true);
        xhttp.send();
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Search Users</h1>
    <form>
      <label>
      Search User:
      <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
      </label>
      <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </form>
  </div>
</body>
</html>