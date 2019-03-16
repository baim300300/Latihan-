<?php


namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Http\Request;

class api extends Controller
{
  public function detail()
	{
	


	 return Response::json(array(
            'status' => true,
            'message' => 'hello word',
            200
        ));

	}
}
