<?php


namespace App\Services\Organization\DTO\Profile;


use Spatie\DataTransferObject\DataTransferObject;

class ProfileCreateDto extends DataTransferObject
{
      public int  $partner_id;
      public int   $city_id;
      public string $name;
      public string $description;
      public int $average_check;
      public string $link;
      public string $instagram;


}