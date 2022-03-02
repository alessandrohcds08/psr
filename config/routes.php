<?php

use Alura\Cursos\Controller\{Exclusao, FormularioInsercao};

return array(
    '/novo-curso' => FormularioInsercao::class,
    '/excluir-curso'=> Exclusao::class
    );
