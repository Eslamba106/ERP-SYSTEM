<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_panel_setting extends Model
{
    use HasFactory;
    protected $table = 'admin_panel_settings';
    protected $fillable = ['id', 'system_name', 'photo', 'address', 'phone', 'active', 'general_alert', 'added_by', 'created_at', 'updated_by', 'updated_at', 'com_code'];
}
