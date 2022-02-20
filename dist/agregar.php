<?php
$productos=simplexml_load_file('productos.xml');
$producto=$productos->addChild('producto');
$producto->addChild('codigo',$_POST['codigo']);
$producto->addChild('nombre',$_POST['nombre']);
$producto->addChild('descripcion',$_POST['desu']);
$producto->addChild('img',$_POST['imag']);
$producto->addChild('categoria',$_POST['categoria']);
$producto->addChild('precio',$_POST['precio']);
$producto->addChild('existencias',$_POST['exis']);

file_put_contents('productos.xml',$productos->asXML());
header('location:index.php?exito=1');
?>
