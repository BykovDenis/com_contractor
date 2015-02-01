<?php 
defined('_JEXEC') or die("Restricted access"); 

?>


<form action="index.php" method="post"  name="adminForm">
    <h3 style="text-align: center;">Аптечные сети Курской области</h3>
    <table class="adminlist">
        <thead>
            <tr>
                <th width="200">Наименование</th>                
                <th width="200">Наименование</th>                
                <th width="200">Наименование</th>                				
            </tr>
        </thead>
        <?php
        $k = 0; 
        $j = 0;
        for($i=0, $n = count($this->items); $i<$n; $i++):        
            $row = $this->items[$i];   
        
        if($j % 3 === 0): ?> 
        <tr class="<?php echo "row$k"; ?>">
        <?php endif;  ?> 
        <td>
            <!--  статические адреса -->
            <!--a href="<?=  JUri::current(); ?>?option=com_drugstories&contractor_id=<?=$row->contractor_id;?>"><?php echo $row->name; ?></a-->        
            <!-- включаем ЧПУ адреса -->
            <a href="<?php echo JRoute::_('index.php?option=com_drugstories&id='.$row->contractor_id); ?>"><?php echo $row->name; ?></a>              
        </td>  
        <?php  if($j+4 % 3 === 0): ?>
        </tr>
        <?php 
        endif;
        $k = 1-$k;
        $j++;
        endfor;
        ?>
    </table>
    
    <input type="hidden" name="option" value="com_contractor" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecker" value="0" />
    
    <?php echo JHtml::_('form.token'); ?>        
   
</form>
