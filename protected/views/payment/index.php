<?php
/* @var $this PaymentController */
$this->breadcrumbs=array(
	'Fee Calculation',
);

$this->menu=array(
	array('label'=>'Payment Arrears', 'url'=>array('arrears')),
);
?>
<h1>Fee Calculation</h1>
<div style="font-size:18px;color:#333;">
	Calculate term fees using student ID
</div>
<br />

<?php $this->renderPartial('_form', array('model'=>$model));?>

<div class="invoice-box">
	<center>	
		<?php 
		if($this->empty){ ?>
			<div class="errorMessage">
				<?php echo $this->empty;?>
			</div>
		<?php }else if($this->wrong){?>
			<div class="errorMessage">
				<?php echo $this->wrong;?>
			</div>
		<?php }else if (isset($this->resultsArray)){?>
			<div>
				<table cellspacing="0" cellpadding="1" border="1">
					<tr>
						<th colspan="4" style="background-color:#999999"><b>Fee Details</b></th>
					</tr>    
					<tr>
						<td style="background-color:#e5e3e3"><b>Stdent ID</b></td>
						<td><?php echo $this->resultsArray['stuId']?></td>
						<td style="background-color:#e5e3e3"><b>Grade</b></td>
						<td><?php echo $this->resultsArray['grade']?></td>
					</tr>
					<tr>
						<td style="background-color:#e5e3e3"><b>Student\'s Name</b></td>
						<td><?php echo $this->resultsArray['firstName']?> <?php echo $this->resultsArray['lastName']?></td>
						<td style="background-color:#e5e3e3"><b>Fee Arrears</b></td>
						<td><?php if($this->resultsArray['paidStatus']=='0'){
							echo "Yes";
						}else{
							echo "No";
						} ?></td>
					</tr>
					<tr>
						<td style="background-color:#e5e3e3"><b>Term Fee</b></td>
						<td colspan="3">Rs.<?php echo $this->resultsArray['termFee']?>.00</td>
					</tr>
					
				</table>		
			</div>
		<?php }?>
	
	
	
	</center>
</div>

