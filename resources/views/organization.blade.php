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
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Organaization</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Organization
                            </li>
                        </ol>
                    </div>
                    <div class="col s2 m6 l6">
                        <a class="btn waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan add_organization"
                           href="#!" data-target="dropdown1">
                            <i class="material-icons left">add</i> Add
                            <span class="hide-on-small-onl">Organization</span>

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
                                                    <th>Created Date</th>
                                                    <th>Updated Date</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>my id</td>
                                                    <td>2020-06-25T08:03:41.370Z</td>
                                                    <td>2020-06-25T08:03:41.370Z</td>
                                                </tr>
                                                </tbody>
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
<!-- Modal Example -->
<!-- Modal Trigger -->
<div class="modal fade modal-full modal-fixed-footer" id="add_organization" data-backdrop="static"
     data-keyboard="false"
     tabindex="-1">
    <div class="modal-header">
        <h4 class="modal-title">Add Organization</h4>
        <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>

    <form id="form1" class="validate" method="post" action="{{route('organization.create')}}">
        @csrf
        <input class="hidden" type="reset" id="reset">
        <div class="modal-content">
            <div class="row">
                <div class="input-field col m6 s12">
                    <input type="text" name="organization_id" placeholder="my-new-organization"
                           required="required">
                    <label>Organization ID *</label>
                </div>
                <div class="input-field col m6 s12">
                    <input type="text" name="name" placeholder="My New Organization">
                    <label>Name</label>
                </div>
                <div class="input-field col m12 s12">
                    <input type="text" name="description" placeholder="Description">
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
