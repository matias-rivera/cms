<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Tag;
use App\Category;

use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $author1 = App\User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => Hash::make('password')
        ]);

        $author2 = App\User::create([
            'name' => 'John Doe2',
            'email' => 'john@doe2.com',
            'password' => Hash::make('password')
        ]);

        $category1 = Category::create([
            'name' => 'category1'
        ]);

        $category2 = Category::create([
            'name' => 'category2'
        ]);

        $category3 = Category::create([
            'name' => 'category3'
        ]);

        $category4 = Category::create([
            'name' => 'category4'
        ]);

        $post1 = Post::create([
            'title' => 'El futuro de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
            'user_id' => $author1->id
            
            ]);

        $post2 = $author2->posts()->create([
            'title' => 'El futuro 2 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg'
            
            ]);

        $post3 = $author1->posts()->create([
            'title' => 'El futuro 3 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg'
            
            ]);

        $post4 = $author2->posts()->create([
            'title' => 'El futuro 4 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/4.jpg'
            
            ]);

        $post5 = $author2->posts()->create([
            'title' => 'El futuro 5 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/4.jpg'
            
            ]);

        $post6 = $author2->posts()->create([
            'title' => 'El futuro 6 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/5.jpg'
            
            ]);
        $post7 = $author2->posts()->create([
            'title' => 'El futuro 7 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/4.jpg'
            
            ]);
        $post8 = $author2->posts()->create([
            'title' => 'El futuro 8 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/4.jpg'
            
            ]);
        $post9 = $author2->posts()->create([
            'title' => 'El futuro 9 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/5.jpg'
            
            ]);
        $post10 = $author2->posts()->create([
            'title' => 'El futuro 10 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/5.jpg'
            
            ]);

        $post11 = $author2->posts()->create([
            'title' => 'El futuro 11 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/5.jpg'
            
            ]);

      /*   $post12 = $author2->posts()->create([
            'title' => 'El futuro 12 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/5.jpg'
            
            ]);
        $post13 = $author2->posts()->create([
            'title' => 'El futuro 13 de la cuarentena en la provincia de Buenos Aires: entre la preocupación de Kicillof y las dudas de los intendentes ',
            'description' => 'El gobernador y su equipo junto a los jefes comunales del AMBA definirán en los próximos días nuevas medidas. “Hay que restringir la circ
            ulación de personas solamente a lo básico y lo esencial”, sostuvo la ministra de Gobierno bonaerense, Teresa García, en diálogo con Infobae',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati eius ut mi
            nima sequi, soluta in assumenda eveniet ullam ea ad ipsa similique excepturi animi, debitis nam
            . Architecto, illo doloribus amet odio necessitatibus dolores commodi cum error quisquam. Dicta deserunt
             nam enim tempore alias velit, fuga perferendis quasi! Quibusdam accusamus iusto sit eos, provident velit
              exercitationem hic corporis laudantium debitis aliquam adipisci ab aliquid cum aperi am minima sequi quas?
             Ipsam iste obcaecati, assumenda similique architecto fugiat tempora consequuntur labore dicta.',
            'category_id' => $category2->id,
            'image' => 'posts/5.jpg'
            
            ]); */

        $tag1 = Tag::create([
            'name' => 'tag1'
        ]);
        $tag2 = Tag::create([
            'name' => 'tag2'
        ]);
        $tag3 = Tag::create([
            'name' => 'tag3'
        ]);
        $tag4 = Tag::create([
            'name' => 'tag4'
        ]);

        $post1->tags()->attach([$tag1->id,$tag2->id]);
        $post2->tags()->attach([$tag3->id,$tag2->id]);
        $post3->tags()->attach([$tag4->id,$tag3->id]);
        $post4->tags()->attach([$tag1->id]);


    }
}
