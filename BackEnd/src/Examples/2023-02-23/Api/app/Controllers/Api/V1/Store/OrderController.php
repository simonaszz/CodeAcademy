<?php

namespace App\Controllers\Api\V1\Store;

use DateTime;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use RuntimeException;

use App\Repositories\Store\OrderRepository;

class OrderController
{
	// https://www.slimframework.com/docs/v4/objects/routing.html#container-resolution
	function __construct(private OrderRepository $orderRepository)
	{
	}

	// https://www.slimframework.com/docs/v4/objects/response.html#returning-json
	public function store(Request $request, Response $response)
	{
		$values = (string) $request->getBody();
		$values = json_decode($values, TRUE);

		$itemId = $values['item_id'] ?? NULL;
		$quantity = $values['quantity'] ?? NULL;

		if (!$itemId || !$quantity) {
			throw new RuntimeException('Error Processing Request', 400);
		}

		$data = [
			'id'       => uniqid(),
			'item_id'  => $itemId,
			'quantity' => $quantity,
			'shipDate' => date(DateTime::ISO8601, strtotime('next day')),
			'status'   => 'placed',
			'complete' => false
		];

		$this->orderRepository->store($data);

		$payload = json_encode($data);

		$response->getBody()->write($payload);

		return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
	}

	public function find(Request $request, Response $response, array $args)
	{
		$orderId = $args['orderId'] ?? NULL;

		if (!$orderId) {
			throw new RuntimeException('Error Processing Request', 400);
		}

		$orderData = $this->orderRepository->find($orderId);

		if (!$orderData) {
			throw new \RuntimeException('Store not found', 404);
		}
		
		$payload = json_encode($orderData);

		$response->getBody()->write($payload);

		return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
	}

	public function delete(Request $request, Response $response, array $args)
	{
		$orderId = $args['orderId'] ?? NULL;

		if (!$orderId) {
			throw new RuntimeException('Error Processing Request', 400);
		}
		
		$this->orderRepository->delete($orderId);

		$response->getBody()->write(json_encode(['status' => TRUE]));

		return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
	}
}