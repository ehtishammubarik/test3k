$(function() {
    var appTable = $('#page-length-option').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: DOMAIN_URL + '/applications',
            dataType: 'json',
        },
        columns: [
            { data: 'application_id', name: 'application_id' },
            { data: 'name', name: 'name' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],
        order: [[1, 'asc']],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ]
    });

    $(document).on('click', '.add_application', function(e) {
        e.preventDefault();
        $('#add_application').modal('open');
    });

    $(document).on('submit', '#form1', function(e) {
        e.preventDefault();
        Block();
        $('#form1').ajaxSubmit({
            dataType: 'json',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function(data) {
                Unblock()
                if (data.message == 200) {
                    $('#form1 #reset').trigger('click');
                    $('#add_application').modal('close');
                    Success('Application add successfully.');
                    appTable.ajax.reload();
                } else {
                    Errorr(data.message);
                }
            },
        });
    });


    // application overview page

    $(document).on('click', '.open-tab', function(e) {
        e.preventDefault();
        let thiss = $(this);
        $('div.collapse-card').addClass('hidden');
        $('ul.contact-list li').removeClass('active');
        let tab = thiss.attr('data-tab');
        setTimeout(function() {
            thiss.addClass('active');
            if ($('div.collapse-card').hasClass(tab)) {
                $('.' + tab).removeClass('hidden');
            }
        }, 30);
    });


});
