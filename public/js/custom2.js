/*
 ( function($, undefined) {
 console.log('veper the man');

 var form = $('form');

 // da nimas napak na straneh kjer ni
 /*
 if(form.length > 0) {
 form.on('submit', function(event) {
 event.preventDefault();

 var form = $(this);

 var email = form.find('#email').val();

 if (email.length < 3) {
 confirm("Prekratek email", function() {
 console.log("Prekratek email");
 });
 }
 });
 };
 */

form.on('submit', function(event) {
    event.preventDefault();

    var btn = $('button');

    btn.on("click", function (event) {
        event.preventDefault();
        var url = "http://homestead2.app/login";

        var data1 = {
            email: 'test@test.com',
            password: 'nekogeslo'
        };

        $.get(url, data1).done(function(data1) {
            console.log(data1);
        });
    })
});

})(jQuery);
*//**
 * Created by znidarklemen on 10/11/2016.
 */
