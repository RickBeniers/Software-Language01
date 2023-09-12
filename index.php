<!-- This document is an collection of the task as given during the
college of software language 1 for the Associate degree software development.
the tasks as made in this document are saved by way of VCS github.
this document is meant to be shared with the teachers of the study.

This document is made by Rick Beniers, s1155108. 06-09-2023. -->
<html class="html">
<header class="header">
    <link rel="stylesheet" href="indexStyle.css?ver=1">
</header>
<body class="body">
<div id="Content">
    <?php
    // Single line comment

    /*
     * The different Html element tags are displayed here:
     * -    <HTML>
     * -        <Body>
     * -        <Header>
     * -            <Div>
     * -                <Button></Button>
     * -                <Button></Button>
     * -            </Div>
     * -        <Main>
     * -            <Div>
     * -                <Div>
     * -                    <img>
     * -                    <p>
     * -                </Div>
     * -                    <img>
     * -                    <p>
     * -                <Div>
     * -                    <img>
     * -                    <p>
     * -                </Div>
     * -                <Div>
     * -                    <img>
     * -                    <p>
     * -                </Div>
     * -                <Div>
     * -                    <img>
     * -                    <p>
     * -                </Div>
     * -                <Div>
     * -                    <img>
     * -                    <p>
     * -                </Div>
     * -            </Div>
     * -        </Main>
     * -        <Footer>
     * -        </Footer>
     * -    </HTML>
     */
    //

    function DisplayInfo(){

        //declare and initialise variables
        $voorNaam = "Rick";
        $achterNaam = "Beniers";
        $age = 26;
        $length = 182;
        $relatie = false;
        $dOb = "11-05-1997";
        $email = "Beniersrick@gmail.com";
        $mobiel = "0620297864";
        $werkzaam = "Secretaris bij BoKS";
        $familie = [
            "Gertjan",
            "Martijn",
            "Arenda"
        ];
        $arrayLength = count($familie);

        //if bool relatie equals yes or no change the data type to string
        // and assign specific strings
        if($relatie == true) {
            $relatie = "Yes";
        }else{
            $relatie = "No";
        }

        //print variables in browser
        echo "Naam: ".$voorNaam." <br>".$achterNaam."<br>Leeftijd: ".$age."<br>jaar, geboren op: ".$dOb
            ."<br>heeft een relatie: ".$relatie."<br> lengte: ".$length;
        echo "<br><br>"." -- Personelijke gegevens -- "."<br>"."Email: ".$email."<br> mobiel nummer: "
            .$mobiel."<br> werkt als: ".$werkzaam;

        //loop through the array and print each element in the browser
        for ($i=0; $i < $arrayLength; $i++){
            echo "<br>".$familie[$i];
        }
    }
    //call method
    DisplayInfo();
    ?>
</div>
</body>
<footer class="footer"></footer>
</html>