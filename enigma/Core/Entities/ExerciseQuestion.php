<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $exercise_id
 * @property int $question_no
 * @property string $question_text
 * @property string $question_type
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Exercise $exercise
 * @property ExerciseAnswer $answer
 * @property ExerciseOption[] $options
 * @property ExerciseReview[] $reviews
 */
class ExerciseQuestion extends Model
{

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['exercise_id', 'question_no', 'question_text', 'question_type', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exercise()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Exercise');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function answer()
    {
        return $this->hasOne('Enigma\Modules\Core\Entities\ExerciseAnswer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\ExerciseOption');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\ExerciseReview');
    }
}
