<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function sumaReferencia(&$v1, $v2) {
    $total = $v1 + $v2;
    $v1 = $v1 * 2;
    return $total;
}

function sumaValor($v1, $v2) {
    $total = $v1 + $v2;
    return $total;
}
