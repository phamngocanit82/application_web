<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class About extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'title',
        'sub_title',
        'description',
        'image',
        'thumb',
        'width',
        'height',
        'active',
        'create_at',
        'update_at',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    use HasFactory;
    protected $table = 'about';
    public function getAll(){
        $event = DB::table($this->table)->orderBy('title', 'ASC')->get();
        return $event;
    }
    public function getAllActive(){
        $event = DB::table($this->table)->where('active', '1')->orderBy('title', 'ASC')->get();
        return $event;
    }
    public function getPage($page=null){
        $event = DB::table($this->table)->orderBy('title', 'ASC');
        if(!empty($page)){
            $event = $event->paginate($page);
        }else{
            $event = $event->get();
        }
        return $event;
    }
    public function insert($data){
        DB::table($this->table)->insert($data);
    }
    public function getId($id){
        $event = DB::table($this->table)->get();
        return $event;
    }
    public function deleteId($id){
        DB::table($this->table)->delete();
    }
    public function updateId($data){
        DB::table($this->table)->update($data);
    }
    public function updateActiveId($data){
        DB::table($this->table)->update($data);
    }
}
