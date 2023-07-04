<?php
$conn=mysqli_connect('localhost','root','','login');
$q="select * from user";
$res=mysqli_query($conn,$q);
?>
<table border=1 width=100%>
    <tr>
        <th>Sr. No</th>
        <th>Full name</th>
        <th>mobile </th>
        <th>address </th>
        <th>health_issue </th>
        <th>email </th>
        <th>aadhar </th>
        <th>blood_group </th>
    </tr>
<?php
while($r=mysqli_fetch_row($res)){
    echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td></tr>";
}
?>
</table>

	
	
	
	
	
	
