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
</body>
</html>


