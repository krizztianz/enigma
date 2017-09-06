<?php
namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $member_id
 * @property string $field
 * @property string $value
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Member $member
 */
class MemberDetail extends Model
{

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['member_id', 'field', 'value', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\Member');
    }
}
