
@foreach($parentCategories as $category)

  {{$category->name}}

  @if(count($category->subcategory))
    @include('subCategoryList',['subcategories' => $category->subcategory])
  @endif

@endforeach
