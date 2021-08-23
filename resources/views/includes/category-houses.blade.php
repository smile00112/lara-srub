@if (!empty($houses))
    @foreach($houses as $house)
    <div class="card mb-4">
        <div class="card-header">
            Категория - "{{$house->category->title}}"<br>
            Ссылка на категорию = <a href="{{route('getHousesByCategory', $house->category['slug'])}}">{{$house->category['title']}}</a>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$house->title}}</h5>
            <p class="card-text">{{$house->description}}</p>
            <a href="{{route('getHouse', [$house->category['slug'], $house->slug])}}" class="btn btn-primary">Read more</a>
        </div>
    </div>
    @endforeach
@endif
