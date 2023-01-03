<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Membuat Daftar Dropdown dengan Sumber Data dari JSON API Memanfaatkan Select2 dan Codeigniter 3">
    <meta name="author" content="hanifmu.com">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Select2 & Codeigniter 3</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css" />
</head>

<body class="bg-light">
    <div class="container" style="padding-top:10%">
        <div class="text-center">
            <img class="d-block mx-auto mb-1" src="https://raw.githubusercontent.com/muhammadhanif/muhammadhanif.github.io/master/assets/images/21122017/hanifmu-red.png" alt="" width="72" height="72">
            <p>hanifmu.com</p>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form>
                    <select id="daftar" name="daftar" class="form-control select2bs4_daftar" style="width: 100%;" required>
                        <option></option>
                    </select>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('.select2bs4_daftar').select2({
            placeholder: "Pilih Bahasa Pemrograman",
            theme: 'bootstrap4',
            ajax: {
                dataType: 'json',
                delay: 250,
                url: '<?php echo base_url('index.php/api/bahasa-pemrograman/daftar'); ?>',
                data: function(params) {
                    return {
                        searchTerm: params.term
                    }
                },
                processResults: function(data) {
                    return {
                        results: $.map(data, function(obj) {
                            return {
                                id: obj.id,
                                text: obj.nama
                            };
                        })
                    };
                }
            }
        });
    </script>
</body>

</html>
