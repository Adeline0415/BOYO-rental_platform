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
    <h1>This is History</h1>
    <div class="tables-container">
        <h2>租借物品記錄</h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col">物品名稱</div>
                <div class="col">編號</div>
                <div class="col">租借日期</div>
                <div class="col">歸還日期</div>
            </li>

            @foreach ($userHistoryItems as $userHistoryItem)
                <x-admin-general-table-row :items="$userHistoryItem" :columns="[
                    ['key' => '物品名稱', 'label' => '物品名稱'],
                    ['key' => '編號', 'label' => '編號'],
                    ['key' => '租借日期', 'label' => '租借日期'],
                    ['key' => '歸還日期', 'label' => '應歸還日期']
                ]"/>
            @endforeach
        </ul>
        <h2>預約場地記錄</h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col">場地名稱</div>
                <div class="col">租借日期</div>
                <div class="col">租借時段</div>
            </li>

            @foreach ($userHistoryVenues as $userHistoryVenue)
                <x-admin-general-table-row :items="$userHistoryVenue" :columns="[
                    ['key' => '場地名稱', 'label' => '場地名稱'],
                    ['key' => '租借日期', 'label' => '租借日期'],
                    ['key' => '租借時段', 'label' => '租借時段']

                ]">
                </ x-admin-general-table-row>
            @endforeach
        </ul>
    </div>
</body>
</html>