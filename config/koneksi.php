<?php

class Koneksi
{
    public function koneksi(){
    $kon = mysqli_connect('localhost', 'root', '', 'perpusdigital');
    return $kon;
    }
} 