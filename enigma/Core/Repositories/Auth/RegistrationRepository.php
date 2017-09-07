<?php
namespace Enigma\Modules\Core\Repositories\Auth;

use Enigma\Modules\Core\Repositories\RegistrationInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Enigma\Modules\Core\Entities\User;
use Enigma\Modules\Core\Repositories\User\UserRepository;
use Enigma\Modules\Core\Repositories\Member\MemberRepository;
use Enigma\Modules\Core\Repositories\Organization\OrganizationRepository;
use Enigma\Modules\Core\Repositories\Token\TokenRepository;
use Illuminate\Support\Facades\Log;

class RegistrationRepository implements RegistrationInterface
{

    protected $userRepo;
    protected $memberRepo;
    protected $orgRepo;
    protected $tokenRepo;

    public function __construct()
    {
        $this->userRepo   = new UserRepository();
        $this->memberRepo = new MemberRepository();
        $this->orgRepo    = new OrganizationRepository();
        $this->tokenRepo  = new TokenRepository();
    }

    public function create(array $data)
    {
        try {
            $user = DB::transaction(function () use ($data) {
                    $orgName = $data['organization_name'];

                    $user         = $this->userRepo->create($data);
                    $member       = $this->memberRepo->create($user);
                    $organization = $this->orgRepo->create($orgName, $member);

                    // Assign Member to Organization
                    $member->organization_id = $organization->id;
                    $member->save();

                    $token = $this->tokenRepo->create($user);

                    return $user;
                });

            return $user;
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            Log::error($ex->getTraceAsString());
            abort(500, "Terjadi kesalahan saat proses registrasi <br/> Silakan mencoba kembali");
        }
    }
}
