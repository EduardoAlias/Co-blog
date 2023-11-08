<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;
      //laravel automáticamente crea una clase para newsletter al buscarla y no encontrala.
      // new Newsletter(new ApiClient))
class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'Este email no ha podido añadirse al newsletter'
            ]);
        }

        return redirect('/')
            ->with('success', '¡Ahora estás suscrito al newsletter!');
    }
}

