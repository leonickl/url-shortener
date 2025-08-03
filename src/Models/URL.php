<?php

namespace App\Models;

use PXP\Core\Lib\Model;

/**
 * @property int $id
 * @property string $long
 * @property string $short
 */
class URL extends Model
{
    protected string $table = 'urls';
}
