<form method="post" action="{{ route('insert') }}">
	@csrf
	<input type="text" name="name">
	<input type="email" name="email">
	<input type="text" name="phone">
	<input type="text" name="description">
	<input type="submit" value="Submit">
</form>