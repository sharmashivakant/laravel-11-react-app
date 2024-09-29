<?php

namespace App\Models;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['image_path', 'name', 'description', 'status', 'due_date', 'created_by', 'updated_by'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Get the user that owns the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function  createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function  updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
