<?php
$productos=simplexml_load_file('productos.xml');
$producto=$productos->addChild('materia');
$producto->addChild('codigo',$_POST['codigo']);
$producto->addChild('nombre',$_POST['nombre']);
$producto->addChild('Descripcion',$_POST['desu']);
$producto->addChild('Imagenes',$_POST['imag']);
$producto->addChild('Categoria',$_POST['categoria']);
$producto->addChild('Precio',$_POST['precio']);
$producto->addChild('Existencia',$_POST['exis']);

file_put_contents('productos.xml',$productos->asXML());
header('location:index.php?exito=1');
?>