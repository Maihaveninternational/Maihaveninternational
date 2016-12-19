
<div class="articlesBoxTitle">
	<div class="articlesBoxTitleWords">New on Pinnacle Academy</div>
</div>

<?php 

if($result = $db->query("SELECT * FROM articles")) {
	while($row = $result->fetch_assoc()) {
			echo '<a href="#">';
				echo '<div class="articlesBox">';
    	
       				echo '<div class="articlesImage">';
        				echo '<img src="images/f.jpg" alt="" width="300px" height="200px" />';
        			echo '</div>';
        
        			echo '<div class="articlesTitle">';
						echo $row['title'];
        			echo '</div>';
        
        			echo '<div class="articlesInfo">';
						echo $row['content'];
        			echo '</div>';
    
				echo '</div>';
			echo '</a>';

		}
	}
?>