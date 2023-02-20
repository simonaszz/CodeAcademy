<?php

// namespace BusinessProject;
// namespace BusinessProject\SubProject;

namespace BusinessProject\SubProject\OtherProject;

function getUser()
{
	return sprintf("%s => %s => %s\n", __NAMESPACE__, __FUNCTION__, 'Mantas');
}

class User
{
	function __construct()
	{
		printf("%s => %s => %s\n", __NAMESPACE__, __CLASS__, 'Mantas');
	}
}

// echo getUser();
// new User();

// end of namespace BusinessProject

namespace WeddingProject;

function getUser()
{
	return sprintf("%s => %s => %s\n", __NAMESPACE__, __FUNCTION__, 'Tomas');
}

class User
{
	function __construct()
	{
		printf("%s => %s => %s\n", __NAMESPACE__, __CLASS__, 'Tomas');
	}
}

// echo getUser();
// new User();

// end of namespace WeddingProject

namespace EducationProject;

function getUser()
{
	return sprintf("%s => %s => %s\n", __NAMESPACE__, __FUNCTION__, 'Kiril');
}

class User
{
	function __construct()
	{
		printf("%s => %s => %s\n", __NAMESPACE__, __CLASS__, 'Kiril');
	}
}

echo getUser();
echo \BusinessProject\SubProject\OtherProject\getUser();
echo \WeddingProject\getUser();

new User();
new \BusinessProject\SubProject\OtherProject\User();
new \WeddingProject\User();