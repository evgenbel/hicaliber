<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Http\Resources\SearchResource;
use App\Repository\SearchRepository;

class SearchController extends Controller
{
    function index(SearchRequest $request){
        $filter = $request->validated();
        $result = SearchRepository::getInstance()->filter($filter);
        return response()->json(SearchResource::collection($result));
    }
}
