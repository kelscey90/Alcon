<?php
	include '../header.php';
?>

	<div class="create_header flex">
		<div class="left_section">
			<div class="left_header">
				<div class="content_header_pack">
					<h1  class="bold">New Item 1</h1>
				</div>
			</div>
		</div>
		<div class="right_section">
			<div class="create_right_header right">
				<div class="content_header_pack">
					<button class="save_btn">Save</button>
				</div>
			</div>
		</div>
	</div>

	<form>
		<div class="item_form">
			<h1 class="bold">Create New Item</h1>
			<div class="item_section flex wrap">
				<div class="form_left">

					<div class="form_pack">
						<div class="form_label">
							<label>Item Code</label>
						</div>

						<div class="form_input">
							<input type="text">
						</div>
					</div>

					<div class="form_pack">
						<div class="form_label">
							<label>Item Name</label>
						</div>

						<div class="form_input">
							<input type="text">
						</div>
					</div>

					<div class="form_pack">
						<div class="form_label">
							<label>Category</label>
						</div>

						<div class="form_input">
							<input type="text">
						</div>
					</div>

					<div class="form_pack">
						<div class="form_label">
							<label>UOM</label>
						</div>

						<div class="form_input">
							<input type="text">
						</div>
					</div>
				</div>

				<div class="form_right">
					<div class="form_pack">
						<div class="form_label">
							<label>Buying Rate</label>
						</div>

						<div class="form_input">
							<input type="text">
						</div>
					</div>

					<div class="form_pack">
						<div class="form_label">
							<label>Selling Rate</label>
						</div>

						<div class="form_input">
							<input type="text">
						</div>
					</div>
				</div>
			</div>

			<div class="item_section">

				<div class="form_pack">
					<div class="form_label">
						<label>Brand</label>
					</div>

					<div class="form_input">
						<input type="text" style="width: 47%;">
					</div>
				</div>

				<div class="form_pack">
					<div class="form_label">
						<label>Description</label>
					</div>

					<div class="form_input">
						<textarea></textarea>
					</div>
				</div>
			</div>
		</div>
	</form>

<?php
	include '../footer.php';
?>
