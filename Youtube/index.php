<?php

require_once './Class/Videos.php';
require_once './Class/Gafanhoto.php';
require_once './Class/Visualizacao.php';

$v[0] = new Videos('Aula 1 de POO');
$v[1] = new Videos('Aula 12 de PHP');
$v[2] = new Videos('Aula 15 de HTML5');

$g[0] = new Gafanhoto('Jubileu', 22, 'M', 'juba');
$g[1] = new Gafanhoto('Creuza', 12, 'F', 'creuzita');

$vis[0] = new Visualizacao($g[0], $v[2]);

// print_r($v);
// print_r($g);
print_r($vis);

?>