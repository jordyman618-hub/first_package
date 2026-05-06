<?php

namespace Vendor\FirstPackage\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class DefaultController extends ActionController{

public function containerAction() : ResponseInterface{
    return $this -> htmlResponse();
}
}