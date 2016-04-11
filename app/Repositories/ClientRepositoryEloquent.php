<?php
/**
 * Created by PhpStorm.
 * User: wilsonalves
 * Date: 09/04/16
 * Time: 23:21
 */

namespace CodeProject\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository
{
   public function model()
   {
       return Client::class;

       // TODO: Implement model() method.
   }

}