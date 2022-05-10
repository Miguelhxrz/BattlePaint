<?php
error_reporting(0);
$errores = array();

#patrones
$PatronUsuario = "/^[a-zA-Z0-9\s-]+$/";
$PatronNombre = "/^[a-zA-Z\s-]+$/";
$PatronCantidad = "/^[0-9]+$/";
$PatronPrecio = "/^[0-9].+$/";
$PatronID = "/^[A-Z]+$/";


#variables
$nft_register = $_POST['nft_register'];
$name = $_POST['name'];
$price = $_POST['price'];
$owner = $_POST['owner'];
$power = $_POST['power'];
$rank = $_POST['rank'];
$img_nft = $_POST['nft_image'];

if (isset($nft_register)) {

  #Validacion de name
  if (isset($name)) {
    if (empty($name)) {
      array_push($errores, "Error 059: El Nombre no puede estar vacio.");
    } else
      if (strlen($name) < 3) {
      array_push($errores, "Error 060:El Nombre debe tener un tamaño mayor a 3 letras.");
    } else
      if (!preg_match($PatronNombre, $name)) {
      array_push($errores, "Error 061: El Nombre no debe llevar caracteres especial o numeros.");
    }
  } else {
    array_push($errores, "Error 062: El Nombre no existe.");
  }

  #Validacion de poder
  if (isset($power)) {
    if (empty($power)) {
      array_push($errores, "Error 059: El Poder no puede estar vacio.");
    } else
      if (strlen($power) < 3) {
      array_push($errores, "Error 060:El Poder debe tener un tamaño mayor a 3 letras.");
    } else
      if (!preg_match($PatronUsuario, $power)) {
      array_push($errores, "Error 061: El Poder no debe llevar caracteres especial.");
    }
  } else {
    array_push($errores, "Error 062: El Poder no existe.");
  }

  #Validacion de propietario
  if (isset($owner)) {
    if (empty($owner)) {
      array_push($errores, "Error 059: El nombre del Propietario no puede estar vacio.");
    } else
          if (strlen($owner) < 3) {
      array_push($errores, "Error 060:El Nombre del propietario debe tener un tamaño mayor a 3 letras.");
    } else
          if (!preg_match($PatronUsuario, $owner)) {
      array_push($errores, "Error 061: El nombre del Propietario  no debe llevar caracteres especial.");
    }
  } else {
    array_push($errores, "Error 062: El nombre del Propietario  no existe.");
  }

  #validacion de precio
  if (isset($price)) {
    if (empty($price)) {
      array_push($errores, "Error 066: El precio no puede estar vacio.");
    } else
      if (strlen($price) < 0) {
      array_push($errores, "Error 067:El precio debe ser mayor o igual a 0.");
    } else
      if (!preg_match($PatronPrecio, $price)) {
      array_push($errores, "Error 068: El precio solo admite numeros, y punto.");
    }
  } else {
    array_push($errores, "Error 069: El precio  no existe.");
  }

  #validacion de Rank
  if (isset($rank)) {
    if (empty($rank)) {
      array_push($errores, "Error 070: Se debe elegir un rango para el objeto.");
    }
  } else {
    array_push($errores, "Error 071: No se ha seleccionado un rango.");
  }


  #validacion de la imagen
  if (isset($img_nft)) {
    if (empty($img_nft)) {
      array_push($errores, "Error 076: Debes insertar la imagen del objeto.");
    }
  }

  #Errores
  if (count($errores) > 0) {
    echo "<div class='error'>
        <figure>
        <img src='../source/img/close.png' alt='icon close' id='close'>
       </figure>";
    for ($i = 0; $i < count($errores); $i++) {
      echo "<li>" . $errores[$i] . "</li>";
    }
    echo "</div>";
  } else {
    echo "<div class='correcto'><h4>¡Todo correcto!</h4></div>";

    #creando la ruta para la imagen
    $folder = "../public/items/";

    $origin = $folder . $object_img_name; #../public/items/img_name.png

    #moviendo la imagen a la carpeta
    $move = move_uploaded_file($object_img_temp, $origin);

    $price_int = intval($object_price);

    date_default_timezone_set('America/Caracas');
    $fecha = date("Y-m-d");

    $item->setID($object_id);
    $item->setName($object_name);
    $item->setStock($object_stock);
    $item->setPrice($price_int);
    $item->setSponsor($object_sponsor);
    $item->setRank($object_rank);
    $item->setCategory($object_category);
    $item->setFechaRegistro($fecha);

    $item->setImage($origin);

    $result = $item->addDataBase();

    header("location: ../index.php");
  }
}
