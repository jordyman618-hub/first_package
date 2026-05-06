<?php

namespace Vendor\FirstPackage\controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class DefaultControllerextends ActionController{

public function containerAction() : ResponseInterface{
    return $this -> htmlResponse();
}
}