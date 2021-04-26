<!DOCTYPE html>
<html>

<head>
	<title>Edit Data</title>

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<script src="http://code.jquery.com/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			// Basic confirmation
			$("#link").popConfirm();

			// Custom Title, Content and Placement
			$("#button").popConfirm({
				title: "Confirmation",
				content: "Are you sure want to Delete !",
				placement: "right"
			});
		});
	</script>
</head>

<script src="js/script.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.popconfirm.js"></script>
<style type="text/css">
	body {
		padding-top: 60px;
	}

	@media (max-width: 979px) {
		body {
			padding-top: 0px;
		}
	}
</style>

<body>
	<?php echo form_open('kontakxml/edit'); ?>
	<?php echo form_hidden('id', $dataKontak[0]->id); ?>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Edit Data</a>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<table class="table table-bordered table-striped table-hover">
					<tr>
						<td>ID</td>
						<td><?php echo form_input('', $dataKontak[0]->id, 'disabled'); ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><?php echo form_input('nama', $dataKontak[0]->nama); ?></td>
					</tr>
					<tr>
						<td>Nomor</td>
						<td><?php echo form_input('nomor', $dataKontak[0]->nomor); ?></td>
					</tr>
					<tr>
						<td colspan="2">
							<?php echo form_submit('submit', 'Simpan'); ?>
							<?php echo anchor('kontak', 'Kembali'); ?>
						</td>
					</tr>
				</table>
				<?php echo form_close(); ?>
</body>

</html>