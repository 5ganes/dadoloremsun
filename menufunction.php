<?php
function createMenu($parentId, $groupType)
{
	global $groups;
	global $conn;

	if ($parentId == 0)
		$groupResult = $groups->getByParentIdAndType($parentId, $groupType);	
	else
		$groupResult = $groups->getByParentId($parentId);		

	while($groupRow = $conn->fetchArray($groupResult))
	{	
		echo '<li>';
		?>
    	<a href="<? echo $groupRow['urlname'];?>"><?=$groupRow['name'];?></a>
		<?
		echo "</li>\n";
	}
}
?>