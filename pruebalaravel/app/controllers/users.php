<?php

class Users_Controller Extends Basse_Controller
{
	public function action_index()
	{
		$users = User::all();
		return View::make('users.index') -> with('users', users);
	}
}

?>