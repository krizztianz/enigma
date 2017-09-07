<?php
namespace Enigma\Modules\Core\Repositories\Member;

use Enigma\Modules\Core\Repositories\RepositoryInterface;
use Enigma\Modules\Core\Entities\Member;
use Enigma\Modules\Core\Entities\User;
use Enigma\Modules\Core\Entities\Organization;

class MemberRepository
{

    const NEED_ACTIVATION = "need_activation";
    const ACTIVE          = "active";
    const INACTIVE        = "inactive";
    const BLOCKED         = "blocked";

    /**
     * Create new Member
     * 
     * @param User $user
     * @return Member
     */
    public function create(User $user)
    {
        $member            = new Member();
        $member->user_id   = $user->id;
        $member->firstname = $user->name;
        $member->saveOrFail();

        return $member;
    }

    public function delete()
    {
        
    }

    public function update()
    {
        
    }
}
