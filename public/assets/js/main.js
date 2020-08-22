$(document).ready(function () {
    // Responisve Navbar
    $("#main-navbar [data-trigger]").on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        var offcanvas_id = $(this).attr('data-trigger');
        $(offcanvas_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
        $(".screen-overlay").toggleClass("show");
    });

    $("#main-navbar .nav-close, .screen-overlay").click(function (e) {
        $(".screen-overlay").removeClass("show");
        $(".mobile-offcanvas").removeClass("show");
        $("body").removeClass("offcanvas-active");
    });

    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').click(function () {
        $videoSrc = $(this).data("src");
    });


    // when the modal is opened autoplay it  
    $('#videoModal').on('shown.bs.modal', function (e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })

    // stop playing the youtube video when I close the modal
    $('#videoModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })


    // Inputs
    $('#audio-delete-input').on('input', function (e) {
        // Code here
        if (this.value === "delete now") {
            $('#audio-delete-btn').attr("disabled", false)
        } else {
            $('#audio-delete-btn').attr("disabled", true)
        }
    });

    $('input[name="usertype"]').click(function () {
        $(this).tab('show');
        $(this).removeClass('active');
    });

    // Profile Upload image
    var input = document.getElementById('upload');
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);

                $('#imageResult').addClass('added');
                $('#upload-image-btn').attr("disabled", false);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }


    $('#upload').on('change', function () {
        readURL(input);
    });

    // Multiform

    $.validator.addMethod("uploadFile", function (val, element) {

        var size = element.files[0].size;
        console.log(size);

        if (size > 1048576)// checks the file more than 1 MB
        {
            console.log("returning false");
            return false;
        } else {
            console.log("returning true");
            return true;
        }

    }, "File type error");

    var val = {
        // Specify validation rules
        rules: {
            title: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            uploadAudio: {
                required: true,
                extension: "mp3|wav"
                // uploadFile: true,

            },
            cover: {
                required: true,
            },
            description: {
                required: true,
                minlength: 10,
                maxlength: 45,
            }
        },
        // Specify validation error messages
        messages: {
            title: {
                required: "Title is required",
                minlength: "Please enter 2 character",
            },
            uploadAudio: {
                required: "Audio file is required",
                extension: "Upload file with valid Extension (.mp3 or .wav)"
            },
            cover: {
                required: "Cover Image is required",
            },
            email: {
                required: "Email is required",
                email: "Please enter a valid e-mail",
            },
            description: {
                required: "Description is requied",
                minlength: "Please enter 10 character",
                maxlength: "Please enter 10 character",
            }
        }
    }
    $("#mediaUploadForm").multiStepForm(
        {
            // defaultStep:0,
            beforeSubmit: function (form, submit) {
                console.log("called before submiting the form");
                console.log(form);
                console.log(submit);
            },
            validations: val,
        }
    ).navigateTo(0);
});