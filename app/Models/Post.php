<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    //ini yang boleh di isis, sisanya gaboleh
    //protected $fillable = ['title', 'excerpt', 'body'];

    //ini gaboleh di isi, isisanya boleh
    protected $guarded = ['id'];

    protected $with = ['category', 'author']; //with agar menghindari kesalahan n+1, yaitu biar hemat query database

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        //pake callback
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        //Pake arrow function
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    //menghubungkn table post dengan category
    public function category()
    {
        //relasi one to one
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        //relasi one to one
        //namanya jadi author, dan mengambil dari user_id
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName() //agar default dari key yang di cari buat Resource(di web.php) itu bukan id, tapi slug, biar url nya ga id
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
