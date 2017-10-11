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
          <i class="fa fa-users"></i> <span>Tata Usaha</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url("home/kepegawaian")?>"><i class="fa fa-circle-thin"></i>
                Kepegawaian
              </a>
            </li>
            <li>
              <a href="<?php echo base_url("home/perlengkapan")?>"><i class="fa fa-circle-thin"></i>
                Perlengkapan
              </a>
            </li>
            <li>
              <a href="<?php echo base_url("home/persuratan")?>"><i class="fa fa-circle-thin"></i>
                Persuratan
              </a>
            </li>
            <li>
              <a href="<?php echo base_url("home/kinerja")?>"><i class="fa fa-circle-thin"></i>
                Kinerja
              </a>
            </li>
            <li>
              <a href="<?php echo base_url("home/agenda")?>"><i class="fa fa-circle-thin"></i>
                Agenda Direktur KBP
              </a>
            </li>
        </ul>
      </li>

      <!-- Sidebar Keberatan -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-exclamation-triangle"></i> <span>Keberatan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url("keberatan/home")?>"><i class="fa fa-circle-thin"></i>
              Overview
            </a>
          </li>
          <li>
            <a href="<?php echo base_url("keberatan/permohonan_keberatan")?>"><i class="fa fa-circle-thin"></i>
              Permohonan Keberatan
            </a>
          </li>
          <li>
            <a href="<?php echo base_url("keberatan/keputusan_keberatan")?>"><i class="fa fa-circle-thin"></i>
              Keputusan Keberatan
            </a>
          </li>
          <li>
            <a href="<?php echo base_url("keberatan/tabel_datakeberatan")?>"><i class="fa fa-circle-thin"></i>
              Tabel Data
            </a>
          </li>
        </ul>
      </li>

      <!-- Sidebar Banding -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-gavel"></i> <span>Banding</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url("banding/home")?>"><i class="fa fa-circle-thin"></i>
              Overview
            </a>
          </li>
          <li>
            <a href="<?php echo base_url("banding/surat_uraian_banding")?>"><i class="fa fa-circle-thin"></i>
              SUB
            </a>
          </li>
          <li>
            <a href="<?php echo base_url("banding/putusan")?>"><i class="fa fa-circle-thin"></i>
              Putusan
            </a>
          </li>
        </ul>
      </li>

      <!-- Sidebar Upaya Hukum -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-balance-scale"></i> <span>Upaya Hukum</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url("upaya_hukum/home")?>"><i class="fa fa-circle-thin"></i>
              Overview
            </a>
          </li>
          <li>
            <a href="<?php echo base_url("upaya_hukum/rekam_memori_PK")?>"><i class="fa fa-circle-thin"></i>
              Rekam Memori PK
            </a>
          </li>
          <li>
            <a href="<?php echo base_url("upaya_hukum/rekam_putusan_PK")?>"><i class="fa fa-circle-thin"></i>
              Rekam Putusan PK
            </a>
          </li>
        </ul>
      </li>

      <!-- Sidebar Peraturan -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-newspaper-o"></i> <span>Peraturan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url("peraturan/home")?>"><i class="fa fa-circle-thin"></i>
              Overview
            </a>
          </li>
          <li>
            <a href="<?php echo base_url("peraturan/input_peraturan")?>"><i class="fa fa-circle-thin"></i>
              Input Peraturan
            </a>
          </li>
          <li>
            <a href="<?php echo base_url("peraturan/browse_peraturan")?>"><i class="fa fa-circle-thin"></i>
              Browse Peraturan
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
