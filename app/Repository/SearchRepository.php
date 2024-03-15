<?php

namespace App\Repository;

use App\Http\Requests\SearchRequest;
use App\Models\Data;

class SearchRepository
{
    static private $_instance;

    private function __construct(){

    }

    static function getInstance(){
        if (!isset(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    function filter(array $filter){
        $query = $this->getQuery();
        if (!empty($filter['name'])){
            $query->where('name', 'like', '%'.$filter['name'].'%');
        }
        if (!empty($filter['price'][0])){
            $query->where('price','>=', $filter['price'][0]);
        }
        if (!empty($filter['price'][1])){
            $query->where('price','<=', $filter['price'][1]);
        }
        if (!empty($filter['bedrooms'])){
            $query->where('bedrooms', $filter['bedrooms']);
        }
        if (!empty($filter['bathrooms'])){
            $query->where('bathrooms', $filter['bathrooms']);
        }
        if (!empty($filter['storeys'])){
            $query->where('storeys', $filter['storeys']);
        }
        if (!empty($filter['garages'])){
            $query->where('garages', $filter['garages']);
        }
        return $query->get();
    }

    private function getQuery(){
        return Data::query();
    }

}
