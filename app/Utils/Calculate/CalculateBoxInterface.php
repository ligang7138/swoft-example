<?php
namespace App\Utils\Calculate;


interface CalculateBoxInterface
{
    public static function result(array $params=[]):array;

	public static function clearReturnResult(array $params=[]):array;
}