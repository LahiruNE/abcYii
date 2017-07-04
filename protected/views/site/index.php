<center>
    <img src="<?php echo Yii::app()->request->baseUrl.'/images/logo.png'?>" style="width:200px;">
    <h1><?php echo Yii::app()->name ?></h1>   

    <table width="100px">
        <tr>
            <td class="left-border" width="330px">
                <center>
                    <h2>Students</h2>
                    <img src="<?php echo Yii::app()->request->baseUrl.'/images/home1.png'?>">
                    <p class="home-text">
                    View student details, Register new studets, Manage student details and etc.
                    </p>
                    <h5 class="buttons"><?php echo CHtml::link('Proceed',array('/student'));?> </h5>
                </center>
            </td>
            <td class="left-border" width="330px">
                <center>
                    <h2>Payments</h2>
                    <img src="<?php echo Yii::app()->request->baseUrl.'/images/home2.png'?>">
                    <p class="home-text">
                    Calculate term fees and Check what students have not payed term fees.
                    </p>
                    <h5 class="buttons"><?php echo CHtml::link('Proceed',array('/payment'));?> </h5>
                </center>                
            </td>
            <td width="330px">
                <center>
                    <h2>Users</h2>
                    <img src="<?php echo Yii::app()->request->baseUrl.'/images/home3.png'?>">
                    <p class="home-text">
                    View admin account details, Add new admins, Manage admins and etc.
                    </p>
                    <h5 class="buttons"><?php echo CHtml::link('Proceed',array('/user'));?> </h5>
                </center>                
            </td>    
        </tr>    
    </table>    
</center>
