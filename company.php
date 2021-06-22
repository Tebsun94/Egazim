<?php
namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    use \App\Models\Concerns\UsesUuid;

    protected $table = 'companies';

protected  $fillable = [   

             'id',
        'companyname',
        'category',
        'categoryName',
        'email',
        'address',
        //'district',
        'phone',
        'usertype',
        'taxidentifier',
        'imagelogo'
   ];
 // protected $table = 'companies';
}
