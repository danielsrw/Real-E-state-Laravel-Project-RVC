<div class="col-sm-12">
    <div class="card">
        <div class="modal fade" id="deleteProject{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteProjectLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        You sure you want to delete <b>{{ $project->name }}</b>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>