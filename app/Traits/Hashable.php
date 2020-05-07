<?php
/**
 * Created by PhpStorm.
 * User: Lloric Mayuga Garcia <lloricode@gmail.com>
 * Date: 12/2/18
 * Time: 4:27 PM
 */

namespace App\Traits;

use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

trait Hashable
{
    /**
     * @param  string  $hash
     *
     * @return mixed
     */
    public function decodeHash(string $hash)
    {
        $decoded = app('hashids')->decode($hash);

        if (empty($decoded)) {
            throw new BadRequestHttpException( trans('validation.attributes.hash_id_invalid') );
        }

        return $decoded[0];
    }

    /**
     * @param  string  $key
     *
     * @return string
     */
    public function getHashedId(string $key = 'id')
    {
        return app('hashids')->encode($this->{$key});
    }
}