<?php
namespace Enigma\Modules\Core\Repositories\Organization;

use Enigma\Modules\Core\Repositories\RepositoryInterface;
use Enigma\Modules\Core\Entities\User;
use Enigma\Modules\Core\Entities\Member;
use Enigma\Modules\Core\Entities\Organization;
use Enigma\Modules\Core\Exceptions\Auth\SlugExistException;
use Carbon\Carbon;

class OrganizationRepository
{

    /**
     * Create new Organization
     * 
     * @param type $orgName
     * @param Member $member
     * @return Organization
     */
    public function create($orgName = '', Member $member)
    {
        $slug = $this->createSlug($orgName);

        $organization           = new Organization();
        $organization->name     = $orgName;
        $organization->owner_id = $member->id;
        $organization->slug     = $slug;
        $organization->alias    = ucwords($orgName);
        $organization->saveOrFail();

        return $organization;
    }

    public function delete()
    {
        
    }

    public function update()
    {
        
    }

    /**
     * 
     * @param string $organizationName
     * @return type
     */
    private function createSlug(string $organizationName)
    {
        $word = strtolower($organizationName);
        $word = str_replace(' ', '-', $word);

        $slug = $this->checkSlug($word);

        if (is_int($slug)) {
            $i    = $slug;
            $slug = $word . '-' . $i;
            $this->checkSlug($slug, $i);
        }

        return $slug;
    }

    /**
     * 
     * @param string $slug
     * @param int $tryCount
     * @return string
     * @throws SlugExistException
     */
    private function checkSlug(string $slug = "", int $tryCount = 0)
    {
        $i = (int) $tryCount;
        if (!empty($slug)) {
            try {
                $organizations = Organization::where('slug', $slug)->count();
                if ($organizations > 0) {
                    throw new SlugExistException('Slug already exist!');
                }
            } catch (SlugExistException $slxc) {
                $i++;
                return intval($i);
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                Log::error($e->getTraceAsString());
                abort(500, 'Terjadi kesalahan saat memeriksa Slug!');
            }

            return $slug;
        }
        
        abort(500, 'Slug tidak boleh kosong!');
    }
}
