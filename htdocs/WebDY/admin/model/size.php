<?php
    function insert_sizec($size){
        $sql= "insert into size(size) values('$size')";
        pdo_execute($sql);
    }
    function loadall_size(){
        $sql="select * from size order by maSize asc";
        $listdm=pdo_query($sql);
        return $listdm;
    }
    function loadone_size($maSize){
        $sql="select * from size where maSize=".$maSize;
        $dm=pdo_query_one($sql);
        return $dm;
    }
?>