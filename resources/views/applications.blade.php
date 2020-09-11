@include('layouts.header')
<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Applications</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Application
                            </li>
                        </ol>
                    </div>
                    <div class="col s2 m6 l6">
                        <a class="btn waves-effect waves-light right gradient-45deg-light-blue-cyan add_application">
                            <i class="material-icons hide-on-med-and-up">settings</i>
                            <span class="hide-on-small-onl">+ Add Application</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section section-data-tables">
                    <!-- Page Length Options -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12">
                                            <table id="page-length-option" class="display">
                                                <thead>
                                                <tr>
                                                    <th>Application ID</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- START RIGHT SIDEBAR NAV -->
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>
<!-- END: Page Main-->

<!-- Modal Trigger -->
<div class="modal fade modal-full modal-fixed-footer" id="add_application" data-backdrop="static"
     data-keyboard="false"
     tabindex="-1">
    <div class="modal-header">
        <h4 class="modal-title">Add Application</h4>
        <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <form id="form1" class="validate" method="post" action="{{route('application.create')}}">
        <div class="hidden">
            @csrf
            <input name="owner_id" type="hidden" value="admin">
            <input type="reset" id="reset">
        </div>
        <div class="modal-content">
            <div class="row">
                <div class="input-field col m6 s12">
                    <input type="text" name="application_id" placeholder="my-new-application"
                           required="required">
                    <label>Application ID *</label>
                </div>
                <div class="input-field col m6 s12">
                    <input type="text" name="name" placeholder="My New Application">
                    <label>Application Name</label>
                </div>
                <div class="input-field col m12 s12">
                    <input type="text" name="description" placeholder="Description for my new application">
                    <label>Description</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn mb-1 waves-effect waves-light modal-close" type="button">
                <i class="material-icons left">close</i>Close
            </button>
            <button class="btn mb-1 waves-effect waves-light green darken-1" type="submit">
                Save<i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>

@include('layouts.footer')
