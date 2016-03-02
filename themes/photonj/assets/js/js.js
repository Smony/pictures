+function ($) { "use strict";
    $(document).ready(function(){
        $("#upload").dropzone({
            url: "/upload",
            acceptedFiles: 'image/*,application/pdf,.psd,.zip,.rar',
            //maxFilesize: 10,

            accept: function(file, done) {
                console.log(file);
                done();
            }
        });
    });
}(window.jQuery);