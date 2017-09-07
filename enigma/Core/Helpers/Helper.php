<?php
/**
 * Independent Helper Class
 */
namespace Enigma\Modules\Core\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Enigma\Modules\Core\Entities\User;
use Enigma\Modules\Core\Entities\Organization;
use Enigma\Modules\Core\Entities\Member;
use Enigma\Modules\Core\Repositories\Member\MemberRepository as MemberRepo;
use Carbon\Carbon;

class Helper
{

    /**
     * Get current active user.
     * 
     * @return User
     */
    public static function getCurrentUser()
    {
        $user = new User();
        return $user;
    }

    /**
     * Get current active Organization
     * 
     * @return Organization
     */
    public static function getCurrentOrganization()
    {
        $organization = new Organization();
        return $organization;
    }

    /**
     * Get current active member
     * 
     * @return Member
     */
    public static function getCurrentMember()
    {
        $member = new Member();
        return $member;
    }

    /**
     * Validate request slug
     * 
     * @param string $slug
     * @return boolean
     */
    public function validateSlug(string $slug = '')
    {
        return TRUE;
    }

    /**
     * Check if current company is activated
     * 
     * @return boolean
     */
    public static function isActiveCompany()
    {
        $userId       = Auth::id();
        $user         = User::findOrFail($userId);
        $member       = $user->member;
        $organization = $member->organization;

        if (!is_null($organization->deactivationDate)) {
            $now          = Carbon::now();
            $deactivation = Carbon::createFromFormat('Y-m-d H:i:s', $organization->deactivationDate);
            return ($now->lt($deactivation));
        }
        
        return true;
    }

    /**
     * Check if current member is activated
     * 
     * @return boolean
     */
    public static function isActiveMember()
    {
        $userId = Auth::id();
        $user   = User::findOrFail($userId);
        $member = $user->member;
        return ($member->activation == MemberRepo::ACTIVE);
    }

    /**
     * Get current member activation status
     * 
     * @return string
     */
    public static function getMemberActivation()
    {
        $userId = Auth::id();
        $user   = User::findOrFail($userId);
        $member = $user->member;
        return $member->activation;
    }

    /**
     * Get current Company expiration date
     * 
     * @return string $date
     */
    public static function getCompanyExpiryDate()
    {
        return Carbon::now();
    }
}
