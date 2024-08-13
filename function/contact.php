<?php
    function post_is_set(array $post): bool{
        $ispost = false;
        foreach($post as $item){
            if($item !=null){
                $ispost = true;
            } else {
                $ispost = false;
                break;
            }
        }
        return $ispost;
    }
?>