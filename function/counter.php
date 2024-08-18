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

    function add_view_per_month(){
        $counter = 1;
        $filePerMonth = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter-' . date('Y-m-d');
        if(file_exists($filePerMonth)){
            $counter = (int)file_get_contents($filePerMonth);
            $counter++;
        } 
        file_put_contents($filePerMonth, $counter); 
        return file_get_contents($filePerMonth); 
    }

    function  number_views_per_year(int $year): int{
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter-' . $year . '-' . '*-*';
        $files = glob($file);
        $total =  0;
        foreach($files as $item){
            $total += (int)file_get_contents($item);
        }
        return $total;

    }
    function  number_views_per_month(int $year, string $month): int{
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter-' . $year . '-' . $month . '-*';
        $files = glob($file);
        $total =  0;
        foreach($files as $item){
            $total += (int)file_get_contents($item);
        }
        return $total;

    }