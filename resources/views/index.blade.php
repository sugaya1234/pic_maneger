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

    {{-- 上部アクション（新規作成ボタンは後で追加） --}}
    <div class="flex justify-between items-center mb-4">
        <div>
            {{-- 検索フォーム --}}
            <form id="searchForm" action="{{ route('pic.index') }}" method="get" class="flex gap-4 items-end flex-wrap">
                <div class="flex flex-col">
                    <label for="department" class="text-sm">部門</label>
                    <input type="text"
                        name="department"
                        id="department"
                        class="uppercase border border-gray-300 rounded px-2 py-1 w-24"
                        value="{{ request('department') }}"
                        maxlength="3"
                        pattern="[0-9A-Za-z]+"
                        title="半角英数字3文字以内で入力してください">
                </div>

                <div class="flex flex-col">
                    <label for="shop" class="text-sm">SHOP</label>
                    <input type="text"
                        name="shop"
                        id="shop"
                        class="uppercase border border-gray-300 rounded px-2 py-1 w-24"
                        value="{{ request('shop') }}"
                        maxlength="5"
                        pattern="[0-9A-Za-z]+"
                        title="半角英数字5文字以内で入力してください">
                </div>

                <div class="flex flex-col">
                    <label for="customer" class="text-sm">取引先</label>
                    <input type="text"
                        name="customer"
                        id="customer"
                        class="uppercase border border-gray-300 rounded px-2 py-1 w-24"
                        value="{{ request('customer') }}"
                        maxlength="5"
                        pattern="[0-9A-Za-z]+"
                        title="半角英数字5文字以内で入力してください">
                </div>

                <div class="flex flex-col">
                    <label for="pic" class="text-sm">担当者</label>
                    <input type="text"
                        name="pic"
                        id="pic"
                        class="uppercase border border-gray-300 rounded px-2 py-1 w-24"
                        value="{{ request('pic') }}"
                        maxlength="5"
                        pattern="[0-9A-Za-z]+"
                        title="半角英数字5文字以内で入力してください">
                </div>

                <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    検索
                </button>

                {{-- リセット --}}
                    <button type="button"
                            onclick="clearFormValues()"
                            class="border border-gray-300 px-4 py-2 rounded hover:bg-gray-100">
                        リセット
                    </button>

                    <script>
                    function clearFormValues() {
                        const inputs = document.querySelectorAll('#searchForm input[type="text"]');
                        inputs.forEach(input => input.value = '');
                    }
                    </script>
            </form>
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
                @foreach($pics as $pic)
                    <tr class="border-b hover:bg-gray-50">
                        <td>{{ $pic->department_code }}</td>
                        <td>{{ $pic->shop_code }}</td>
                        <td>{{ $pic->customer_code }}</td>
                        <td>{{ $pic->pic_code }}</td>
                        <td class="py-2 px-4">
                            {{-- 修正/削除機能を追加 --}}
                            <span class="text-gray-400 text-sm">修正/削除</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- ページネーション --}}
    <div class="mt-4">
        {{ $pics->links() }}
    </div>

</div>
</body>
</html>
