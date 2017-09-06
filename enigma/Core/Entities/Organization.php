<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $owner_id
 * @property string $name
 * @property string $alias
 * @property string $slug
 * @property string $description
 * @property string $deactivationDate
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Member $owner
 * @property Course[] $courses
 * @property Distribution[] $distributions
 * @property Exercise[] $exercises
 * @property Forum[] $forums
 * @property Lesson[] $lessons
 * @property Member[] $members
 * @property Permission[] $permissions
 * @property Role[] $roles
 * @property Schedule[] $schedules
 * @property Subject[] $subjects
 * @property Suborganization[] $suborganizations
 */
class Organization extends Model
{

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['owner_id', 'name', 'alias', 'slug', 'description', 'deactivationDate', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Member', 'owner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Course');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function distributions()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Distribution');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exercises()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Exercise');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function forums()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Forum');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Lesson');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Member');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissions()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Permission');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roles()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Schedule');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subjects()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Subject');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suborganizations()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Suborganization');
    }
}
