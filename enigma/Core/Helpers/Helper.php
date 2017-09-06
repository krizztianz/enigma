<?php
namespace Enigma\Modules\Core\Helpers;

use Enigma\Modules\Core\Entities\User;
use Enigma\Modules\Core\Entities\Organization;
use Enigma\Modules\Core\Entities\Member;

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
}
