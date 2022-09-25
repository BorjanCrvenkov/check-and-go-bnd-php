<?php

namespace App\Models;

class Role extends BaseModel
{
    final public const ADMINISTRATOR = 'ADMINISTRATOR';
    final public const BUSINESS = 'BUSINESS';
    final public const CUSTOMER = 'CUSTOMER';
    final public const DEFAULT = 'Default';
}
