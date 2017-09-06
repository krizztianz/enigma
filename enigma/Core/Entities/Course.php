<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $organization_id
 * @property int $distribution_id
 * @property int $mentor_id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Organization $organization
 * @property Distribution $distribution
 * @property Member $author
 * @property CourseMember[] $courseMembers
 * @property Schedule[] $schedules
 */
class Course extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['organization_id', 'distribution_id', 'mentor_id', 'name', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Organization');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function distribution()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Distribution');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Member', 'mentor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseMembers()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\CourseMember');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Schedule');
    }
}
