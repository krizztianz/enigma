<?php
namespace Enigma\Modules\Core\Repositories\Token;

use Enigma\Modules\Core\Entities\Token;
use Enigma\Modules\Core\Entities\User;
use Enigma\Modules\Core\Entities\Member;
use Enigma\Modules\Core\Entities\Organization;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class TokenRepository
{

    /**
     * Create new token
     * 
     * @param User $user
     * @return Token
     */
    public function create(User $user)
    {
        $tokenData = $this->generate($user);

        $token = Token::updateOrCreate(
                ['user_id' => $user->id, 'email' => $user->email], [
                'token'             => $tokenData['tokenString'],
                'token_expiry_date' => $tokenData['timeLimit']
                ]
        );

        return $token;
    }

    /**
     * Find token by tokenId
     * 
     * @param type $id
     * @return type
     * 
     */
    public function find($id = '')
    {
        $token = Token::findOrFail($id);
        return $token;
    }

    /**
     * Find token by userId
     * 
     * @param string $userId
     * @return Token
     */
    public function findByUserId($userId = '')
    {
        $token = Token::where('user_id', $userId)->firstOrFail();
        return $token;
    }

    /**
     * Find token by userId and tokenCode
     * 
     * @param string $userId
     * @param string $tokenCode
     * @return Token
     */
    public function findByUserIdAndCode($userId = '', $tokenCode = '')
    {
        $token = Token::where([
                'user_id' => $userId,
                'token'   => $tokenCode
            ])->firstOrFail();

        return $token;
    }

    /**
     * Delete token
     * 
     * @param Token $token
     * @return boolean
     */
    public function delete(Token $token)
    {
        return $token->delete();
    }

    /**
     * Update token
     * 
     * @param Token $token
     * @param array $data
     * @return Token
     */
    public function update(Token $token, array $data)
    {
        $token->email             = $data['email'];
        $token->token             = $data['tokenCode'];
        $token->token_expiry_date = $data['expiryDate'];
        $token->saveOrFail();

        return $token;
    }

    /**
     * Generate token code
     * 
     * @param User $user
     * @return array
     */
    private function generate(User $user)
    {
        $email     = $user->email;
        $userId    = $user->id;
        $timeLimit = Carbon::now()->addHours(24);
        $str       = $userId . "#$#" . $email;
        $encrypt   = Crypt::encryptString($str);
        $tokenStr  = $userId . "#$#" . $encrypt;

        return [
            "timeLimit"   => $timeLimit,
            "tokenString" => $tokenStr
        ];
    }
}
