<?php  
$i=1;
 if(isset($cartt)){
   $total =0;
  foreach($cartt as $value){
    $total = $total + $value['total'];
?>
<tr>
                  <td>
                  <a class="ps-product__preview" href="./productImg/<?php echo $value['id_prode']; ?>"><img class="mr-15" style ="max-width: 40%;" src="images/shoe/<?php echo $value['image'];?>" alt=""><?php echo $value['name'];?></a>
                  </td>
                  <td><?php echo $value['size'];?></td>
                  <td><?php echo number_format($value['total'],3,".",",");?></td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus" onclick="descrease()" value="<?php echo $i;?>" id="tru"><span>-</span></button>
                      <input class="form-control" id="quanity<?php echo $i;?>" type="text" value="<?php echo $value['soluong'];?>">
                      <button class="plus" onclick="crease()" value ="<?php echo $i;?>" id="cong"><span>+</span></button>
                    </div>
                  </td>
                  <td><?php echo number_format($value['soluong']*$value['price']);?></td>
                  <td>
                    <a href="delete/<?php echo $value['id_prode'];?>"><div class="ps-remove"></div></a>
                    <input type="checkbox" name="sp[]" value="<?php echo $value['id_prode'];?>"/>
                  </td>
                </tr>
<?php 
}}?>