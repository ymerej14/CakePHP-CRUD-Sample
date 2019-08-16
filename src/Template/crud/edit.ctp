<fieldset>
    <legend>Edit Details</legend>
    <?php echo $this->Form->create($article) ;?>
    
    <div class="form-group row">
      <div class="col-sm-10">
        <?php echo $this->Form->input('Name', ['class'=>'form-control','Placeholder'=>'Name']);?>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <?php echo $this->Form->input('Address', ['class'=>'form-control','Placeholder'=>'Address']);?>
      </div>
    </div>

  <div class="form-group">
  <?php echo $this->Form->button(__('Edit Details'),['class'=>'btn btn-success']);?>
   <?php echo $this->Html->link('Cancel',['action'=>'index'],['class'=> 'btn btn-warning'])?>
  </div>
  <?php echo $this->Form->end() ;?>
  </fieldset>