<!-- nav.php -->
<nav>
    <ul>
        <li><a href="/item">物品租借</a></li>
        <li><a href="#">場地租借</a></li>
        <li><a href="/account/info">個人檔案</a></li>
        <li><a href="#">借還記錄</a></li>
        <li><a href="/account/item">目前借用</a></li>
        @can('view-bakcend')
            <li><a href="/admin">後台</a></li>
        @endcan
        <li><a href="/logout">logout</a></li>
    </ul>
</nav>