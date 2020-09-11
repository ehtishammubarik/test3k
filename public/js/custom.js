$( function() {
    // modal init
    $( '.modal' ).modal();
    // here is code ...
    $( 'form.validate' ).each( function() {
        $( this ).validate();
    } );
} );

function Block( id = '' ) {
    if ( !empty( id ) ) {
        $( '#' + id ).LoadingOverlay( 'show', {
            background: 'rgba(0, 0, 0, 0.4)'
        } );
    } else {
        $.LoadingOverlay( 'show', {
            background: 'rgba(0, 0, 0, 0.4)'
        } );
    }
}

function Unblock( id = '' ) {
    if ( !empty( id ) ) {
        $( '#' + id ).LoadingOverlay( 'hide' );
    } else {
        $.LoadingOverlay( 'hide' );
    }
}

function Errorr( text ) {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-full-width",
        "preventDuplicates": false,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    var $toast = toastr[ 'error' ]( text );
}

function Success( text ) {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-full-width",
        "preventDuplicates": false,
        "showDuration": "3000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    var $toast = toastr[ 'success' ]( text );
}

function Warning( text ) {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "positionClass": "toast-top-center",
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    var $toast = toastr[ 'warning' ]( text, 'Warning' );
}

function Info( text, title, position ) {
    if ( position == null ) {
        position = "toast-top-left";
    }
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "positionClass": position,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    if ( title == null ) {
        title = "Info";
    }
    var $toast = toastr[ 'info' ]( text, title );
}

text_truncate = function(str, len = 100, ending = '...') {
    if (empty(str)) {
        return '*';
    } else if (str.length > len) {
        return str.substring(0, len - ending.length) + ending;
    } else {
        return str;
    }
};
