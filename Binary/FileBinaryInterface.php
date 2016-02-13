<?php

namespace Liip\ImagineBundle\Binary;

interface FileBinaryInterface extends BinaryInterface
{
    /**
     * @return string
     */
    public function getPath();

    /**
     * @return boolean
     */
    public function unlink();
}
