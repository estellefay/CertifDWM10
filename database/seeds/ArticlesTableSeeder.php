<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'name' => 'guitard Electrique',
                'reference' => 'LESS-67',
                'description' => 'Cupcake ipsum dolor sit amet jelly beans liquorice ch',
                'price' => 445,
                'amount' => 54,
                'type_id' => 2,
                'image' => 'https://www.media-rdc.com/medias/ff9dd4b420c836ecad92ce180f468ade/p_300x300/guitaxmetal1.jpg',
            ],
            [
                'name' => 'Guitare Acoustique',
                'reference' => 'GUIT-AC-32',
                'description' => 'Cupcake ipsum dolor sit amet jelly beans liquorice chocolate bar toffee. Wafer bear claw pudding soufflé sesame snaps fupcake oat cake lollipop brownie tootsie roll. Cake gummi bears jelly bonbon fruitcake.',
                'price' => 3445,
                'amount' => 8,
                'type_id' => 1,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/GuitareClassique5.png',
    
            ],
            [
                'name' => 'Lesson Guitard 2h',
                'reference' => 'LESS-67',
                'description' => 'Cupcake ipsum dolor sit amet jelly beans liquorice chocolate bar toffee. Wafer bear claw pudding soufflé sesame snaps fruitcake apple pie jelly. Lollipop biscuit fruitcake pastry cakers jelly bonbon fruitcake.',
                'price' => 445,
                'amount' => 54,
                'types_id' => 2,
                'image' => 'https://static1.squarespace.com/static/59b30243f9a61eed0e915942/t/5a715d45652deacdc86b403b/1517378931193/I.R.+Guitar+Lessons+-+Bay+Area+Guitar+Lessons?format=500w',
    
            ],
            [
                'name' => 'Bon cadeau 200€',
                'reference' => 'BC-24',
                'description' => 'Cupcake ipsum dolor sit amet jollipop brownie tootsie roll. Cake gummi bears jelly bonbon fruitcake.',
                'price' => 200,
                'amount' => 46,
                'type_id' => 3,
                'image' => 'https://www.leschaletsduboisdelapause.com/wp-content/uploads/2016/09/bon-cadeau-specimen.jpg',
    
            ],
            [
                'name' => 'Corde guitard',
                'reference' => 'ACCS-AC-87',
                'description' => 'Cupcake ipsum dolor sit ameting soufflé sesame snaps fruitcake apple pie jelly. Lollipop biscuit fruitcake pastry cake lollipop bear claw. Cupcake oat cake lollipop brownie tootsie roll. Cake gummi bears jelly bonbon fruitcake.',
                'price' => 20,
                'amount' => 346,
                'type_id' => 4,
                'image' => 'https://image.dhgate.com/0x0s/f2-albu-g5-M01-3A-F5-rBVaJFiatemAbxMxAAYZuqKLnW4274.jpg/amola-010-011-012-cordes-de-guitare-acoustique.jpg',
    
            ],

        ]);
    }
}
