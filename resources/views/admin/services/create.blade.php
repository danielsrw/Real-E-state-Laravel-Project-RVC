<div class="col-md-12">
    <div class="card">
        <div class="modal fade" id="exampleModalFullscreenAddService" tabindex="-1" aria-labelledby="exampleModalFullscreenServicesLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="exampleModalFullscreenServicesLabel">Add Services</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form method="POST" action="{{ route('adminServiceStore') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="inputName4">Name</label>
                                <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" id="inputName4" placeholder="Enter Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="inputImage4">Image</label>
                                <input type="file" name="image" class="form-control-file form-control-sm @error('image') is-invalid @enderror" id="inputImage4">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label" for="inputDescription4">Description</label>
                                <textarea rows="5" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror" placeholder="Enter Description"></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary w-100">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>