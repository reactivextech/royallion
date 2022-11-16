<?php $controller = strtolower($this->router->class);

$archivoJS = 'File.js';
?>

<div class="container-fluid">
    <div class="row">

        <!-- TABLA SALDOS -->
        <div class="col-lg-6">
            <div class="drop-area m-5">
                <form method="post" id="import_csv" enctype="multipart/form-data">
                    <div class="form-group">
                        <img src="<?= base_url('template/') ?>assets/images/publicar.png" alt="">
                        <h3>Seleccione el archivo de saldos <span>.CSV</span></h3>
                        <p id="name_file">&nbsp; Luego presione para importar</p>

                        <label id="label_file" class="label-file" for="csv_file"></label>
                        <input type="file" name="csv_file" id="csv_file" required accept=".csv">

                        <button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Importar archivo</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="drop-area m-5">
                <form method="post" id="import_csv_total" enctype="multipart/form-data">
                    <div class="form-group">
                        <img src="<?= base_url('template/') ?>assets/images/publicar.png" alt="">
                        <h3>Seleccione el archivo de totales <span>.CSV</span></h3>
                        <p id="name_file_total">&nbsp; Luego presione para importar</p>

                        <label id="label_file_total" class="label-file" for="csv_file_total"></label>
                        <input type="file" name="csv_file_total" id="csv_file_total" required accept=".csv">

                        <button type="submit" name="import_csv_total" class="btn btn-info" id="import_csv_btn_total">Importar archivo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<!-- end col -->
</div>

<script>
    $(document).ready(function() {

        //TABLA SALDOS
        $('#import_csv').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url(); ?>importar_saldos/import",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#import_csv_btn').html('Importando...');
                },
                success: function(data) {
                    $('#import_csv')[0].reset();
                    $('#import_csv_btn').attr('disabled', false);
                    $('#import_csv_btn').html('Importado con exito');
                    load_data();
                }
            })
            document.querySelector('#label_file').style.display = 'block';
        });

        //TABLA TOTALES
        $('#import_csv_total').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url(); ?>importar_saldos/import_total",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#import_csv_btn_total').html('Importando...');
                },
                success: function(data) {
                    $('#import_csv_total')[0].reset();
                    $('#import_csv_btn_total').attr('disabled', false);
                    $('#import_csv_btn_total').html('Importado con exito');
                    load_data_total();
                }
            })
            document.querySelector('#label_file_total').style.display = 'block';
        });

    });
</script>