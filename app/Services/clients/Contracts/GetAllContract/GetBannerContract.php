<?php


namespace App\Services\clients\Contracts\GetAllContract;


use Illuminate\Http\JsonResponse;

interface GetBannerContract
{
    public function execute():array;
}