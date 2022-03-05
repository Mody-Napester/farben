@extends('@dashboard._layouts.master')

@section('page_title') Media @endsection

@section('page_contents')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Media</h1>
    </div>

    <!-- Create -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add new media</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-col-form-label" for="image">Image</label>
                        <input class="form-control @error('image') is-invalid @enderror" id="image" type="file" name="image">

                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-save"></i> Save</button>
            </form>
        </div>
    </div>


    <!-- All Medias -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All</h6>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($resources as $resource)
                    <div class="col-md-4">
                        <div style="padding: 10px;background-color: #eeeeee">
                            <div style="height: 150px;">
                                <img style="height: 100%;" class="img-fluid" src="{{ url('assets_public/images/media/'. $resource->image) }}" alt="">
                            </div>
                            <div class="mt-3">
                                <div class="mb-3" style="background-color: #ffffff;padding: 5px;">
                                    {{ url('assets_public/images/media/'. $resource->image) }}
                                </div>
                                <a href="{{ route('media.destroy' , [$resource->id]) }}" class="btn btn-danger btn-sm confirm-delete"><i class="fa fa-fw fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
