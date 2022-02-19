<div class="sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
        @foreach($categories as $category)
        <ul class="sidebar-category">
            <li class="sidebar-category__item">
                <a href="{{ route('category',$category->id) }}" class="sidebar-category__item__link">{{ $category->name }}</a>
            </li>
        </ul>
        @endforeach
    </div>
</div>
