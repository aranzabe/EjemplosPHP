<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function sumar(&$a, $b) {
    $sol = $a + $b;
    $a = 108;
    return $sol;
}

function rellenarVector(&$v) {
    for ($i = 0; $i < 10; $i++) {
        $v[] = rand(1, 100);
    }
}

