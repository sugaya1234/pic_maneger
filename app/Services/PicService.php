<?php

namespace App\Services;

use App\Models\Pic;

class PicService
{
    public function getList($request)
    {
        $query = Pic::query();

        // 半角小文字を半角大文字に変換
        $department = strtoupper($request->input('department'));
        $shop = strtoupper($request->input('shop'));
        $customer = strtoupper($request->input('customer'));
        $pic = strtoupper($request->input('pic'));

        // 検索フォームの入力値で前方一致検索
        if ($request->filled('department')) {
            $query->where('department_code', 'LIKE', $department . '%');
        }

        if ($request->filled('shop')) {
            $query->where('shop_code', 'LIKE', $shop . '%');
        }

        if ($request->filled('customer')) {
            $query->where('customer_code', 'LIKE', $customer . '%');
        }

        if ($request->filled('pic')) {
            $query->where('pic_code', 'LIKE', $pic . '%');
        }

        return $query->orderBy('department_code')
                     ->orderBy('shop_code')
                     ->orderBy('customer_code')
                     ->orderBy('pic_code')
                     ->paginate(20)
                     ->appends($request->query());
    }
}
