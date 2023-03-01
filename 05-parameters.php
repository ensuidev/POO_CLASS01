<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameters</title>
    <link rel="icon" type="image/x-icon" sizes="128x128" href="./icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[380px] h-[560px] bg-orange-200/10 p-5 rounded-[20px]">
        <header class="flex gap-4 justify-center items-center border-b-4 text-orange-100 border-orange-200 pb-5">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-10 h-10 hover:-translate-x-1 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953l7.108-4.062A1.125 1.125 0 0121 8.688v8.123zM11.25 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953L9.567 7.71a1.125 1.125 0 011.683.977v8.123z" />
                </svg>
            </a>
            <h1 class="text-2xl">05 / Parameters</h1>
        </header>
        <section class="max-h-[460px] text-orange-100 overflow-y-auto my-4">
            <?php
                class Country
                {
                    public $name;

                    public function __construct($name)
                    {
                        $this -> name = $name;
                    }
                }

                class fifaWorldCup
                {
                    private $country;
                    private $year;
                    private $winner;

                    public function __construct($country, $year, $winner = 'Brazil')
                    {
                        $this -> country = $country;
                        $this -> year = $year;
                        $this -> winner = $winner;
                    }

                    public function showEvent()
                    {
                        echo "<ul class='py-2'>
                                <li class='p-2 py-4 rounded-md grid grid-cols-3 gap-2 bg-orange-200/20'>
                                    <span>Country: <span class='font-normal'> ".$this -> country."</span></span>
                                    <span>Year: <span class='font-normal'> ".$this -> year."</span></span>
                                    <span>Winner: <span class='font-normal'> ".$this -> winner."</span></span>
                                </li>
                              </ul>";
                    }
                }

                $country1 = new Country("Italy");
                $worldcup1 = new fifaWorldCup($country1->name, 1990, "Germany");
                $worldcup1 -> showEvent();
                // =====
                $country2 = new Country("USA");
                $worldcup2 = new fifaWorldCup($country2->name, 1994);
                $worldcup2 -> showEvent();
                // =====
                $country3 = new Country("France");
                $worldcup3 = new fifaWorldCup($country3->name, 1998, "France");
                $worldcup3 -> showEvent();
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>

</html>