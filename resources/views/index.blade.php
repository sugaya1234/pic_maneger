<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>担当者管理システム</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="max-w-7xl mx-auto py-8 px-4">

    {{-- ページタイトル --}}
    <h1 class="text-2xl font-bold mb-6">担当者管理システム</h1>

    {{-- 上部アクション（検索欄・新規作成ボタンは後で追加） --}}
    <div class="flex justify-between items-center mb-4">
        <div>
            {{-- 検索フォームを追加 --}}
        </div>

        <div>
            {{-- 新規登録ボタンを追加 --}}
        </div>
    </div>

    {{-- 一覧表示用テーブル --}}
    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full text-left border-collapse">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">部門</th>
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">Shop</th>
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">取引先</th>
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">担当者</th>
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">編集</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4">001</td>
                    <td class="py-2 px-4">00001</td>
                    <td class="py-2 px-4">00001</td>
                    <td class="py-2 px-4">00001</td>
                    <td class="py-2 px-4">
                        {{-- 修正/削除機能を追加 --}}
                        <span class="text-gray-400 text-sm">修正/削除</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- ページネーション --}}

</div>
</body>
</html>
