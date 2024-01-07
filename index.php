<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Uang</title>
  <style>
    /* Style untuk mempercantik tampilan input */
    input {
      padding: 8px;
      margin: 10px;
      font-size: 16px;
    }
  </style>
</head>
<body>

<!-- Input untuk bilangan uang -->
<label for="uang">Jumlah Uang:</label>
<input type="text" id="uang" oninput="formatUang(this)">

<script src="format-uang.js"></script>


</body>
</html>

