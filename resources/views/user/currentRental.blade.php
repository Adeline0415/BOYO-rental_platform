<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/adminGeneralTable.css" rel="stylesheet" type="text/css">
    <title>Home Page</title>
    <style>
        .tables-container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        h1{
            text-align: center;
        }
        .tables-container h2 {
            color: #333;
            font-size: 24px;
            margin-top: 20px;
            margin-bottom: 10px;
            margin-left: 70px;
            text-align: left; /* Center-align the title for a more formal appearance */
        }
    </style>
    
</head>
<body>
    @include('navTest')
    <h1>This is current Rental</h1>
    <div class="tables-container">
        <h2>租借物品</h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col">物品名稱</div>
                <div class="col">編號</div>
                <div class="col">租借日期</div>
                <div class="col">應歸還日期</div>
                <div class="col">逾期</div>
            </li>

            @foreach ($userItems as $userItem)
                <x-admin-general-table-row :items="$userItem" :columns="[
                    ['key' => '物品名稱', 'label' => '物品名稱'],
                    ['key' => '編號', 'label' => '編號'],
                    ['key' => '租借日期', 'label' => '租借日期'],
                    ['key' => '應歸還日期', 'label' => '應歸還日期'],
                    ['key' => '逾期', 'label' => '逾期']
                ]"/>
            @endforeach
        </ul>
        <h2>預約場地</h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col">場地名稱</div>
                <div class="col">預定日期</div>
                <div class="col">預定時段</div>
                <div class="col">取消</div>
            </li>

            @foreach ($userVenues as $userVenue)
                <x-admin-general-table-row :items="$userVenue" :columns="[
                    ['key' => '場地名稱', 'label' => '場地名稱'],
                    ['key' => '預定日期', 'label' => '預定日期'],
                    ['key' => '預定時段', 'label' => '預定時段']

                ]">
                    <div class="col">
                        <button>取消</button>
                    </div>
                </ x-admin-general-table-row>
            @endforeach
        </ul>
    </div>
</body>
</html>