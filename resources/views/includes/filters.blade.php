<form action="{{route('getProgects')}}" method="get">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Search</label>
        <input name="search_field" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type something">
    </div>
    <div class="mb-3">
        <div class="form-label">Choose category</div>
        <select name="category_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option>Выберите категорию</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}" @if(isset($_GET['category_id'])) @if($_GET['category_id'] == $category->id) selected @endif @endif>{{$category->title}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
