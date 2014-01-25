<h1>Add a Task</h1>
<p>List:<strong> <?php echo $list_name; ?></strong></p>

<!--Display Errors-->
<?php echo validation_errors('<p class="text-error">'); ?>
<?php echo form_open('tasks/add/'.$this->uri->segment(3).''); ?>

<!--Field: Task Name-->
<p>
<?php echo form_label('Task Name:'); ?>
<?php
$data = array(
              'name'        => 'task_name',
              'value'       => set_value('task_name')
            );
?>
<?php echo form_input($data); ?>
</p>

<!--Field: Task Body-->
<p>
<?php echo form_label('Task Body:'); ?>
<?php
$data = array(
              'name'        => 'task_body',
              'value'       => set_value('task_body')
            );
?>
<?php echo form_textarea($data); ?>
</p>

<!--Field: Date-->
<p>
<?php echo form_label('Date:'); ?>
<input type="date" name="due_date" />
</p>

<!--Submit Buttons-->
<?php $data = array("value" => "Add Task",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?>
