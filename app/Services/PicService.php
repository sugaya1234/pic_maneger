<?php

namespace App\Services;

use App\Models\Pic;

class PicService
{
    public function getList($request)
    {
        return Pic::orderBy('department_code')
                    ->orderBy('shop_code')
                    ->orderBy('customer_code')
                    ->orderBy('pic_code')
                    ->paginate(20);
    }
}
