<?php

namespace I95dev\Allplugins\Plugin;

class Allplugin
{

	public function beforeSetTitle(\I95dev\Allplugins\Controller\Index\Example $subject, $title)
	{
		$title = $title . " to ";
		echo __METHOD__ . "</br>";

		return [$title];
	}


	public function afterGetTitle(\I95dev\Allplugins\Controller\Index\Example $subject, $result)
	{

		echo __METHOD__ . "</br>";

		return '<h1>'. $result . 'after' .'</h1>';

	}


	public function aroundGetTitle(\I95dev\Allplugins\Controller\Index\Example $subject, callable $proceed)
	{

		echo __METHOD__ . " - Before proceed() </br>";
		 $result = $proceed();
		echo __METHOD__ . " - After proceed() </br>";


		return $result;
	}

}


