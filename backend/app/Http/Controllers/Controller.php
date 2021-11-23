<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Components\simBaseAuth;


class Controller extends BaseController {

    public function showAllData() {
        // return response()->json(Author::all());
        // $fone =  new \App\Http\Controllers\simBaseAuth;
        (new simBaseAuth)->callFunction('f_api_save_accommodations_data', [
            'check-in' => 18941
         ]);
        return 'ok';
    }
}
