<?php
	function menuMulti($data,$parent_id=0,$str ='--| ',$selected=0)
	{
		foreach ($data as $key=>$value) {
			$name=$value["name"];
			$id = $value["id"];
			if($value['parent_id']==$parent_id){
				if ($selected == $id) {
					echo '<option value="'.$id.'" selected  >'.$str.$name.'</option>';
				}else{
					echo '<option value="'.$id.'"  >'.$str.$name.'</option>';
				}
				
				menuMulti($data,$id,$str.'--| ');
			}
			
		}	
	}

	

	function menuList($data,$parent_id=0,$str ='--| ')
	{
		foreach ($data as $key=>$value) {
			$name=$value["name"];
			$id = $value["id"];
			if($value['parent_id']==$parent_id){
				echo '
					<tr class="list_data">
		                <td class="aligncenter">1</td>
		                <td class="list_td alignleft">'.$str.$name.' </td>
		                <td class="list_td aligncenter">
		                    <a href="'.'delete/'.$id.'"><img src="../../public/admin/images/edit.png" /></a>
		                    <a href="'.'edit/'.$id.'"><img src="../../public/admin/images/edit.png" /></a>
		                </td>
		            </tr>
				';

				menuList($data,$id,$str.'--| ');
			}
			
		}
		
	}
?>