<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extends</title>
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
            <h1 class="text-2xl">06 / Extends</h1>
        </header>
        <section class="max-h-[460px] text-orange-100 overflow-y-auto my-4">
            <?php
            // PARENT CLASS
                class Operation {
                    protected $number1;
                    protected $number2;

                    public function __construct($number1, $number2)
                    {
                        $this -> number1 = $number1;
                        $this -> number2 = $number2;
                    }
                }

                // CHILD CLASS
                class Addition extends Operation 
                {
                    public function showResults()
                    {
                        return "<p class='p-4 rounded-md bg-orange-200/20 mb-4'>
                                    The Addition is: <span class='font-normal'>".($this->number1 + $this->number2)."</span>
                                </p>";
                    }
                }

                class Subtraction extends Operation 
                {
                    public function showResults()
                    {
                        return "<p class='p-4 rounded-md bg-orange-200/20 mb-4'>
                                    The Subtraction is: <span class='font-normal'>".($this->number1 - $this->number2)."</span>
                                </p>";
                    }
                }

                class Product extends Operation 
                {
                    public function showResults()
                    {
                        return "<p class='p-4 rounded-md bg-orange-200/20 mb-4'>
                                    The Product is: <span class='font-normal'>".($this->number1 * $this->number2)."</span>
                                </p>";
                    }
                }

                class Division extends Operation
                {
                    public function showResults()
                    {
                        return "<p class='p-4 rounded-md bg-orange-200/20 mb-4'>
                                    The Division is: <span class='font-normal'>".($this->number1 / $this->number2)."</span>
                                </p>";
                    }
                }

                class Pow extends Operation
                {
                    public function showResults()
                    {
                        return "<p class='p-4 rounded-md bg-orange-200/20 mb-4'>
                                    The Pow is: <span class='font-normal'>".($this->number1 ** $this->number2)."</span>
                                </p>";
                    }
                }

                $operation1 = new Addition(64, 256);
                echo $operation1 -> showResults();

                $operation2 = new Subtraction(512, 64);
                echo $operation2 -> showResults();

                $operation3 = new Product(512, 64);
                echo $operation3 -> showResults();

                $operation4 = new Division(1024, 32);
                echo $operation4 -> showResults();

                $operation5 = new Pow(4, 6);
                echo $operation5 -> showResults();
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>

</html>