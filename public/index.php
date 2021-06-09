<html>
<head></head>
<body>
  <h1>My second PHP Project</h1>

  <script>
    fetch('api/pokemon.php').then(x => x.json()).then(y => console.log(y))
  </script>
  <script src="js/index.js" type="module"></script>
</body>
</html>