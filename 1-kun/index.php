<?php


session_start();

try{

    echo "Salom";

}catch(Exception  $e)
{
    die("Xatolik yuz berdi " . $e->getMessage());
}