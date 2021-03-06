<?php
// le but est de renvoyer la bonne balise html à afficher

// fonction nav_item -> un li du menu 
function nav_item(string $link,string $name):string{
  $class='nav-link';
  if($_SERVER['SCRIPT_NAME']==$link){
    $class.=' active';
  }
  $html='<a class="'.$class.'" href="'.$link.'">'.$name.'</a>';
  return $html;  
}

// cree menu d'item
function nav_menu():string{
  return nav_item('/index.php','Acceuil').
         nav_item('/contact.php','Contact');
}
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
        <title>
          <?php if(isset($title)):?>
            <?php echo($title) ?>
          <?php else:?>
            Titre
          <?php endif ?>
        </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?= nav_menu()?>
      
    </div>
  </div>
</nav>
