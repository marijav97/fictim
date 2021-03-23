<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">

            <form id="search_form" name="gs" method="GET" action="{{route("posts")}}">
            @foreach($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" {{in_array($category->id, $checkedCat) ? "checked" : ""}} name="categoryIds[]"  value="{{$category->id}}" id="defaultCheck-{{$category->id}}">
                    <label class="form-check-label" for="defaultCheck-{{$category->id}}">
                        {{$category->name}}
                    </label>
                </div><br/>
            @endforeach
                <div class="sidebar-item search">
                    <input type="text" name="keyword" class="searchText" placeholder="type to search...">
                </div>
                <input type="submit" class="btn btn-lg btn-primary btn-block text-uppercase" value="Search"/>
            </form>

        </div>
    </div>
</div>
