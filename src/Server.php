<?php


namespace gong86627\bobo;


class Server
{
    /**
     * @return string
     */
    public function info(): string
    {
        return sys_get_temp_dir();
    }
}