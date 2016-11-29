<?php 
include('header.php');
 ?>
 <div class="container" >
<form action="post" >
  <div class="form-group">
    <label for="email">address Email :</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Mot de passe:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Confirmer le mot de passe:</label>
    <input type="password" class="form-control" id="pwdc">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<?php 
include('footer.php')
 ?>
