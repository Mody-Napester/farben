@extends('@dashboard._layouts.master')

@section('page_title') Category @endsection

@section('page_contents')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
    </div>

    <!-- Page Forms -->
    <form action="{{ route('category.update', $resource->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit '{{ getFromJson($resource->title , lang()) }}' category</h6>
            </div>
            <div class="card-body">
                <div class="row">

                    @foreach(config('vars.langs') as $lang)
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-col-form-label" for="title_{{ $lang }}">Title ({{ $lang }})</label>
                                <input class="form-control @error('title_'.$lang) is-invalid @enderror "
                                       id="title_{{ $lang }}"
                                       type="text" name="title_{{ $lang }}"
                                       placeholder="Enter title_{{ $lang }} .." value="{{ getFromJson($resource->title , $lang) }}">

                                @error('title_'.$lang)
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    @endforeach

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-col-form-label" for="ordering">Order</label>
                            <input type="number" class="form-control" name="ordering" value="{{ $resource->ordering }}" id="ordering">

                            @error('ordering')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-save"></i> Save</button>
            </div>
        </div>
    </form>


@endsection
