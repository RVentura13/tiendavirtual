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
      <?= dep($_SESSION['userData']); ?>
    </section>
  </main>
</div>
<?php footerAdmin($data); ?>