<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;




/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="The Swagger Learning API Documentation",
 *      description="This document is used to know api's status and run the api's",
 *      @OA\Contact(
 *          email="haran@mailinator.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="API Server"
 * )
 *
 * @OA\Tag(
 *     name="SWAGGER-LEARNING",
 *     description="API Endpoints of Swagger-learning"
 * )
 */

 

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function countryList() {
        $countryList =Country::with('posts')->find(1);
        dd($countryList);
    }
}
