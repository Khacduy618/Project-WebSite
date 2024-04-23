<?php
    function loadall_banner(){
        $sql="select * from banner where 1 order by id desc";
        $dsbanner=pdo_query($sql);
        return $dsbanner;
    }
    function insert_banner($title,$content,$file){
        $sql= "insert into banner(title, content, thumbnail) values('$title','$content','$file')";
        pdo_execute($sql);
    }
    function delete_banner($id){
        $sql="delete from banner where id=".$id;
        pdo_execute($sql);
    }
    function loadone_banner($id){
        $sql="select * from banner where id=".$id;
        $banner=pdo_query_one($sql);
        return $banner;
    }
    function update_banner($id, $title, $content, $hinh){
        if($hinh!="")
            $sql= "update banner set  id='".$id."',title='".$title."',content='".$content."',thumbnail='".$hinh."' where id=".$id;
        else
            $sql= "update banner set  id='".$id."',title='".$title."',content='".$content."' where id=".$id;
        pdo_execute($sql);
    }
?>