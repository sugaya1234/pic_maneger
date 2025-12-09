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

        // ソート設定
        $allowSort = [
            'department_code',
            'shop_code',
            'customer_code',
            'pic_code',
        ];

        $sort = $request->input('sort');
        $sort = in_array($sort, $allowSort, true) ? $sort : 'department_code';

        $direction = $request->input('direction');
        $direction = in_array($direction, ['asc', 'desc'], true) ? $direction : 'asc';

        $direction = $request->input('direction', 'asc');

        return $query->orderBy($sort, $direction)->paginate(20)->withQueryString();
    }
}
