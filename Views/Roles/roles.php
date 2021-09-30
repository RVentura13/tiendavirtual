<?php
headerAdmin($data);
getModal('modalRoles', $data);
?>
<div id="contentAjax"></div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <main class="content-header">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-user-tag"></i> <?= $data['page_title']; ?>
              <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fa fa-fw fa-lg fas fa-plus-circle"></i>Crear</button>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/roles"><?= $data['page_title']; ?></a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="dataTables_wrapper dt-bootstrap4 table-responsive">
            <!-- <div class="table-responsive"> -->
              <!-- <table class="table table-hover table-bordered" id="tableRoles" width="100%"> -->
              <table class="table table-hover dataTable dtr-inline table-bordered" id="tableRoles" width="100%">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </main>
</div>
<?php footerAdmin($data); ?>