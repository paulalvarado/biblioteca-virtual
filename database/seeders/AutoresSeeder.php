<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autores;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Autores
        $autores = [
            [
                'nombre_autor' => 'Isabel Allende',
                'nacionalidad' => 'Chilena',
                'estado' => 1,
                'biografia' => 'Isabel Allende Llona (Lima, 2 de agosto de 1942) es una escritora chilena, miembro de la Academia Estadounidense de las Artes y las Letras desde 2004. Ha vendido más de 74 millones de ejemplares y su trabajo ha sido traducido a más de 42 idiomas. Es considerada la escritora viva de lengua española más leída del mundo.',
            ],
            [
                'nombre_autor' => 'Paul Auster',
                'nacionalidad' => 'Estadounidense',
                'estado' => 1,
                'biografia' => 'Paul Benjamin Auster (Newark, 3 de febrero de 1947) es un escritor, guionista y director de cine estadounidense. Ha publicado más de una docena de novelas, así como ensayos y traducciones. Su trabajo es conocido por su estilo postmodernista y por abordar temas de identidad, búsqueda de sentido y existencialismo.',
            ],
            [
                'nombre_autor' => 'Dan Brown',
                'nacionalidad' => 'Estadounidense',
                'estado' => 1,
                'biografia' => 'Daniel Gerhard Brown (Exeter, Nuevo Hampshire; 22 de junio de 1964) es un escritor, profesor y conferencista estadounidense conocido por sus novelas de misterio y suspenso, en particular por la serie protagonizada por Robert Langdon. Sus libros han vendido más de 220 millones de copias en todo el mundo.',
            ],
            [
                'nombre_autor' => 'Truman Capote',
                'nacionalidad' => 'Estadounidense',
                'estado' => 1,
                'biografia' => 'Truman García Capote (Nueva Orleans, 30 de septiembre de 1924 - Los Ángeles, 25 de agosto de 1984) fue un escritor, guionista y actor estadounidense. Es conocido por su estilo distintivo y su habilidad para combinar la narrativa periodística con elementos literarios en sus obras.',
            ],
            [
                'nombre_autor' => 'Agatha Christie',
                'nacionalidad' => 'Británica',
                'estado' => 1,
                'biografia' => 'Agatha Mary Clarissa Christie (Torquay, 15 de septiembre de 1890 - Wallingford, 12 de enero de 1976) fue una escritora británica de novelas policíacas y de misterio. Es conocida como "la Reina del Crimen" y sus obras, que incluyen a personajes como Hercule Poirot y Miss Marple, son populares en todo el mundo.',
            ],
            [
                'nombre_autor' => 'Charles Darwin',
                'nacionalidad' => 'Británico',
                'estado' => 1,
                'biografia' => 'Charles Robert Darwin (Shrewsbury, 12 de febrero de 1809 - Down House, 19 de abril de 1882) fue un naturalista, geólogo y biólogo británico, reconocido por su contribución a la teoría de la evolución. Su obra más conocida es "El origen de las especies", en la que propuso la teoría de la selección natural.',
            ],
            [
                'nombre_autor' => 'Charles Dickens',
                'nacionalidad' => 'Británico',
                'estado' => 1,
                'biografia' => 'Charles John Huffam Dickens (Portsmouth, 7 de febrero de 1812 - Gad\'s Hill Place, 9 de junio de 1870) fue un novelista británico considerado uno de los más grandes de la literatura universal. Sus obras, que a menudo critican la injusticia social, han dejado un impacto duradero en la literatura y la sociedad.',
            ],
            [
                'nombre_autor' => 'Fiódor Dostoievski',
                'nacionalidad' => 'Ruso',
                'estado' => 1,
                'biografia' => 'Fiódor Mijáilovich Dostoievski (Moscú, 11 de noviembre de 1821 - San Petersburgo, 9 de febrero de 1881) fue un novelista y filósofo ruso. Sus obras exploran la psicología humana en profundidad y abordan temas de moralidad, existencialismo y espiritualidad. Es conocido por obras como "Crimen y castigo" y "Los hermanos Karamázov".',
            ],
            [
                'nombre_autor' => 'Umberto Eco',
                'nacionalidad' => 'Italiano',
                'estado' => 1,
                'biografia' => 'Umberto Eco (Alessandria, 5 de enero de 1932 - Milán, 19 de febrero de 2016) fue un escritor, filósofo y semiólogo italiano. Es conocido por su novela "El nombre de la rosa", que combina intriga detectivesca con debates filosóficos y religiosos. Fue un erudito versátil y un influyente pensador contemporáneo.',
            ],
            [
                'nombre_autor' => 'William Faulkner',
                'nacionalidad' => 'Estadounidense',
                'estado' => 1,
                'biografia' => 'William Cuthbert Faulkner (New Albany, 25 de septiembre de 1897 - Byhalia, 6 de julio de 1962) fue un novelista y cuentista estadounidense. Su estilo literario es conocido por su complejidad y experimentación con la narrativa. Ganó el Premio Nobel de Literatura en 1949 y es considerado uno de los grandes escritores del siglo XX.',
            ],
            [
                'nombre_autor' => 'Gabriel García Márquez',
                'nacionalidad' => 'Colombiano',
                'estado' => 1,
                'biografia' => 'Gabriel José de la Concordia García Márquez (Aracataca, 6 de marzo de 1927 - Ciudad de México, 17 de abril de 2014) fue un escritor, novelista, cuentista, guionista y periodista colombiano. Es conocido por su estilo de realismo mágico y su obra más famosa, "Cien años de soledad", es considerada una de las obras cumbre de la literatura universal.',
            ],
            [
                'nombre_autor' => 'James Joyce',
                'nacionalidad' => 'Irlandés',
                'estado' => 1,
                'biografia' => 'James Augustine Aloysius Joyce (Dublín, 2 de febrero de 1882 - Zúrich, 13 de enero de 1941) fue un novelista, poeta y cuentista irlandés. Es conocido por su obra "Ulises", que es considerada una de las obras literarias más influyentes del siglo XX. Su estilo literario experimentador ha dejado un impacto duradero en la literatura moderna.',
            ],
            [
                'nombre_autor' => 'Franz Kafka',
                'nacionalidad' => 'Austrohúngaro',
                'estado' => 1,
                'biografia' => 'Franz Kafka (Praga, 3 de julio de 1883 - Kierling, 3 de junio de 1924) fue un escritor de origen judío nacido en el Imperio Austrohúngaro. Sus obras, como "La metamorfosis" y "El proceso", exploran temas de alienación, burocracia y la lucha del individuo contra poderes desconocidos. Su estilo y visión únicos han influido en la literatura moderna.',
            ],
            [
                'nombre_autor' => 'Stephen King',
                'nacionalidad' => 'Estadounidense',
                'estado' => 1,
                'biografia' => 'Stephen Edwin King (Portland, 21 de septiembre de 1947) es un escritor estadounidense conocido por sus novelas de terror y suspenso. Ha publicado más de 60 libros, muchos de los cuales se han convertido en éxitos de ventas y han sido adaptados al cine y la televisión. Es considerado uno de los autores más influyentes en su género.',
            ],
        ];

        foreach ($autores as $autor) {
            Autores::create($autor);
        }
    }
}
