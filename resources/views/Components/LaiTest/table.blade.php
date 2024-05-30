<!-- table.blade.php -->
<div>
    <div class="header-container">
        <h2>{{ $title }}</h2>

        @if ($showButton)
            <button class="add-button">{{ $buttonText }}</button>
        @endif
    </div>

    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    @foreach ($headers as $header)
                        <th>{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                    <x-laitest.table-row :row="$row" />
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .header-container {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .header-container h2 {
        margin-right: 15px; /* 设置标题与按钮之间的空隙 */
    }

    .add-button {
        padding: 6px 12px;
        background-color: #ff5db9;
        color: white;
        border: none;
        cursor: pointer;
    }

    .add-button:hover {
        background-color: #ff5db9;
    }

    .table-container {
        max-height: 200px; /* 设置你希望的最大高度 */
        overflow-y: auto;
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
    }

    .data-table th, .data-table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .data-table th {
        background-color: #f2f2f2;
        position: sticky;
        top: 0;
        z-index: 1;
    }


</style>
