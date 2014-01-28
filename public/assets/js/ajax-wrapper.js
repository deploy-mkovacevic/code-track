/**
 * Wrapper for jQuery AJAX calls
 *
 */
var CODE_TRACK_AJAX = {

    callAjax: function ( url , dataBind, successCallback, failedCallback, dataType, toCashe, customHeaders) {

        $.ajax({
            url: url,
            type :  "post" || callType,
            data: {
                data : dataBind
            },
            cashe : false || toCashe,
            dataType : dataType || "json",
            headers : customHeaders || {},
            success :  function (response) {
                alert(1);
                console.log(response);
               // if ( successCallback ) successCallback( response );
            },
            error: function(e) {
                //called when there is an error
                console.log(e);
            }
        });

        return false;
    }
};