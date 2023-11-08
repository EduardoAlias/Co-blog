<?php
namespace App\Services;

interface NewsLetterInterface
{
 public function subscribe(string $email, string $list = null);
 
}

?>