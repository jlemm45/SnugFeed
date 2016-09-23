<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\AppData;

class DataController extends Controller
{
    public function getArticlesAddedData()
    {
        return array_flatten(AppData::getArticlesAddedCount()->toArray());
    }

    public function getUserCount()
    {
        return AppData::userCount();
    }
}
