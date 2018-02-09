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
			<li class="active open">
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
            <li class="">
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
    			<a href="<?php echo base_url();?>admin/pengumuman">
    				<i class="menu-icon fa fa-bell"></i>
    				<span class="menu-text"> Pengumuman </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
    		<li class="">
    			<a href="<?php echo base_url();?>admin/gallery">
    				<i class="menu-icon fa fa-picture-o"></i>
    				<span class="menu-text"> Gallery </span>
    			</a>
    			<b class="arrow"></b>
    		</li>
        </ul>
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li class="active">
						<i class="ace-icon fa fa-home home-icon"></i>
						Home
					</li>
				</ul>
			</div>
			<div class="page-content">
				<form method="POST" action="<?php echo base_url();?>admin/update_tentang">
					<div class="form-group">
						<label for="visi"><h1>Visi</h1></label>
						<textarea id="visi" name="visi" class="form-control"><?php echo $tentang->visi; ?></textarea>
						<script>
							CKEDITOR.replace( 'visi' );
						</script>
					</div>
					<div clas="form-group">
						<label for="misi"><h1>Misi</h1></label>
						<textarea id="misi" name="misi" class="form-control"><?php echo $tentang->misi; ?></textarea>
						<script>
							CKEDITOR.replace( 'misi' );
						</script>
					</div>
					<div clas="form-group">
						<label for="deskripsi"><h1>Deskripsi</h1></label>
						<textarea id="deskripsi" name="deskripsi" class="form-control"><?php echo $tentang->deskripsi; ?></textarea>
						<script>
							CKEDITOR.replace( 'deskripsi' );
						</script>
					</div>
					<div clas="form-group">
						<label for="sejarah"><h1>Sejarah</h1></label>
						<textarea id="sejarah" name="sejarah" class="form-control"><?php echo $tentang->sejarah; ?></textarea>
						<script>
							CKEDITOR.replace( 'sejarah' );
						</script>
					</div>
					<hr>
					<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-edit fa-2x"></i></button>
				</form>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<span class="bigger-120">
					 &copy; Copyright Tim 7 @ SMKN 11 Bandung. All Rights Reserved. 2017-2018.
				</span>
				&nbsp; &nbsp;
				<span class="action-buttons">
				</span>
			</div>
		</div>
	</div>

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div>