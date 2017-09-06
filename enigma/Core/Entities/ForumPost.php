<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $member_id
 * @property int $forum_id
 * @property string $title
 * @property string $text
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Member $author
 * @property Forum $forum
 */
class ForumPost extends Model
{

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['member_id', 'forum_id', 'title', 'text', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Member');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function forum()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Forum');
    }
}
