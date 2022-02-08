<?php

//I know the file name is different from the class names, but it's just for displaying the use of the final keyword

final class Universitate {
    final function hello(){

    }
}


class Profesor extends Universitate {
    //cannot extend since the Universtate class is set as final

    function hello(){
        //cannot override since the hello() from parent class is set as final
    }
}
