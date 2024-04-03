<?php

require_once 'clases.php';

$informatico = new Informatico ('Pedro', 'Luque', 1.72, 39, 'PHP, Java, C#, Angular, Python, HTML, CSS, TypeScript, Spring Boot');

echo 'Mi nombre es '.$informatico->getNombre().'<br/>';
echo $informatico->programar();