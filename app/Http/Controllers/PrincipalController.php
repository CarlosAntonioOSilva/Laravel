<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
   public function principal()
   {
      // Retorna a view do arquivo "principal.blade.php" no diretório "resources\views\site\principal.blade.php"
      return view('site.principal');
   }
}
