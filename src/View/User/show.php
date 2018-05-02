<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Accueil</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="\PiePHP\user\show">Profil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\PiePHP\movie\allmovies">Films</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Genres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link logout" href="\PiePHP\user\logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!-- <a class logout href="\PiePHP\user\logout">Logout</a> -->
<form method="POST" id="delete" action="">
  <input class="btn btn-primary" type="submit" name="submitdelete" value="delete my account">
</form>
<h1>Bonjour <?php echo $_SESSION['name']; ?></h1>
<div class="informationsProfile">
  <p>Nom : <?php echo $_SESSION['lastname']; ?></p>
  <p>Prénom : <?php echo $_SESSION['name']; ?></p>
  <p>Email : <?php echo $_SESSION['email']; ?></p>
    <form method="POST" id="emailForm" action="">
      <label><b>Modifier Email</b></label><br>
      <input type="text" placeholder="email" class="form-control"  name="updatemail">
      <button type="submit" class="btn btn-primary" name="submit" value="apdatemail" class="signupbtn">Modifier</button>
    </form>
    <form method="POST" id="passForm" action="">
      <label><b>Modifiez votre Mot De Passe</b></label><br>
      <input type="password" class="form-control"  placeholder="ancien mot de passe" name="pswmodif">
      <input type="password"  class="form-control" placeholder="nouveau mot de passe" name="pswmodif">
      <input type="password" class="form-control"  placeholder="nouveau mot de passe" name="pswmodif">
      <button type="submit" name="submit" class="btn btn-primary" value="psw">Modifier</button> 
    </form>