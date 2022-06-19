<?php
   
    include "logic.php";
  
?>



    

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        
            <a href="create.php">+ Create a new post</a>
       

        <!-- Display posts from database -->
       
        <?php if (is_array($query) || is_object($query))
        { ?>
            <?php foreach($query as $q){ ?>
                
                            <h5 ><?php echo $q['title'];?></h5>
                            <img src="<?php echo $set->url;?>/blog/image/<?php echo $q['filename']?>" />
                            <p ><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                       
                   
            <?php }?>
        <?php }?>
        





