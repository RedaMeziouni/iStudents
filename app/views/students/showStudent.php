<?php require APPROOT . '/views/inc/header.php';?>

<!-- <div class="container">
	<div class="row my-4">
		<div class="col-md-10 mx-auto"> -->
			
			<div class="card">
				<div class="card-body bg-light">
					<table class="table table-striped">
					  <thead class="bg-primary">
					    <tr>
					      <th scope="col">Name</th>
					      <th scope="col">E-mail</th>
					      <th scope="col">Gendre</th>
					      <th scope="col">Age</th>
					      <th scope="col"> Class</th>
					      <th scope="col"> Edit / Del</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($data['student'] as $data):?>
                           
					    	<tr>
                            
						      <th scope="row"><?php echo $data->nom; ?></th>
						      <td><?php echo $data->email;?></td>
						      <td><?php echo $data->genre;?></td>
						      <td><?php echo $data->age;?></td>
												<td><?php echo $data->class;?></td>
						      <td class="d-flex flex-row">
						      	
								<a href="<?= URLROOT; ?>/students/editStudent/<?= $data->id ?>"><i class="fa fa-edit mr-3"></i></a>
						      	<form method="post" class="mr-1" action="<?= URLROOT; ?>/students/deleteStudent/<?= $data->id; ?>">
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

		<!-- </div>
	</div>
</div> -->