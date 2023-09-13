<!-- This document is an collection of the task as given during the
college of software language 1 for the Associate degree software development.
the tasks as made in this document are saved by way of VCS github.
this document is meant to be shared with the teachers of the study.

This document is made by Rick Beniers, s1155108. 06-09-2023. -->
    <?php
    // Single line comment

    /*
     * Multi line comment
     */
    //

    /**
     * Display the data from ten variables.
     */
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
            $relatie = "Ja";
        }else{
            $relatie = "Nee";
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
    /**
     * Display the data from ten variables.
     */
    function CheckTimeOfDay(){
        //if the time in hours is between 0600 and 1200
        if(date("H") > 06 && date("H") < 12){
            //change background color to light orange
            ?> <style> .contentDiv{background-color: lightsalmon}</style> <?php
        }
        //if the time in  hours is between 1200 and 1700
        if(date("H") > 12 && date("H") < 17){
            //change background color to light blue
            ?> <style> .contentDiv{background-color: lightblue}</style> <?php
        }
        //if the time in hours is between 1700 and 2400
        if(date("H") > 17 && date("H") < 24){
            //change background color to dark grey
            ?> <style> .contentDiv{background-color: darkgray}</style> <?php
        }
    }
    ?>