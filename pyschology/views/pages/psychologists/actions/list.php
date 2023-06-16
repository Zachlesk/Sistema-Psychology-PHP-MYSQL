<?php
        $url = "http://localhost/SkylAb-104/Clase/apirest/controllers/psicologas.php?op=getAll";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = json_decode(curl_exec($curl));
        /* print_r($output); */
    ?>
<div class="card">
              <div class="card-header">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Añadir psicologa
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Psychology</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form class="col d-flex flex-wrap" action="http://localhost/SkylAb-158/Psychology/apirest/controllers/psicologas.php?op=insert" method="post">
                        <div class="mb-1 col-12">
                          <label for="nombre_psicologas" class="form-label">Nombre Psicologa: </label>
                          <input 
                            type="text"
                            id="nombre_psicologas"
                            name="nombre_psicologas"
                            class="form-control"  
                          />
                        </div>

                        <div class="mb-1 col-12">
                          <label for="edad_psicologas" class="form-label">Edad: </label>
                          <input 
                            type="number"
                            id="edad_psicologas"
                            name="edad_psicologas"
                            class="form-control"  
                          />
                        </div>

                        <div class="mb-1 col-12">
                          <label for="especialidad" class="form-label">Especialidad: </label>
                          <input 
                            type="text"
                            id="especialidad"
                            name="especialidad"
                            class="form-control"  
                          
                          />
                        </div>

                        <div class="mb-1 col-12">
                          <label for="cargo" class="form-label"> Cargo: </label>
                          <input 
                            type="text"
                            id="cargo"
                            name="cargo"
                            class="form-control"  
                          
                          />
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Save" name="guardar"/>
                      </div>
                    </form>  
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Especialidad</th>
                    <th>Cargo</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach($output as $out)
                        {                  
                    ?>
                  <tr>
                    <td><?php echo $out-> id_psicologas; ?></td>
                    <td><?php echo $out-> nombre_psicologas; ?></td>
                    <td><?php echo $out-> edad_psicologas; ?></td>
                    <td><?php echo $out-> especialidad; ?></td>
                    <td><?php echo $out-> cargo; ?></td>
                  </tr>
                  <?php }?>
                  </tbody>
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