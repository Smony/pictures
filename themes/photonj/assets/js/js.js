+function ($) { "use strict";
    $(document).ready(function(){
        $("#upload").dropzone({
            url: "/upload",
            acceptedFiles: 'image/*',
            accept: function(file, done) {
                console.log(file);
                done();
            }
        });
    });
}(window.jQuery);