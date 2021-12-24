<div class="col-md-12">
    <div class="card">
        <div class="modal fade" id="exampleModalFullscreenAddProject" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Add Projects</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('adminProjectStore') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="form-label" for="inputTitle4">Title</label>
                                    <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" id="inputTitle4" placeholder="Enter Title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label @error('status') is-invalid @enderror" for="inputStatus4">Status</label>
                                    <select class="form-control form-control-sm @error('status') is-invalid @enderror" name="status">
                                        <option value="On Going">On Going</option>
                                        <option value="Complete">Complete</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label" for="inputImage4">Image</label>
                                    <input type="file" name="image" class="form-file form-control-sm @error('image') is-invalid @enderror" id="inputImage4">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="inputDescription4">Description</label>
                                    <textarea rows="5" name="description" class="form-control form-control-sm" placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary w-100">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>