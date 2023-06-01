<?php

class index
{
    public function __construct()
    {
        $home = new app\Home();
        $home->sayMyName();

        $best = new Best();
        $best->sayBestName();
    }
}
