yii.confirm = function(message, okCallback, cencelCallback) {
    swal({
        title: message,
        type: 'warning',
        showCencelButton: true,
        closeOnConfirm: true,
        allowOutsideClick: true,

    }, okCallback);
};