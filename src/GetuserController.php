<?php

namespace Edopratama\Getuser;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GetuserController extends Controller
{
  public function add($a, $b){
    echo $a + $b;
  }

  public function subtract($a, $b){
    echo $a - $b;
  }

  public function getapi()
  {
    $client = new \GuzzleHttp\Client();
    $request = $client->get('https://jsonplaceholder.typicode.com/users');
    $response = $request->getBody();
    return $response;
  }

}
