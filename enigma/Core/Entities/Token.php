<?php

namespace Enigma\Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $email
 * @property string $token
 * @property string $token_expiry_date
 * @property User $user
 */
class Token extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'email', 'token', 'token_expiry_date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Enigma\Modules\Core\Entities\User');
    }
}