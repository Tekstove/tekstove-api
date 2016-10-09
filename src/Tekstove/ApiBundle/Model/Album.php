<?php

namespace Tekstove\ApiBundle\Model;

use Tekstove\ApiBundle\Model\Base\Album as BaseAlbum;

use Tekstove\ApiBundle\Model\Acl\AutoAclSerializableInterface;

/**
 * Skeleton subclass for representing a row from the 'album' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Album extends BaseAlbum implements AutoAclSerializableInterface
{
    use AclTrait;
    
    public function getOrderedAlbumLyrics()
    {
        $return = [];
        foreach ($this->getAlbumLyrics() as $albumLyric) {
            $return[] = $albumLyric;
        }
        return $return;
    }
}
