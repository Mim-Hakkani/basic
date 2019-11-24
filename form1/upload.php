<?php

  if(isset($_POST['submit']))
     {

         $pic = $_FILES['pic'];

          $name =$pic['name'];
          $tmp_name =$pic['tmp_name'];

          $uname=time().rand().$name;

          $ext = explode('.',$name);

          $ext_end=end($ext);

          $extlower=strtolower($ext_end);

          $vanga =md5($uname).'.'.$extlower;

          if (in_array($extlower, ['gif','jpg','jpeg','png'])==false) {
          	echo "Not valid input";
          }
          else
          {
          	 move_uploaded_file ($tmp_name,'image/'. $vanga );
          }
         
     }

?>