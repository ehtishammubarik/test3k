// This file is generated by Nasir Scripts
var Page = 1;
var Rows = '';
var is_loading = true;
$(function() {
    load_data();
    $(document).on('click', '.addbaremetal', function(e) {
        e.preventDefault();
        $('#form1 input[name="id"]').val('0');
        $('#add_bearmetal').modal('open');
    });

    // Submit form
    $(document).on('submit', '#form1', function(e) {
        e.preventDefault();
        Block();
        $('#form1').ajaxSubmit({
            success: function(data) {
                Unblock();
                if (data.substr(0, 2) == 'OK') {
                    $('#reset').trigger('click');
                    $('#add_bearmetal').modal('close');
                    Success('Saved Successfully');
                    load_data();
                } else {
                    Errorr(data);
                }
                return false;
            },
        });
    });

    $(document).on('click', '.edit', function(e) {
        e.preventDefault();
        let id = $(this).attr('data-id');
        Block();
        $.ajax({
            url: DOMAIN_URL + '/baremetal/edit',
            type: 'post',
            dataType: 'json',
            data: {
                id: id,
            },
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function(ajax) {
                Unblock();
                if (!empty(ajax.data[0])) {
                    let v = ajax.data[0];
                    $('#add_bearmetal').modal('open');

                    /******Required Fields*****/
                    // insert value we have
                    $('#form1 input[name="id"]').val(v.id);
                    $('#form1 input[name="server_id"]').val(v.server_id).next('label').addClass('active');
                    $('#form1 input[name="rack"]').val(v.rack).next('label').addClass('active');
                    $('#form1 input[name="server_hostname"]').val(v.server_hostname).next('label').addClass('active');
                    $('#form1 input[name="mac_eth1"]').val(v.mac_eth1).next('label').addClass('active');
                    $('#form1 input[name="tun_hostname"]').val(v.tun_hostname).next('label').addClass('active');
                    // non require fields
                    $('#form1 input[name="status"]').val(v.status).next('label').addClass('active');
                    $('#form1 input[name="time"]').val(mysql_date(v.time)).next('label').addClass('active');
                    $('#form1 input[name="mac_ipmi"]').val(v.mac_ipmi).next('label').addClass('active');
                    $('#form1 input[name="status_ipmi"]').val(v.status_ipmi).next('label').addClass('active');
                    $('#form1 input[name="mac_eth2"]').val(v.mac_eth2).next('label').addClass('active');
                    $('#form1 input[name="status_eth1"]').val(v.status_eth1).next('label').addClass('active');
                    $('#form1 input[name="status_eth2"]').val(v.status_eth2).next('label').addClass('active');
                    $('#form1 input[name="ip_ipmi"]').val(v.ip_ipmi).next('label').addClass('active');
                    $('#form1 input[name="ip_eth1"]').val(v.ip_eth1).next('label').addClass('active');
                    $('#form1 input[name="ip_eth2"]').val(v.ip_eth2).next('label').addClass('active');
                    $('#form1 input[name="ip_eth3"]').val(v.ip_eth3).next('label').addClass('active');
                    $('#form1 input[name="ip_eth4"]').val(v.ip_eth4).next('label').addClass('active');
                    $('#form1 input[name="tun_status"]').val(v.tun_status).next('label').addClass('active');
                    $('#form1 input[name="tun_ip"]').val(v.tun_ip).next('label').addClass('active');
                    $('#form1 input[name="os"]').val(v.os).next('label').addClass('active');
                    $('#form1 input[name="ram"]').val(v.ram).next('label').addClass('active');
                    $('#form1 input[name="extra_hdd"]').val(v.extra_hdd).next('label').addClass('active');
                    $('#form1 input[name="anydesk"]').val(v.anydesk).next('label').addClass('active');
                    $('#form1 input[name="teamviewer"]').val(v.teamviewer).next('label').addClass('active');
                    $('#form1 input[name="notes1"]').val(v.notes1).next('label').addClass('active');
                    $('#form1 input[name="notes2"]').val(v.notes2).next('label').addClass('active');
                    $('#form1 input[name="notes3"]').val(v.notes3).next('label').addClass('active');
                    $('#form1 input[name="ssh_id_rsa_pri"]').val(v.ssh_id_rsa_pri).next('label').addClass('active');
                    $('#form1 input[name="ssh_id_rsa_pub"]').val(v.ssh_id_rsa_pub).next('label').addClass('active');
                    $('#form1 input[name="ssh_authorized_keys"]').val(v.ssh_authorized_keys).next('label').addClass('active');
                    $('#form1 input[name="tun_ssh_id_rsa_pri"]').val(v.tun_ssh_id_rsa_pri).next('label').addClass('active');
                    $('#form1 input[name="tun_ssh_id_rsa_pub"]').val(v.tun_ssh_id_rsa_pub).next('label').addClass('active');
                } else {
                    Errorr(ajax);
                }
                return false;
            }
        });
    });

    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        if (!confirm('Are you sure you want to delete this record ?')) {
            return false;
        }
        let id = $(this).attr('data-id');
        Block();
        $.ajax({
            url: DOMAIN_URL + '/baremetal/delete',
            type: 'post',
            dataType: 'json',
            data: {
                id: id,
            },
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function(ajax) {
                Unblock();
                if (!empty(ajax)) {
                    $('.rowid_' + id).remove();
                    Success('Deleted Successfully.');
                } else {
                    Errorr(ajax);
                }
                return false;
            }
        });
    });

    // window scroll pagination on mouse wheel up and down
    window.addEventListener("wheel", function(e) {
        if (Page >= Rows.pages) {
            return false;
        }
        let windowHeight = $(window).height();
        let windowScrooll = $(window).scrollTop();
        let documentHeight = $(document).height();
        if (Page < Rows.pages && !is_loading && windowHeight + windowScrooll >= documentHeight - 400) { //if user scrolled to bottom of the page
            Page++;
            is_loading = true;
            $('#page').val(Page);

            if (Page > 1) {
                $("#tbody").append("<tr id='temp_row'><td class='center' colspan='4'><i class='fa fa-spin fa-spinner'></i> Loading ....</td></tr>");
            }
            //load_data();
        }
    });

    // window scroll pagination on mouse wheel up and down
    $(document).on('scroll', function() {
        if (Page >= Rows.pages) {
            return false;
        }
        if (Page < Rows.pages && !is_loading && $(window).scrollTop() + $(window).height() >= $(document).height() - 400) { //if user scrolled to bottom of the page
            Page++;
            is_loading = true;
            $('#page').val(Page);
            if (Page > 1) {
                $("#tbody").append("<tr id='temp_row'><td class='center' colspan='4'><i class='fa fa-spin fa-spinner'></i> Loading ....</td></tr>");
            }
            //load_data();
        }
    });

});

function load_data() {
    Block();
    $('.form-filter').ajaxSubmit({
        success: function(data) {
            Unblock();
            //console.log(data)
            Rows = data;
            make_html();
            $("#temp_row").remove();
        },
    });
}

function make_html() {
    $("#total_records").html('<b>' + Rows.total + '</b>');
    HTML = tmpl('load_data', Rows.data);
    $('#tbody').html(HTML);
    // if ( Page > 1 ) {
    //     $( '#tbody' ).append( HTML );
    // } else {
    //     $( '#tbody' ).html( HTML );
    // }
    is_loading = false;
    if (!empty($('#filter_search').val())) {
        $('#tbody').mark($('#filter_search').val(), markjs_options);
    }
    Unblock();
}
