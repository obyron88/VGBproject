<?php
include("head.php");
 ?>
<link href="css/recherche.css" rel="stylesheet">
</head>
<?php
include("header.php");
 ?>
<div class="container">
  <form method="post">
  <button id="rechercher" type="submit" class="btn btn-primary">Rechercher !</button>
<div class="row">
    <div class="parent col-xs-12 col-md-6 col-lg-4">
    <div class="up nuage"><h1>Titre</h1></div><input class="inputup" type="text" placeholder="Titre" name="titre" value=""></div>
    <div class="parent col-xs-12 col-md-6 col-lg-4">
    <div class="up nuage"><h1>Auteur</h1></div><input class="inputup" type="text" placeholder="Auteur" name="auteur" value=""></div>
    <div class="parent col-xs-12 col-md-6 col-lg-4">
    <div class="up nuage"><h1>Editeur</h1></div><input class="inputup" type="text" placeholder="Editeur" name="editeur" value=""></div>
</div>
<div class="row">
  <div class="parent col-xs-12 col-md-6 col-lg-4">
    <div class="down nuage"><h1>Âges</h1></div> <select class="selectpicker">
  <option>0-3 ans</option>
  <option>3-6 ans</option>
  <option>6-9 ans</option>
  <option>9-12 ans</option>
  <option>12-14 ans</option>
  <option>14-16 ans</option>
  <option>16-18 ans</option>
</select>
 </div>
<div class="parent col-xs-12 col-md-6 col-lg-4">
    <div class="down nuage"><h1>Genre</h1></div> <select class="selectpicker">
  <option>Romans</option>
  <option>Albums</option>
  <option>Documentaires</option>
  <option>BD</option>
</select>
</div>
<div class="parent col-xs-12 col-md-6 col-lg-4">
    <div  class="down nuage"><h1>Année</h1></div> <select class="selectpicker">
  <option>16eme siècle</option>
  <option>17eme siècle</option>
  <option>18eme siècle</option>
  <option>19eme siècle</option>
  <option>20eme siècle</option>
  <option>21eme siècle</option>
</select>
 </div>
</div>
</div>
</form>
</body>
</html>
