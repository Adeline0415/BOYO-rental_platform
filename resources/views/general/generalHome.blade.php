<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/adminGeneralTable.css" rel="stylesheet" type="text/css">
    <title>Home Page</title>
    <style>
        .center-container {
            display: flex;
            align-items: center; /* Centers vertically */
            justify-content: center; /* Centers horizontally */
            flex-direction: column;
        }
        .header{
            background-color: #F2CFCD;
            color: #333;
            width: 95%;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }
        .button-47 {
        align-items: center;
        background: #FFFFFF;
        border: 0 solid #E2E8F0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        box-sizing: border-box;
        color: #1A202C;
        display: flex;
        font-family: Inter, sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        height: 150px;
        justify-content: center;
        line-height: 24px;
        overflow-wrap: break-word;
        padding: 50px;
        text-decoration: none;
        width: 250px;
        border-radius: 8px;
        cursor: pointer;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        margin: 20px;
        }
    </style>
    
</head>
<body>
    @include('navTest')
    
    <div class="center-container">
        <div class="header">
            <h2>博幼租借平臺</h2>
        </div>
        
        <x-home-label-button>物品租借</x-home-label-button>
        <x-home-label-button>場地租借</x-home-label-button>
    </div>
</body>
</html>