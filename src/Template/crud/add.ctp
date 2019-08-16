
  <fieldset>
    <legend>Add Person</legend>
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
  <?php echo $this->Form->button(__('Add Person'),['class'=>'btn btn-primary']);?>
   <?php echo $this->Html->link('Back',['action'=>'index'],['class'=> 'btn btn-primary'])?>
  </div>
  <?php echo $this->Form->end() ;?>
  </fieldset>
