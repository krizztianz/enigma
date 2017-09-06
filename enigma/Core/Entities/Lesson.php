<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $schedule_id
 * @property int $member_id
 * @property int $organization_id
 * @property string $titile
 * @property string $description
 * @property string $text
 * @property string $file_url
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Schedule $schedule
 * @property Member $author
 * @property Organization $organization
 */
class Lesson extends Model
{

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['schedule_id', 'member_id', 'organization_id', 'titile', 'description', 'text', 'file_url', 'type', 'created_at', 'updated_at'];

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
    public function author()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Member');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Organization');
    }
}
