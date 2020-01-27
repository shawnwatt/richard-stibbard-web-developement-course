<?php

require_once 'php-includes/head.inc.php';
require_once 'php-includes/header.inc.php';
require_once 'php-includes/navigation.inc.php';

?>

      
        <section class="admin">
            <div class="admin_users">
                <h2>Manage users</h2>
                <table class="admin_table">
                    <tr>
                        <th class="data_col">Firstname</th>
                        <th class="data_col">Lastname</th>
                        <th class="admin_col">Insert/Delete</th>
                    </tr>
                    <tr class="datarow">
                        <td><input class="data" type="text" name="firstname" value="Albert"></td>
                        <td><input class="data" type="text" name="lastname" value="Smith"></td>
                        <td class="deletecell"><div class="delete"></div></td>
                    </tr>
                    <tr class="datarow">
                        <td><input class="data" type="text" name="firstname" value="John"></td>
                        <td><input class="data" type="text" name="lastname" value="Tomkins"></td>
                        <td class="deletecell"><div class="success"></div></div></td>
                    </tr>
                    <tr class="newdatarow">
                        <td><input class="newdata" type="text" name="firstname" value=""></td>
                        <td><input class="newdata" type="text" name="lastname" value=""></td>
                        <td class="insertcell"><div class="insert"></div></div></td>
                    </tr>                
                </table>
            </div>
        </section>
       
        <?php
            require_once 'php-includes/footer.inc.php';
        ?>