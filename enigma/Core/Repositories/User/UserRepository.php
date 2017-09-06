<?php
namespace Enigma\Modules\Core\Repositories\User;

use Enigma\Modules\Core\Repositories\RepositoryInterface;
use Enigma\Modules\Core\Entities\User;
use Enigma\Modules\Core\Entities\Member;
use Enigma\Modules\Core\Entities\Organization;
use Illuminate\Http\Request;

class UserRepository
{

    /**
     * Create new User
     * 
     * @param array $data
     * @return User
     */
    public function create(array $data)
    {
        $user           = new User();
        $user->name     = $data['name'];
        $user->email    = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->saveOrFail();

        return $user;
    }

    public function update(User $user)
    {
        return $user;
    }

    public function delete(User $user)
    {
        return $user->delete();
    }
}
