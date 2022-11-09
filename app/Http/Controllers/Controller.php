<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     title="MadjiSukuAPI",
 *     version="0.1",
 *      @OA\Contact(
 *          email="willialfred24@gmail.com"
 *      ),
 * ),
 *  @OA\Server(
 *      description="App API",
 *      url="https://localhost:8000/api/"
 *  ),
 * @OA\PathItem (
 *      path="/get-user",
 *  ),
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
