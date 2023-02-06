<?php
function afis_produs($nume_prod,$pret_prod,$prod_img,$prod_id){
    $element="
    <div class=\"block_products\">
        <div class=\"one_product\">
            <form action=\"fructe.php\" method=\"post\">
                <img  src=\"img/$prod_img\">
            <div class=\"buy\">
                   <button type='submit' class=\"btn\" name=\"btn\">Adauga in cos</button>
                   <input type='hidden' name='id_product' value='$prod_id'>
            </div>
            </form>
            </div>
            <div class=\"detail-box\">
        <div class=\"type\">
            <h3>$nume_prod</h3>
        </div >
        <h3 class=\"price\">$pret_prod MDL</h3>
        
</div>  

    </div>
   
		
    ";
    echo $element;
}
function afis_in_tabel($nume_prod,$pret_prod,$prod_id){
    $element="
    <TABLE BORDER=\"5\"    WIDTH=\"50%\"   CELLPADDING=\"4\" CELLSPACING=\"3\">
    </TR>
    <TR>
       <TH>ID</TH> 
       <TH>Nume Produs</TH>
       <TH>Pret</TH>
    </TR>
    <TR ALIGN=\"CENTER\">
       <TD>$prod_id</TD>
       <TD>$nume_prod</TD>
       <TD>$pret_prod</TD>
    </TR>
 </TABLE>
 ";
    echo $element;
}





function CosElemente($prod_img,$nume_prod,$pret_prod,$prod_id)
{ $element="
    <form action=\"cos.php?action=remove&id=$prod_id\" method=\"post\"> 
    <table class=\"cos-tabel\">
    
        <tr>
            <td class=\"td-cos\">
                <div class=\"cos-info\">
                            <img class=\"cos-img\"src=\"img/$prod_img\">
                            <div>
                                <p>$nume_prod</p>
                                <h3 class=\"price\">$pret_prod MDL</h3><br>
                                <button class=\"cos-sterge\" name='sterge'>Sterge din cos</button>
                            </div>
        
                        </div>
                    </td>
                    <td><input class=\"input-cos\"type=\"number\"value=1 ></td>
                    <td>$pret_prod MDL</td>
                </tr>
            </table>
</form>
    ";
echo $element;
}
?>