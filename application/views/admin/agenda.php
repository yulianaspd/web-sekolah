<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>
		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<button class="btn btn-success">
					<i class="ace-icon fa fa-signal"></i>
				</button>
				<button class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</button>
				<button class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</button>
				<button class="btn btn-danger">
					<i class="ace-icon fa fa-cogs"></i>
				</button>
			</div>
			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>
				<span class="btn btn-info"></span>
				<span class="btn btn-warning"></span>
				<span class="btn btn-danger"></span>
			</div>
		</div>
		<ul class="nav nav-list">
			<li class="">
				<a href="<?php echo base_url();?>admin">
					<i class="menu-icon fa fa-home"></i>
					<span class="menu-text"> Beranda </span>
				</a>
				<b class="arrow"></b>
			</li>
            <li class="">
                <a href="<?php echo base_url();?>admin/berita">
                    <i class="menu-icon fa fa-newspaper-o"></i>
                    <span class="menu-text"> Berita </span>
                </a>
            </li>
            <li class="active open">
    			<a href="<?php echo base_url();?>admin/agenda">
    				<i class="menu-icon fa fa-calendar"></i>
    				<span class="menu-text"> Agenda </span>
    				<b class="arrow"></b>
    			</a>
    		</li>
    		<li class="">
    			<a href="<?php echo base_url();?>admin/guru">
    				<i class="menu-icon fa fa-id-card"></i>
    				<span class="menu-text"> Guru </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
			<li class="">
				<a href="<?php echo base_url();?>admin/kolom_guru">
					<i class="menu-icon fa fa-archive"></i>
					<span class="menu-text">Kolom Guru</span>
				</a>
			</li>
            <li class="">
    			<a href="<?php echo base_url();?>admin/pengumuman">
    				<i class="menu-icon fa fa-bell"></i>
    				<span class="menu-text"> Pengumuman </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
    		<li class="">
    			<a href="<?php echo base_url();?>admin/download">
    				<i class="menu-icon fa fa-download"></i>
    				<span class="menu-text"> Download </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
			<li class="">
				<a href="<?php echo base_url();?>admin/pesan">
					<i class="menu-icon fa fa-envelope"></i>
					<span class="menu-text"> Pesan </span>
				</a>
			</li>
        </ul>
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb normal">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="<?php echo base_url();?>admin">Home</a>
					</li>
					<li class="active">
						<i class="ace-icon fa fa-newspaper-o home-icon"></i>
						Agenda
					</li>
				</ul>
			</div>
			<div class="page-content">
				<?php echo form_open('admin/agenda'); ?>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
							<input type="text" name="search" placeholder="Search ..." class="form-control" value="<?php if(!empty($this->session->flashdata('search_admin_agenda'))){ echo $this->session->flashdata('search_admin_agenda'); } else { set_value('search'); }?>" />
						</div>
					</div>
				</form>
				<a href="<?php echo base_url();?>admin/tambahAgenda" class="btn btn-info btn-fixed-bottom-right z-top"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
				<?php if($agenda){foreach($agenda as $b){ ?>
					<div class="box-border p-1 mb-1">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1> <?php echo $b['judul_agenda']; ?> </h1>
								<hr>
								<small class="text-muted">Dipost pada : <?php echo $b['tanggal_agenda']; ?></small>
								<p class="text-justify text-truncate"> <?php echo word_limiter($b['isi_agenda'], 25); ?> </p>
								<hr>
								<a href="<?php echo base_url();?>admin/editAgenda?i=<?php echo $b['id']; ?>"><button class="btn btn-primary" role="button"><i class="fa fa-edit fa-2x"></i></button></a>
								<button href="<?php echo base_url();?>admin/deleteAgenda?i=<?php echo $b['id']; ?>" class="btn btn-danger remove" role="button"><i class="fa fa-trash fa-2x"></i></button>
							</div>
						</div>
					</div>
				<?php }}else{ ?>
					<div class="box-border p-1">
						<h1 class="text-center">Data yang anda cari tidak ditemukan ...</h1>
					</div>
				<?php } ?>
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
