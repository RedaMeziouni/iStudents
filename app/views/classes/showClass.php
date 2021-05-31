<?php require APPROOT . '/views/inc/header.php';?>


<div class="card">
	<div class="card-body bg-light">
		<table class="table table-striped">
			<thead class="bg-info">
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Speciality</th>
				<th scope="col">Description</th>
				<th scope="col">Edit / Del</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($data['class'] as $data):?>
				<tr>
					<th scope="row"><?php echo $data->classe_name; ?></th>
					<td><?php echo $data->specialite;?></td>
					<td><?php echo $data->description;?></td>
					<td class="d-flex flex-row">
						<a href="<?= URLROOT; ?>/classes/editClass/<?= $data->id ?>"><i class="fa fa-edit mr-3"></i></a>
					<form method="post" class="mr-1" action="<?= URLROOT; ?>/classes/deleteClass/<?= $data->id; ?>">
						<input type="hidden" name="id" value="d">
						<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
					</form>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>