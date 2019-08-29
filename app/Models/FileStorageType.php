<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileStorageType extends Model
{
    protected $fillable = array('name', 'path', 'file_type' ,'file_extension', 'table_name', 'access_level', 'file_maxsize');
    protected $table = 'file_types';

    public $timestamps = false;
}