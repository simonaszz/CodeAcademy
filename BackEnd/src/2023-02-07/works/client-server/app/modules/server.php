<?php


if (isset($_POST['data'])) {
	file_put_contents(ROOT_PATH . '/data/' . time(), $_POST['data']);
}