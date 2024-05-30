@php 
use App\Models\Item;
//$items = Item::select('Name', 'Borrowed',"borrower")->get();
$items = Item::select('Name', 'Borrowed')->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <header>
        @include('Components.AllPages.mainNav', [
            'showBackButton' => true,
            'showSearchBar' => true,
            'page' => 'items'
        ])
    </header>
    @include('Components.AllPages.adminGeneralNav', ['currentPage' => 1, 'labels' => ['所有清單', '借還記錄', '進行借還', '人員管理']])
    <x-laitest.table title="物品清單" :show-button="true" button-text="新增" :headers="['物品名稱', '是否借出']" :rows="$items" />
    <x-laitest.table title="場地清單" :show-button="true" button-text="新增" :headers="['物品名稱', '是否借出']" :rows="$items" />

    
</body>
</html>


