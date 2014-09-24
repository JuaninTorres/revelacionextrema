<?php

namespace RevExtrema\Repositories;

use RevExtrema\Entities\Information;

class InformationRepo {

    public function find($id)
    {
        return Information::find($id);
    }
} 