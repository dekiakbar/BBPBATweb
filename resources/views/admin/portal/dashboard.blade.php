@extends('admin.master')
@section('judul','Admin Page Portal')

@section('isi')

	<div class="ui stackable two column grid">
		<div class="eight wide column">
			<div class="ui segment">
				<form class="ui form">
					<div class="two fields">
						<div class="field">
							<label>Nama Situs</label>
							<input type="text" name="Nama Situs" placeholder="Nama Situs">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="eight wide column">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
	</div>

@endsection