<style>
    nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
        background-color: #f8f9fa;
    }

    nav a {
        text-decoration: none;
        color: #333;
        margin-right: 10px;
    }

    nav img {
        height: 40px;
        margin-right: 20px;
    }

    nav form {
        display: flex;
        align-items: center;
    }

    nav input[type="text"] {
        padding: 6px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 10px;
    }

    nav button[type="submit"] {
        padding: 6px 12px;
        background-color: #ed678b;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .user-menu {
        position: relative;
        display: inline-block;
    }

    .user-info {
        display: flex;
        align-items: center;
        cursor: pointer;
        padding: 8px 12px;
        border-radius: 4px;
        background-color: #f1f1f1;
        
    }

    .user-name {
        margin-right: 8px;
    }

    .user-dropdown {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 80px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
        right: 0;
        margin-top: 8px;
    }

    .user-dropdown.show {
        display: block;
    }

    .user-dropdown li {
        list-style: none;
        margin-bottom: 8px;
    }

    .user-dropdown li a {
        color: #333;
        text-decoration: none;
    }
</style>

<nav>
    @if($showBackButton)
        <a href="/home">←</a>
    @endif

    <a href="/admin">切換至後台</a>

    <img src="{{ asset('assets/Components/mainNav/2024logo.png') }}" alt="Logo">

    @if($showSearchBar)
        <form action="/search" method="GET">
            <input type="text" name="query" placeholder="物品搜尋">
            <input type="hidden" name="page" value="{{ $page }}">
            <button type="submit">搜尋</button>
        </form>
    @endif

    <div class="user-menu" onclick="toggleUserDropdown(event)">
        <div class="user-info">
            <span class="user-name">{{ Auth::user()->name }}</span>
            <i class="fas fa-caret-down"></i>
        </div>
        <ul class="user-dropdown" id="userDropdown">
            <li><a href="/account/info">個人檔案</a></li>
            <li><a href="/logout">目前記錄</a></li>
            <li><a href="/logout">借還記錄</a></li>
            <li><a href="/logout">使用教學</a></li>
            <li><a href="/logout">登出</a></li>
        </ul>
    </div>
</nav>

<script>
    function toggleUserDropdown(event) {
        event.stopPropagation();
        var dropdown = document.getElementById("userDropdown");
        dropdown.classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.closest('.user-menu')) {
            var dropdowns = document.getElementsByClassName("user-dropdown");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>