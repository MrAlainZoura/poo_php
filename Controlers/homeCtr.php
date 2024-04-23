<?php

namespace Controlers;
use Source\render;
use Model\user;

class HomeCtr 
{
	public function index():Render
	{
		/*	
			//$render= new Render('home\index');
			//return $render->view();
		
		
			$users= new User();
			$etat = $users->getConnect()->query('SELECT * FROM users');

			foreach($etat->fetchAll() as $user){
				var_dump($user->userName);
			}
		*/

		$users= new User();
		/*
			$tout=$users->all();
			//foreach($tout as $user){
			//	var_dump($user->userName);
			/}
		*/
		$statementUser=$users->allUsers();
		
		//var_dump(compact('statement'));
		

		return Render::viewRender('home\index',compact('statementUser'));
	}
}