<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datepicker/semantic.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="assets/libs/datepicker/datepicker.min.css" rel="stylesheet"> -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="assets/libs/multiselect/choices.min.css" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libs/select/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    



<select multiple class="mul-select">
    <option selected>Kebab</option>
    <option>Pizza</option>
    <option>Taco</option>
    <option selected>Kofte</option>
    <option selected>Burger</option>
    <option>Chicken</option>
</select>





        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/multiselect/choices.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/js/pages/jquery.slim.min.js"></script>
        <script src="assets/js/pages/popper.min.js"></script>
        <script src="assets/js/pages/bootstrap.min.js"></script>
        <script src="assets/libs/datepicker/semantic.min.js"></script>
        <script src="assets/libs/select/select2.min.js"></script>
        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/libs/datepicker/datepicker.min.js"></script>
        <script src="assets/js/pages/form-advanced.init.js"></script>
        <script src="assets/libs/ckediter/ckeditor.js"></script>
        <script src="assets/js/pages/bootstrap-taginput.js"></script>
        <script src="assets/js/pages/mdb.min.js"></script>
        <script src="assets/js/summernote-bs4.js"></script>
        <script src="assets/js/app.js"></script>
        <script>
        $(".mul-select").select2({
            tags: true
        });
    
        $("ul.select2-selection__rendered").sortable({
            containment: 'parent'
        });
    </script>
</body>
</html>