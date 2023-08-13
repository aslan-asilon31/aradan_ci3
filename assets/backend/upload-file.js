$(document).ready(function () {
    $('#upload').on("click", () => { $("#file").click() });
    $('#file').on("change", () => { $("#form").submit() });
    // File upload via Ajax
    $("#form").on('submit', function (e) {
        e.preventDefault();
        // get start time
        var startTime = new Date().getTime();
        var xhr = $.ajax({
            xhr: function () {
                var xhr = new XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (e) {
                    if (e.lengthComputable) {
                        var percentComplete = ((e.loaded / e.total) * 100);

                        // e.loaded is in bytes convert it to kb, mb or gb. your choice
                        var mbTotal = Math.floor(e.total/(1024*1024));
                        var mbLoaded = Math.floor(e.loaded/(1024*1024));

                        // calculate data transfer per sec
                        var time = ( new Date().getTime() - startTime ) / 1000;
    	                var bps = e.loaded / time;
                        var Mbps = Math.floor(bps / (1024*1024));
        
                        // calculate remaining time
                        var remTime = (e.total - e.loaded) / bps;
                        var seconds = Math.floor(remTime % 60);
                        var minutes = Math.floor(remTime / 60);
                        
                        // give output
                        $('#dataTransferred').html(`${mbLoaded}/${mbTotal} MB`)
                        $('#Mbps').html(`${Mbps} Mbps`)
                        $('#timeLeft').html(`${minutes}:${seconds}s`);
                        $("#percent").html(Math.floor(percentComplete) + '%');
                        $(".progress-bar").width(percentComplete + '%');

                        // cancel button only work when file is uploading
                        if(percentComplete > 0 && percentComplete < 100){
                            $('#cancel').prop('disabled', false);
                        }else{
                            $('#cancel').prop('disabled', true);
                        }
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: 'application/views/Product/upload.php',
            // url: 'upload.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                // add some preloader or perform any action before uploading
                $("#percent").html('0%');
                $(".progress-bar").width('0%');
            },
            error: function () {
                // if request not complete
                console.log('Please try again');
            },
            success: function (response) {
                // get response on successful uploading
                $("#percent").html('Uploaded');
            }
        });
        // for cancel file transfer
        $('#cancel').on("click", () => {
            xhr.abort().then(
                $("#percent").html('Canceled'),
                $(".progress-bar").width('0%')
            )
        });
        // remove value form input button
        $('#file').prop('value', '')
    });
});