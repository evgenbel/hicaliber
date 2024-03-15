<?php

namespace Database\Seeders;

class CsvData{
    private $fileItem;

    CONST Name = 0;
    CONST Price = 1;
    CONST Bedrooms = 2;
    CONST Bathrooms = 3;
    CONST Storeys = 4;
    CONST Garages = 5;

    function __construct(String $path){
        $this->fileItem = new \SplFileObject($path, 'r');
        $this->fileItem->setCsvControl(',');
        $this->fileItem->setFlags(\SplFileObject::READ_AHEAD | \SplFileObject::READ_CSV | \SplFileObject::SKIP_EMPTY);
    }

    function getData(){
        $this->lockData();
        foreach ($this->fileItem as $k => $lineData) {
            if ($k == 0) continue;
            yield  [
                'name'  =>  $lineData[self::Name],
                'price'  =>  $lineData[self::Price],
                'bedrooms'  =>  $lineData[self::Bedrooms],
                'bathrooms'  =>  $lineData[self::Bathrooms],
                'storeys'  =>  $lineData[self::Storeys],
                'garages'  =>  $lineData[self::Garages],
            ];
        }
        $this->unLockData();
    }

    private function lockData(){
        if (!$this->fileItem->flock(LOCK_EX)){
            throw new \Exception("Data locked");
        }
    }

    private function unLockData(){
        $this->fileItem->flock(LOCK_UN);
    }
}
