<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 29/05/2020
 * Time: 17:11
 */

namespace App\Exceptions;


use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategoryNotFoundException extends NotFoundHttpException
{

    /**
     * CategoryNotFoundException constructor.
     */
    public function __construct()
    {
        parent::__construct('Categoria não encontrada.');
    }
}
