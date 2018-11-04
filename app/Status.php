<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StatusSequence;
use Carbon\Carbon;

class Status extends Model
{
  protected $table = 'status';

  protected $fillable = ['name','color'];

  public function nextStatuses()
  {
    return $this->belongsToMany(Status::class, 'status_sequence', 'id_current_status', 'id_next_status');
  }

  public function fechaF()
  {
    return Carbon::parse($this->created_at)->format('d-m-Y');
  }

}
