<div class="categories-scroll">
    <button class="btn btn-outline-primary rounded-pill category-btn active">Todos</button>

    @foreach ($categories as $category)
        <button class="btn btn-outline-primary rounded-pill category-btn">{{ $category->name }}</button>
    @endforeach

</div>
