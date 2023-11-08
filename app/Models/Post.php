<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /* estos valores DEBAJO nos permiten  insertar datos en la BD a través de 
    POST::create(['title' => 'My x post']) 'excerpt' => 'exerpt of post'  etc
    Estamos permitiendo que  los valroes de debajo sean mass asignMENT que se reasignen en la consola de comandos.
    */
    //protected $fillable = ['title', 'slug', 'excerpt', 'body', 'category_id'];
    //evitamos que el campo id pueda ser reasignado.
  
    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters)
    { //Post::newQuery()->filter(); this is what it does.
        
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
              $query->where('title', 'like', '%'. $search . '%')
                ->orWhere('body', 'like', '%'. $search . '%')
            )
    );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) => 
                $query->where('slug',$category)));
                
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => 
                $query->where('username',$author)));


                /* esto corresponde a las dos lineas de arriba
            $query
                ->whereExists(fn($query) =>
            $query->from('categories')
                        ->whereColumn('categories.id', 'posts.category_id')
                        ->where('categories.slug', $category))
            ); */
    }
    public function comments() 
    {
        return $this->hasMany(Comment::class); 
    }

    
    //establecemos la relacion con la class category.
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /* este método no lo estoy usando pero podría quitar {post:slug} del rout y este metodo permitiría que
    siguiese funcionando la ruta */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function author() //laravel asume el nombre de los métodos en base al nombre por ejemplo si se llamase
    //el metodo user entendería que se refiere a la clave externa user_id de la BD.
    {
        return $this->belongsTo(User::class, 'user_id'); //belongsTo hacemos referencia a user_id como la clave externa
    }

}
