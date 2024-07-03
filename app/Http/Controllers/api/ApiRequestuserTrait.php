<?php 
namespace App\Http\Controllers\api;

trait ApiRequestuserTrait
{
  public function apiresponse($data = null, $status = null, $mes = null)
  {
    $array = [
      'data' => $data,
      'status' => $status,
      'mes' => $mes,
    ];
    return response($array, $status);
  }
}