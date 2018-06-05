<?php
if(isset($_POST['submit']))
{
        $pic = rand(1000,100000)."-".$_FILES['postImg']['name'];
        $pic_loc = $_FILES['postImg']['tmp_name'];
        $folder="uploaded-pics/";
        if(move_uploaded_file($pic_loc,$folder.$pic))
        {
            ?><script>alert('Imagem enviada!');</script><?php
        }
        else
        {
            ?><script>alert('Erro ao enviar a imagem :/');</script><?php
} 
}
?>