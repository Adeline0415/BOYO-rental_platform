<style>
.subnav {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.subnav a {
  padding: 5px 15px;
  text-decoration: none;
  color: #666;
}

.subnav a.active {
  color: #ed678b;
  font-weight: bold;
  border-bottom: 2px solid #ed678b;
}
</style>
<nav class="subnav">
    @foreach ($labels as $index => $label)
        <a href="#" class="{{ $index+1 === $currentPage ? 'active' : '' }}">
            {{ $label }}
        </a>
    @endforeach
</nav>