@include('layouts.header')
<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
            <div class="container">
                <!-- Sidebar Area Starts -->
                <div class="sidebar-left sidebar-fixed">
                    <div class="sidebar">
                        <div class="sidebar-content">
                            <div class="sidebar-header">
                                <div class="sidebar-details">
                                    <h5 class="m-0 sidebar-title">
                                        {{ $data[0]->application_id }}
                                    </h5>
                                    <div class="mt-10 pt-2">
                                        <p class="m-0 subtitle font-weight-700">ID : {{ $data[0]->application_id }}</p>
                                    </div>
                                </div>
                            </div>
                            <div id="sidebar-list"
                                 class="sidebar-menu list-group position-relative animate fadeLeft delay-1">
                                <div class="sidebar-list-padding app-sidebar sidenav" id="contact-sidenav">
                                    <ul class="contact-list display-grid">
                                        <li class="active open-tab" data-tab="overview-card">
                                            <a class="text-sub">
                                                <i class="fa fa-th-large"></i> Overview</a>
                                        </li>
                                        <li class="open-tab" data-tab="devices-card">
                                            <a class="text-sub">
                                                <i class="fa fa-share-alt"></i> Devices</a>
                                        </li>
                                        <li class="open-tab">
                                            <a class="text-sub">
                                                <i class="fa fa-bar-chart"></i> Data</a>
                                        </li>
                                        <li class="open-tab">
                                            <a class="text-sub">
                                                <i class="fa fa-link"></i> Link</a>
                                        </li>
                                        <li class="open-tab">
                                            <a class="text-sub">
                                                <i class="fa fa-code"></i> Payload Formatters</a>
                                        </li>
                                        <li class="open-tab">
                                            <a class="text-sub">
                                                <i class="fa fa-code-fork"></i> Integrations</a>
                                        </li>
                                        <li class="open-tab">
                                            <a class="text-sub">
                                                <i class="fa fa-user"></i> Collaborators</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" data-target="contact-sidenav" class="sidenav-trigger hide-on-large-only"><i
                                    class="material-icons">menu</i></a>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area Ends -->
                <!-- Content Area Starts -->
                <div class="content-area content-right">
                    <div class="app-wrapper">
                        <div class="card card-default scrollspy border-radius-6 fixed-width">
                            <div class="card-content collapse-card overview-card">
                                <h4 class="card-title">General Information</h4>
                                <table class="highlight">
                                    <tbody>
                                    <tr>
                                        <td>Application ID</td>
                                        <td>{{$data[0]->application_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Created at</td>
                                        <td>{{ mysql_datetime($data[0]->created_at) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Updated at</td>
                                        <td>{{ mysql_datetime($data[0]->updated_at) }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-content collapse-card devices-card hidden">
                                <h4 class="card-title">Add Device</h4>
                                <form id="devices-form" class="validate" action="#" method="post">
                                    <table class="highlight">
                                        <tbody>
                                        <tr>
                                            <td>Device ID <span class="error">*</span></td>
                                            <td><input type="text" name="device_id" required="required"
                                                       placeholder="my-new-device"></td>
                                        </tr>
                                        <tr>
                                            <td>Device Name</td>
                                            <td><input type="text" name="name" placeholder="My New Device"></td>
                                        </tr>
                                        <tr>
                                            <td>Device Description</td>
                                            <td>
                                                <textarea name="description" class="materialize-textarea"
                                                          placeholder="Description for my new device"></textarea>
                                                <span>Optional device description; can also be used to save notes about the device</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>MVC Version <span class="error">*</span></td>
                                            <td>
                                                <select class="t-select" name="mvc_version">
                                                    <option value="">Select</option>
                                                    <option value="">MVC V1.0</option>
                                                    <option value="">MVC 1.0.1</option>
                                                    <option value="">MVC 1.0.2</option>
                                                    <option value="">MVC 1.0.3</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button class="btn mb-1 waves-effect waves-light green darken-1"
                                                        type="submit">
                                                    Create Device
                                                </button>
                                            </td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Area Ends -->
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>

<!-- END: Page Main-->
@include('layouts.footer')


