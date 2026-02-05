<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //
   protected $fillable = ['name','amount','cadence','effect_date'];

   public function getFillableAttributes(): array
   {
      $allAttributes = $this->getAttributes();
      $fillableAttributes = [];
      foreach ($allAttributes as $name => $value) {
         if (in_array($name, $this->fillable)) {
            $fillableAttributes[$name] = $value;
         }
      }
      return $fillableAttributes;
   }
}
