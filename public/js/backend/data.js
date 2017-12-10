function previewFile() {
    var preview = document.querySelector('#preview_photo');
    var file = document.querySelector('input[type=file]').files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}

let coverForm = function () {
    let data = {
        title: $("[name='title']").val(),
        body: $("[name='body']").val(),
        photo: $("[name='photo']").val(),
        link: $("[name='link']").val(),
    };
    return data;
}

let blogForm = function () {
    let data = {
        title: $("[name='title']").val(),
        body: $("[name='body']").val(),
        photo: $("[name='photo']").val(),
    };
    return data;
}


$(function () {

    $(document).on("click", "#create_blog", function (e) {
        e.preventDefault();
        e.stopPropagation();
        data = blogForm();
        if (data.body == '' || data.photo == '' || data.link == '' || data.title == '') {
            toastr.warning('Complete todos los campos por favor');
            return false;
        }
        let form = document.getElementById("blogForm");
        let formData = new FormData(form);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/blog',
            type: 'POST',
            contentType: false,
    	    processData:false,
            data: formData,
            success: function (res) {
                toastr.success('El blo se registro correctamente')
                    // setTimeout(redirect, 1000)
                    // function redirect() {
                    //     window.location.href = '/admin'
                    // }
                    console.log(res)

            },
            error: function (err) {
                toastr.warning('Ocurrio algo inesperado')
                console.log(err)
            }
        })
        $('#blogForm')[0].reset();

    })


    $(document).on("click", "#create_cover", function (e) {
        e.preventDefault();
        e.stopPropagation();
        data = coverForm();
        if (data.body == '' || data.photo == '' || data.link == '' || data.title == '') {
            toastr.warning('Complete todos los campos por favor');
            return false;
        }
        let form = document.getElementById("coverForm");
        let formData = new FormData(form);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/cover',
            type: 'POST',
            contentType: false,
    	    processData:false,
            data: formData,
            success: function (res) {
                    // setTimeout(redirect, 1000)
                    toastr.success('El cover se registro correctamente')
                    // function redirect() {
                    //     window.location.href = '/admin'
                    // }
                    console.log(res)

            },
            error: function (err) {
                toastr.warning('Ocurrio algo inesperado')
                console.log(err)
            }
        })
        $('#coverForm')[0].reset();

    });

    $(document).on("click", "#edit_cover", function (e) {
        e.preventDefault();
        e.stopPropagation();
        data = coverForm();
        if (data.body == '' || data.photo == '' || data.link == '' || data.title == '') {
            toastr.warning('Complete todos los campos por favor');
            return false;
        }
        let form = document.getElementById("coverForm");
        let formData = new FormData(form);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/cover/update/' + $("[name='id']").val(),
            type: 'POST',
            contentType: false,
    	    processData:false,
            data: formData,
            success: function (res) {
                    // setTimeout(redirect, 1000)
                    toastr.success('El cover se edito correctamente')

                    setTimeout(redirect, 1000)
                    function redirect() {
                        window.location.href = '/admin'
                    }
                    // function redirect() {
                    //     window.location.href = '/admin'
                    // }
                    console.log(res)

            },
            error: function (err) {
                toastr.warning('Ocurrio algo inesperado')
                console.log(err)
            }
        })
        $('#coverForm')[0].reset();

    })



    $(document).on("click", "#edit_blog", function (e) {
        e.preventDefault();
        e.stopPropagation();
        data = blogForm();
        if (data.body == '' || data.photo == '' || data.link == '' || data.title == '') {
            toastr.warning('Complete todos los campos por favor');
            return false;
        }
        let form = document.getElementById("blogForm");
        let formData = new FormData(form);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/update/' + $("[name='id']").val(),
            type: 'POST',
            contentType: false,
    	    processData:false,
            data: formData,
            success: function (res) {
                toastr.success('El blog se edito correctamente')
                    // setTimeout(redirect, 1000)
                    // function redirect() {
                    //     window.location.href = '/admin'
                    // }
                    console.log(res)

            },
            error: function (err) {
                toastr.warning('Ocurrio algo inesperado')
                console.log(err)
            }
        })
        $('#blogForm')[0].reset();

    })
})