<?php

namespace App\Http\Services;

use Exception;
use App\Models\Transaction;
use App\Traits\UploadFile;

class TransactionService
{
    use UploadFile;

    public function handle($request, $id = null)
    {
        try {
           $this->saveFiles($request);
           $request['user_id'] = $request['user_id']??auth()->user()->id;
            if($request['type']=='سحب'){
                $request['amount'] = -$request['amount'];
            }
            //dd($request);
            return Transaction::updateOrCreate(['id' => $id], $request);
        } catch (Exception $e) {
            return $e;
        }
    }

    protected function saveFiles(&$request)
    {
        foreach (request()->allFiles() as $key => $value) {
            if ($value && isset($request[$key])) {
                [$width, $height] = getimagesize($value);
                $request[$key] = $this->uploadImage($value, (new Transaction)->getTable(), $width, $height);
            }
        }
    }
}
