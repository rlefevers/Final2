<?php
class Comment extends Model{

  function getComment($commentID){
      $sql = 'SELECT c.commentID, c.uID, c.commentText, c.date, c.postID, FROM comments c
  INNER JOIN posts p on p.pid = c.commentid
  INNER JOIN users u on u.uid = c.uid
  WHERE c.commentID = ?
  ';
      $results = $this->db->getrow($sql, array($commentID));

      $comment = $results;

      return $comment;

  }

    public function getUserComments($uID){

        $sql = 'select * from comments where uID = ?';

        $results = $this->db->execute($sql, $uID);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;
    }

    public function addPost($data){

        $sql='INSERT INTO posts (title,content,categoryID,date,uID) VALUES (?,?,?,?,1)';
        $this->db->execute($sql,$data);
        $message = 'Post added.';
        return $message;

    }

    public function updatePost($data) {

        $sql = 'UPDATE posts SET (title,content,categoryID,date,uID) VALUES (?,?,?,?,1)';
        $this->db->execute($sql, $data);
        $message = "Post updated.";
        return $message;
    }

    //DELETE
    public function deleteComment($data) {

        $sql = 'DELETE comment WHERE commentID = commentID';
        $this->db->execute($sql, $data);
        $message = "Comment deleted.";
        return $message;
    }

    //COMMENT STUFF

    public function getComments($commentID){

        $sql = 'select * from comments where commentID = ?';

        $results = $this->db->execute($sql, $commentID);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;
    }








}
