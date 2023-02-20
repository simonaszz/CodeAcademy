<?php

namespace App\Projects\Wedding;

use App\Projects\Business\Services\FlowerService;
// use App\Projects\Business\Services\CakeService;
// use App\Projects\Business\Services\BallonService;
// use App\Projects\Business\Services\MusicService;

use App\Projects\Business;

use App\Projects\Business\Services\MusicService as PlayList;

class Customer
{
	// public function getFlowers(): \App\Projects\Business\Services\FlowerService
	// {
	// 	return new \App\Projects\Business\Services\FlowerService();
	// }
	
	public function getFlowers(): FlowerService
	{
		return new FlowerService();
	}

	public function getCakes(): Business\Services\CakeService
	{
		return new Business\Services\CakeService();
	}

	public function getBallons(): Business\Services\BallonService
	{
		return new Business\Services\BallonService();
	}

	public function getPlayList(): PlayList
	{
		return new PlayList();
	}
}