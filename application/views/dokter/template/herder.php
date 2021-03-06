
<div data-role="header">
		<h1>Aplikasi Konsultasi Dokter</h1>
		<a href="#panel-overlay" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-right ui-icon-gear">Profil</a>
		<a href="#right-panel" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-left ui-icon-gear">log out</a>
		<div data-role="navbar">
			<ul>
				<li><a href="<?php echo base_url();?>dokter/index">chat</a></li>
				<li><a href="<?php echo base_url();?>dokter/grup">Group</a></li>
				<li><a href="<?php echo base_url();?>dokter/artikel">Artikel</a></li>
			</ul>

		</div>
		
		<?php foreach ($jj->result() as $row){ ?>
		
	<div data-role="panel" id="panel-overlay" data-display="overlay">
		<ul data-role="listview">
			<li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
		<li>
		<?php if(!empty($row->foto)){?>
						<img src="<?php echo base_url('asset/gambar/'.$row->foto); ?>" style="width:200px;" >
		<?php } ?>
			
			
				
			</li>
			<h4><?php echo $row->nama; ?></h4>
			<h4>Spesialis:<?php echo $row->spesialis; ?></h4>
			<br>
			
		<br><br>
		
	</div>
		<?php }?>
	
	<!-- panel kanan-->
		<div data-role="panel" id="right-panel" data-display="overlay" data-position="right">
		<ul data-role="listview">
			<li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
		
			
		</ul>
		<br><br>
		<a href="<?= base_url("dokter/login/logout") ?>" class="ui-btn ui-corner-all ui-shadow">Log Out</a>
	</div>
	</div>