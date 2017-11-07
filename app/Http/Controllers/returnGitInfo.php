<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class returnGitInfo extends Controller
{
	public function show()
	{
		$userData = json_decode($this->getUserInfo($_GET['username']));
		if (isset($userData->message))
		{
			\Session::flash('message', $userData->message);
			return redirect('');

		}
		else
		{
			return View::make('showUserInfo')->with('userData', $userData);
		}
		
	}

	private function getUserInfo($username = null)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.github.com/users/" . $username);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Awesome-Octocat-App'));
		return curl_exec($ch);
	}
}
