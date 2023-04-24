<?php 
  require "../db.conn.php";
  if(isset($_GET["msg_id"])  && !empty($_GET["msg_id"]))
  {
    $msg_id = $_GET["msg_id"];
    $msg = "Message supprimé";
    $req = $conn->prepare("UPDATE chats SET message = '{$msg}' WHERE chat_id = '{$msg_id}' ");
    $req->execute();
    if($req->execute() == true)
    {
        header("Location:".$_SERVER["HTTP_REFERER"]);
    }else
      {
        header("Location:".$_SERVER["HTTP_REFERER"]);
      }
  }else
    {
      header("Location:".$_SERVER["HTTP_REFERER"]);

    }
  

?>