<div class="col-md-12">
    <!-- Personal Requested Service -->
    <div class="card">
        <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Personal Requested Services</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body table-border-style">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>UPI</th>
                                        <th>Address</th>
                                        <th>Institution</th>
                                        <th>Purpose of service</th>
                                        <th>Personal Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($requests as $request)
                                        <tr>
                                            <td>{{ $request->p_name }}</td>
                                            <td>{{ $request->p_email }}</td>
                                            <td>{{ $request->p_phone }}</td>
                                            <td>{{ $request->p_upi }}</td>
                                            <td>{{ $request->p_address }}</td>
                                            <td>{{ $request->p_institution }}</td>
                                            <td>{{ $request->p_purpose }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Personal Requested Service -->
</div>
<div class="col-md-12">
    <!-- Institution Reqeusted Service -->
    <div class="modal fade" id="exampleModalFullscreenInstitution" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Institution Requested Service</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body table-border-style">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Applicant</th>
                                    <th>UPI</th>
                                    <th>Address</th>
                                    <th>Client Name</th>
                                    <th>Client Address</th>
                                    <th>Purpose of service</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requests as $request)
                                    <tr>
                                        <td>{{ $request->i_name }}</td>
                                        <td>{{ $request->i_applicant }}</td>
                                        <td>{{ $request->i_address }}</td>
                                        <td>{{ $request->i_upi }}</td>
                                        <td>{{ $request->i_client_name }}</td>
                                        <td>{{ $request->i_client_address }}</td>
                                        <td>{{ $request->i_purpose }}</td>
                                        <td>{{ $request->i_description }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Institution Reqeusted Service -->
</div>