<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $schedule_id
 * @property int $organization_id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Schedule $schedule
 * @property Organization $organization
 * @property ForumPost[] $posts
 */
class Forum extends Model
{

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['schedule_id', 'organization_id', 'name', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schedule()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Schedule');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Organization');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\ForumPost');
    }
}
