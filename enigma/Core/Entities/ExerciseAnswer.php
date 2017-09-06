<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $exercise_id
 * @property int $exercise_question_id
 * @property string $answer
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Exercise $exercise
 * @property ExerciseQuestion $questions
 * @property ExerciseReview[] $reviews
 */
class ExerciseAnswer extends Model
{

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['exercise_id', 'exercise_question_id', 'answer', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exercise()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Exercise');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function questions()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\ExerciseQuestion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany('Enigma\Modules\Core\Entities\ExerciseReview');
    }
}
