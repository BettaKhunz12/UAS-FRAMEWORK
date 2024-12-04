<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // Anda bisa menambahkan metode atau properti yang ingin digunakan di semua controller di sini

    // Contoh properti jika diperlukan
    protected $message;

    // Contoh metode yang dapat digunakan di seluruh controller
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
