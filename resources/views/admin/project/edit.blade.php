<div id="editProjectModal{{ $project->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editProjectModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editProjectModalLabel">Edit project {{ $project->title }}</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('adminProjectsUpdate', $project->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label" for="inputTitle4">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" id="inputTitle4" value="{{ $project->title }}">
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
                            <input type="file" name="image" class="form-control form-control-sm @error('image') is-invalid @enderror" id="inputImage4" value="{{ $project->image }}">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="inputDescription4">Description</label>
                            <textarea rows="5" name="description" class="form-control form-control-sm" placeholder="Enter Description">{{ $project->description }}</textarea>
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
				<button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn  btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
