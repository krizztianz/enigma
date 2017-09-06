<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $organization_id
 * @property string $member_code
 * @property string $firstname
 * @property string $lastname
 * @property string $address1
 * @property string $address2
 * @property string $phone1
 * @property string $phone2
 * @property string $photo
 * @property string $activation
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property Organization $organization
 * @property CourseMember[] $courseMembers
 * @property Course[] $courses
 * @property ExerciseReview[] $reviews
 * @property ExerciseScore[] $scores
 * @property ForumPost[] $posts
 * @property Lesson[] $lessons
 * @property MemberDetail[] $details
 * @property MemberRole[] $memberRoles
 * @property Organization[] $organizations
 */
class Member extends Model
{

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'organization_id', 'member_code', 'firstname', 'lastname', 'address1', 'address2', 'phone1', 'phone2', 'photo', 'activation', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\User');
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
    public function courseMembers()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\CourseMember');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Course', 'mentor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\ExerciseReview');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scores()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\ExerciseScore');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\ForumPost');
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
    public function details()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\MemberDetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function memberRoles()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\MemberRole');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function organizations()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\Organization', 'owner_id');
    }
}
