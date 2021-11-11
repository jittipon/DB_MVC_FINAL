<table border = 1>

    new hospital<a href="?controller=hospital&action=new"> click </a><br>

    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="hospital"/>
        <button type="submit" name="action" value="search"> Search</button>
    </form>

    <tr>
    <td> Hospital_Id </td>
    <td> Hospital_Name </td>
    <td> Hospital_Address </td>
    <td> Hospital_Phone </td>
    <td> District_Name </td>
    <td> Amphure_Name </td>
    <td> Province_Name </td>
    <td> update </td>
    <td> delete </td>
    </tr>
    <?php foreach( $Hospital_list as $Hospital ) {
        echo "<tr>
        <td> $Hospital->Hospital_Id </td>
        <td> $Hospital->Hospital_Name </td>
        <td> $Hospital->Hospital_Address </td>
        <td> $Hospital->Hospital_Phone </td> 
        <td> $Hospital->District_Name </td> 
        <td> $Hospital->Amphure_Name </td> 
        <td> $Hospital->Province_Name </td> 
        <td> <a href=?controller=hospital&action=edit&Hospital_Id=$Hospital->Hospital_Id>update</a> </td>
        <td> <a href=?controller=hospital&action=deleteConfirm&Hospital_Id=$Hospital->Hospital_Id>delete</a> </td> </tr>"; 
    }

    echo "</table>";
?>