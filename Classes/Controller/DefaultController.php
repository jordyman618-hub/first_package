<?php

public function containerAction() : \Psr\Http\Message\ResponseInterface{
    return $this -> htmlResponse();
}