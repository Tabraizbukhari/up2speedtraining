<?
include("macros.php");
$con=connectmysql();
writeheader($con);
?>
<b>Step 1:</b> Click the body region (on the left) to see the complaints associated with that region.<br>
<b>Step 2:</b> Select one or more complaints (listed below) and click "Add" button to add it.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(Hold down 'ctrl' to select multiple)<br>
<b>Step 3:</b> Complete the Status, Orientation, etc. info for each complaint.<br>
<b>Step 4:</b> Click "Save/Next" to Save and go to next page.<br>
<?
writecloser();
?>