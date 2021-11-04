<?php


namespace App\Http\Traits;


use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

trait CommonTrait
{

    use SoftDeletes;

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
    public static function getColumns($alias = null)
    {
        $columns = with(new static)->getFillable();
        array_push($columns, 'id');
        if ($alias) {
            return collect($columns)->map(function ($item) use ($alias) {
                return $alias . '.' . $item;
            })->all();
        }
        return $columns;
    }

    // user
    public function created_user()
    {
        return $this->hasOne(User::class, "id", "created_by");
    }


    public function updated_user()
    {
        return $this->hasOne(User::class, "id", "updated_by");
    }


    public function approved_user()
    {
        return $this->hasOne(User::class, "id", "approved_by");
    }

}
