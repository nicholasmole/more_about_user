<table class="widefat fixed" cellspacing="0">
  <thead>
    <tr>
      <th id="cb" class="manage-column column-cb check-column" scope="col"></th>
      <th id="columnname" class="manage-column column-columnname" scope="col">User Name</th>
      <th id="columnname" class="manage-column column-columnname" scope="col">User Created Date</th>
    </tr>
  </thead>

  <tfoot>
    <tr>
      <th class="manage-column column-cb check-column" scope="col"></th>
      <th class="manage-column column-columnname" scope="col">User Name</th>
      <th class="manage-column column-columnname" scope="col">User Created Date</th>
    </tr>
  </tfoot>

  <tbody>
    <?php
      $alternatingColumnValue = 0;
      $columnClass = 'alternate';
      foreach ( $blogusers as $user ) { 
        $alternatingColumnValue = $alternatingColumnValue == 0 ? 1 : 0;
        $columnClass = $alternatingColumnValue == 0 ? 'alternate' : 'check-column';
    ?>
      <tr class='<?php echo $columnClass ?>'>
        <th class="check-column" scope="row"></th>
        <td class="column-columnname"><?php echo $user->user_email ?></td>
        <td class="column-columnname"><?php echo $user->user_registered ?></td>
      </tr>
    <?php
      }
    ?>
  </tbody>
</table>