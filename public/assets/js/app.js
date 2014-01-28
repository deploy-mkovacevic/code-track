/**
 * Main JS script
 *
 */
var USER = USER | {};

USER = ( function () {

    var privateProp,
        privateMethods,
        publicProp,
        publicMethods;

    privateMethods = {

        loginSuccess: function ( data ) {
            console.log(data);
        },
        loginFail: function () {
        }
    },

    publicMethods = {

        loginAction: function ( ) {

            CODE_TRACK_AJAX.callAjax(
                CONSTANTS.url.login,
                HELPER.getFormData($("#loginForm")),
                privateMethods.loginSuccess( ),
                privateMethods.loginFail());
            },

            registerAction: function () {

            }
        };

    return publicMethods;

}());


$("#login-btn").click(function () {
    USER.loginAction();
    return false;
});
