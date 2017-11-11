<?php

function average($data, $input)
{
	$data['number']++;
	$data['sum'] += $input;
	$data['average'] = $data['sum'] / $data['number'];

	return $data;
}