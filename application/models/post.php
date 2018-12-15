<?php
class Post extends Model{

    function getPost($pID){
        $sql = 'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name FROM posts p
		INNER JOIN categories c on c.categoryid = p.categoryid
		INNER JOIN users u on u.uid = p.uid
		WHERE p.pID = ?
		';
        $results = $this->db->getrow($sql, array($pID));

        $post = $results;

        return $post;

    }

    public function getUserPosts($uID){

        $sql = 'select * from posts where uID = ?';

        $results = $this->db->execute($sql, $uID);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getCatPosts($cID){

        $sql = 'select * from posts where categoryID = ?';

        $results = $this->db->execute($sql, $cID);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getAllPosts($limit = 0){

        if($limit > 0){

            $numposts = ' LIMIT '.$limit;
        }

        $sql =  'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name FROM posts p
		INNER JOIN categories c on c.categoryid = p.categoryid
		INNER JOIN users u on u.uid = p.uid'.$numposts;

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;

    }

    public function addPost($data){

        $sql='INSERT INTO posts (title,content,categoryID,date,uID) VALUES (?,?,?,?,1)';
        $this->db->execute($sql,$data);
        $message = 'Post added.';
        return $message;

    }

    public function updatePost($data) {

        $sql = 'UPDATE posts SET title = ?, content = ?, categoryID = ?, date = ? where pID = ?';
        $this->db->execute($sql, $data);
        $message = "Post updated.";
        return $message;
    }


    //DELETE Post
    public function deletePost($data){
        $sql='DELETE FROM posts WHERE pID = ?';
        $this->db->execute($sql,$data);
        $message = 'Post Deleted.';
        return $message;
    }

    //COMMENT STUFF

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

    public function getComments($commentID){

        $sql = 'select * from comments where commentID = ?';

        $results = $this->db->execute($sql, $commentID);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;
    }

    //ADD COMMENT
    public function addComment($data){

        $sql='INSERT INTO comments (commentID,commentText,date,uID,pID) VALUES (?,?,?,1,?)';
        $this->db->execute($sql,$data);
        $message = 'Post added.';
        return $message;

    }




    //CATEGORY STUFF
    public function getCategories(){
  		$sql = 'SELECT categoryID,name from categories';
  		$categories2 = array();

  		// perform query
  		$results = $this->db->execute($sql);

  		while ($row=$results->fetchrow()) {
  			$categories[] = $row;
  		}

  		foreach($categories as $array){
  			$categories2[$array['categoryID']]=$array['name'];
  		}

  		$categories = $categories2;
  		return $categories;
  	}

  	public function getCategory($cID){
  		$sql = 'SELECT categoryID, name FROM categories WHERE categoryID=?';
  		$outcome = $this->db->getrow($sql,array($cID));

  		return $outcome;

  		}







}
