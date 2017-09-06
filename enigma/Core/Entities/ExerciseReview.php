<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $exercise_answer_id
 * @property int $exercise_score_id
 * @property int $exercise_question_id
 * @property int $member_id
 * @property string $member_answer
 * @property string $correct
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property ExerciseAnswer $answer
 * @property ExerciseScore $score
 * @property ExerciseQuestion $question
 * @property Member $member
 */
class ExerciseReview extends Model
{

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['exercise_answer_id', 'exercise_score_id', 'exercise_question_id', 'member_id', 'member_answer', 'correct', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function answer()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\ExerciseAnswer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function score()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\ExerciseScore');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\ExerciseQuestion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Member');
    }
}
