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
                'name' => 'guitard',
                'reference' => 'LESS-67',
                'description' => 'Cupcake ipsum dolor sit amet jelly beans liquorice ch',
                'price' => 445,
                'amount' => 54,
                'type_id' => 2,
                'image' => 'https://cdn.pixabay.com/photo/2016/11/18/19/55/guitar-1836655_960_720.jpg',
            ],
            [
                'name' => 'Guitare Acoustique',
                'reference' => 'GUIT-AC-32',
                'description' => 'Cupcake ipsum dolor sit amet jelly beans liquorice chocolate bar toffee. Wafer bear claw pudding soufflé sesame snaps fruitcake apple pie jelly. Lollipop biscuit fruitcake pastry cake lollipop bear claw. Cupcake oat cake lollipop brownie tootsie roll. Cake topping jelly-o cheesecake cookie brownie. Tootsie roll marshmallow tiramisu cheesecake cake macaroon. Muffin lollipop sugar plum liquorice jujubes caramels cupcake pudding. Lemon drops tart sugar plum powder lemon drops gummi bears biscuit. Brownie dragée lollipop. Brownie tootsie roll halvah chocolate cake danish marzipan apple pie lemon drops. Sweet roll macaroon topping tart apple pie. Fruitcake sweet carrot cake oat cake gummi bears jelly bonbon fruitcake.',
                'price' => 3445,
                'amount' => 8,
                'type_id' => 1,
                'image' => 'https://cdn.pixabay.com/photo/2016/11/18/19/55/guitar-1836655_960_720.jpg',
    
            ],
            [
                'name' => 'Lesson Guitard 2h',
                'reference' => 'LESS-67',
                'description' => 'Cupcake ipsum dolor sit amet jelly beans liquorice chocolate bar toffee. Wafer bear claw pudding soufflé sesame snaps fruitcake apple pie jelly. Lollipop biscuit fruitcake pastry cake lollipop bear claw. Cupcake oat cake lollipop brownie tootsie roll. Cake topping jelly-o cheesecake cookie brownie. Tootsie roll marshmallow tiramisu cheesecake cake macaroon. Muffin lollipop sugar plum liquorice jujubes caramels cupcake pudding. Lemon drops tart sugar plum powder lemon drops gummi bears biscuit. Brownie dragée lollipop. Brownie tootsie roll halvah chocolate cake danish marzipan apple pie lemon drops. Sweet roll macaroon topping tart apple pie. Fruitcake sweet carrot cake oat cake gummi bears jelly bonbon fruitcake.',
                'price' => 445,
                'amount' => 54,
                'types_id' => 2,
                'image' => 'https://cdn.pixabay.com/photo/2015/09/19/01/05/country-946706_960_720.jpg',
    
            ],
            [
                'name' => 'Bon cadeau 200€',
                'reference' => 'BC-24',
                'description' => 'Cupcake ipsum dolor sit amet jelly beans liquorice chocolate bar toffee. Wafer bear claw pudding soufflé sesame snaps fruitcake apple pie jelly. Lollipop biscuit fruitcake pastry cake lollipop bear claw. Cupcake oat cake lollipop brownie tootsie roll. Cake topping jelly-o cheesecake cookie brownie. Tootsie roll marshmallow tiramisu cheesecake cake macaroon. Muffin lollipop sugar plum liquorice jujubes caramels cupcake pudding. Lemon drops tart sugar plum powder lemon drops gummi bears biscuit. Brownie dragée lollipop. Brownie tootsie roll halvah chocolate cake danish marzipan apple pie lemon drops. Sweet roll macaroon topping tart apple pie. Fruitcake sweet carrot cake oat cake gummi bears jelly bonbon fruitcake.',
                'price' => 200,
                'amount' => 46,
                'type_id' => 3,
                'image' => 'https://cdn.pixabay.com/photo/2014/12/01/19/23/gift-553149_960_720.jpg',
    
            ],
            [
                'name' => 'Corde guittard acoustique',
                'reference' => 'ACCS-AC-87',
                'description' => 'Cupcake ipsum dolor sit amet jelly beans liquorice chocolate bar toffee. Wafer bear claw pudding soufflé sesame snaps fruitcake apple pie jelly. Lollipop biscuit fruitcake pastry cake lollipop bear claw. Cupcake oat cake lollipop brownie tootsie roll. Cake topping jelly-o cheesecake cookie brownie. Tootsie roll marshmallow tiramisu cheesecake cake macaroon. Muffin lollipop sugar plum liquorice jujubes caramels cupcake pudding. Lemon drops tart sugar plum powder lemon drops gummi bears biscuit. Brownie dragée lollipop. Brownie tootsie roll halvah chocolate cake danish marzipan apple pie lemon drops. Sweet roll macaroon topping tart apple pie. Fruitcake sweet carrot cake oat cake gummi bears jelly bonbon fruitcake.',
                'price' => 20,
                'amount' => 346,
                'type_id' => 4,
                'image' => 'https://cdn.pixabay.com/photo/2015/07/31/15/01/guitar-869217_960_720.jpg',
    
            ],

        ]);
    }
}
