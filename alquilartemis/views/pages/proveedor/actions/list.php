<?php $url = "http://localhost/xampp/var/www/html/php/muerte-x2/apirest/controles/proveedor.php?op=GetAll"; 
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    $ouput = json_decode(curl_exec($curl));
?>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Encargado</th>
                    <th>Sector</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($ouput as $out){ ?>
                  <tr>
                    <td><?= $out->nombreProveedor; ?></td>
                    <td><?= $out->direccion; ?></td>
                    <td><?= $out->telefono; ?></td>
                    <td><?= $out->encargado; ?></td>
                    <td><?= $out->sector; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>