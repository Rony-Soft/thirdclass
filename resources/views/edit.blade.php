<form method="post" action="{{ route('update',$edit->id) }}">
	@csrf
	<input type="text" name="name" value="{{ $edit->name }}">
	<input type="email" name="email" value="{{ $edit->email }}">
	<input type="text" name="phone" value="{{ $edit->phone }}">
	<input type="text" name="description" value="{{ $edit->description }}">
	<input type="submit" value="Submit">
</form>