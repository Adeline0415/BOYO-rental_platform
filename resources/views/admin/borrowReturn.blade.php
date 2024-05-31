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
    @include('Components.AllPages.adminGeneralNav', ['currentPage' => 3, 'labels' => ['所有清單', '借還記錄', '進行借還', '人員管理']])
    <div class="container">
        <h1>進行借還</h1>
        <form>
            <div>
                <label for="phone">電話號碼</label>
                <input type="text" id="phone" name="phone" placeholder="輸入電話號碼...">
            </div>
            <div>
                <label for="item">物品編號</label>
                <input type="text" id="item" name="item" placeholder="輸入物品編號...">
            </div>
            <div class="buttons">
                <button type="submit" class="rent">租借</button>
                <button type="reset" class="return">歸還</button>
            </div>
        </form>
    </div>

    
</body>
</html>
<style>
.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    font-size: 16px;
    margin-bottom: 5px;
    align-self: flex-start;
}

input {
    width: 300px;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.buttons {
    display: flex;
    gap: 10px;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

button.rent {
    background-color: #f8bebe;
    color: #000;
}

button.return {
    background-color: #f8bebe;
    color: #000;
}
  </style>