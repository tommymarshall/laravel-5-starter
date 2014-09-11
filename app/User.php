<?php namespace App;

use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Contracts\Auth\User as UserContract;
use Illuminate\Contracts\Auth\Remindable as RemindableContract;
use Hash;

class User extends Model implements UserContract, RemindableContract {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	protected $fillable = ['email', 'password'];

	protected $hidden = ['password', 'remember_token'];

	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}

}
