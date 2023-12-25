<?php

namespace App\Http\Services;

use Exception;
use App\Models\Transfer;
use App\Traits\UploadFile;

class TransferService
{
    use UploadFile;

    public function handle($request, $id = null)
    {
        try {
            $this->saveFiles($request);

            return Transfer::updateOrCreate(['id' => $id], $request);
        } catch (Exception $e) {
            return $e;
        }
    }

    protected function saveFiles(&$request)
    {
        foreach (request()->allFiles() as $key => $value) {
            if ($value && isset($request[$key])) {
                [$width, $height] = getimagesize($value);
                $request[$key] = $this->uploadImage($value, (new Transfer)->getTable(), $width, $height);
            }
        }
    }
}
