@include('layouts.header')

<div class="hidden">
    <form class="form-filter" method="post" action="{{action('BaremetalController@load_data')}}">
        @csrf
        <input name="id" id="id" value="0">
        <input name="order" id="order" value="DESC">
        <input name="orderby" id="orderby" value="id">
        <input name="page" id="page" value="1">
        <input name="pagesize" id="pagesize" value="10">
    </form>
</div>

<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span><?php echo date( 'h:i:s a' )?></span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo url( '/' )?>">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="<?php echo url( '/bearmetal/' )?>">BearMetal</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!--Basic Form-->
                    <!-- jQuery Plugin Initialization -->
                    <div class="row">
                        <div class="col s12">
                            <div id="borderless-table" class="card card-tabs">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Total Record (<span id="total_records">0</span>)
                                                </h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <a class="right waves-effect waves-light btn green darken-1 addbaremetal">
                                                    <i class="material-icons left">add</i> Add</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-borderless-table" class="active">
                                        <div class="row">
                                            <div class="col s12">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Server ID</th>
                                                        <th>Time</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="tbody">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>
<!-- END: Page Main -->
<!-- Modal Trigger -->
<div class="modal fade modal-full modal-fixed-footer" id="add_bearmetal" data-backdrop="static" data-keyboard="false"
     tabindex="-1">
    <form id="form1" class="validate" method="post" action="{{ action('BaremetalController@save') }}">
        <div class="hidden">
            @csrf
            <input type="reset" id="reset">
            <input name="id" value="0">
            <input name="node_type" value="baremetal">
        </div>
        <div class="modal-content">
            <h4>Add BareMetal</h4>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="row">
                        <div class="input-field col m4 s12">
                            <input type="text" name="server_id" title="&nbsp;"
                                   required="required">
                            <label>Server ID *</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="rack" required="required" title="&nbsp;">
                            <label>Rack *</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="server_hostname" required="required" title="&nbsp;">
                            <label>Server Hostname *</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="mac_eth1" required="required" title="&nbsp;">
                            <label>Mac eth1 *</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="tun_hostname" required="required" title="&nbsp;">
                            <label>Tun Hostname *</label>
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                    </div>
                    <div class="row">
                        <div class="input-field col m4 s12">
                            <input type="number" name="status">
                            <label>Status</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="time" class="datepicker">
                            <label>Time</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="mac_ipmi">
                            <label>Mac ipmi</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="number" name="status_ipmi">
                            <label>Status ipmi</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="mac_eth2">
                            <label>Mac eth2 </label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="number" name="status_eth1">
                            <label>Status eth1</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="number" name="status_eth2">
                            <label>Status eth2</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="ip_ipmi">
                            <label>Ip ipmi</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="ip_eth1">
                            <label>Ip eth1</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="ip_eth2">
                            <label>Ip eth2</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="ip_eth3">
                            <label>Ip eth3</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="ip_eth4">
                            <label>Ip eth4</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="number" name="tun_status">
                            <label>Tun status</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="tun_ip">
                            <label>Tun ip</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="os">
                            <label>OS </label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="number" name="ram">
                            <label>Ram</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="extra_hdd">
                            <label>Extra hdd</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="number" name="anydesk">
                            <label>Anydesk</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="number" name="teamviewer">
                            <label>Teamviewer</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="notes1">
                            <label>Notes1</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="notes2">
                            <label>Notes2</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="notes3">
                            <label>Notes3</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="ssh_id_rsa_pri">
                            <label>SSH-id-rsa-pri</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="ssh_id_rsa_pub">
                            <label>SSH-id-rsa-pub</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="ssh_authorized_keys">
                            <label>SSH-authorized-keys</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="tun_ssh_id_rsa_pri">
                            <label>Tun-ssh-id-rsa-pri</label>
                        </div>
                        <div class="input-field col m4 s12">
                            <input type="text" name="tun_ssh_id_rsa_pub">
                            <label>Tun-ssh-id-rsa-pub</label>
                        </div>
                    </div>
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

<!-- Theme Customizer -->
@include('layouts.footer')
