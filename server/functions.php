<?php
/****************************************************************************** */
// newLetter ----------- BEGIN
function esc($data){
    $escData = mysqli_real_escape_string($GLOBALS['conn'], $data);
    return $escData;
}
/****************************************************************************** */
/****************************************************************************** */
/**/  function insertNewsLetter($eMail){                                      /**/
/**/      $save = $GLOBALS['conn']->query("INSERT INTO beautypala.newsletter  /**/
/**/                               (newsletteremail) VALUES ('$eMail')");     /**/
/**/      return $save;                                                       /**/
/**/  }                                                                       /**/
/****************************************************************************** */
function checkNewLetterEmail($email){
    $email = esc($email);
    $checkEmail = $GLOBALS['conn']->query("
                SELECT newsletteremail from beautypala.newsletter 
                where newsletteremail = '$email'");
    if($checkEmail->num_rows > 0){
        $msg = "You're already subscribed to Our newsLetter";
    }else{
        insertNewsLetter($email);
        $msg = "Successfully subscribed to our newsletter";
    }
    return $msg;
}
/**********************************************************************************************************/
/**********************************************************************************************************/
// newLetter ----------- END                                                                            /**/
/**/ function contactUs($name, $eMaIl, $msg){                                                           /**/
/**/     esc($name);esc($eMaIl);esc($msg);                                                              /**/
/**/     if(empty($name)){$name = "User";}                                                              /**/
/**/         if(!empty($eMaIl)){                                                                        /**/
/**/             if(!empty($msg)){                                                                      /**/
/**/                 $con = $GLOBALS['conn']->query("INSERT INTO beautypala.contact (name, email, msg)  /**/
/**/                                          VALUES('$name', '$eMaIl', '$msg')");                      /**/
/**/                     if($con){$e = "Message sent";}                                                 /**/
/**/                 else{$e = "failed to contact, Try again Later";}}                                  /**/
/**/             else{$e = "Can't send Empty Message";}}                                                /**/
/**/         else{$e = "Emailrequired";}                                                                /**/
/**/    return $e;                                                                                      /**/
/**/ }                                                                                                  /**/
// Contact BEgin                                                                                        /**/
/**********************************************************************************************************/
/******************************************************************************************************** */


