<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">


    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li>
        <a href="<?php echo base_url()?>">
          <i class="fa fa-tachometer"></i> <span>Overview</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      <!-- Sidebar TU -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Home</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url("home/kepegawaian")?>">Kepegawaian
                <span class="pull-right-container">
                  <i class="fa fa-drivers-license pull-left"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url("home/perlengkapan")?>"></i> Perlengkapan
                <span class="pull-right-container">
                  <i class="fa fa-key pull-left"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url("home/persuratan")?>"></i> Persuratan
                <span class="pull-right-container">
                  <i class="fa fa-envelope-open-o pull-left"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url("home/kinerja")?>"></i> Kinerja
                <span class="pull-right-container">
                  <i class="fa fa-check-square-o pull-left"></i>
                </span>
              </a>
            </li>

        </ul>
      </li>

      <!-- Sidebar Keberatan -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Keberatan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url("keberatan/permohonan_keberatan")?>">Permohonan Keberatan</a>
          </li>
          <li>
            <a href="<?php echo base_url("keberatan/keputusan_keberatan")?>">Keputusan Keberatan</a>
          </li>
        </ul>
      </li>

      <!-- Sidebar Banding -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Banding</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url("banding/SUB")?>"></i>SUB</a>
          </li>
          <li>
            <a href="<?php echo base_url("banding/putusan")?>"></i>Putusan</a>
          </li>
        </ul>
      </li>

      <!-- Sidebar Upaya Hukum -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Upaya Hukum</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url("upaya_hukum/rekam_memori_PK")?>"></i>Rekam Memori PK</a>
          </li>
          <li>
            <a href="<?php echo base_url("upaya_hukum/rekam_putusan_PK")?>"></i>Rekam Putusan PK</a>
          </li>
        </ul>
      </li>

      <!-- Sidebar Peraturan -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Peraturan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url("peraturan/input_peraturan")?>"></i>Input Peraturan</a>
          </li>
          <li>
            <a href="<?php echo base_url("peraturan/browse_peraturan")?>"></i>Browse Peraturan</a>
          </li>
        </ul>
      </li>
    </ul>

    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
