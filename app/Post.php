<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 dev_basis02
    public function getPaginateByLimit(int $limit_count = 10){
        return $this -> orderBy('updated_at','DESC')->paginate($limit_count);
    }
=======
    //
 master
}
