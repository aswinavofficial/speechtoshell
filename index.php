<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Speech To Shell</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container">
<div class="row">
 <br/> <br/>   
<button id="start-record-btn" type="button">START</button> <br/>
<form action="shell.php" method="get">

<div class="col-sm-6">
<br/> <br/>
<input id="note-textarea" type="text" name="command">
</div>


  <div class="col-sm-6">

<br/> <br/>

<input type="submit" value="SEND COMMAND">

</div>
  

</div>
</form>
</div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="script.js"></script>
</body>
</html>
