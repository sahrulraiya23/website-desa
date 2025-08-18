<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function uploadImage($image, $path = 'images')
    {
        if ($image) {
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/' . $path, $filename);
            return $path . '/' . $filename;
        }
        return null;
    }
}
