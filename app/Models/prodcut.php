<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class prodcut extends Model
{
    use HasFactory;

    public function getAllProduct(){
        $result = DB::table('goods')
                    ->get();
        return $result;
    }
}
