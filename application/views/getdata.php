<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>SELECT DEPARTEMEN</title>
</head>

<body>
    <div class="container">
        <div class="row mt-2 justify-content-md-center">
            <div class="col-6">

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="dept">Departemen</label>
                            <select class="form-control" id="dept" name="dept" required>
                                <option value="">--Pilih Departemen--</option>
                                <?php foreach ($dept as $dept) : ?>
                                    <option value="<?= $dept['dept_id']; ?>"><?= $dept['dept_nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pos">Pos</label>
                            <select class="form-control" id="pos" name="pos" required>
                                <option value="">--Pilih Pos--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="wil">Wilayah / Showroom</label>
                            <select class="form-control" id="wil" name="wil" required>
                                <option value="">--Pilih Wilayah / Showroom--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jbtn">Jabatan</label>
                            <select class="form-control" id="jbtn" name="jbtn" required>
                                <option value="">--Pilih Jabatan--</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#dept').change(function() {
                var id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('select/getPos') ?>",
                    data: {
                        id: id
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $('#pos').html(response);
                    }
                });
            });

            $('#pos').change(function() {
                var id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('select/getWil') ?>",
                    data: {
                        id: id
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $('#wil').html(response);
                    }
                });
            });

            $('#dept').change(function() {
                var id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('select/getJbtn') ?>",
                    data: {
                        id: id
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $('#jbtn').html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>