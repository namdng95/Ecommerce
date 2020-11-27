<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>@lang('master.category')</h2>
        <!--category-productsr-->
        <div class="panel-group category-products" id="accordian">
            <div class="panel panel-default">
                @if(isset($categories) && !empty($categories))
                    @foreach($categories as $cate)
                        @if($cate->parent_id == null)
                            <div class="panel-body">
                                <b class="" data-toggle="collapse" data-target=".subCate{{ $cate->cate_id }}">
                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                    {{ $cate->cate_name }}
                                </b>
                                <ul class="subCate{{ $cate->cate_id }} collapse">
                                    @foreach($cate->children as $subCate)
                                        <li><a href="{{ route('categories.showCateBySlug', $subCate->cate_slug) }}">{{ $subCate->cate_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!--/category-products-->
</div>
