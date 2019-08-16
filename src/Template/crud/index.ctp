
<h2>View All Posts </h2>
<?php echo $this->Flash->render('message');?>
<div class="row">

<?php echo $this->Html->link('ADD NEW PERSON',['action'=>'add'],['class'=> 'btn btn-primary']);?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($crud)):?>
  <?php foreach($crud as $cruds):?>
    <tr class="table-active">
      <td><?php echo $cruds->Name ;?></td>
      <td><?php echo $cruds->Address ;?></td>
      <td>
      <?= $this->Html->link('View', ['action' => 'view', $cruds->Id],['class'=>'btn btn-primary']) ;?>
      </td>
      <td>
      <?= $this->Html->link('Edit', ['action' => 'edit', $cruds->Id],['class'=>'btn btn-success']) ;?>
      </td>
      <td>
      <?= $this->Form->postlink('Delete', ['action' => 'delete', $cruds->Id],['class'=>'btn btn-danger'],['confirm'=>'Are you sure?']);?>
      </td>
    </tr>
  <?php endforeach ;?>
  <?php else:?>
  <td> No Record Found!</td>
  <?php endif;?>
  </tbody>
</table>
</div> 