<?php

namespace App\Repository\Admin;

use App\Interfaces\Admin\CMSInterface;
use App\Services\Images\ImageServices;
use App\Models\Admin\AdminCMSModel;


class CMSRepository implements CMSInterface
{
    private $imageService;
    
    public function __construct(ImageServices $imageService ) {
        $this->imageService = $imageService;
    }

    public function getContent($type) {
        switch ($type) {
            case 'terms-condition':
                return AdminCMSModel::select('content')->where('type','terms-condition')->first();
                break;
            case 'privacy-policy':
                return AdminCMSModel::select('content')->where('type','privacy-policy')->first();
                break;
            }
    }
    public function storeContent($request,$type) {
        switch ($type) {
            case 'terms-condition':
                AdminCMSModel::updateOrCreate(['type' => $request['type']],['content' => $request['terms-condition']]);
                break;
            case 'privacy-policy':
                AdminCMSModel::updateOrCreate(['type' => $request['type']],['content' => $request['privacy-policy']]);
                break;
            }
    }
}
?>