function httpReq({url, method='get', data={}, callback = false}){
    axios({
        method: method,
        url: url,
        data: data
    }).then(function (response) {
        if (typeof callback === 'function'){
            callback(response)
        }
    }).catch(function (error) {
        toastr.error(error.message, 'Error!', {positionClass: 'toast-top-center'});
    });

}

function toastSuccAndRedir(title, msg, delay = 1400, position = 'toast-top-center', redirectTo = document.referrer) {
    toastr.success(msg, title, {
        positionClass: position, // Set position
        timeOut: delay // Adjust timeout
    });

    if (redirectTo)
        setTimeout(() => { window.location.href = redirectTo}, delay ? delay + 600 : 0)
}