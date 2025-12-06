<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ShortUrl extends Model { protected $fillable=['code','original_url','created_by','company_id','public']; }
