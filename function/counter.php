<?php 
    function add_view(): string {
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter';
        $counter = 1;
        if(file_exists($file)){
            $counter = (int)file_get_contents($file);
            $counter++;
        } 
        file_put_contents($file, $counter); 
        return file_get_contents($file);   
    }

    function view(): void{
        
    }