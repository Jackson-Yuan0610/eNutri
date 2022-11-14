
<?php
session_start();
include("include/config.php");
?>

<label for="cars">Choose a car:</label>
<select name="cars" id="cars">
    <?php 
		$sql = "SELECT * FROM voucher";
		$result = mysqli_query($conn, $sql);
					
		if (mysqli_num_rows($result)> 0) {
			//output data of each row
			while($row = mysqli_fetch_assoc($result)) {
			?>
				<option><?php echo $row['voucher_code']; ?></option>
			<?php
			}
		}
		else{
			echo"Sorry, 0 voucher found";
			}		
		?>
</select>
<p> The value of the option selected is: 
        <span class="output"></span>
    </p>
<button onclick="getOption()"> Check </button>
<script type="text/javascript">
    function getOption() {
        selectElement = document.querySelector('#cars');
        output = selectElement.value;
        document.querySelector('.output').textContent = output;
    }
    </script>